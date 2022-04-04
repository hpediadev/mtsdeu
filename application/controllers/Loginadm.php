<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Loginadm extends CI_Controller{

  

  public function __construct()
  {
    parent::__construct();
     $this->load->model('ProsesDB');
    // load form and url helpers
    $this->load->helper(array('form', 'url'));
        $this->load->library('session');
     
    // load form_validation library
    $this->load->library('form_validation');
  }

  function index()
  {
    $this->load->view('halaman/layout/vlogin');
  }



  // function ceklogin()
  // {
  //   $username = $this->input->post('username');
  //   $password = $this->input->post('password');

  //   if($this->ProsesDB->login_user($username,$password))
  //   {
  //       echo $this->session->userdata('NAMA');


  //     echo "sukses";     //redirect('beranda');
  //   }
  //   else
  //   {
  //     $this->session->set_flashdata('error','Username & Password salah');
  //     //redirect('loginadm');
  //     echo "Gagal";
  //   }
  // }
    public function ceklogin()
    {
      $post = htmlspecialchars($this->input->post('username'));
      if(!empty($post)){
        if ($this->ProsesDB->doLogin($post)){
              redirect(site_url('webadmsekolah'));
           }
           $this->session->set_flashdata('error','Username & Password ss salah');
         // redirect(site_url('loginadm'));
      }
      else{
        
          $this->session->set_flashdata('error','Username & Password salah');
         redirect(site_url('loginadm'));
      }
      // if ($this->input->post()) {
      //     $u = explode("@", $this->input->post('username'));
      //     if(empty($u[1])){
      //     $this->session->set_flashdata('error','Username & Password salah');
      //       redirect(site_url('loginadm'));
      //   }
      //   else if(!empty($u[1]) && $u[1]=='smkpbwaru.sch.id'){
      //     $id=$u[0];
      //     if ($this->ProsesDB->doLogin($id)){
      //         redirect(site_url('webadmsekolah'));
      //      }
      //      $this->session->set_flashdata('error','Username & Password salah');
      //    redirect(site_url('loginadm'));
      //   }
      //   else{
      //     $this->session->set_flashdata('error','Username & Password salah');
      //    redirect(site_url('loginadm'));

      //   }

      // }
      // else
      // {
      //   $this->session->set_flashdata('error','Username & Password salah');
      //    redirect(site_url('loginadm'));
      // }

    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url('loginadm'));
    }

    public function test()
    {
        $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode(array('foo' => 'bar')));
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
