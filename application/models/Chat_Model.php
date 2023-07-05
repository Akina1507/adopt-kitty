<?php

class Chat_Model extends CI_Model
{

    public function create_chat($data)
    {
        return $this->db->insert('chats', $data);
    }




    public function create_famille($data)
    {
        $this->db->insert('famille', $data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }

    public function update_famille2($famille_id, $data)
    {
        $this->db->where('id', $famille_id);
        $this->db->update('famille', $data);
    }

    public function create_famille3($data)
    {
        $query = $this->db->insert('famille', $data);
        return $query;
    }
}
