<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tags extends CI_Controller{

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
    $data['menu']= array('pa'=>'tags');
    $id='';
    $data['GetData'] = $this->ProsesDB->get_tags($id);
    $this->load->view('v_admin/layout/header', $data);
    $this->load->view('v_admin/layout/vtags', $data);
    $this->load->view('v_admin/layout/footer');
  }

  function tambah()
  {
    $data['menu']= array('pa'=>'tags');
    $this->load->view('v_admin/layout/header', $data);
    $this->load->view('v_admin/layout/vformtags');
    $this->load->view('v_admin/layout/footer');
  }

  function simpantags()
  {
    $linkJ = $this->input->post('linkJ');
    $linkT =$this->input->post('linkT');
    $link =$this->input->post('link');

    $DataTags = array(
    'JUDULLINK' => $linkJ,
    'TAMPILLINK' => $linkT,
    'LINK' => $link,
    'STATUSLINK' =>1
    );

    $this->ProsesDB->insert_data($DataTags, 'ttags_md');
    $this->session->set_flashdata('data','Data Berhasil Ditambahkan.'); 
    redirect('webadmsekolah/tags');
      
  }

  function aksi()
  {
    $id = $this->uri->segment(4);

     $where = array(
    'IDTAG' => $id
  );
    $this->ProsesDB->delete_data($where, 'ttags_md');
              $this->session->set_flashdata('data','Data Berhasil Dihapus.'); 
             redirect('webadmsekolah/tags');

  }

  function edit()
  {
    $data['menu']= array('pa'=>'tags');
    $id = $this->uri->segment(4);
    $data['GetData'] = $this->ProsesDB->get_tags_id($id);
    $this->load->view('v_admin/layout/header', $data);
    $this->load->view('v_admin/layout/vformeditags', $data);
    $this->load->view('v_admin/layout/footer');
  }

  function simpan()
  {
    $linkJ = $this->input->post('linkJ');
    $linkT =$this->input->post('linkT');
    $link =$this->input->post('link');
    $id =$this->input->post('id');

    $where = array(
      'IDTAG' => $id
    );

    $DataTags = array(
    'JUDULLINK' => $linkJ,
    'TAMPILLINK' => $linkT,
    'LINK' => $link,
    'STATUSLINK' =>1
    );

    $this->ProsesDB->update_data($where, $DataTags , 'ttags_md');
    $this->session->set_flashdata('data','Data Berhasil Ditambahkan.'); 
    redirect('webadmsekolah/tags');
      
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
