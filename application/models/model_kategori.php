<?php

class Model_kategori extends CI_Model{
    public function data_electronic(){
        return $this->db->get_where("tb_barang", array('kategori' => 'electronic'));
    }

    public function data_men_clothes(){
        return $this->db->get_where("tb_barang", array('kategori' => 'men clothes'));
    }

    public function data_women_clothes(){
        return $this->db->get_where("tb_barang", array('kategori' => 'women clothes'));
    }

    public function data_children_clothes(){
        return $this->db->get_where("tb_barang", array('kategori' => 'children clothes'));
    }

    public function data_sport_equipments(){
        return $this->db->get_where("tb_barang", array('kategori' => 'sport equipments'));
    }
}
?>