<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Success extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Chat_Model');
        $this->load->library('form_validation');
        //mettre form helper
    }
    public function success()
    {
        $data['message'] = 'Formulaire terminé avec succès !';
        $this->load->view('form/success', $data);
    }
}