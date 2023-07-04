<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Famille2 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Chat_Model');
        $this->load->library('form_validation');

    }
    public function step2()
    {
        if (isConnected() == false) {
            redirect('Users/login');
        }
       
        $this->form_validation->set_rules('type_logement', 'Type logement', 'trim|required');
        $this->form_validation->set_rules('exterieur_user', 'Exterieur user', 'trim|required');
        $this->form_validation->set_rules('type_exterieur', 'Type exterieur', 'trim');
        $this->form_validation->set_rules('situation_famille', 'Situation famille', 'trim|required');
        $this->form_validation->set_rules('enfants_foyer', 'Enfants foyer', 'trim|required');
        $this->form_validation->set_rules('nbr_enfants', 'Nombre enfants', 'trim|exact_length[2]');
        $this->form_validation->set_rules('age_enfants', 'Age enfants', 'trim');
        $this->form_validation->set_rules('activite_famille', 'Activite famille', 'trim|required');
        $this->form_validation->set_rules('temps_activite', 'Temps activite', 'trim|required');
        $this->form_validation->set_rules('raison_famille', 'Raison famille', 'trim|required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('form/step2');
        } else {

            $this->session->set_userdata('type_logement', $this->input->post('type_logement'));
            $this->session->set_userdata('exterieur_user', $this->input->post('exterieur_user'));
            $this->session->set_userdata('type_exterieur', $this->input->post('type_exterieur'));
            $this->session->set_userdata('situation_famille', $this->input->post('situation_famille'));
            $this->session->set_userdata('enfants_foyer', $this->input->post('enfants_foyer'));
            $this->session->set_userdata('nbr_enfants', $this->input->post('nbr_enfants'));
            $this->session->set_userdata('age_enfants', $this->input->post('age_enfants'));
            $this->session->set_userdata('activite_famille', $this->input->post('activite_famille'));
            $this->session->set_userdata('temps_activite', $this->input->post('temps_activite'));
            $this->session->set_userdata('raison_famille', $this->input->post('raison_famille'));
        
            $data = array(
                'type_logement' => $this->session->userdata('type_logement'),
                'exterieur_user' => $this->session->userdata('exterieur_user'),
                'type_exterieur' => $this->session->userdata('type_exterieur'),
                'situation_famille' => $this->session->userdata('situation_famille'),
                'enfants_foyer' => $this->session->userdata('enfants_foyer'),
                'nbr_enfants' => $this->session->userdata('nbr_enfants'),
                'age_enfants' => $this->session->userdata('age_enfants'),
                'activite_famille' => $this->session->userdata('activite_famille'),
                'temps_activite' => $this->session->userdata('temps_activite'),
                'raison_famille' => $this->session->userdata('raison_famille')
            );
            $this->Chat_Model->create_famille2($data);
            redirect('Famille3/step3', $data);

        }
    }
}