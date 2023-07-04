<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Famille1 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Chat_Model');
        $this->load->library('form_validation');
    }

    public function step1()
    {
        if (isConnected() == false) {
            redirect('Users/login');
        }
        $this->form_validation->set_rules('nom_user', 'Nom user', 'trim|required');
        $this->form_validation->set_rules('prenom_user', 'Prenom user', 'trim|required');
        $this->form_validation->set_rules('age_user', 'Age user', 'trim|required');
        $this->form_validation->set_rules('email_user', 'Email user', 'trim|required|valid_email|is_unique[famille.email_user]');
        $this->form_validation->set_rules('adresse_user', 'Adresse user', 'trim|required');
        $this->form_validation->set_rules('ville_user', 'Ville user', 'trim|required');
        $this->form_validation->set_rules('codepostal_user', 'Codepostal user', 'trim|required|exact_length[5]', array(
            'exact_length' => 'Le code postal doit contenir 5 chiffres seulement.'
        ));
        $this->form_validation->set_rules('tel_user', 'Tel user', 'trim|required|regex_match[(06|07|08|09|03)]|exact_length[10]', array(
            'regex_match' => 'Le numéro de téléphone doit obligatoirement commencer par (06, 07, 08, 09 ou 03).',
            'exact_length' => 'Le champ doit contenir exactement 10 chiffres.'
        ));
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('form/step1');
        } else {
            
            $data = array(
                'nom_user' => $this->session->userdata('nom_user'),
                'prenom_user' => $this->session->userdata('prenom_user'),
                'age_user' => $this->session->userdata('age_user'),
                'email_user' => $this->session->userdata('email_user'),
                'adresse_user' => $this->session->userdata('adresse_user'),
                'ville_user' => $this->session->userdata('ville_user'),
                'codepostal_user' => $this->session->userdata('codepostal_user'),
                'tel_user' => $this->session->userdata('tel_user')
            );

        $this->session->set_userdata('nom_user', $this->input->post('nom_user'));
        $this->session->set_userdata('prenom_user', $this->input->post('prenom_user'));
        $this->session->set_userdata('age_user', $this->input->post('age_user'));
        $this->session->set_userdata('email_user', $this->input->post('email_user'));
        $this->session->set_userdata('adresse_user', $this->input->post('adresse_user'));
        $this->session->set_userdata('ville_user', $this->input->post('ville_user'));
        $this->session->set_userdata('codepostal_user', $this->input->post('codepostal_user'));
        $this->session->set_userdata('tel_user', $this->input->post('tel_user'));


            redirect('Famille2/step2', $data);
        }
    }
}
