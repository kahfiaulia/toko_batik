<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Model_laporan_tahunan extends CI_Model
{
    private $_table = "transaksi";

    public $no_transaksi;
    public $id_plg;
    public $id_keranjang;
    public $total_harga;
    public $tgl_transaksi;

    public function getAll()
    {
        $query = $this->db->query("SELECT no_transaksi, total_harga, id_keranjang from transaksi WHERE YEAR(tgl_transaksi) = YEAR(CURRENT_TIMESTAMP)");
        return $query -> result();
    }
}