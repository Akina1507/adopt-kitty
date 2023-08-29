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


    public function create_annonce(

        $nom_animal,
        $puce_animal,
        $img_animal,
        $espece_animal,
        $race_animal,
        $naissance_animal,
        $sexe_animal,
        $lieu_animal,
        $compatible_animal,
        $description_animal,
    ) {
        /* ------------------------- */
        /* Contenu des tables famille relié aux variables annonce */
        /* ------------------------- */
        $data = array(
            'nom_animal' => $nom_animal,
            'puce_animal' => $puce_animal,
            'img_animal' => $img_animal,
            'espece_animal' => $espece_animal,
            'race_animal' => $race_animal,
            'naissance_animal' => $naissance_animal,
            'sexe_animal' => $sexe_animal,
            'lieu_animal' => $lieu_animal,
            'compatible_animal' => $compatible_animal,
            'description_animal' => $description_animal
        );
    }
}
