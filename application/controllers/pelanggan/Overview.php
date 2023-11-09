<?php

class Overview extends CI_Controller {
    public function __construct()
    {
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}

	public function _pelanggan_output($output = null)
	{
		$this->load->view('pelanggan/overview',(array)$output);
	}

	public function index()
	{
		redirect('pelanggan/overview/pelanggan');
	}

	public function pelanggan()
	{
		try{
			$crud = new grocery_CRUD();
			$crud->set_theme('datatables');
			$crud->set_table('pelanggan');
			$crud->set_subject('Pelanggan');
			$crud->required_fields('id_plg', 'id_reward', 'nama_plg', 'username_plg', 'email_plg', 'password_plg', 'kontak', 'alamat', 'provinsi', 'kota', 'kode_pos', 'jml_transaksi');
			$output = $crud->render();
			$this->_pelanggan_output($output);
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
}