<?php

class Overview extends CI_Controller {
    public function __construct()
    {
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}

	public function _admin_output($output = null)
	{
		$this->load->view('admin/overview',(array)$output);
	}

	public function index()
	{
		redirect('admin/overview/admin');
	}

	public function admin()
	{
		try{
			$crud = new grocery_CRUD();
			$crud->set_theme('datatables');
			$crud->set_table('admin');
			$crud->set_subject('Admin');
			$crud->required_fields('id_adm, nama_adm, username_adm, email_adm, password_adm');
			$output = $crud->render();
			$this->_admin_output($output);
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
}