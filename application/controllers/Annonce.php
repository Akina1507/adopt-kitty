<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Annonce extends CI_Controller
{


    /* ------------------------- */
    /* Validation formulaire */
    /* ------------------------- */
    public function annonce()
    {
        if (isConnected() == false) {
            redirect("Users/home");
        } else {

            $data['races'] = $this->Chat_Model->get_races();

            foreach ($data['races'] as $race) {
                $race_values[] = $race['value'];
            }

            $this->form_validation->set_rules('nom_animal', 'Nom animal', 'trim|required');
            $this->form_validation->set_rules('puce_animal', 'Puce animal', 'trim|required');
            $this->form_validation->set_rules('img_animal', 'Image animal', 'required');
            $this->form_validation->set_rules('espece_animal', 'Espece', 'trim|required|in_list[chat]');
            $this->form_validation->set_rules('race_animal', 'Race/Type', 'trim|required|in_list[' . implode(',', $race_values) . ']');
            $this->form_validation->set_rules('naissance_animal', 'Date de naissance animal', 'trim|required');
            $this->form_validation->set_rules('sexe_animal', 'Sexe', 'trim|required|in_list[male,femelle]');
            $this->form_validation->set_rules('lieu_animal', 'Lieu', 'trim|required');
            $this->form_validation->set_rules('chiens_radio', 'Chiens', 'trim|required|in_list[chiens]');
            $this->form_validation->set_rules('chats_radio', 'Chats', 'trim|required|in_list[chats]');
            $this->form_validation->set_rules('enfants_radio', 'Enfants', 'trim|required|in_list[enfants]');
            $this->form_validation->set_rules('non_radio', 'Non', 'trim|required|in_list[non]');
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
                $chiens_radio = $this->input->post('chiens_radio');
                $chats_radio = $this->input->post('chats_radio');
                $enfants_radio = $this->input->post('enfants_radio');
                $non_radio = $this->input->post('non_radio');
                $description_animal = $this->input->post('description_animal');

                /* ------------------------- */
                /* Variable chargé dans le model, Chat_Model */
                /* ------------------------- */
                $this->Chat_Model->create_annonce(
                    $nom_animal,
                    $puce_animal,
                    $img_animal,
                    $espece_animal,
                    $race_animal,
                    $naissance_animal,
                    $sexe_animal,
                    $lieu_animal,
                    $chiens_radio,
                    $chats_radio,
                    $enfants_radio,
                    $non_radio,
                    $description_animal,

                );
                redirect("Annonce/success");
            }
            $this->load->view('espace_assos/annonce', $data);
        }
    }

    public function success()
    {
        header('refresh:10;url=' . base_url('Users'));
        $this->load->view('form/success');
    }
}
