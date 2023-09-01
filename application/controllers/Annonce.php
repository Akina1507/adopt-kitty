<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Annonce extends CI_Controller
{


    /* ------------------------- */
    /* Validation formulaire */
    /* ------------------------- */
    public function announce()
    {

        $this->form_validation->set_rules('nom_animal', 'Nom animal', 'trim|required');
        $this->form_validation->set_rules('puce_animal', 'Puce animal', 'trim|required');
        $this->form_validation->set_rules('img_animal', 'Image animal', 'trim|required|in_list[18-25ans,25-35ans,35-50ans,50-75ans,75-99ans,99-ou-plus]');
        $this->form_validation->set_rules('espece_animal', 'Espece', 'trim|required|in_list[chat]');
        $this->form_validation->set_rules('race_animal', 'Race/Type', 'trim|required');
        $this->form_validation->set_rules('naissance_animal', 'Date de naissance animal', 'trim|required');
        $this->form_validation->set_rules('sexe_animal', 'Sexe', 'trim|required|in_list[male,femelle]');
        $this->form_validation->set_rules('lieu_animal', 'Lieu', 'trim|required');
        $this->form_validation->set_rules('compatible_animal', 'Compatibilité', 'trim|required|in_list[chats,chiens,enfants]');
        $this->form_validation->set_rules('description_animal', 'Description', 'trim|required');



        /* ------------------------- */
        /* Formulaire valide */
        /* ------------------------- */

        if ($this->form_validation->run() === TRUE) {
            $nom_animal = $this->input->post('nom_animal');
            $puce_animal = $this->input->post('puce_animal');
            $img_animal = $this->input->post('img_animal');
            $espece_animal = $this->input->post('espece_animal');
            $race_animal = $this->input->post('race_animal');
            $naissance_animal = $this->input->post('naissance_animal');
            $sexe_animal = $this->input->post('sexe_animal');
            $lieu_animal = $this->input->post('lieu_animal');
            $compatible_animal = $this->input->post('compatible_animal');
            $description_animal = $this->input->post('description_animal');

            /* ------------------------- */
            /* Variable chargé dans le model, Chat_Model */
            /* ------------------------- */
            $this->Chat_Model->create_famille(
                $nom_animal,
                $puce_animal,
                $img_animal,
                $espece_animal,
                $race_animal,
                $naissance_animal,
                $sexe_animal,
                $lieu_animal,
                $compatible_animal,
                $description_animal,

            );
        }
        $this->load->view('espace_assos/announce');
    }
}
