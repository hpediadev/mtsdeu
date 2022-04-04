<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ekskul extends CI_Controller{

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
    $data['menu']= array('pa'=>'ekskul');
    $id='';
    $where = array();
    $data['data'] = $this->ProsesDB->getData('textra_md', $where);
    $this->load->view('v_admin/layout/header', $data);
    $this->load->view('v_admin/layout/vdataekskul', $data);
    $this->load->view('v_admin/layout/footer');
  }

  function tambah()
  {
    $data['menu']= array('pa'=>'ekskul');
    $this->load->view('v_admin/layout/header', $data);
    $this->load->view('v_admin/layout/vformekskul');
    $this->load->view('v_admin/layout/footer');
  }
  function edit($id)
  {
    $data['menu']= array('pa'=>'ekskul');
    $where = array('IDEXTRA'=> $id);
    $data['data'] = $this->ProsesDB->getData('textra_md', $where);
    $this->load->view('v_admin/layout/header', $data);
    $this->load->view('v_admin/layout/vformeditekskul', $data);
    $this->load->view('v_admin/layout/footer');
  }
  function lihat($id)
  {
    $data['menu']= array('pa'=>'ekskul');
    $where = array('IDEXTRA'=> $id);
    $data['data'] = $this->ProsesDB->getData('textra_md', $where)->result();
    $this->load->view('v_admin/layout/header', $data);
    $this->load->view('v_admin/layout/vlihatextra', $data);
    $this->load->view('v_admin/layout/footer');
  }
  function aksi($id)
  {
    $where = array('IDEXTRA'=> $id);
    $sql = $this->ProsesDB->delete_data($where, 'textra_md');
    if($sql >0){
        $this->session->set_flashdata('rubah','Data Jurusan Berhasil Dihapus.'); 
             redirect('webadmsekolah/ekskul');
    }else{
        $this->session->set_flashdata('gagal','Hapus Jurusan Gagal'); 
             redirect('webadmsekolah/ekskul');
    }
  }

  function simpan()
  {
    $ik='';

    $us = $this->session->userdata("U");
    $query = $this->db->order_by("IDARTIKEL", "DESC");
    $query = $this->db->limit(1);
    $query = $this->db->get('tartikel_md');
    foreach ($query->result() as $Y) {
      $ik = $Y->IDARTIKEL;
      //echo $ik;
    }
    $ik++;
    if(empty($ik)) 
    {
      $ik=1;
    }

     $nama_file = $_FILES['gambar']['name'];
      $ukuran_file = $_FILES['gambar']['size'];
      $tipe_file = $_FILES['gambar']['type'];
      $tmp_file = $_FILES['gambar']['tmp_name'];
      $namagb = ''.date('Y-m-d H-i-s').'-foto-slide.jpg';
      $path = "uploads/artikel/".$namagb;
      if($tipe_file == "image/jpg" OR $tipe_file == "image/jpeg" OR $tipe_file == "image/png"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
        // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
        if($ukuran_file <= 1000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
          // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
          // Proses upload
          if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload atau tidak
            // Jika gambar berhasil diupload, Lakukan :

              
            $penjang =$this->input->post('panjang');
            $pendek = strtolower($this->input->post('pendek'));
            $keterangan = $this->input->post('keterangan');

              $datSlede = array(
                'USERNAME'=> $us,
              'IDEXTRA' => $pendek,
              'NAMAEXTRA' => $penjang,
              // 'URAIANEXTRA' => str_replace('</p>','</p><br>',str_replace('<p>','<p align="justify">',str_replace('</blockquote>','</q></blockquote>',str_replace('<blockquote>','<blockquote><q>',$keterangan)))),
              'URAIANEXTRA'=>$keterangan,
              'GAMBAREXTRA' => $namagb,
              'STATUSEXTRA' =>1
            );
             // echo $ik;

             $this->ProsesDB->insert_data($datSlede, 'textra_md');
              $this->session->set_flashdata('data','Data Berhasil Ditambahkan.'); 
             redirect('webadmsekolah/ekskul');
          }
        }
        else
              $this->session->set_flashdata('gagal','File Terlalu Besar.'); 
             redirect('webadmsekolah/ekskul');
      }
        else
              $this->session->set_flashdata('gagal','File Harus Format jpg'); 
             redirect('webadmsekolah/ekskul');
  }
  function simpanedit(){
       $ik='';

            $penjang =$this->input->post('panjang');
            $pendek = strtolower($this->input->post('pendek'));
            $keterangan = $this->input->post('keterangan');
            $id = $this->input->post('id');
              $where = array('IDEXTRA'=> $id);

    $us = $this->session->userdata("U");
    $query = $this->db->order_by("IDARTIKEL", "DESC");
    $query = $this->db->limit(1);
    $query = $this->db->get('tartikel_md');
    foreach ($query->result() as $Y) {
      $ik = $Y->IDARTIKEL;
      //echo $ik;
    }
    $ik++;
    if(empty($ik)) 
    {
      $ik=1;
    }

     $nama_file = $_FILES['gambar']['name'];

     if(empty($nama_file)){
        $datSlede = array(
                'USERNAME'=> $us,
              'IDEXTRA' => $pendek,
              'NAMAEXTRA' => $penjang,
              // 'URAIANEXTRA' => str_replace('</p>','</p><br>',str_replace('<p>','<p align="justify">',str_replace('</blockquote>','</q></blockquote>',str_replace('<blockquote>','<blockquote><q>',$keterangan)))),
              'URAIANEXTRA'=>$keterangan,
              'STATUSEXTRA' =>1
            );
             // echo $ik;
              // $where = array('IDEXTRA'=> $id);
             $this->ProsesDB->update_data($where,$datSlede, 'textra_md');
              $this->session->set_flashdata('data','Data Berhasil Ditambahkan.7686'); 
             redirect('webadmsekolah/ekskul');
     }
     else{
      $ukuran_file = $_FILES['gambar']['size'];
      $tipe_file = $_FILES['gambar']['type'];
      $tmp_file = $_FILES['gambar']['tmp_name'];
      $namagb = ''.date('Y-m-d H-i-s').'-foto-slide.jpg';
      $path = "uploads/artikel/".$namagb;


      if($tipe_file == "image/jpg" OR $tipe_file == "image/jpeg" OR $tipe_file == "image/png"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
        // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
        if($ukuran_file <= 1000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
          // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
          // Proses upload
          if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload atau tidak
            // Jika gambar berhasil diupload, Lakukan :

              

              $datSlede = array(
                'USERNAME'=> $us,
              'IDEXTRA' => $pendek,
              'NAMAEXTRA' => $penjang,
              // 'URAIANEXTRA' => str_replace('</p>','</p><br>',str_replace('<p>','<p align="justify">',str_replace('</blockquote>','</q></blockquote>',str_replace('<blockquote>','<blockquote><q>',$keterangan)))),
              'URAIANEXTRA'=>$keterangan,
              'GAMBAREXTRA' => $namagb,
              'STATUSEXTRA' =>1
            );
             // echo $ik;
              // $where = array('IDEXTRA'-> $id);
             $this->ProsesDB->update_data($where,$datSlede, 'textra_md');
              $this->session->set_flashdata('data','Data Berhasil Ditambahkan.'); 
             // redirect('webadmsekolah/ekskul');
          }
        }
        else
              $this->session->set_flashdata('gagal','File Terlalu Besar.'); 
             redirect('webadmsekolah/ekskul');
      }
        else
              $this->session->set_flashdata('gagal','File Harus Format jpg'); 
             redirect('webadmsekolah/ekskul');
      }
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
