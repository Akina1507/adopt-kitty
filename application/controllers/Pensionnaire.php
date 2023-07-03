<?php
//Formulaire de connexion 
defined('BASEPATH') or exit('No direct script access allowed');

class Pensionnaire extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Chat_Model');
        $this->load->library('form_validation');
        $this->load->library('upload');
    }

    public function index()
    {
        $this->load->view('espace_user/home');
    }

    public function recherche()
    {
        $this->load->view('espace_animaux/recherche');
    }

    public function famille1()
    {
        if (isConnected() == false) {
            redirect('Users/login');
        } else {
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

            if ($this->form_validation->run() == TRUE) {
                $this->load->view('form/step1');
            } else {
                $nom_user = $this->input->post('nom_user');
                $prenom_user =  $this->input->post('prenom_user');
                $age_user =  $this->input->post('age_user');
                $email_user = $this->input->post('email_user');
                $adresse_user = $this->input->post('adresse_user');
                $ville_user = $this->input->post('ville_user');
                $codepostal_user = $this->input->post('codepostal_user');
                $tel_user = $this->input->post('tel_user');

                $data = array(
                    'nom_user' => $nom_user,
                    'prenom_user' => $prenom_user,
                    'age_user' => $age_user,
                    'email_user' => $email_user,
                    'adresse_user' => $adresse_user,
                    'ville_user' => $ville_user,
                    'codepostal_user' => $codepostal_user,
                    'tel_user' => $tel_user
                );

                if ($this->db->insert('famille', $data)) {
                    // Redirection vers la partie 2
                    redirect('Users');
                } else {
                    $result = $this->Chat_Model->insert_famille($data);

                    if ($result) {
                        redirect('Users');
                    } else {
                        // Afficher les erreurs de validation
                        echo validation_errors();
                        redirect('Pensionnaire/annonce');
                    }
                }
            }
        }
    }



    public function famille2()
    {
        $this->load->view('espace_user/famille2');
        $this->form_validation->set_rules('type_logement', 'Type logement', 'trim|required');
        $this->form_validation->set_rules('exterieur_user', 'Exterieur user', 'trim|required');
        $this->form_validation->set_rules('type_exterieur', 'Type exterieur', 'trim|required');
        $this->form_validation->set_rules('situation_famille', 'Situation famille', 'trim|required');
        $this->form_validation->set_rules('enfants_foyer', 'Enfants foyer', 'trim|required');
        $this->form_validation->set_rules('nbr_enfants', 'Nombre enfants', 'trim|required|exact_length[2]');
        $this->form_validation->set_rules('age_enfants', 'Age enfants', 'trim|required');
        $this->form_validation->set_rules('activite_famille', 'Activite famille', 'trim|required');
        $this->form_validation->set_rules('temps_activite', 'Temps activite', 'trim|required');
        $this->form_validation->set_rules('raison_famille', 'Raison famille', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('espace_user/famille2');
        } else {
            $type_logement = $this->input->post('type_logement');
            $exterieur_user = $this->input->post('exterieur_user');
            $type_exterieur = $this->input->post('type_exterieur');
            $situation_famille = $this->input->post('situation_famille');
            $enfants_foyer = $this->input->post('enfants_foyer');
            $nbr_enfants = $this->input->post('nbr_enfants');
            $age_enfants = $this->input->post('age_enfants');
            $activite_famille = $this->input->post('activite_famille');
            $temps_activite = $this->input->post('temps_activite');
            $raison_famille = $this->input->post('raison_famille');
        }
        $data = array(
            'type_logement' => $type_logement,
            'exterieur_user' => $exterieur_user,
            'type_exterieur' => $type_exterieur,
            'situation_famille' => $situation_famille,
            'enfants_foyer' => $enfants_foyer,
            'nbr_enfants' => $nbr_enfants,
            'age_enfants' => $age_enfants,
            'activite_famille' => $activite_famille,
            'temps_activite' => $temps_activite,
            'raison_famille' => $raison_famille
        );
        if ($this->db->insert('famille', $data)) {
            // Redirection vers la partie 2
            redirect('Users');
        } else {
            $result = $this->Chat_Model->insert_famille($data);

            if ($result) {
                redirect('Users');
            } else {
                // Afficher les erreurs de validation
                echo validation_errors();
                redirect('Pensionnaire/annonce');
            }
        }
    }



    public function famille3()
    {
        $this->load->view('espace_user/famille3');
        $this->form_validation->set_rules('animaux_famille', 'Animaux famille', 'trim|required');
        $this->form_validation->set_rules('animaux_vie', 'Animaux vie', 'trim|required');
        $this->form_validation->set_rules('nbr_animaux', 'Nombre animaux', 'trim|required');
        $this->form_validation->set_rules('age_animaux_vie', 'Age animaux vie', 'trim|required');
        $this->form_validation->set_rules('details_animaux_vie', 'Details animaux vie', 'trim|required');
        $this->form_validation->set_rules('disponible_veto', 'Disponible veto', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('espace_user/famille3');
        } else {
            $animaux_famille = $this->input->post('animaux_famille');
            $animaux_vie = $this->input->post('animaux_vie');
            $nbr_animaux = $this->input->post('nbr_animaux');
            $age_animaux_vie = $this->input->post('age_animaux_vie');
            $details_animaux_vie = $this->input->post('detail_animaux_vie');
            $disponible_veto = $this->input->post('disponible_veto');
        }
        $data = array(
            'animaux_famille' => $animaux_famille,
            'animaux_vie' => $animaux_vie,
            'nbr_animaux' => $nbr_animaux,
            'age_animaux_vie' => $age_animaux_vie,
            'details_animaux_vie' => $details_animaux_vie,
            'disponible_veto' => $disponible_veto
        );

        if ($this->db->insert('famille', $data)) {
            // Redirection vers la partie 2
            redirect('Users');
        } else {
            $result = $this->Chat_Model->insert_famille($data);

            if ($result) {
                redirect('Users');
            } else {
                // Afficher les erreurs de validation
                echo validation_errors();
                redirect('Pensionnaire/annonce1');
            }
        }
    }





    public function annonce()
    {
        if (isConnected() == false) {
            redirect('Users/login');
        } else {
            $this->form_validation->set_rules('nom_chat', 'Nom chat', 'trim|required');
            $this->form_validation->set_rules('age_chat', 'Age chat', 'required|trim');
            $this->form_validation->set_rules('sexe_chat', 'Sexe chat', 'trim|required|in_list[male,femelle]');
            $this->form_validation->set_rules('race_chat', 'Race chat', 'trim|required');
            $this->form_validation->set_rules('apparence', 'Apparence', 'trim|required');
            $this->form_validation->set_rules('precision_apparence', 'Precision apparence', 'trim|required');
            $this->form_validation->set_rules('description', 'Description', 'trim|required');
            $this->form_validation->set_rules('maladie_select', 'Maladie select', 'trim|required|in_list[oui,non]');
            $this->form_validation->set_rules('liste_maladie', 'Liste maladie', 'trim|required');
            $this->form_validation->set_rules('puce_chat', 'Puce chat', 'trim|required|numeric');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('espace_assos/annonce1');
            } else {
                $nom_chat = $this->input->post('nom_chat');
                $img_chat = $this->input->post('img_chat');
                $age_chat = $this->input->post('age_chat');
                $sexe_chat = $this->input->post('sexe_chat');
                $race_chat = $this->input->post('race_chat');
                $apparence = $this->input->post('apparence');
                $precision_apparence = $this->input->post('precision_apparence');
                $description = $this->input->post('description');
                $maladie_select = $this->input->post('maladie_select');
                $liste_maladie = $this->input->post('liste_maladie');
                $puce_chat = $this->input->post('puce_chat');
               

                $data = array(
                    'nom_chat' => $nom_chat,
                    'img_chat' => $img_chat,
                    'age_chat' => $age_chat,
                    'sexe_chat' => $sexe_chat,
                    'race_chat' => $race_chat,
                    'apparence' => $apparence,
                    'precision_apparence' => $precision_apparence,
                    'description' => $description,
                    'maladie_select' => $maladie_select,
                    'liste_maladie' => $liste_maladie,
                    'puce_chat' => $puce_chat
                   
                );


                $result = $this->Chat_Model->create_chat($data);

                if ($result) {
                    redirect('Users');
                }
            }
        }
    }
}
