<?php

class Chat_Model extends CI_Model
{

    public function create_chat($data)
    {
        return $this->db->insert('chats', $data);
    }

    public function create_famille($nom_user, $prenom_user, $age_user, $adresse_user,$codepostal_user, $ville_user, $email_user, $tel_user)
    {
        
        $data = array(
            'nom_user' => $nom_user,
            'prenom_user' => $prenom_user,
            'age_user' => $age_user,
            'adresse_user' => $adresse_user,
            'ville_user' => $ville_user,
            'codepostal_user' => $codepostal_user,
            'email_user' => $email_user,
            'tel_user' => $tel_user
            );

        $this->db->insert('famille', $data);
    }

   
}
