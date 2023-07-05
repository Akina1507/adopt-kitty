<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Famille3 extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();

        $this->load->model('Chat_Model');
        $this->load->library('form_validation');
    }

    public function step3()
    {
        if (isConnected() == false) {
            redirect('Users/login');
        }
        $this->form_validation->set_rules('animaux_famille', 'Animaux famille', 'trim|required');
        $this->form_validation->set_rules('animaux_vie', 'Animaux vie', 'trim|required');
        $this->form_validation->set_rules('nbr_animaux', 'Nombre animaux', 'trim|required');
        $this->form_validation->set_rules('age_animaux_vie', 'Age animaux', 'trim|required|valid_email|is_unique[famille.email_user]');
        $this->form_validation->set_rules('detail_animaux_vie', 'Detail animaux', 'trim|required');
        $this->form_validation->set_rules('disponible_veto', 'Disponible veto', 'trim|required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('form/step3');
        } else {
            $userdata = array(
                'animaux_famille' => $this->session->userdata('animaux_famille'),
                'animaux_vie' => $this->session->userdata('animaux_vie'),
                'nbr_animaux' => $this->session->userdata('nbr_animaux'),
                'age_animaux_vie' => $this->session->userdata('age_animaux_vie'),
                'detail_animaux_vie' => $this->session->userdata('detail_animaux_vie'),
                'disponible_veto' => $this->session->userdata('disponible_veto'),
            );
            $this->Chat_Model->create_famille3($data);
            redirect('Users/login', $userdata);
        }
    }
}
