<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Struktur extends CI_Controller{

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
    $data['menu']= array('pa'=>'struktur');
    $id='';
    $where=array();
    $this->db->order_by('IDSTRUKTUR','DESC');
    $data['dataStruktur'] = $this->ProsesDB->getData('tstruktur_md', $where)->result();
    $this->load->view('v_admin/layout/header', $data);
    $this->load->view('v_admin/layout/vdatastruktur', $data);
    $this->load->view('v_admin/layout/footer');
  }

  function tambah()
  {
    $data['menu']= array('pa'=>'struktur');
    $this->load->view('v_admin/layout/header', $data);
    $this->load->view('v_admin/layout/vformstruktur');
    $this->load->view('v_admin/layout/footer');
  }

  function simpan()
  {
    $ik='';

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
      if($tipe_file == "image/jpg" OR $tipe_file == "image/jpeg"  OR $tipe_file == "image/png"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
        // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
        if($ukuran_file <= 1000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
          // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
          // Proses upload
          if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload atau tidak
            // Jika gambar berhasil diupload, Lakukan :

              $periode = $this->input->post('periode');
              $datSlede = array(
              'PERIODE' => $periode,
              'STRUKTUR' => $namagb,
              'STATUSSTRUKTUR' =>1
            );
              
              $data = array('STATUSSTRUKTUR'=>0);
              $where = array();
              $this->ProsesDB->update_data($where, $data, 'tstruktur_md');

             $this->ProsesDB->insert_data($datSlede, 'tstruktur_md');
              $this->session->set_flashdata('data','Data Berhasil Ditambahkan.'); 
             redirect('webadmsekolah/struktur');
          }
        }
        else
          $this->session->set_flashdata('gagal','Gambar Terlalu Besar, Gambar Maksimal berukuran 1MB'); 
             redirect('webadmsekolah/struktur');
      }
        else
         $this->session->set_flashdata('gagal','Data Harus Bentuk jpg|jpeg|png'); 
             redirect('webadmsekolah/struktur');
  }
  function edit($id)
  {
    $data['menu']= array('pa'=>'struktur');
    $where=array('IDSTRUKTUR'=> $id);
    $data['struktur'] = $this->ProsesDB->getData('tstruktur_md',$where)->result();
    $this->load->view('v_admin/layout/header', $data);
    $this->load->view('v_admin/layout/vformeditstruktur', $data);
    $this->load->view('v_admin/layout/footer');
  }

  function simpanedit()
  {

    $ik='';

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
      if(empty($nama_file)){
        $periode = $this->input->post('periode');
              $datSlede = array(
              'PERIODE' => $periode
            );
              $where = array('IDSTRUKTUR' => $this->input->post('id'));
             $this->ProsesDB->update_data($where, $datSlede, 'tstruktur_md');
              $this->session->set_flashdata('data','Data Berhasil Ditambahkan.'); 
             redirect('webadmsekolah/struktur');
      }else{

      if($tipe_file == "image/jpg" OR $tipe_file == "image/jpeg" OR $tipe_file == "image/png"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
        // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
        if($ukuran_file <= 1000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
          // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
          // Proses upload
          if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload atau tidak
            // Jika gambar berhasil diupload, Lakukan :

              $periode = $this->input->post('periode');
              $datSlede = array(
              'PERIODE' => $periode,
              'STRUKTUR' => $namagb
            );
            

              $where = array('IDSTRUKTUR' => $this->input->post('id'));
             $this->ProsesDB->update_data($where, $datSlede, 'tstruktur_md');
              $this->session->set_flashdata('data','Data Berhasil Ditambahkan.'); 
             redirect('webadmsekolah/struktur');
          }
        }
        else
          $this->session->set_flashdata('gagal','Data Terlalu Besar'); 
             redirect('webadmsekolah/struktur');
      }
        else
         $this->session->set_flashdata('gagal','Data Harus Bentuk jpg|jpeg|png'); 
             redirect('webadmsekolah/struktur');
            }
          }
function lihat($id)
  {
    $data['menu']= array('pa'=>'struktur');
    $where=array('IDSTRUKTUR'=> $id);
    $data['struktur'] = $this->ProsesDB->getData('tstruktur_md',$where)->result();
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
