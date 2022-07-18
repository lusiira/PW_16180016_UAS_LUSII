<?php

class data extends CI_Model {

	function getbarang() {
	$brg =	$this->db->get('barang');

	return $brg->result_array(); 
	}
}