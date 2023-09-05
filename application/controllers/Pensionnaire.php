<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pensionnaire extends CI_Controller
{


    /* ------------------------- */
    /* Validation formulaire */
    /* ------------------------- */
    public function adoption()
    {
            $this->load->view('espace_animaux/adoption');
        }
    }
