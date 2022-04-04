d<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Install extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
   // $this->load->model('Barang_model');
  }

  function index()
  {
    $this->load->view('coba');
  }

  function simpan()
  {
    $this->form_validation->set_rules('nama','Nama','required');
    $this->form_validation->set_rules('email','Email','required');
    $this->form_validation->set_rules('konfir_email','Konfirmasi Email','required');

     // basic required field
        $this->form_validation->set_rules('text_field', 'Text Field One', 'required');
         
        // basic required field with minimum length
        $this->form_validation->set_rules('min_text_field', 'Text Field Two', 'required|min_length[8]');
         
        // basic required field with maximum length
        $this->form_validation->set_rules('max_text_field', 'Text Field Three', 'required|max_length[20]');
         
        // basic required field with exact length
        $this->form_validation->set_rules('exact_text_field', 'Text Field Four', 'required|exact_length[12]');
         
        // basic required field but alphabets only
        $this->form_validation->set_rules('alphabets_text_field', 'Text Field Five', 'required|alpha');
         
        // basic required field but alphanumeric only
        $this->form_validation->set_rules('alphanumeric_text_field', 'Text Field Six', 'required|alpha_numeric');
         
        // basic email field with email validation
        $this->form_validation->set_rules('valid_email_field', 'Email Field', 'required|valid_email');
         
        // password field with confirmation field matching
        $this->form_validation->set_rules('password_field', 'Password One', 'required');
        $this->form_validation->set_rules('password_confirmation_field', 'Password Confirmation Field', 'required|matches[password_field]');
         
        // basic required field with IPv4 validation
        $this->form_validation->set_rules('valid_ip_field', 'Valid IP Field', 'required|valid_ip[ipv4]');
         
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('halaman/layout/vinstalasi');
        }
        else
        {
            // load success template...
            echo "It's all Good!";
        }
  //   $this->form_validation->set_rules('text_field', 'Text Field One', 'required');
  //   echo "string";
  //   $img = $this->input->post('ops');
  //   echo $img;
  //     echo $this->input->post('usr');
  //   // $this->load->library('pdf');
  //   // $this->pdf->setPaper('A4','potrait');
  //   // $this->pdf->filename = "barang";
  //   // $this->pdf->load_view('coba');
  // }

  function tes()
  {
    echo "siusiu";
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
