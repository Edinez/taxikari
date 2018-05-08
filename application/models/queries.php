<?php
class queries extends CI_Model{
    public function getZakaznici(){
        $query = $this->db->get('zakaznici');
        if($query->num_rows()>0){
            return $query->result();
        }
    }
}
?>
