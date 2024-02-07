<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Assos extends CI_Controller
{



    public function login_assos()
    {
        if (isConnected() == true) {
            redirect('Users');
        } else {
            $this->form_validation->set_rules('email_assos', 'Email', 'trim|required', array(
                'required' => 'le nom de l\'association n\'est renseigné'
            ));
            $this->form_validation->set_rules('mdp_assos', 'Mot de passe', 'trim|required', array(
                'trim' => 'Le mot de passe doit être valide',
                'required' => 'le mot de passe n\'est renseigné'
            ));
        }
        if ($this->form_validation->run() == true) {
            if ($this->Assos_Model->cb_assos($_POST["email_assos"], md5($_POST["mdp_assos"])) == 1) {
                $email_assos = $_POST["email_assos"];
                $data = array('email_assos' => $email_assos);
                $user = $this->Assos_Model->get_assos_by($data);

                if ($user) {
                    $session_user = array(
                        'id' => $user['id_assos'],
                        'nom' => $user['nom_assos'],
                        'email_assos' => $user['email_assos']
                    );
                }


                $this->session->set_userdata($session_user);
                redirect("Users");
            } else {
                $data['info_connexion'] = 'error';
                $this->layout->set_titre('Adopt_kitty | Connexion Association');
                $this->layout->view('espace_user/login_assos', $data);
            }
        } else {
            $this->layout->set_titre('Adopt_kitty | Connexion Association');
            $this->layout->view('espace_user/login_assos');
        }
    }


    /* ------------------------- */
    /* Formulaire de inscription */
    /* ------------------------- */

    public function inscription_assos()
    {
        if (isConnected() == true) {
            redirect('Users');
        } else {
            $this->form_validation->set_rules('nom_assos', 'Nom association', 'trim|required', array(
                'required' => 'Le nom doit être renseigné',
            ));
            $this->form_validation->set_rules('adresse_assos', 'Adresse association', 'trim|required', array(
                'required' => 'L\'adresse doit être renseigné',
            ));
            $this->form_validation->set_rules('ville_assos', 'Ville association', 'trim|required', array(
                'required' => 'Le nom de ville doit être renseigné',
            ));
            $this->form_validation->set_rules('codepostal_assos', 'Code postal association', 'trim|required|exact_length[5]', array(
                'required' => 'Le code postal doit être renseigné',
                'exact_length' => 'Le code postal doit contenir 5 chiffres seulement.'
            ));
            $this->form_validation->set_rules('email_assos', 'Email association', 'trim|required|valid_email|is_unique[associations.email_assos]');
            
            $this->form_validation->set_rules('tel_assos', 'Telephone association', 'trim|required|regex_match[(06|07|08|09|03)]|exact_length[10]', array(
                'required' => 'Le numero de telephone doit être renseigné',
                'regex_match' => 'Le numéro de téléphone doit obligatoirement commencer par (06, 07, 08, 09 ou 03).',
                'exact_length' => 'Le champ doit contenir exactement 10 chiffres.'
            ));
            $this->form_validation->set_rules('mdp_assos', 'Mot de passe', 'trim|required', array(
                'trim' => 'Le mot de passe doit être valide',
                'required' => 'Le mot de passe n\'est pas renseigné'
            ));
            $this->form_validation->set_rules('mdp_confirm_assos', 'Confirmation du mot de passe', 'trim|required|matches[mdp_assos]', array(
                'trim' => 'Le mot de passe doit être valide',
                'required' => 'Le mot de passe n\'est renseigné',
                'matches' => 'Le mot de passe n\'est pas le même'
            ));

            if ($this->form_validation->run() == FALSE) {
                $this->layout->set_titre('Adopt_kitty | Inscription Association');
                $this->layout->view('espace_user/inscription_assos');
            } else {
                $nom_assos = $this->input->post('nom_assos');
                $adresse_assos = $this->input->post('adresse_assos');
                $ville_assos = $this->input->post('ville_assos');
                $codepostal_assos = $this->input->post('codepostal_assos');
                $email_assos = ($this->input->post('email_assos'));
                $tel_assos = ($this->input->post('tel_assos'));
                $mdp_assos = md5($this->input->post('mdp_assos'));


                $data = array(
                    'nom_assos' => $nom_assos,
                    'adresse_assos' => $adresse_assos,
                    'ville_assos' => $ville_assos,
                    'codepostal_assos' => $codepostal_assos,
                    'email_assos' => $email_assos,
                    'tel_assos' => $tel_assos,
                    'mdp_assos' => $mdp_assos

                );
                $result = $this->Assos_Model->create_assos($data);

                if ($result) {
                    $data['popup'] = true;
                    $data['success_message'] = 'Vous êtes bien inscrit en tant qu\'association, vous pouvez dès maintenant vous connecter !';
                    $this->layout->set_titre('Adopt_kitty | Inscription Association');
                    $this->layout->view('espace_user/inscription_assos', $data);
                } else {
                    redirect('Assos/inscription_assos');
                }
            }
        }
    }

    /* ---------------------------------------------------- */
    /* Envoi email pour recupérer le mdp */
    /* ---------------------------------------------------- */
    public function mail()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', array(
            'valid_email' => 'L\'adresse mail doit être valide'
        ));

        $email_assos = $this->input->post('email');

        if ($this->form_validation->run() == FALSE) {
            $this->layout->set_titre('Adopt_kitty | Mail Association');
            $this->layout->view('espace_user/mail_assos');
        } else {
            if ($this->Assos_Model->exist_email_assos($email_assos)) {

                $number = bin2hex(random_bytes(30));
                $this->Assos_Model->new_number($number, $email_assos);


                $this->load->config('email');
                $from = $this->config->item('smtp_user');


                //config de l'envoi du mail avec form validation

                $link = anchor('/Assos/mdp_recup/'  . $number, 'Reinitialiser votre mot de passe');

                //Contenu du mail une fois envoyé
                $this->email->from($from, 'Adopt Kitty');
                $this->email->to($email_assos);
                $this->email->subject('Mot de passe oublié');
                $this->email->set_mailtype('html');
                $img_url = base_url('assets/img/adopt-kitty-logo.png');
                $this->email->attach($img_url);
                $message = '<html><body>';
                $message .= '<h4>Bonjour ' . $email_assos . ',<br> <br> Merci de cliquer sur le lien ci-dessous afin de modifier votre mot de passe :<br>' . $link . '<br> <br>Cordialement.<br> <br> Adopt Kitty.</h4>';
                $message .= '<img src="cid:' . basename($img_url) . '" alt="Image">';
                $message .= '</body></html>';
                $this->email->message($message);



                //Pop up affiché une fois que l'email a été envoyé : true 
                if ($this->email->send()) {
                    $popup = true;
                    $this->layout->set_titre('Adopt_kitty | Mail Association');
                    $this->layout->view('espace_user/mail_assos', compact('popup'));
                } else {
                    echo "Le mail n'a pas été envoyé";
                }
            } else {
                $this->layout->set_titre('Adopt_kitty | Mail Association');
                $this->layout->view('espace_user/mail_assos', array('popupError' => true));
            }
        }
    }


    /* ---------------------------------------------------- */
    /* Recupération mdp par chiffres aléatoires */
    /* ---------------------------------------------------- */


    public function mdp_recup($mdp_recup_assos = '')
    {
        if ($this->Assos_Model->number_exist($mdp_recup_assos)) {
            $this->form_validation->set_rules('mdp', 'mdp', 'trim|required');
            $this->form_validation->set_rules('mdp_confirm', 'Confirmation du mot de passe', 'trim|required|matches[mdp]');


            if ($this->form_validation->run() == FALSE) {
                $this->layout->set_titre('Adopt_kitty | Mot de passe oublié Association');
                $this->layout->view('espace_user/mdp_assos');
            } else {
                $mdp_assos = md5($this->input->post('mdp_assos'));

                $this->Assos_Model->update_mdp_assos($mdp_assos, $mdp_recup_assos);


                $data['popup'] = true;
                $data['success_message'] = 'Vous avez bien enregistré votre nouveau mot de passe. Vous pouvez dès maintenant vous connecter !';
                $this->layout->set_titre('Adopt_kitty | Mot de passe oublié Association');
                $this->layout->view('espace_user/mdp_assos', $data);
            }
        } else {
            header('refresh:5;url=' . base_url('Assos'));
            echo 'La clé de récupération n\'est pas valide';
        }
    }
}
