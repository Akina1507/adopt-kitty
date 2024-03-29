<?php
//Formulaire de connexion 

defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{


    public function index()
    {
        $chat_annonce = $this->User_Model->get_annonce();
        $data['chat_annonce'] = $chat_annonce;
        $this->layout->set_titre('Adopt Kitty | Accueil');
        $this->layout->view('espace_user/accueil', $data);
    }


    public function accueil()
    {
        $this->layout->set_titre('Adopt Kitty | Famille');
        $this->layout->view('espace_user/choix_connexion');
    }

    public function contact()
    {
        $this->layout->set_titre('Adopt Kitty | Contact');
        $this->layout->view('form/contact');
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
                'required' => 'L\'email n\'est renseigné'
            ));
            $this->form_validation->set_rules('mdp', 'Mot de passe', 'trim|required', array(
                'trim' => 'Le mot de passe doit être valide',
                'required' => 'le mot de passe n\'est renseigné'
            ));
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
                    $this->layout->set_titre('Adopt_kitty | Connexion');
                    $this->layout->view('espace_user/login', $data);
                }
            } else {
                $this->layout->set_titre('Adopt_kitty | Connexion');
                $this->layout->view('espace_user/login');
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
                'required' => 'Le nom doit être renseigné',
            ));
            $this->form_validation->set_rules('prenom', 'Prenom', 'trim|required', array(
                'required' => 'Le prenom doit être renseigné',
            ));
            $this->form_validation->set_rules('pseudo', 'Pseudo', 'trim|required|is_unique[users.pseudo]', array(
                'required' => 'Le pseudo doit être valide',
                'is_unique' => 'Le pseudo existe déjà'
            ));
            $this->form_validation->set_rules('mdp', 'Mot de passe', 'trim|required', array(
                'trim' => 'Le mot de passe doit être valide',
                'required' => 'Le mot de passe n\'est pas renseigné'
            ));
            $this->form_validation->set_rules('mdp_confirm', 'Confirmation du mot de passe', 'trim|required|matches[mdp]', array(
                'trim' => 'Le mot de passe doit être valide',
                'required' => 'Le mot de passe n\'est renseigné',
                'matches' => 'Le mot de passe n\'est pas le même'
            ));
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]', array(
                'valid_email' => 'L\'email doit être valide',
                'is_unique' => 'L\'email existe déjà'
            ));

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
                $this->layout->set_titre('Adopt_kitty | Inscription');
                $this->layout->view('espace_user/inscription', $data);
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
            $this->layout->set_titre('Adopt_kitty | Mot de passe oublié');
            $this->layout->view('espace_user/mail');
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
                    $this->layout->set_titre('Adopt_kitty | Mot de passe oublié');
                $this->layout->view('espace_user/mail', compact('popup'));
                } else {
                    echo "Le mail n'a pas été envoyé";
                }
            } else {
                $this->layout->set_titre('Adopt_kitty | Mot de passe oublié');
                $this->layout->view('espace_user/mail', array('popupError' => true));
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
                $this->layout->set_titre('Adopt_kitty | Récupération mdp');
            $this->layout->view('espace_user/mdp_recup');
            } else {
                $mdp = md5($this->input->post('mdp'));
                $this->User_Model->update_mdp($mdp, $mdp_recup);
                $data['popup'] = true;
                $data['success_message'] = 'Vous avez bien enregistré votre nouveau mot de passe. Vous pouvez dès maintenant vous connecter !';
                $this->layout->set_titre('Adopt_kitty | Récupération mdp');
                $this->layout->view('espace_user/mdp_recup' ,$data);
            }
        } else {
            header('refresh:5;url=' . base_url('Users'));
            echo 'La clé de récupération n\'est pas valide';
        }
    }




    public function contact_email() {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', array(
            'valid_email' => 'L\'adresse mail doit être valide'
        ));
    
        // Valide le formulaire
        if ($this->form_validation->run() == FALSE) {
            // Gestion des erreurs de validation du formulaire
            // Vous pouvez afficher des messages d'erreur ou rediriger l'utilisateur vers une page d'erreur
            $this->layout->set_titre('Adopt_kitty | Contactez-nous');
            $this->layout->view('espace_user/mail');
        } else {
            // Récupérer les données du formulaire
            $nom_user = $this->input->post('nom_user');
            $prenom_user = $this->input->post('prenom_user');
            $nom_entreprise = $this->input->post('nom_entreprise');
            $email_user = $this->input->post('email_user');
            $phone_user = $this->input->post('phone_user');
            $sujet_user = $this->input->post('sujet_user');
            $message_contact = $this->input->post('message_contact');
    
            // Configuration pour l'envoi de l'email
            $config = array(
                'protocol' => 'smtp',
                'smtp_host' => 'smtp.gmail.com', // Serveur SMTP de La Poste
                'smtp_port' => 465, // Port SMTP sécurisé
                'smtp_user' => 'adopt-kitty@laposte.net', 
                'smtp_pass' => 'Marie-Sarah1507@!-', 
                'smtp_crypto' => 'ssl',
                'mailtype' => 'html',
                'charset' => 'utf-8',
                'newline' => "\r\n"
            );
    
            // Charger la bibliothèque d'email avec la configuration
            $this->load->library('email', $config);
            $from = $this->config->item('smtp_user');
            // Préparer le contenu de l'email
            $this->email->from( $from,'Adopt Kitty');
            $this->email->to('mswietrich1507@gmail.com'); // Remplacez ceci par votre adresse email
            $this->email->subject($sujet_user);
            $this->email->message($message_contact);
    
            // Envoyer l'email
            if ($this->email->send()) {
                // Affichez un message de succès ou redirigez l'utilisateur vers une page de confirmation
                $popup = true;
                $this->layout->set_titre('Adopt_kitty | Contactez-nous');
                $this->layout->view('espace_user/mail', compact('popup'));
            } else {
                // En cas d'échec de l'envoi de l'email, affichez un message d'erreur
                echo "Le mail n'a pas été envoyé";
            }
        }
    }
}
