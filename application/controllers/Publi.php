<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Publi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Chat_Model');
        $this->load->library('form_validation');
        //mettre form helper
    }

    public function annonce1()
    {
        $this->form_validation->set_rules('nom_chat', 'Nom chat', 'trim|required');
        $this->form_validation->set_rules('age_chat', 'Age chat', 'required|trim');
        $this->form_validation->set_rules('sexe_chat', 'Sexe chat', 'trim|required|in_list[male,femelle]');
        

        if (isConnected() == false) {
            $this->load->view('login');
        } else {
            $this->load->view('espace_assos/annonce1');
        }
    }

    public function annonce2()
    {

        $this->form_validation->set_rules('race_chat', 'Race chat', 'trim|required');
        $this->form_validation->set_rules('apparence', 'Apparence', 'trim|required');
        $this->form_validation->set_rules('precision_apparence', 'Precision apparence', 'trim|required');
        $this->form_validation->set_rules('description', 'Description', 'trim|required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('espace_assos/annonce2');
        } else {
            redirect('Publi/annonce3');
        }
    }

    public function annonce3()
    {
        $this->form_validation->set_rules('maladie_select', 'Maladie', 'trim|required|in_list[oui,non]');
        $this->form_validation->set_rules('liste_maladie', 'Liste maladies', 'trim|required');
        $this->form_validation->set_rules('puce_chat', 'Puce chat', 'trim|required|numeric');

        if ($this->form_validation->run() === FALSE) {
            $data['popup'] = true;
            $this->load->view('espace_assos/annonce3', $data);
        } else {
            redirect('Users');
        }
    }
}
