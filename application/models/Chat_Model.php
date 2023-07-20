<?php

class Chat_Model extends CI_Model
{

    public function create_chat($data)
    {
        return $this->db->insert('chats', $data);
    }

    public function create_famille($data)
    {
        return $this->db->insert('famille', $data);
    }

    public function search_famille($data){
        $this->db->count
    }
}
