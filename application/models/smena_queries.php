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

    public function getSmenyVsetky(){
        $query = $this->db->select('*')
            ->from('smeny ');
            return $query->result();
    }

    public function getSmenyVsetky2(){
        $this->db->select('smeny.idSmeny , smeny.Datum_Od , smeny.Datum_Do , smeny.Cas_Od , smeny.Cas_Do , vodic.Meno as vodic , vozidlo.Znacka as znacka ');
        $this->db->from('smeny');
        $this->db->join('vozidlo', 'smeny.idVozidlo = vozidlo.idVozidlo');
        $this->db->join('vodic','smeny.idVodic = vodic.idVodic');
        $queri= $this->db->get();
        return $queri->result_array();
    }


}