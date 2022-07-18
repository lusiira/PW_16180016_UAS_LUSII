<?php

class barang extends CI_Controller {

	function index() {
		$this->load->model('data');

		$data['barang'] = $this->data->getbarang();

		
		
		$this->load->view('databarang', $data);
	}
}