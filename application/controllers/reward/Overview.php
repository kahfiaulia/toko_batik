<?php

class Overview extends CI_Controller {
    public function __construct()
    {
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}

	public function _reward_output($output = null)
	{
		$this->load->view('reward/overview',(array)$output);
	}

	public function index()
	{
		redirect('reward/overview/reward');
	}

	public function reward()
	{
		try{
			$crud = new grocery_CRUD();
			$crud->set_theme('datatables');
			$crud->set_table('reward');
			$crud->set_subject('Reward');
			$crud->required_fields('id_reward, nama_reward');
			$output = $crud->render();
			$this->_reward_output($output);
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
}