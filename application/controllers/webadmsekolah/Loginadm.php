<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Loginadm extends CI_Controller{

  

  public function __construct()
  {
    parent::__construct();
     $this->load->model('ProsesDB');
    // load form and url helpers
    $this->load->helper(array('form', 'url'));
     
    // load form_validation library
    $this->load->library('form_validation');
  }

  function index()
  {
    
    $this->load->view('halaman/layout/mm');
  }

  function ceklogin()
  {
    $username = $this->input->post('username');
    $password = md5($this->input->post('password'));
    if($this->ProsesDB->login_user($username,$password))
    {
      
      redirect('beranda');
    }
    else
    {
      $this->session->set_flashdata('error','Username & Password salah');
      redirect('loginadm');
      //echo "string";
    }
  }
    public function logout()
    {
        // hancurkan semua sesi
        $this->session->sess_destroy();
      redirect(base_url('loginadm'));
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
