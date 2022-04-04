<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller{

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
    $data['menu']= array('pa'=>'identitas');
    $where=array();
    $data['DataArtikel'] = $this->ProsesDB->getData('tprofil_md', $where)->result();
    $this->load->view('v_admin/layout/header', $data);
    $this->load->view('v_admin/layout/vdataprofil2', $data);
    $this->load->view('v_admin/layout/footer');
    $this->session->set_userdata('menu','profil');
  }

  function tambah()
  {
    $data['menu']= array('pa'=>'tamidentitas');
    $this->load->view('v_admin/layout/header', $data);
    $this->load->view('v_admin/layout/vformprofil2');
    $this->load->view('v_admin/layout/footer');
    $this->session->set_userdata('menu','identitas');
  }
  function hapus($id){
    $where = array(
    'IDPROFIL' => $id
  );
    $this->ProsesDB->delete_data($where, 'tprofil_md');

              $this->session->set_flashdata('data','Data Berhasil Dihapus.'); 
             redirect('webadmsekolah/profil');
  }
  function simpan()
  {
              
              $nama =$this->input->post('nama');
              $profil =$this->input->post('profil');

              $datSlede = array(
              'NAMAPROFIL' =>$nama,
              'DATAPROFIL' =>$profil,
              'STATUSPROFIL' =>1
            );
            

             $this->ProsesDB->insert_data($datSlede, 'tprofil_md');
              $this->session->set_flashdata('data','Data Berhasil Ditambahkan.'); 
             redirect('webadmsekolah/profil/tambah');
         
  }

  function simpanedit()
  {
    $dt = $this->input->post('data[]');
    $id = $this->input->post('id[]');
    $jml = $this->input->post('j');
    for ($i=0; $i < $jml; $i++) { 

      $where = array(
        'IDPROFIL' => $id[$i]
      );

      $data = array(
        'DATAPROFIL' => $dt[$i]
      );
        $this->ProsesDB->update_data($where, $data, 'tprofil_md');
      //echo $id[$i];
    }
              $this->session->set_flashdata('data','Data Berhasil Dirubah.'); 
             redirect('webadmsekolah/profil');
    //echo $this->input->post('j');
              
     
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
