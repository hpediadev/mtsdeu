<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saran extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model("ProsesDB");
    if($this->ProsesDB->isNotLogin()) redirect(site_url('loginadm'));
    if($this->session->userdata("L")!=1)
    header('Location: '.base_url('webadmsekolah'));
  }

  function index()
  {
    header('Location:'.base_url('webadmsekolah/saran/id'));
  }

  function id()
  {
    $data['menu']= array('pa'=>'saran');
    $id= $from = $this->uri->segment(4);
    $data['DataSaran'] = $this->ProsesDB->get_saran($id);
    $this->load->view('v_admin/layout/header', $data);
    $this->load->view('v_admin/layout/vdatasaran', $data);
    $this->load->view('v_admin/layout/footer');
  }

  function hapus($id)
  {


    $where = array(
      'IDSARAN' => $id
    );
    $data = array(
      'STATUSSARAN'=>2
      );
    $this->ProsesDB->update_data($where, $data, 'tsaran_md');

    $this->session->set_flashdata('data','Data Berhasil Dihapus.'); 
    redirect('webadmsekolah/saran');

  }
  
}
