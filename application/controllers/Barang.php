<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * |==============================================================|
 * | Mohon Jangan Merubah Informasin Ini:                         |
 * |--------------------------------------------------------------|
 * | Author          : MediaDigital                               |
 * | Email           : admin@mediadigitalofficial.com             |
 * | Filename        : Berita.php                                 |
 * | Instagram       : @mediadigital_                             |
 * | Website         : http://www.mediadigitalofficial.com        |
 * |==============================================================|
 */

class Barang extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Barang_model');
  }

  function index()
  {
    $data['dataBarang'] = $this->Barang_model->get_all();
    $this->load->view('barang/barang_list', $data);
  }

  function cetak_barang()
  {
    $data['dataBarang'] = $this->Barang_model->get_all();
    $this->load->library('pdf');
    $this->pdf->setPaper('A4','potrait');
    $this->pdf->filename = "barang";
    $this->pdf->load_view('cetak/barang',$data);
  }

}
