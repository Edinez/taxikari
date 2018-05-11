<?php
class vodici_queries extends CI_Model
{
    public function getVodici()
    {
        $query = $this->db->get('vodic');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    public function addVodic($data){
        return $this->db->insert('vodic', $data);
    }
}