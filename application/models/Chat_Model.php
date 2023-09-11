<?php

class Chat_Model extends CI_Model
{

    public function create_chat($data)
    {
        return $this->db->insert('chats', $data);
    }



    /* ------------------------- */
    /* Contenu des variables dans la bdd famille */
    /* ------------------------- */
    public function create_famille(
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
        $disponible_veto
    ) {


        /* ------------------------- */
        /* Contenu des tables famille relié aux variables famille */
        /* ------------------------- */
        $data = array(
            'nom_user' => $nom_user,
            'prenom_user' => $prenom_user,
            'age_user' => $age_user,
            'adresse_user' => $adresse_user,
            'ville_user' => $ville_user,
            'codepostal_user' => $codepostal_user,
            'email_user' => $email_user,
            'tel_user' => $tel_user,
            'type_logement' => $type_logement,
            'exterieur_user' => $exterieur_user,
            'type_exterieur' => $type_exterieur,
            'situation_foyer' => $situation_foyer,
            'activite_famille' => $activite_famille,
            'activite_conjoint' => $activite_conjoint,
            'enfants_foyer' => $enfants_foyer,
            'nbr_enfants' => $nbr_enfants,
            'raison_famille' => $raison_famille,
            'temps_activite' => $temps_activite,
            'animaux_famille' => $animaux_famille,
            'nbr_animaux' => $nbr_animaux,
            'chiens_radio' => $chiens_radio,
            'chats_radio' => $chats_radio,
            'oiseaux_radio' => $oiseaux_radio,
            'autres_radio' => $autres_radio,
            'others_animaux' => $others_animaux,
            'age_animaux_vie' => $age_animaux_vie,
            'details_animaux_vie' => $details_animaux_vie,
            'disponible_veto' => $disponible_veto,

        );

        $this->db->insert('famille', $data);
    }


    public function create_annonce($data)
    {
        $this->db->insert('annonce', $data);
    }




    public function create_adoption(
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
        $temps_activite
    )
    {
        /* ------------------------- */
        /* Contenu des tables famille relié aux variables famille */
        /* ------------------------- */
        $data = array(
            'civile_user' => $civile_user,
            'nom_user' => $nom_user,
            'prenom_user' => $prenom_user,
            'age_user' => $age_user,
            'adresse_user' => $adresse_user,
            'codepostal_user' => $codepostal_user,
            'ville_user' => $ville_user,
            'email_user' => $email_user,
            'tel_user' => $tel_user,
            'raison_adopt' => $raison_adopt,
            'accueil_animaux' => $accueil_animaux,
            'chiens_radio' => $chiens_radio,
            'chats_radio' => $chats_radio,
            'oiseaux_radio' => $oiseaux_radio,
            'autres_radio' => $autres_radio,
            'others_animaux' => $others_animaux,
            'age_animaux' => $age_animaux,
            'animaux_foyer' => $animaux_foyer,
            'animaux_domestiques' => $animaux_domestiques,
            'exp_animaux' => $exp_animaux,
            'type_logement' => $type_logement,
            'exterieur_user' => $exterieur_user,
            'type_exterieur' => $type_exterieur,
            'situation_foyer' => $situation_foyer,
            'activite_famille' => $activite_famille,
            'activite_conjoint' => $activite_conjoint,
            'enfants_foyer' => $enfants_foyer,
            'nbr_enfants' => $nbr_enfants,
            'raison_famille' => $raison_famille,
            'temps_activite' => $temps_activite,
            
        );
        $this->db->insert('adoption', $data);
    
    }


    public function get_races()
    {
        $this->db->select('races, value');
        $query = $this->db->get('races');

        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return array();
        }
    }
}
