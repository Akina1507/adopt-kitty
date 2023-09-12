<?php

class Assos_Model extends CI_Model
{
    public function cb_users($nom_assos, $mdp_assos)
    {
        $query = $this->db->where('nom_assos', $nom_assos)
            ->where('mdp_assos', $mdp_assos)
            ->from($this->table)
            ->count_all_results();

        return $query;
    }

    public function get_user($nom_assos, $mdp_assos, $email, $number, $adresse_assos, $codepostal_assos, $ville_assos, $tel_assos)
    {
        $query = $this->db->select("*")
            ->where('pseudo', $pseudo)
            ->where('mdp', $mdp)
            ->where('email', $email)
            ->where('mdp_recup', $number)
            ->where('adresse_assos', $adresse_assos)
            ->where('ville_assos', $ville_assos)
            ->where('codepostal_assos', $codepostal_assos)
            ->where('tel_assos', $tel_assos)
            ->from($this->table)
            ->get()
            ->result();

        return $query;
    }
}