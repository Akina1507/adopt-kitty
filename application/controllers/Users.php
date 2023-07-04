<?php
//Formulaire de connexion 
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_Model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('espace_user/home');
    }

    /* ----------------------- */
    /* formulaire de connexion */
    /* ----------------------- */

    public function login()
    {
        if (isConnected() == true) {
            redirect('Users');
        } else {
            $this->form_validation->set_rules('pseudo', 'pseudo', 'trim|required', array(
                'required' => 'le pseudo n\'est renseigné'
            ));
            $this->form_validation->set_rules('mdp', 'Mot de passe', 'trim|required', array(
                'trim' => 'Le mot de passe doit être valide',
                'required' => 'le mot de passe n\'est renseigné'
            ));

            if ($this->form_validation->run() == true) {
                if ($this->User_Model->cb_users($_POST["pseudo"], md5($_POST["mdp"])) == 1) {
                    $pseudo = $_POST["pseudo"];
                    $data = array('pseudo' => $pseudo);
                    $user = $this->User_Model->get_user_by($data);

                if ($user) {
                    $session_user = array(
                        'id' => $user['id'],
                        'pseudo'=> $pseudo
                    );
                }
                
                $this->session->set_userdata($session_user);
                    $data['popup'] = true;
                    $this->load->view('espace_user/login', $data);
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
    /* pour destroy la session d'users */
    /* ------------------------------- */

    public function deconnect()
    {
        session_destroy();
        redirect('Users');
    }

    /* ------------------------- */
    /* formulaire de inscription */
    /* ------------------------- */

    public function inscription()
    {
        if (isConnected() == true) {
            redirect('Users');
        } else {
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
                $pseudo = $this->input->post('pseudo');
                $mdp = md5($this->input->post('mdp'));
                $email = ($this->input->post('email'));

                $data = array(
                    'pseudo' => $pseudo,
                    'mdp' => $mdp,
                    'email' => $email
                );
                $result = $this->User_Model->create_user($data);

                if ($result) {
                    $data['popup'] = true;
                    $data['success_message'] = 'Vous êtes bien inscrit, vous pouvez dès maintenant vous connecter !';
                    $this->load->view('espace_user/inscription', $data);
                } else {
                    redirect('Users/inscription');
                }
            }
        }
    }

    /* ---------------------------------------------------- */
    /* Function pour l'envois d'email pour recuper sont mdp */
    /* ---------------------------------------------------- */

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

                $config = array(
                    'protocol' => 'smtp',
                    'smtp_host' => 'mail.infomaniak.com',
                    'smtp_port' => 587,
                    'smtp_user' => 'trouduc@outil-web.fr',
                    'smtp_pass' => 'Trouduc01!',
                    'mailtype' => 'html',
                    'charset' => 'utf-8',
                    'newline' => "\r\n"
                );

                //config de l'envoi du mail avec form validation
                $data = array('email' => $_POST["email"]);
                $user = $this->User_Model->get_user_by($data);
                $link = anchor('/codeigniterarthur/connexion/change_mdp/' . $user->id . '/' . $number, 'Reinitialiser votre mot de passe');

                // FAIRE LA PAGE D'APERCU DU MAIL

                $this->email->initialize($config);
                $this->email->from('trouduc@outil-web.fr', 'Akina');
                $this->email->to($email);
                $this->email->subject('Mot de passe oublié');
                $this->email->message('Bonjour, veuillez renseigner votre nouveau mot de passe svp via ce lien : ' . $link);

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

    public function change_mdp($id, $number = '')
    {
        if ($this->User_Model->number_exist($id, $number)) {
            $this->form_validation->set_rules('mdp', 'changement mdp', 'trim|required', array(
                'trim' => 'Le mot de passe doit être valide',
                'required' => 'Le mot de passe n\'est pas renseigné'
            ));

            if ($this->form_validation->run() == TRUE) {
                $mdp = md5($this->input->post('mdp'));

                if ($this->User_Model->change_mdp($mdp, $number)) {
                    echo 'La requête est valide';
                } else {
                    echo ('La requête est invalide');
                }
            } else {
                $this->load->view('espace_user/change_mdp');
            }
        } else {
            header('refresh:5;url=' . base_url('Users'));
            echo 'La clé de récupération n\'est pas valide';
        }
    }
}
