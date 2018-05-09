<?php
class queries extends CI_Model{
    public function getZakaznici(){
        $query = $this->db->get('zakaznici');
        if($query->num_rows()>0){
            return $query->result();
        }
    }

    public function addPost($data){
        return $this->db->insert('zakaznici', $data);
    }

    public function getSingleZakaznici($id){
        $query = $this->db->get_where('zakaznici', array('idZakaznici' => $id));
        if($query->num_rows()>0){
            return $query->row();
        }
    }

    public function updatePost($data, $id){
        return $this->db->where('idZakaznici',$id)
                    ->update('zakaznici',$data);
    }
}
?>
