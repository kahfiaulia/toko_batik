<?php

class Overview extends CI_Controller {
	public function __construct()
{
    parent::__construct();
    $this->load->model("model_laporan_tahunan");
}

	public function index()
	{
		$data["laporan_tahunan"] = $this->model_laporan_tahunan->getAll();
		$this->load->view("laporan_tahunan/overview", $data);
	}
}