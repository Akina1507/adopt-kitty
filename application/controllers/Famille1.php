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

            $nom = $this->input->post('nom_user');
            $prenom = $this->input->post('prenom_user');
            $age = $this->input->post('age_user');
            $email = $this->input->post('email_user');
            $adresse = $this->input->post('adresse_user');
            $ville = $this->input->post('ville_user');
            $codepostal = $this->input->post('codepostal_user');
            $tel = $this->input->post('tel_user');

            $data = array(
                'nom_user' => $nom,
                'prenom_user' => $prenom,
                'age_user' => $age,
                'email_user' => $email,
                'adresse_user' => $adresse,
                'ville_user' => $ville,
                'codepostal_user' => $codepostal,
                'tel_user' => $tel
            );
            $famille_id = $this->Chat_Model->create_famille($data);
            $this->session->set_userdata('famille_id', $famille_id);

            redirect('Famille2/step2');
        }
    }
}
