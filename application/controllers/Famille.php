<?php
defined('BASEPATH') or exit('No direct script access allowed');

class FormController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Chat_Model');
        $this->load->library('form_validation');
        //mettre form helper
    }

    public function step1()
    {
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

            $_SESSION["nom_user"] = $_POST['nom_user'];
            $_SESSION["prenom_user"] = $_POST['prenom_user'];
            $_SESSION["age_user"] = $_POST['age_user'];
            $_SESSION["email_user"] = $_POST['email_user'];
            $_SESSION["adresse_user"] = $_POST['adresse_user'];
            $_SESSION["ville_user"] = $_POST['ville_user'];
            $_SESSION["codepostal_user"] = $_POST['codepostal_user'];
            $_SESSION["tel_user"] = $_POST['tel_user'];

            redirect('Famille/step2');
        }
        if (isConnected() == false) {
            $this->load->view('login');
        } else {
            $this->load->view('form/step1');
        }
    }

    public function step2()
    {

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

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('form/step2');
        } else {
            $_SESSION["type_logement"] = $_POST['type_logement'];
            $_SESSION["exterieur_user"] = $_POST['exterieur_user'];
            $_SESSION["type_exterieur"] = $_POST['type_exterieur'];
            $_SESSION["situation_famille"] = $_POST['situation_famille'];
            $_SESSION["enfants_foyer"] = $_POST['enfants_foyer'];
            $_SESSION["nbr_enfants"] = $_POST['nbr_enfants'];
            $_SESSION["age_enfants"] = $_POST['age_enfants'];
            $_SESSION["activite_famille"] = $_POST['activite_famille'];
            $_SESSION["temps_activite"] = $_POST['temps_activite'];
            $_SESSION["raison_famille"] = $_POST['raison_famille'];

            redirect('Famille/step3');
        }
    }

    public function step3()
    {
        $this->form_validation->set_rules('animaux_famille', 'Animaux famille', 'trim|required');
        $this->form_validation->set_rules('animaux_vie', 'Animaux vie', 'trim|required');
        $this->form_validation->set_rules('nbr_animaux', 'Nombre animaux', 'trim');
        $this->form_validation->set_rules('age_animaux_vie', 'Age animaux vie', 'trim');
        $this->form_validation->set_rules('details_animaux_vie', 'Details animaux vie', 'trim|required');
        $this->form_validation->set_rules('disponible_veto', 'Disponible veto', 'trim|required');

        if ($this->form_validation->run() === FALSE) {
            $data['popup'] = true;
            $this->load->view('form/step3', $data);
        } else {
            $_SESSION["animaux_famille"] = $_POST['animaux_famille'];
            $_SESSION["animaux_vie"] = $_POST['animaux_vie'];
            $_SESSION["nbr_animaux"] = $_POST['nbr_animaux'];
            $_SESSION["age_animaux_vie"] = $_POST['age_animaux_vie'];
            $_SESSION["detail_animaux_vie"] = $_POST['detail_animaux_vie'];
            $_SESSION["disponible_veto"] = $_POST['disponible_veto'];

            redirect('Users');
        }
    }


    public function success()
    {
        $data['message'] = 'Formulaire terminé avec succès !';
        $this->load->view('form/success', $data);
    }

    // relié les etapes
    //Continuer la pop up et ne pas afficher le message de success mais que la page 3
}
