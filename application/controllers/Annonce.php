<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Annonce extends CI_Controller
{
    public function annonce()
    {
        if (isConnected() == false) {
            redirect("Users/accueil");
        } else {
            $data['races'] = $this->Chat_Model->get_races();
            foreach ($data['races'] as $race) {
                $race_values[] = $race['value'];
            }
            $this->form_validation->set_rules('nom_animal', 'Nom animal', 'trim|required');
            $this->form_validation->set_rules('puce_animal', 'Puce animal', 'trim|required|is_unique[annonce.puce_animal]');
            $this->form_validation->set_rules('espece_animal', 'Espèce', 'trim|required|in_list[chat]');
            $this->form_validation->set_rules('race_animal', 'Race/Type', 'trim|required|in_list[' . implode(',', $race_values) . ']');
            $this->form_validation->set_rules('naissance_animal', 'Date de naissance animal', 'trim|required');
            $this->form_validation->set_rules('sexe_animal', 'Sexe', 'trim|required|in_list[male,femelle]');
            $this->form_validation->set_rules('lieu_animal', 'Lieu', 'trim|required');
            $this->form_validation->set_rules('image_chat', 'Image du chat');
            if (!empty($_POST['chiens_radio'])) {
                $this->form_validation->set_rules('chiens_radio', 'Chiens', 'trim|required|in_list[chiens]');}
            if (!empty($_POST['chats_radio'])) {
                $this->form_validation->set_rules('chats_radio', 'Chats', 'trim|required|in_list[chats]');}
            if (!empty($_POST['enfants_radio'])) {
                $this->form_validation->set_rules('enfants_radio', 'Enfants', 'trim|required|in_list[enfants]');}
            if (!empty($_POST['non_radio'])) {
                $this->form_validation->set_rules('non_radio', 'Non', 'trim|required|in_list[oui]');}
                $this->form_validation->set_rules('description_animal', 'Description', 'trim|required');

            if ($this->form_validation->run() == TRUE) {
                $databdd['nom_animal'] = $this->input->post('nom_animal');
                $databdd['puce_animal'] = $this->input->post('puce_animal');
                $databdd['espece_animal'] = $this->input->post('espece_animal');
                $databdd['race_animal'] = $this->input->post('race_animal');
                $databdd['naissance_animal'] = $this->input->post('naissance_animal');
                $databdd['sexe_animal'] = $this->input->post('sexe_animal');
                $databdd['lieu_animal'] = $this->input->post('lieu_animal');
                $databdd['description_animal'] = $this->input->post('description_animal');
                if (!empty($this->input->post('chiens_radio'))) {
                    $databdd['chiens_radio'] = $this->input->post('chiens_radio');}
                if (!empty($this->input->post('chats_radio'))) {
                    $databdd['chats_radio'] = $this->input->post('chats_radio');}
                if (!empty($this->input->post('enfants_radio'))) {
                    $databdd['enfants_radio'] = $this->input->post('enfants_radio');}
                if (!empty($this->input->post('non_radio'))) {
                    $databdd['non_radio'] = $this->input->post('non_radio');}
                if (!empty($_FILES['image_chat']['name'])) {
                    $upload_path = './uploads/annonce/';
                    $new_file_name = $this->upload_image_chat('image_chat', $upload_path);
                    if ($new_file_name) {
                        $databdd['image_chat'] = $new_file_name;
                    }
                }
                $this->Chat_Model->create_annonce($databdd);
                redirect("Annonce/success");
            } else {
                $this->layout->set_titre('Adopt_kitty | Annonces Association');
                $this->layout->view('espace_assos/annonce');
            }
        }
    }
    
    function upload_image_chat($field_name = '', $upload_path = '')
    {
        $config['upload_path'] = $upload_path;
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = 30720;
        $config['overwrite'] = true;
        $this->load->library('upload', $config);
        if ($this->upload->do_upload($field_name)) {
            $upload_data = $this->upload->data();
            $hash = sha1_file($upload_data['full_path']);
            $image_nom =  $hash . '.jpg';
            $new_file_path = $config['upload_path'] . $image_nom;
            rename($upload_data['full_path'], $new_file_path);
            return $image_nom;
        }
    }

    public function success()
    {
        header('refresh:10;url=' . base_url('Users'));
        $this->layout->set_titre('Adopt_kitty | Succès Association');
        $this->layout->view('form/success');
    }

    public function fiches_chats($id)
    {
        // on appelle get_fiche du modèle "User_Model" pour récupérer les informations du chat en fonction de son id
        $chat_fiche = $this->User_Model->get_fiche($id);
        // $data affiche les données du chat
        $data['chat_fiche'] = $chat_fiche;
        // on affiche la vue
        $this->layout->set_titre('Adopt_kitty | Succès Association');
        $this->layout->view('espace_animaux/card_chat' , $data);
    }
}
