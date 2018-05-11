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

    public function getSingleVodici($id){
        $query = $this->db->get_where('vodic', array('idVodic' => $id));
        if($query->num_rows()>0){
            return $query->row();
        }
    }

    public function updateVodic($data, $id){
        return $this->db->where('idVodic',$id)
            ->update('vodic',$data);
    }

    public function addVodic($data){
        return $this->db->insert('vodic', $data);
    }

    public function delete_Vodic($id){
        return  $this->db->delete('vodic',['idVodic'=>$id]);
    }
}