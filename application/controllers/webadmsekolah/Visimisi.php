<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visimisi extends CI_Controller{

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
    $data['menu']= array('pa'=>'visimisi');
    $id='';
    $data['DataArtikel'] = $this->ProsesDB->get_visimisi($id);
    $this->load->view('v_admin/layout/header', $data);
    $this->load->view('v_admin/layout/vdatavisimisi', $data);
    $this->load->view('v_admin/layout/footer');
  }

  function tambah()
  {
    $data['menu']= array('pa'=>'visimisi');
    $this->load->view('v_admin/layout/header', $data);
    $this->load->view('v_admin/layout/vformvisimisi');
    $this->load->view('v_admin/layout/footer');
  }

  function simpan()
  {
              $artikel =$this->input->post('art');

              $datSlede = array(
              // 'VISIMISI' => str_replace('</p>','</p><br>',str_replace('<p>','<p align="justify">',str_replace('</blockquote>','</q></blockquote>',str_replace('<blockquote>','<blockquote><q>',$artikel)))),
              'VISIMISI' => $artikel,
              'STATUSVISIMISI' =>1
            );
            

             $this->ProsesDB->insert_data($datSlede, 'tvisimisi_md');
              $this->session->set_flashdata('data','Data Berhasil Ditambahkan.'); 
             redirect('webadmsekolah/visimisi');
         
  }

  // function cetak_barang()
  // {
  //   $data['dataBarang'] = $this->Barang_model->get_all();
  //   $this->load->library('pdf');
  //   $this->pdf->setPaper('A4','potrait');
  //   $this->pdf->filename = "barang";
  //   $this->pdf->load_view('cetak/barang',$data);
  // }

  function edit()
  {
    $data['menu']= array('pa'=>'visimisi');
    $id='';
    $data['data'] = $this->ProsesDB->get_visimisi();
    $this->load->view('v_admin/layout/header', $data);
    $this->load->view('v_admin/layout/vformeditvisimisi', $data);
    $this->load->view('v_admin/layout/footer');
  }
  function simpanedit()
  {
              $artikel =$this->input->post('art');

              $datSlede = array(
              // 'VISIMISI' => str_replace('</p>','</p><br>',str_replace('<p>','<p align="justify">',str_replace('</blockquote>','</q></blockquote>',str_replace('<blockquote>','<blockquote><q>',$artikel)))),
              'VISIMISI' => $artikel,
              'STATUSVISIMISI' =>1
            );
            $where = array(
              'IDVISIMISI' => $this->input->post('id'));

             $this->ProsesDB->update_data($where, $datSlede, 'tvisimisi_md');
              $this->session->set_flashdata('data','Data Berhasil Ditambahkan.'); 
             redirect('webadmsekolah/visimisi');
         
  }
}
