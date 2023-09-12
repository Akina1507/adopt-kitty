<?php
//Formulaire de connexion 
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
                $this->load->view('espace_user/login_assos', $data);
            }
        } else {
            $this->load->view('espace_user/login_assos');
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
            $this->form_validation->set_rules('codepostal_assos', 'Code postal association', 'trim|required', array(
                'required' => 'Le code postal doit être renseigné',
            ));
            $this->form_validation->set_rules('email_assos', 'Email association', 'trim|required|valid_email', array(
                'valid_email' => 'L\'email doit être valide'
            ));
            $this->form_validation->set_rules('tel_assos', 'Telephone association', 'trim|required', array(
                'required' => 'Le numero de telephone doit être renseigné',
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
                $this->load->view('espace_user/inscription_assos');
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
                    $this->load->view('espace_user/inscription_assos', $data);
                } else {
                    redirect('Assos/inscription_assos');
                }
            }
        }
    }
}
