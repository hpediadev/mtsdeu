<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model("ProsesDB");
    if($this->ProsesDB->isNotLogin()) redirect(site_url('loginadm'));
  }

  function index()
  {
    $data['menu']= array('pa'=>'beranda');
    $this->load->view('v_admin/layout/header', $data);
    $this->load->view('v_admin/layout/isi');
    $this->load->view('v_admin/layout/footer');
  }


  // function cetak_barang()
  // {
  //   $data['dataBarang'] = $this->Barang_model->get_all();
  //   $this->load->library('pdf');
  //   $this->pdf->setPaper('A4','potrait');
  //   $this->pdf->filename = "barang";
  //   $this->pdf->load_view('cetak/barang',$data);
  // }

}
