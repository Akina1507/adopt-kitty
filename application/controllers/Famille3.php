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
        $this->form_validation->set_rules('animaux_famille', 'Animaux famille', 'trim|required');
        $this->form_validation->set_rules('animaux_vie', 'Animaux vie', 'trim|required');
        $this->form_validation->set_rules('nbr_animaux', 'Nombre animaux', 'trim|required');
        $this->form_validation->set_rules('age_animaux_vie', 'Age animaux', 'trim|required|valid_email|is_unique[famille.email_user]');
        $this->form_validation->set_rules('detail_animaux_vie', 'Detail animaux', 'trim|required');
        $this->form_validation->set_rules('disponible_veto', 'Disponible veto', 'trim|required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('form/step3');
        } else {
            // Reliage de session des 3 etapes du formulaire
        $this->session->set_userdata('animaux_famille', $this->input->post('animaux_famille'));
        $this->session->set_userdata('animaux_vie', $this->input->post('animaux_vie'));
        $this->session->set_userdata('nbr_animaux', $this->input->post('nbr_animaux'));
        $this->session->set_userdata('age_animaux_vie', $this->input->post('age_animaux_vie'));
        $this->session->set_userdata('detail_animaux_vie', $this->input->post('detail_animaux_vie'));
        $this->session->set_userdata('disponible_veto', $this->input->post('disponible_veto'));
            $userdata = array(
                'animaux_famille' => $this->session->userdata('animaux_famille'),
                'animaux_vie' => $this->session->userdata('animaux_vie'),
                'nbr_animaux' => $this->session->userdata('nbr_animaux'),
                'age_animaux_vie' => $this->session->userdata('age_animaux_vie'),
                'detail_animaux_vie' => $this->session->userdata('detail_animaux_vie'),
                'disponible_veto' => $this->session->userdata('disponible_veto'),
            );
        }


            redirect('Users/login', $userdata);
        }
    }
