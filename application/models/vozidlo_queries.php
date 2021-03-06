<?php
/**
 * Created by PhpStorm.
 * User: Edy
 * Date: 12.5.2018
 * Time: 10:53
 */

class vozidlo_queries extends CI_Model
{
    public function getVozidlo(){
        $query = $this->db->get('vozidlo');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    public function getSingleVozidlo($id){
        $query = $this->db->get_where('vozidlo', array('idVozidlo' => $id));
        if($query->num_rows()>0){
            return $query->row();
        }
    }

    public function addVozidlo($data){
    return $this->db->insert('vozidlo', $data);
}

    public function delete_vozidlo($id){
        return  $this->db->delete('vozidlo',['idVozidlo'=>$id]);
    }

    public function dajmigraf(){
        $this->db->select('Znacka as znacka, COUNT(*) AS pocet');
        $this->db->from('vozidlo');
        $this->db->group_by('znacka');
        $queri= $this->db->get();
        return $queri->result_array();
    }

    public function dajmigrafPriemerCena(){
        $this->db->select('AVG(Konecna_suma) as suma,zakaznici.Meno as zakaznik');
        $this->db->from('objednavka');
        $this->db->join('zakaznici', 'objednavka.idZakaznici=zakaznici.idZakaznici');
        $this->db->group_by('zakaznik');
        $queri= $this->db->get();
        return $queri->result_array();
    }

    public function dajmigrafSucet(){
        $this->db->select('SUM(Konecna_suma) as suma,zakaznici.Meno as zakaznik');
        $this->db->from('objednavka');
        $this->db->join('zakaznici', 'objednavka.idZakaznici=zakaznici.idZakaznici');
        $this->db->group_by('zakaznik');
        $queri= $this->db->get();
        return $queri->result_array();
    }

    public function dajmigrafProgres(){
        $this->db->select('SUM(Konecna_suma) as suma ,YEAR(datum) as rok');
        $this->db->from('objednavka');
        $this->db->group_by('rok');
        $queri= $this->db->get();
        return $queri->result_array();
    }

}