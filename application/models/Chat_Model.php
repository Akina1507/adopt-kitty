<?php

class Chat_Model extends CI_Model
{

    public function create_chat($data)
    {
        return $this->db->insert('chats', $data);
    }


    // envoye des données vers la bdd = tableau des colonnes + variable
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
        $animaux_vie,
        $nbr_animaux,
        $age_animaux_vie,
        $details_animaux_vie,
        $disponible_veto,

    ) {

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
            'animaux_vie' => $animaux_vie,
            'nbr_animaux' => $nbr_animaux,
            'age_animaux_vie' => $age_animaux_vie,
            'details_animaux_vie' => $details_animaux_vie,
            'disponible_veto' => $disponible_veto,

        );

        $this->db->insert('famille', $data);
    }
}
