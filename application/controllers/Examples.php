<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Examples extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}

	public function _example_output($output = null)
	{
		$this->load->view('example.php',(array)$output);
	}

	public function offices()
	{
		$output = $this->grocery_crud->render();

		$this->_example_output($output);
	}

	public function index()
	{
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
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
			$this->_example_output($output);
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
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
			$this->_example_output($output);
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

	public function jenis()
	{
		try{
			$crud = new grocery_CRUD();
			$crud->set_theme('datatables');
			$crud->set_table('jenis');
			$crud->set_subject('Jenis');
			$crud->required_fields('id_jenis', 'nama_jenis');
			$output = $crud->render();
			$this->_example_output($output);
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

	public function keranjang()
	{
		try{
			$crud = new grocery_CRUD();
			$crud->set_theme('datatables');
			$crud->set_table('keranjang');
			$crud->set_subject('Keranjang');
			$crud->required_fields('id_keranjang', 'id_belanja', 'jumlah', 'harga');
			$output = $crud->render();
			$this->_example_output($output);
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

	public function pelanggan()
	{
		try{
			$crud = new grocery_CRUD();
			$crud->set_theme('datatables');
			$crud->set_table('pelanggan');
			$crud->set_subject('Pelanggan');
			$crud->required_fields('id_plg', 'id_reward', 'nama_plg', 'username_plg', 'email_plg', 'password_plg', 'kontak', 'alamat', 'provinsi', 'kota', 'kode_pos');
			$output = $crud->render();
			$this->_example_output($output);
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

	public function produk()
	{
		try{
			$crud = new grocery_CRUD();
			$crud->set_theme('datatables');
			$crud->set_table('produk');
			$crud->set_subject('Produk');
			$crud->required_fields('id_produk', 'nama_produk');
			$output = $crud->render();
			$this->_example_output($output);
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

	public function reward()
	{
		try{
			$crud = new grocery_CRUD();
			$crud->set_theme('datatables');
			$crud->set_table('reward');
			$crud->set_subject('Reward');
			$crud->required_fields('id_reward', 'nama_reward');
			$output = $crud->render();
			$this->_example_output($output);
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

	public function riwayat()
	{
		try{
			$crud = new grocery_CRUD();
			$crud->set_theme('datatables');
			$crud->set_table('riwayat');
			$crud->set_subject('Riwayat');
			$crud->required_fields('no_riwayat', 'id_plg', 'no_transaksi', 'jml_barang_dibeli');
			$output = $crud->render();
			$this->_example_output($output);
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

	public function transaksi()
	{
		try{
			$crud = new grocery_CRUD();
			$crud->set_theme('datatables');
			$crud->set_table('transaksi');
			$crud->set_subject('Transaksi');
			$crud->required_fields('no_transaksi', 'id_plg', 'id_keranjang', 'total_harga', 'tgl_transaksi', 'valid');
			$output = $crud->render();
			$this->_example_output($output);
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

	public function ukuran()
	{
		try{
			$crud = new grocery_CRUD();
			$crud->set_theme('datatables');
			$crud->set_table('ukuran');
			$crud->set_subject('Ukuran');
			$crud->required_fields('id_ukuran', 'mama_ukuran');
			$output = $crud->render();
			$this->_example_output($output);
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
}
