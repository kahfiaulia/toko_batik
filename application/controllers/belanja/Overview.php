<?php

class Overview extends CI_Controller {
    public function __construct()
    {
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}

	public function _belanja_output($output = null)
	{
		$this->load->view('belanja/overview',(array)$output);
	}

	public function index()
	{
		redirect('belanja/overview/belanja');
	}

	public function belanja()
	{
		try{
			$crud = new grocery_CRUD();
			$crud->set_theme('datatables');
			$crud->set_table('belanja');
			$crud->set_subject('Belanja');
			$crud->required_fields('id_belanja', 'id_produk', 'id_jenis', 'id_ukuran', 'id_adm', 'harga', 'deskripsi', 'stok', 'ts', 'jml_transaksi');
			$crud->set_field_upload('gambar','assets/uploads/files');
			$output = $crud->render();
			$this->_belanja_output($output);
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
}