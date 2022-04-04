<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller{

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
    $data['menu']= array('pa'=>'guru');
    $where = array();
    $data['data'] = $this->ProsesDB->getData('tguru_md', $where)->result();
    $this->load->view('v_admin/layout/header', $data);
    $this->load->view('v_admin/layout/vdataguru', $data);
    $this->load->view('v_admin/layout/footer');
  }

  function tambah()
  {
    $data['menu']= array('pa'=>'guru');
    $this->load->view('v_admin/layout/header', $data);
    $this->load->view('v_admin/layout/vformguru');
    $this->load->view('v_admin/layout/footer');
  }

  function simpan()
  {
    $ik='';
    $nig = $this->input->post('nig');
    $nama = $this->input->post('nama');
    $jk = $this->input->post('jk');
    $jbt = $this->input->post('jbt');
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
      if($tipe_file == "image/jpg" OR $tipe_file == "image/jpeg"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
        // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
        if($ukuran_file <= 1000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
          // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
          // Proses upload
          if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload atau tidak
            // Jika gambar berhasil diupload, Lakukan :

              $periode = $this->input->post('periode');
              $datSlede = array(
              'NAMAGURU' => $nama,
              'NIG' => $nig,
              'JKGURU' => $jk,
              'JABATAN' => $jbt,
              'GAMBARGURU' => $namagb,
              'STATUSGURU' =>1
            );
            

             $this->ProsesDB->insert_data($datSlede, 'tguru_md');
              $this->session->set_flashdata('data','Data Berhasil Ditambahkan.'); 
             redirect('webadmsekolah/guru');
          }
        }
        else
          $this->session->set_flashdata('gagal','Data Terlalu Besar'); 
             redirect('webadmsekolah/guru');
      }
        else
         $this->session->set_flashdata('gagal','Data Harus Bentuk jpg/jpeg'); 
             redirect('webadmsekolah/guru');
  }
  function edit($id)
  {
    $data['menu']= array('pa'=>'guru');
    $where = array('IDGURU' => $id);
    $data['data'] = $this->ProsesDB->getData('tguru_md', $where);
    $this->load->view('v_admin/layout/header', $data);
    $this->load->view('v_admin/layout/vformeditguru', $data);
    $this->load->view('v_admin/layout/footer');
  }

  function simpanedit()
  {
    $ik='';
    $id = $this->input->post('id');
    $where = array('IDGURU'=> $id);
    $nig = $this->input->post('nig');
    $nama = $this->input->post('nama');
    $jk = $this->input->post('jk');
    $jbt = $this->input->post('jbt');
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
       $periode = $this->input->post('periode');
              $datSlede = array(
              'NAMAGURU' => $nama,
              'NIG' => $nig,
              'JKGURU' => $jk,
              'JABATAN' => $jbt,
              'STATUSGURU' =>1
            );
            

             $this->ProsesDB->update_data($where, $datSlede, 'tguru_md');
              $this->session->set_flashdata('data','Data Berhasil Ditambahkan.'); 
             redirect('webadmsekolah/guru');
     }else{
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

              $periode = $this->input->post('periode');
              $datSlede = array(
              'NAMAGURU' => $nama,
              'NIG' => $nig,
              'JKGURU' => $jk,
              'JABATAN' => $jbt,
              'GAMBARGURU' => $namagb,
              'STATUSGURU' =>1
            );
            

             $this->ProsesDB->update_data($where, $datSlede, 'tguru_md');
              $this->session->set_flashdata('data','Data Berhasil Ditambahkan.'); 
             redirect('webadmsekolah/guru');
          }
        }
        else
          $this->session->set_flashdata('gagal','Data Terlalu Besar'); 
             redirect('webadmsekolah/guru');
      }
        else
         $this->session->set_flashdata('gagal','Data Harus Bentuk jpg/jpeg'); 
             redirect('webadmsekolah/guru');
          }
        }
function lihat($id)
  {
    $data['menu']= array('pa'=>'guru');
    // $id = $this->uri->segment(4);
    $data['struktur'] = $this->ProsesDB->get_struktur_id($id);
    $this->load->view('v_admin/layout/header', $data);
    $this->load->view('v_admin/layout/vlihatstruktur', $data);
    $this->load->view('v_admin/layout/footer');
  }

  function hapus($id)
  {


     $where = array(
    'IDSTRUKTUR' => $id
  );
    $this->ProsesDB->delete_data($where, 'tstruktur_md');

              $this->session->set_flashdata('data','Data Berhasil Dihapus.'); 
             redirect('webadmsekolah/struktur');

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
