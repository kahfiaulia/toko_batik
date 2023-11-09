<?php

class Overview extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
		// load view utama/overview.php
		$data['belanja'] = $this -> model_belanja-> tampil_data() -> result();
        $this->load->view("utama/overview", $data);
	}

	public function tambah_ke_keranjang($id){
		$belanja = $this -> model_belanja -> find($id);

		$data = array(
			'id'      => $belanja -> id_belanja,
			'qty'     => 1,
			'price'   => $belanja -> harga,
			'name'    => $belanja -> deskripsi
		);
		
		$this->cart ->insert($data);
		redirect('utama');
		
	}

	public function detail_keranjang(){
		$this->load->view("utama/keranjang");
	}

	public function cek_keranjang(){
		$this->load->view("utama/cek_keranjang");
	}

	public function hapus_keranjang(){
		$this->cart->destroy();
		redirect('utama');
	}

	public function pembayaran(){
		$this->load->view("utama/pembayaran");
	}

	public function proses_pesanan(){
		$is_processed = $this -> model_invoice -> index();
		if($is_processed){
			$this->cart->destroy();
		$this->load->view("utama/proses_pesanan");
		} else{
			echo "Maaf, Pesanan Anda gagal diproses!";
		}
		
	}

	public function detail($id_belanja){
		$data['belanja'] = $this -> model_belanja -> detail_belanja($id_belanja);
		$this->load->view("utama/detail_barang", $data);
	}
}