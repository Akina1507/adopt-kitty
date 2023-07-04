<?php

class Chat_Model extends CI_Model
{

    public function create_chat($data)
    {
        return $this->db->insert('chats', $data);
    }

    public function create_famille($data)
    {
        $query = $this->db->insert('famille', $data);
        return $query;
    }

    public function create_famille2($data)
    {
    $this->db->select_max('id');
        $query = $this->db->get('famille');
        $result = $query->row();
        
        $latestId = ($result) ? $result->id : 0;
        $newId = $latestId + 1;
        
        $data['id'] = $newId;
        
        $this->db->insert('famille', $data);
        
        return $newId;
    }
}
