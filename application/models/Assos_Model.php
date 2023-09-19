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
            ->where('recup_mdp_assos', $number)
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

    public function exist_email_assos($email_assos)
    {

        $this->db->where('email_assos', $email_assos);
        $query = $this->db->get('associations');
        if ($query->num_rows() > 0) {

            return true;
        } else {
            return false;
        }
    }
    /* ------------------------ */
    /* savoir si le mail existe */
    /* ------------------------ */

    public function new_number($number, $email_assos)
    {
        $data = array(
            'recup_mdp_assos' => $number
        );

        $this->db->where('email_assos', $email_assos);
        $this->db->update('associations', $data);
    }
    /* -------------------------------------------------------------------- */
    /* afficher dans la base de donnée le nouveau mdp généré par le $number */
    /* -------------------------------------------------------------------- */

    public function number_exist($number)
    {
        $query = $this->db->get_where('associations', array('recup_mdp_assos' => $number));
        return $query->num_rows() == 1;
    }



    public function get_user_by($data)
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


    /* ------------------------ */
    /* Update de l'ancien mdp en nouveau */
    /* ------------------------ */
    public function update_mdp_assos($mdp_assos, $mdp_recup_assos)
    {
        $data = array(
            'mdp_assos' => $mdp_assos,
            'recup_mdp_assos' => NULL
        );
        $this->db->where('recup_mdp_assos', $mdp_recup_assos);
        $this->db->update('associations', $data);
    }
}
