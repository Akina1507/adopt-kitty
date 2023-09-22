<?php

class User_Model extends CI_Model
{

    protected $table = 'users';

    public function cb_users($email, $mdp)
    {
        $query = $this->db->where('email', $email)
            ->where('mdp', $mdp)
            ->from($this->table)
            ->count_all_results();

        return $query;
    }

    public function get_user($pseudo, $mdp, $email, $number)
    {
        $query = $this->db->select("*")
            ->where('pseudo', $pseudo)
            ->where('mdp', $mdp)
            ->where('email', $email)
            ->where('mdp_recup', $number)
            ->from($this->table)
            ->get()
            ->result();

        return $query;
    }

    public function create_user($data)
    {
        return $this->db->insert('users', $data);
    }
    /* -----------------------------------------------------*/
    /* on veut le nombre de user qui ont un pseudo & un mdp */
    /* -----------------------------------------------------*/

    public function exist_email($email)
    {
        $this->db->where('email', $email);
        $query = $this->db->get('users');
        if ($query->num_rows() > 0) {

            return true;
        } else {
            return false;
        }
    }
    /* ------------------------ */
    /* savoir si le mail existe */
    /* ------------------------ */

    public function new_number($number, $email)
    {
        $data = array(
            'recup_mdp' => $number
        );

        $this->db->where('email', $email);
        $this->db->update('users', $data);
    }
    /* -------------------------------------------------------------------- */
    /* afficher dans la base de donnée le nouveau mdp généré par le $number */
    /* -------------------------------------------------------------------- */

    public function number_exist($number)
    {
        $query = $this->db->get_where('users', array('recup_mdp' => $number));
        return $query->num_rows() == 1;
    }



    public function get_user_by($data)
    {
        $this->db->select('*');
        $this->db->from('users');
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
    public function update_mdp($mdp, $mdp_recup)
    {
        $data = array(
            'mdp' => $mdp,
            'recup_mdp' => NULL
        );

        $this->db->where('recup_mdp', $mdp_recup);
        $this->db->update('users', $data);
    }

    public function get_annonce()
    {
        $this->db->select('*');
        $this->db->from('annonce');
        $query = $this->db->get();
        return $query->result_array();
    }
}
