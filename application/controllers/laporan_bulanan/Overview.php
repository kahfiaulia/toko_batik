<?php

class Overview extends CI_Controller {
	public function __construct()
{
    parent::__construct();
    $this->load->model("model_laporan_bulanan");
}

	public function index()
	{
		$data["laporan_bulanan"] = $this->model_laporan_bulanan->getAll();
		$this->load->view("laporan_bulanan/overview", $data);
	}
}