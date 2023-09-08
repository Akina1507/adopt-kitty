<?php
//Formulaire de connexion 
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{
    /* ------------------------- */
    /* Ne doit plus exister => Config */
    /* ------------------------- */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_Model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('espace_animaux/recherche');
    }

    /* ----------------------- */
    /* Formulaire de connexion */
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
                            'nom' => $user['nom'],
                            'prenom' => $user['prenom'],
                            'pseudo' => $pseudo 
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
    /* Envoi email pour recupérer le mdp */
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


                $this->load->config('email');
                $from = $this->config->item('smtp_user');


                //config de l'envoi du mail avec form validation

                $link = anchor('/codeigniterarthur/connexion/change_mdp/'  . $number, 'Reinitialiser votre mot de passe');

                //Contenu du mail une fois envoyé
                $this->email->from($from, 'Adopt Kitty');
                $this->email->to($email);
                $this->email->subject('Mot de passe oublié');
                $this->email->message('Bonjour ' . $email . ',<br> <br> Merci de cliquer sur le lien ci-dessous afin de modifier votre mot de passe :<br>' . $link . '<br> <br>Cordialement.<br> <br> Adopt Kitty. <br> 
                <img src="assets/img/adopt-kitty-logo.png" alt="Logo Adopt Kitty">');
 


                //Pop up affiché une fois que l'email a été envoyé : true 
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
    public function change_mdp($number = '')
    {
        if ($this->User_Model->number_exist( $number)) {
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



    public function login_assos()
{
    if (isConnected() == true) {
        redirect('Users');
    } else {
        $this->form_validation->set_rules('nom_assos', 'nom_assos', 'trim|required', array(
            'required' => 'le nom de l\'association n\'est pas renseigné'
        ));
        $this->form_validation->set_rules('mdp', 'Mot de passe', 'trim|required', array(
            'trim' => 'Le mot de passe doit être valide',
            'required' => 'le mot de passe n\'est renseigné'
        ));

        if ($this->form_validation->run() == true) {
            if ($this->User_Model->cb_users($_POST["nom_assos"], md5($_POST["mdp"])) == 1) {
                $nom_assos = $_POST["nom_assos"];
                $data = array('nom_assos' => $nom_assos);
                $user = $this->User_Model->get_user_by($data);

                if ($user) {
                    $session_user = array(
                        'id' => $user['id'],
                        'nom_assos' => $user['nom_assos'],
                        
                        
                    );
                }

                $this->session->set_userdata($session_user);
                redirect("Users");
            } else {
                $data['info_connexion'] = 'error';
                $this->load->view('espace_user/login_assos', $data);
            }
        } else {
            $this->load->view('espace_user/login_assos');
        }
    }
}

public function inscription_assos()
    {
        if (isConnected() == true) {
            redirect('Users');
        } else {
            $this->form_validation->set_rules('nom_assos', 'Nom association', 'trim|required', array(
                'required' => 'Le nom de l\'association doit être renseigné',
            ));
            $this->form_validation->set_rules('pseudo', 'Pseudo', 'trim|required|is_unique[users.pseudo]', array(
                'required' => 'Le nom d\'utilisateur doit être valide',
                'is_unique' => 'Le nom d\'utilisateur existe déjà'
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
                $this->load->view('espace_user/inscription_assos');
            } else {
                $nom_assos = $this->input->post('nom_assos');
                $prenom = $this->input->post('prenom');
                $pseudo = $this->input->post('pseudo');
                $mdp = md5($this->input->post('mdp'));
                $email = ($this->input->post('email'));

                $data = array(
                    'nom_assos' => $nom_assos,
                    'prenom' => $prenom,
                    'pseudo' => $pseudo,
                    'mdp' => $mdp,
                    'email' => $email
                );
                $result = $this->User_Model->create_user($data);

                if ($result) {
                    $data['popup'] = true;
                    $data['success_message'] = 'Vous êtes bien inscrit, vous pouvez dès maintenant vous connecter !';
                    $this->load->view('espace_user/login_assos', $data);
                } else {
                    redirect('Users/inscription_assos');
                }
            }
        }
    }

    public function home()
    {
        $this->load->view('espace_user/home');
    }
}

