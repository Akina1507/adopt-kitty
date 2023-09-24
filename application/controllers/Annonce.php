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
            redirect("Users/accueil");
        } else {
            // on stock les données et on appelle get_races du Chat_Model
            $data['races'] = $this->Chat_Model->get_races();

            // boucle pour parcourir $data['races']
            foreach ($data['races'] as $race) {
                // on collecter les valeurs de race
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
            // verifie si chiens_radio est vide
            if (!empty($_POST['chiens_radio'])) {
                $this->form_validation->set_rules('chiens_radio', 'Chiens', 'trim|required|in_list[chiens]');
            }
            if (!empty($_POST['chats_radio'])) {
                $this->form_validation->set_rules('chats_radio', 'Chats', 'trim|required|in_list[chats]');
            }
            if (!empty($_POST['enfants_radio'])) {
                $this->form_validation->set_rules('enfants_radio', 'Enfants', 'trim|required|in_list[enfants]');
            }
            if (!empty($_POST['non_radio'])) {
                $this->form_validation->set_rules('non_radio', 'Non', 'trim|required|in_list[oui]');
            }
            $this->form_validation->set_rules('description_animal', 'Description', 'trim|required');



            /* ------------------------- */
            /* Formulaire valide */
            /* ------------------------- */

            if ($this->form_validation->run() == TRUE) {
                // Recuperation de la valeur des input de $databdd
                $databdd['nom_animal'] = $this->input->post('nom_animal');
                $databdd['puce_animal'] = $this->input->post('puce_animal');
                $databdd['espece_animal'] = $this->input->post('espece_animal');
                $databdd['race_animal'] = $this->input->post('race_animal');
                $databdd['naissance_animal'] = $this->input->post('naissance_animal');
                $databdd['sexe_animal'] = $this->input->post('sexe_animal');
                $databdd['lieu_animal'] = $this->input->post('lieu_animal');
                $databdd['description_animal'] = $this->input->post('description_animal');
                // verifie si chiens_radio est vide
                if (!empty($this->input->post('chiens_radio'))) {
                    $databdd['chiens_radio'] = $this->input->post('chiens_radio');
                }
                if (!empty($this->input->post('chats_radio'))) {
                    $databdd['chats_radio'] = $this->input->post('chats_radio');
                }
                if (!empty($this->input->post('enfants_radio'))) {
                    $databdd['enfants_radio'] = $this->input->post('enfants_radio');
                }
                if (!empty($this->input->post('non_radio'))) {
                    $databdd['non_radio'] = $this->input->post('non_radio');
                }
                // vérifie si un fichier a été soumis 
                if (!empty($_FILES['image_chat']['name'])) {
                    // où le fichier téléchargé sera stocké
                    $upload_path = './uploads/annonce/';

                    $new_file_name = $this->upload_image_chat('image_chat', $upload_path);
                    //  vérifie si le téléchargement de l'image a réussi
                    if ($new_file_name) {
                        //  le nom du fichier est stocké dans la variable $new_file_name
                        // le fichier est assigné à la clé 'image_chat' dans le tableau:  $databdd
                        //  l'enregistrement du nom du fichier dans la base de données
                        $databdd['image_chat'] = $new_file_name;
                    }
                }

                //appel à la méthode create_annonce de la classe "Chat_Model" avec le paramètre du tableau $databdd.
                $this->Chat_Model->create_annonce($databdd);
                redirect("Annonce/success");
            } else {
                $this->load->view('espace_assos/annonce', $data);
            }
        }
    }
    // Librairie intégré code igniter 3, upload qui gère le téléchagrement des images
    // field_name : nom du fichier, upload_path : chemin de destination du fichier
    function upload_image_chat($field_name = '', $upload_path = '')
    {
        // chemin de destination du fichier, type de fichier, poids maxi, ne se dédouble pas
        $config['upload_path'] = $upload_path;
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = 30720;
        $config['overwrite'] = true;
        // on charge la librairie avec la config
        $this->load->library('upload', $config);
        // On upload l'image dans le dossier upload/annonce
        if ($this->upload->do_upload($field_name)) {
            $upload_data = $this->upload->data();

            // Calculer la somme de hachage SHA-1 du contenu de l'image en 40 caratères aléatoires
            $hash = sha1_file($upload_data['full_path']);
            // génère un nouveau nom de fichier pour l'image téléchargée haché en .jpg
            $image_nom =  $hash . '.jpg';
            //  génère le chemin complet du nouveau fichier vers son chemin
            $new_file_path = $config['upload_path'] . $image_nom;
            // On renomme le fichier téléchargé
            rename($upload_data['full_path'], $new_file_path);

            return $image_nom;
        }
    }
    public function success()
    {
        //formulaire true : on refresh vers Users
        header('refresh:10;url=' . base_url('Users'));
        $this->load->view('form/success');
    }

    public function fiches_chats($id)
    {
        // on appelle get_fiche du modèle "User_Model" pour récupérer les informations du chat en fonction de son id
        $chat_fiche = $this->User_Model->get_fiche($id);
        // $data affiche les données du chat
        $data['chat_fiche'] = $chat_fiche;
        // on affiche la vue
        $this->load->view('espace_animaux/card_chat', $data);
    }
}
