<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pensionnaire extends CI_Controller
{       
            /* ------------------------- */
            /* Validation formulaire */
            /* ------------------------- */
            public function adoption()
            {
                
                    $this->form_validation->set_rules('civile_user', 'Civilite', 'trim|required|in_list[monsieur,madame]');
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
                    $this->form_validation->set_rules('raison_adopt', 'Raison adoption', 'trim|required');
                    $this->form_validation->set_rules('accueil_animaux', 'Accueil animaux', 'trim|required|in_list[chat]');
                    $this->form_validation->set_rules('age_animaux', 'Age animaux', 'trim|in_list[junior,adulte,senior]');
                    $this->form_validation->set_rules('animaux_foyer', 'Animaux foyer', 'trim|in_list[oui,non]');
                    $this->form_validation->set_rules('chiens_radio', 'Bouton chien', 'trim|in_list[0,1,2,3]');
                    $this->form_validation->set_rules('chats_radio', 'Bouton chats', 'trim|in_list[0,1,2,3]');
                    $this->form_validation->set_rules('oiseaux_radio', 'Bouton oiseaux', 'trim|in_list[0,1,2,3]');
                    $this->form_validation->set_rules('autres_radio', 'Bouton autres', 'trim|in_list[0,1,2,3]');
                    $this->form_validation->set_rules('others_animaux', 'Autres animaux', 'trim');
                    $this->form_validation->set_rules('animaux_domestiques', 'Animaux domestiques', 'trim|required|in_list[chiens,chats,oiseaux,autres,non]');
                    $this->form_validation->set_rules('exp_animaux', 'Experiences animaux', 'trim');
                    
                    $this->form_validation->set_rules('type_logement', 'Type logement', 'trim|required|in_list[maison,appartement]');
                    $this->form_validation->set_rules('exterieur_user', 'Exterieur user', 'trim|required|in_list[oui,non]');
                    $this->form_validation->set_rules('type_exterieur', 'Type exterieur', 'trim|in_list[terrasse,jardin,balcon]');
                    $this->form_validation->set_rules('situation_foyer', 'Situation foyer', 'trim|required|in_list[seul,couple]');
                    $this->form_validation->set_rules('activite_famille', 'Activite famille', 'trim|in_list[sans-emploi,salarie,etudiant,handicape]');
                    $this->form_validation->set_rules('activite_conjoint', 'Activite conjoint', 'trim|in_list[sans-emploi,salarie,etudiant,handicape]');
                    $this->form_validation->set_rules('enfants_foyer', 'Enfants foyer', 'trim|required|in_list[oui,non]');
                    $this->form_validation->set_rules('nbr_enfants', 'Nombre enfants', 'trim|in_list[1,2,3,4,5,6,7,8,9,10]');
                    $this->form_validation->set_rules('temps_activite', 'Temps activite', 'trim|required|in_list[1h-3h,3h-5h,5h-7h,7h-ou-plus]');
        
                    /* ------------------------- */
                    /* Formulaire valide */
                    /* ------------------------- */
        
                    if ($this->form_validation->run() === TRUE) {
                        $civile_user = $this->input->post('civile_user');
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
                        $raison_adopt = $this->input->post('raison_adopt');
                        $accueil_animaux = $this->input->post('accueil_animaux');
                        $age_animaux = $this->input->post('age_animaux');
                        $animaux_foyer = $this->input->post('animaux_foyer');
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
                        $animaux_domestiques = $this->input->post('animaux_domestiques');
                        $exp_animaux = $this->input->post('exp_animaux');
        
                        /* ------------------------- */
                        /* Variable chargé dans le model, Chat_Model */
                        /* ------------------------- */
                        $this->Chat_Model->create_adoption(
                            $civile_user,
                            $nom_user,
                            $prenom_user,
                            $age_user,
                            $adresse_user,
                            $codepostal_user,
                            $ville_user,
                            $email_user,
                            $tel_user,
                            $raison_adopt,
                            $accueil_animaux,
                            $chiens_radio,
                            $chats_radio,
                            $oiseaux_radio,
                            $autres_radio,
                            $others_animaux,
                            $age_animaux,
                            $animaux_foyer,
                            $animaux_domestiques,
                            $exp_animaux,
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
                        );
                        
                        redirect("Pensionnaire/success");
                    } else {
                    $this->load->view('espace_animaux/adoption');
                }
            }
        
                
            
            
        
            public function success()
            {
                header('refresh:10;url=' . base_url('Users'));
                $this->load->view('form/success');
            }
        }
        
        
    
