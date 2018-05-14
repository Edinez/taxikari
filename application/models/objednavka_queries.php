<?php
/**
 * Created by PhpStorm.
 * User: Edy
 * Date: 14.5.2018
 * Time: 17:40
 */

class objednavka_queries extends CI_Model
{
    public function getObjednavky(){
        $this->db->select('objednavka.idObjednavka , objednavka.Zaciatocna_lokacia as zaciatok , objednavka.Konecna_lokacia as ciel , objednavka.vzdialenost as vzdialenost , objednavka.Konecna_suma as platit , objednavka.Datum as datum , objednavka.idSmeny as smeny , zakaznici.Meno as meno , zakaznici.Priezvisko as priezvisko ');
        $this->db->from('objednavka');
        $this->db->join('zakaznici', 'objednavka.idZakaznici = zakaznici.idZakaznici');
        $this->db->join('smeny','objednavka.idSmeny = smeny.idSmeny');
        $queri= $this->db->get();
        return $queri->result_array();
    }
}