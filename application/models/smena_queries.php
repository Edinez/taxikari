<?php
/**
 * Created by PhpStorm.
 * User: Edy
 * Date: 13.5.2018
 * Time: 18:53
 */

class smena_queries extends CI_Model
{
    public function getSmeny(){
        $query = $this->db->get('smeny');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    public function dajMiVodicov(){
        $this->db->distinct();
        $this->db->select('*')
            ->from('vodic');

        $query = $this->db->get();
        return $query->result_array();
    }

    public function dajMiVozidlo(){
        $this->db->distinct();
        $this->db->select('*')
            ->from('vozidlo');

        $query = $this->db->get();
        return $query->result_array();
    }

    public function getSmenyVsetky2(){
        $this->db->select('smeny.idSmeny , smeny.Datum_Od , smeny.Datum_Do , smeny.Cas_Od , smeny.Cas_Do , vodic.Meno as vodic , vozidlo.Znacka as znacka ');
        $this->db->from('smeny');
        $this->db->join('vozidlo', 'smeny.idVozidlo = vozidlo.idVozidlo');
        $this->db->join('vodic','smeny.idVodic = vodic.idVodic');
        $queri= $this->db->get();
        return $queri->result_array();
    }

    public function addSmena($data){
        return $this->db->insert('smeny', $data);
    }

    public function getSingleSmenaWhere($id){
        $this->db->select('smeny.idSmeny , smeny.Datum_Od , smeny.Datum_Do , smeny.Cas_Od , smeny.Cas_Do , vodic.Meno as vodicMeno,vodic.Priezvisko as vodicPriezvisko , vozidlo.Znacka as znacka, vozidlo.Model as model, vozidlo.Rok as rocnik ');
        $this->db->from('smeny');
        $this->db->join('vozidlo', 'smeny.idVozidlo = vozidlo.idVozidlo');
        $this->db->join('vodic','smeny.idVodic = vodic.idVodic');
        $this->db->where('smeny.idSmeny', $id);
        $queri= $this->db->get();
        return $queri->result_array();
    }

    public function getSingleSmena($id){
        $query = $this->db->get_where('smeny', array('idSmeny' => $id));
        if($query->num_rows()>0){
            return $query->row();
        }
    }

}