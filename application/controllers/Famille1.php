<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Famille1 extends CI_Controller
{


    /* ------------------------- */
    /* Validation formulaire */
    /* ------------------------- */
    public function step1()
    {

        if (isConnected() == false) {
            redirect("Users/login");
        } else {



            $this->form_validation->set_rules('nom_user', 'Nom', 'trim|required');
            $this->form_validation->set_rules('prenom_user', 'Prenom', 'trim|required');
            $this->form_validation->set_rules('age_user', 'Age', 'trim|required|in_list[18-25ans,25-35ans,35-50ans,50-75ans,75-99ans,99-ou-plus]');
            $this->form_validation->set_rules('email_user', 'Email', 'trim|required|valid_email|is_unique[famille.email_user]');
            $this->form_validation->set_rules('adresse_user', 'Adresse', 'trim|required');
            $this->form_validation->set_rules('ville_user', 'Ville', 'trim|required');
            $this->form_validation->set_rules('codepostal_user', 'Code postal', 'trim|required|exact_length[5]', array(
                'exact_length' => 'Le code postal doit contenir 5 chiffres seulement.'
            ));
            $this->form_validation->set_rules('tel_user', 'Téléphone', 'trim|required|regex_match[(06|07|08|09|03)]|exact_length[10]', array(
                'regex_match' => 'Le numéro de téléphone doit obligatoirement commencer par (06, 07, 08, 09 ou 03).',
                'exact_length' => 'Le champ doit contenir exactement 10 chiffres.'
            ));
            $this->form_validation->set_rules('type_logement', 'Type logement', 'trim|required|in_list[maison,appartement]');
            $this->form_validation->set_rules('exterieur_user', 'Exterieur user', 'trim|required|in_list[oui,non]');
            $this->form_validation->set_rules('type_exterieur', 'Type exterieur', 'trim|in_list[terrasse,jardin,balcon]');
            $this->form_validation->set_rules('situation_foyer', 'Situation foyer', 'trim|required|in_list[seul,couple]');
            $this->form_validation->set_rules('activite_famille', 'Activite famille', 'trim|in_list[sans-emploi,salarie,etudiant,handicape]');
            $this->form_validation->set_rules('activite_conjoint', 'Activite conjoint', 'trim|in_list[sans-emploi,salarie,etudiant,handicape]');
            $this->form_validation->set_rules('enfants_foyer', 'Enfants foyer', 'trim|required|in_list[oui,non]');
            $this->form_validation->set_rules('nbr_enfants', 'Nombre enfants', 'trim|in_list[1,2,3,4,5,6,7,8,9,10]');
            $this->form_validation->set_rules('temps_activite', 'Temps activite', 'trim|required|in_list[1h-3h,3h-5h,5h-7h,7h-ou-plus]');
            $this->form_validation->set_rules('raison_famille', 'Raison famille', 'trim|required');
            $this->form_validation->set_rules('animaux_famille', 'Animaux famille', 'trim|in_list[oui,non]');
            $this->form_validation->set_rules('nbr_animaux', 'Animaux foyer', 'trim|in_list[oui,non]');
            $this->form_validation->set_rules('chiens_radio', 'Bouton chien', 'trim');
            $this->form_validation->set_rules('chats_radio', 'Bouton chats', 'trim');
            $this->form_validation->set_rules('oiseaux_radio', 'Bouton oiseaux', 'trim');
            $this->form_validation->set_rules('autres_radio', 'Bouton autres', 'trim');
            $this->form_validation->set_rules('others_animaux', 'Autres animaux', 'trim');
            $this->form_validation->set_rules('age_animaux_vie', 'Age animaux', 'trim');
            $this->form_validation->set_rules('details_animaux_vie', 'Details animaux', 'trim');
            $this->form_validation->set_rules('disponible_veto', 'Disponible veto', 'trim|required');



            /* ------------------------- */
            /* Formulaire valide */
            /* ------------------------- */

            if ($this->form_validation->run() === TRUE) {
                $nom_user = $this->input->post('nom_user');
                $prenom_user = $this->input->post('prenom_user');
                $age_user = $this->input->post('age_user');
                $adresse_user = $this->input->post('adresse_user');
                $ville_user = $this->input->post('ville_user');
                $codepostal_user = $this->input->post('codepostal_user');
                $email_user = $this->input->post('email_user');
                $tel_user = $this->input->post('tel_user');
                $type_logement = $this->input->post('type_logement');
                $exterieur_user = $this->input->post('exterieur_user');
                $type_exterieur = $this->input->post('type_exterieur');
                $situation_foyer = $this->input->post('situation_foyer');
                $activite_famille = $this->input->post('activite_famille');
                $activite_conjoint = $this->input->post('activite_conjoint');
                $enfants_foyer = $this->input->post('enfants_foyer');
                $nbr_enfants = $this->input->post('nbr_enfants');
                $raison_famille = $this->input->post('raison_famille');
                $temps_activite = $this->input->post('temps_activite');
                $animaux_famille = $this->input->post('animaux_famille');
                $nbr_animaux = $this->input->post('nbr_animaux');
                $chiens_radio = $this->input->post('chiens_radio');
                if (empty($chiens_radio)) {
                    $chiens_radio = 0; // Valeur par défaut bdd
                }
                $chats_radio = $this->input->post('chats_radio');
                if (empty($chats_radio)) {
                    $chats_radio = 0; // Valeur par défaut bdd
                }
                $oiseaux_radio = $this->input->post('oiseaux_radio');
                if (empty($oiseaux_radio)) {
                    $oiseaux_radio = 0; // Valeur par défaut bdd
                }
                $autres_radio = $this->input->post('autres_radio');
                if (empty($autres_radio)) {
                    $autres_radio = 0; // Valeur par défaut bdd
                }
                $others_animaux = $this->input->post('others_animaux');
                $age_animaux_vie = $this->input->post('age_animaux_vie');
                $details_animaux_vie = $this->input->post('details_animaux_vie');
                $disponible_veto = $this->input->post('disponible_veto');


                /* ------------------------- */
                /* Variable chargé dans le model, Chat_Model */
                /* ------------------------- */
                $this->Chat_Model->create_famille(
                    $nom_user,
                    $prenom_user,
                    $age_user,
                    $adresse_user,
                    $codepostal_user,
                    $ville_user,
                    $email_user,
                    $tel_user,
                    $type_logement,
                    $exterieur_user,
                    $type_exterieur,
                    $situation_foyer,
                    $activite_famille,
                    $activite_conjoint,
                    $enfants_foyer,
                    $nbr_enfants,
                    $raison_famille,
                    $temps_activite,
                    $animaux_famille,
                    $nbr_animaux,
                    $chiens_radio,
                    $chats_radio,
                    $oiseaux_radio,
                    $autres_radio,
                    $others_animaux,
                    $age_animaux_vie,
                    $details_animaux_vie,
                    $disponible_veto,

                );

                redirect("Famille1/success");
            }
            $this->load->view('form/step1');
        }
    }

    public function success()
    {
        /* header('refresh:5;url=' . base_url('Users')); */
        $this->load->view('form/success');
    }
}
