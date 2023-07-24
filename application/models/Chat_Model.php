<?php

class Chat_Model extends CI_Model
{

    public function create_chat($data)
    {
        return $this->db->insert('chats', $data);
    }


    // envoye des données vers la bdd = tableau des colonnes + variable
    public function create_famille($nom_user, $prenom_user, $age_user, $adresse_user,$codepostal_user, $ville_user, $email_user,
     $tel_user, $type_logement, $exterieur_user, $type_exterieur, $situation_foyer,
     
      $enfants_foyer, //$nbr_enfants,
    // $age_enfants, $activite_famille, $temps_activite, $raison_famille, $animaux_famille, $animaux_vie, $nbr_animaux,
    // $age_animaux_vie, $detail_animaux_vie, $disponible_veto
    )
    {
        
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
             'enfants_foyer' => $enfants_foyer,
            // 'nbr_enfants' => $nbr_enfants,
            // 'age_enfants' => $age_enfants,
            // 'activite_famille' => $activite_famille,
            // 'temps_activite' => $temps_activite,
            // 'raison_famille' => $raison_famille,
            // 'animaux_famille' => $animaux_famille,
            // 'animaux_vie' => $animaux_vie,
            // 'nbr_animaux' => $nbr_animaux,
            // 'age_animaux_vie' => $age_animaux_vie,
            // 'detail_animaux_vie' => $detail_animaux_vie,
            // 'disponible_veto' => $disponible_veto
            );

        $this->db->insert('famille', $data);
    }

   
}
