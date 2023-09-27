<?php
//Formulaire de connexion 

defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{


    public function index()
    {
        $chat_annonce = $this->User_Model->get_annonce();
        $data['chat_annonce'] = $chat_annonce;
        $this->load->view('espace_animaux/recherche', $data);
    }


    public function accueil()
    {
        $this->load->view('espace_user/accueil');
    }

    /* ----------------------- */
    /* Formulaire de connexion */
    /* ----------------------- */

    public function login()
    {
        if (isConnected() == true) {
            redirect('Users');
        } else {
            $this->form_validation->set_rules('email', 'email', 'trim|required', array(
                'required' => 'L\'email n\'est renseigné'));
            $this->form_validation->set_rules('mdp', 'Mot de passe', 'trim|required', array(
                'trim' => 'Le mot de passe doit être valide',
                'required' => 'le mot de passe n\'est renseigné')); 
            if ($this->form_validation->run() == true) {
                if ($this->User_Model->cb_users($_POST["email"], md5($_POST["mdp"])) == 1) {
                    $email = $_POST["email"];
                    $data = array('email' => $email);
                    $user = $this->User_Model->get_user_by($data);
                if ($user) {
                    $session_user = array(
                        'id' => $user['id'],
                        'nom' => $user['nom'],
                        'prenom' => $user['prenom'],
                        'email' => $email
                    );
                }
                    $this->session->set_userdata($session_user);
                    redirect("Users");
                } else {
                    $data['info_connexion'] = 'error';
                    $this->load->view('espace_user/login', $data);
                }
            } else {
                $this->load->view('espace_user/login');
            }
        }
    }

    /* ------------------------------- */
    /* Détruire la session users */
    /* ------------------------------- */

    public function deconnect()
    {
        session_destroy();
        redirect('Users');
    }

    /* ------------------------- */
    /* Formulaire de inscription */
    /* ------------------------- */

    public function inscription()
    {
        if (isConnected() == true) {
            redirect('Users');
        } else {
            $this->form_validation->set_rules('nom', 'Nom', 'trim|required', array(
                'required' => 'Le nom doit être renseigné',));
            $this->form_validation->set_rules('prenom', 'Prenom', 'trim|required', array(
                'required' => 'Le prenom doit être renseigné',));
            $this->form_validation->set_rules('pseudo', 'Pseudo', 'trim|required|is_unique[users.pseudo]', array(
                'required' => 'Le pseudo doit être valide',
                'is_unique' => 'Le pseudo existe déjà'));
            $this->form_validation->set_rules('mdp', 'Mot de passe', 'trim|required', array(
                'trim' => 'Le mot de passe doit être valide',
                'required' => 'Le mot de passe n\'est pas renseigné'));
            $this->form_validation->set_rules('mdp_confirm', 'Confirmation du mot de passe', 'trim|required|matches[mdp]', array(
                'trim' => 'Le mot de passe doit être valide',
                'required' => 'Le mot de passe n\'est renseigné',
                'matches' => 'Le mot de passe n\'est pas le même'));
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]', array(
                'valid_email' => 'L\'email doit être valide',
                'is_unique' => 'L\'email existe déjà'));
                
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('espace_user/inscription');
            } else {
                $nom = $this->input->post('nom');
                $prenom = $this->input->post('prenom');
                $pseudo = $this->input->post('pseudo');
                $mdp = md5($this->input->post('mdp'));
                $email = ($this->input->post('email'));

                $data = array(
                    'nom' => $nom,
                    'prenom' => $prenom,
                    'pseudo' => $pseudo,
                    'mdp' => $mdp,
                    'email' => $email
                );
                $this->User_Model->create_user($data);
                $data['popup'] = true;
                $data['success_message'] = 'Vous êtes bien inscrit, vous pouvez dès maintenant vous connecter !';
                $this->load->view('espace_user/inscription', $data);
            }
        }
    }

    public function mail()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', array(
            'valid_email' => 'L\'adresse mail doit être valide'
        ));
        $email = $this->input->post('email');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('espace_user/mail');
        } else {
            if ($this->User_Model->exist_email($email)) {
                $number = bin2hex(random_bytes(30));
                $this->User_Model->new_number($number, $email);
                $this->load->config('email');
                $from = $this->config->item('smtp_user');
                $link = anchor('/Users/mdp_recup/'  . $number, 'Reinitialiser votre mot de passe');

                $this->email->from($from, 'Adopt Kitty');
                $this->email->to($email);
                $this->email->subject('Mot de passe oublié');
                $this->email->set_mailtype('html');
                $img_url = base_url('assets/img/adopt-kitty-logo.png');
                $this->email->attach($img_url);
                $message = '<html><body>';
                $message .= '<h4>Bonjour ' . $email . ',<br> <br> Merci de cliquer sur le lien ci-dessous afin de modifier votre mot de passe :<br>' . $link . '<br> <br>Cordialement.<br> <br> Adopt Kitty.</h4>';
                $message .= '<img src="cid:' . basename($img_url) . '" alt="Image">';
                $message .= '</body></html>';
                $this->email->message($message);

                if ($this->email->send()) {
                    $popup = true;
                    $this->load->view('espace_user/mail', compact('popup'));
                } else {
                    echo "Le mail n'a pas été envoyé";
                }
            } else {
                $this->load->view('espace_user/mail', array('popupError' => true));
            }
        }
    }


    /* ---------------------------------------------------- */
    /* Recupération mdp par chiffres aléatoires */
    /* ---------------------------------------------------- */


    public function mdp_recup($mdp_recup = '')
    {
        if ($this->User_Model->number_exist($mdp_recup)) {
            $this->form_validation->set_rules('mdp', 'mdp', 'trim|required');
            $this->form_validation->set_rules('mdp_confirm', 'Confirmation du mot de passe', 'trim|required|matches[mdp]');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('espace_user/mdp_recup');
            } else {
                $mdp = md5($this->input->post('mdp'));
                $this->User_Model->update_mdp($mdp, $mdp_recup);
                $data['popup'] = true;
                $data['success_message'] = 'Vous avez bien enregistré votre nouveau mot de passe. Vous pouvez dès maintenant vous connecter !';
                $this->load->view('espace_user/mdp_recup', $data);
            }
        } else {
            header('refresh:5;url=' . base_url('Users'));
            echo 'La clé de récupération n\'est pas valide';
        }
    }
}
