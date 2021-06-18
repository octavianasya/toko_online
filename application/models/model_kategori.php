<?php

class Model_kategori extends CI_Model{
	public function data_tshirtvol1(){
		 return $this->db->get_where("tb_barang", array('kategori' => 'T-shirt Vol.1 Deathless'));
	}

	public function data_shirt(){
		 return $this->db->get_where("tb_barang", array('kategori' => 'Shirt'));
	}
}