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
        $this->form_validation->set_rules('nom_user', 'Nom user', 'trim|required');
        $this->form_validation->set_rules('prenom_user', 'Prenom user', 'trim|required');
        $this->form_validation->set_rules('age_user', 'Age user', 'trim|required');
        $this->form_validation->set_rules('email_user', 'Email user', 'trim|required|valid_email|is_unique[famille.email_user]');
        $this->form_validation->set_rules('adresse_user', 'Adresse user', 'trim|required');
        $this->form_validation->set_rules('ville_user', 'Ville user', 'trim|required');
        $this->form_validation->set_rules('codepostal_user', 'Codepostal user', 'trim|required|exact_length[5]', array(
            'exact_length' => 'Le code postal doit contenir 5 chiffres seulement.'
        ));
        $this->form_validation->set_rules('tel_user', 'Tel user', 'trim|required|regex_match[(06|07|08|09|03)]|exact_length[10]', array(
            'regex_match' => 'Le numéro de téléphone doit obligatoirement commencer par (06, 07, 08, 09 ou 03).',
            'exact_length' => 'Le champ doit contenir exactement 10 chiffres.'
        ));
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('form/step1');
        } else {

            $nom = $this->input->post('nom_user');
            $prenom = $this->input->post('prenom_user');
            $age = $this->input->post('age_user');
            $email = $this->input->post('email_user');
            $adresse = $this->input->post('adresse_user');
            $ville = $this->input->post('ville_user');
            $codepostal = $this->input->post('codepostal_user');
            $tel = $this->input->post('tel_user');

            $data = array(
                'nom_user' => $nom,
                'prenom_user' => $prenom,
                'age_user' => $age,
                'email_user' => $email,
                'adresse_user' => $adresse,
                'ville_user' => $ville,
                'codepostal_user' => $codepostal,
                'tel_user' => $tel
            );
            $famille_id = $this->Chat_Model->create_famille($data);
            $this->session->set_userdata('famille_id', $famille_id);

            redirect('Famille1/step2');
        }
    }
    public function step2()
    {
        if (isConnected() == false) {
            redirect('Users/login');
        }

        $this->form_validation->set_rules('type_logement', 'Type logement', 'trim|required');
        $this->form_validation->set_rules('exterieur_user', 'Exterieur user', 'trim|required');
        $this->form_validation->set_rules('type_exterieur', 'Type exterieur', 'trim');
        $this->form_validation->set_rules('situation_foyer', 'Situation foyer', 'trim|required');
        $this->form_validation->set_rules('enfants_foyer', 'Enfants foyer', 'trim|required');
        $this->form_validation->set_rules('nbr_enfants', 'Nombre enfants', 'trim|exact_length[2]');
        $this->form_validation->set_rules('age_enfants', 'Age enfants', 'trim');
        $this->form_validation->set_rules('activite_famille', 'Activite famille', 'trim|required');
        $this->form_validation->set_rules('temps_activite', 'Temps activite', 'trim|required');
        $this->form_validation->set_rules('raison_famille', 'Raison famille', 'trim|required');


        if ($this->form_validation->run() === FALSE) {
            $this->load->view('form/step2');
        } else {

            $type_logement = $this->input->post('type_logement');
            $exterieur_user = $this->input->post('exterieur_user');
            $type_exterieur = $this->input->post('type_exterieur');
            $situation_foyer = $this->input->post('situation_foyer');
            $enfants_foyer = $this->input->post('enfants_foyer');
            $nbr_enfants = $this->input->post('nbr_enfants');
            $age_enfants = $this->input->post('age_enfants');
            $activite_famille = $this->input->post('activite_famille');
            $temps_activite = $this->input->post('temps_activite');
            $raison_famille = $this->input->post('raison_famille');

            $data = array(
                'type_logement' => $type_logement,
                'exterieur_user' => $exterieur_user,
                'type_exterieur' => $type_exterieur,
                'situation_foyer' => $situation_foyer,
                'enfants_foyer' => $enfants_foyer,
                'nbr_enfants' => $nbr_enfants,
                'age_enfants' => $age_enfants,
                'activite_famille' => $activite_famille,
                'temps_activite' => $temps_activite,
                'raison_famille' => $raison_famille
            );
            $famille_id = $this->session->userdata('famille_id');
            $this->Chat_Model->update_famille2($famille_id, $data);
            redirect('Famille1/step3');
        }
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




