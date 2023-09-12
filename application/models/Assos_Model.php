<?php

class Assos_Model extends CI_Model
{
    public function cb_assos($email_assos, $mdp_assos)
    {
        $query = $this->db->where('email_assos', $email_assos)
            ->where('mdp_assos', $mdp_assos)
            ->from('associations')
            ->count_all_results();

        return $query;
    }

    public function get_assos($nom_assos, $mdp_assos, $email_assos, $number, $adresse_assos, $codepostal_assos, $ville_assos, $tel_assos)
    {
        $query = $this->db->select("*")
            ->where('nom_assos', $nom_assos)
            ->where('mdp_assos', $mdp_assos)
            ->where('email_assos', $email_assos)
            ->where('mdp_recup_assos', $number)
            ->where('adresse_assos', $adresse_assos)
            ->where('ville_assos', $ville_assos)
            ->where('codepostal_assos', $codepostal_assos)
            ->where('tel_assos', $tel_assos)
            ->from($this->table)
            ->get()
            ->result();

        return $query;
    }

    public function get_assos_by($data)
    {
        $this->db->select('*');
        $this->db->from('associations');
        $this->db->where($data);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row_array();
        } else {
            return false;
        }
    }

    public function create_assos($data)
    {
        return $this->db->insert('associations', $data);
    }
}
