<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slide extends CI_Controller{

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
    $data['menu']= array('pa'=>'slide');
    $id='';
    $data['DataSlide'] = $this->ProsesDB->get_Slide($id);
    $this->load->view('v_admin/layout/header', $data);
    $this->load->view('v_admin/layout/vdataslide', $data);
    $this->load->view('v_admin/layout/footer');
  }

  function tambah()
  {
    $data['menu']= array('pa'=>'slide');
    $this->load->view('v_admin/layout/header', $data);
    $this->load->view('v_admin/layout/vformslide');
    $this->load->view('v_admin/layout/footer');
  }

  function simpanslide()
  {
     $nama_file = $_FILES['gambar']['name'];
      $ukuran_file = $_FILES['gambar']['size'];
      $tipe_file = $_FILES['gambar']['type'];
      $tmp_file = $_FILES['gambar']['tmp_name'];
      $namagb = ''.date('Y-m-d H-i-s').'-foto-slide.jpg';
      $path = "uploads/".$namagb;
      if($tipe_file == "image/jpg" OR $tipe_file == "image/jpeg"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
        // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
        if($ukuran_file <= 1000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
          // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
          // Proses upload
          if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload atau tidak
            // Jika gambar berhasil diupload, Lakukan :

              $judul = $this->input->post('judul');

              $datSlede = array(
              'JUDUL' => $judul,
              'GAMBAR' => $namagb,
              'STATUSSLIDE' =>1,
              'TANGGALSLIDE' => date('Y-m-d H-i-s')
            );


              $this->ProsesDB->insert_data($datSlede, 'tslide_md');
              $this->session->set_flashdata('data','Data Berhasil Ditambahkan.'); 
             redirect('webadmsekolah/slide');
          }
        }
        else
          echo "lebih ";
      }
        else
          echo "jpg ".$tipe_file;
  }

  function edit()
  {
    $data['menu']= array('pa'=>'slide');
    $id = $this->uri->segment(4);
    $data['slide'] = $this->ProsesDB->get_Slide_id($id);
    $this->load->view('v_admin/layout/header', $data);
    $this->load->view('v_admin/layout/veditslide', $data);
    $this->load->view('v_admin/layout/footer');
  }

  function simpanedit()
  {
    date_default_timezone_set("Asia/Jakarta");
    if(empty($_FILES['gambar']['name'])){
      
        $judul = $this->input->post('judul');
        $id = $this->input->post('id');

            $where = array(
              'IDSLIDE' => $id
            );

            $datSlede = array(
            'JUDUL' => $judul,
            'STATUSSLIDE' =>1,
            'TANGGALSLIDE' => date('Y-m-d H-i-s')
          );
        $this->ProsesDB->update_data($where, $datSlede, 'tslide_md');
              $this->session->set_flashdata('rubah','Data Berhasil Dirubah.'); 
             redirect('webadmsekolah/slide');
      }
      else
      {

          $nama_file = $_FILES['gambar']['name'];
          $ukuran_file = $_FILES['gambar']['size'];
          $tipe_file = $_FILES['gambar']['type'];
          $tmp_file = $_FILES['gambar']['tmp_name'];
          $namagb = ''.date('Y-m-d H-i-s').'-foto-slide.jpg';
          $path = "uploads/".$namagb;
          if($tipe_file == "image/jpg" OR $tipe_file == "image/jpeg" OR $tipe_file == "image/png"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
            // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
            if($ukuran_file <= 1000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
              // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
              // Proses upload
              if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload atau tidak
                // Jika gambar berhasil diupload, Lakukan :
                $judul = $this->input->post('judul');
                $id = $this->input->post('id');

                    $where = array(
                      'IDSLIDE' => $id
                    );

                  $datSlede = array(
                  'JUDUL' => $judul,
                  'GAMBAR' => $namagb,
                  'STATUSSLIDE' =>1,
                  'TANGGALSLIDE' => date('Y-m-d H-i-s')
                );
              $this->ProsesDB->update_data($where, $datSlede, 'tslide_md'); 
              $logol = $this->input->post('gambarasli');
             if(!empty($logol)){
                unlink('uploads/'.$this->input->post('gambarasli'));
             }
              $this->session->set_flashdata('rubah','Data Berhasil Dirubah.'); 
             redirect('webadmsekolah/slide');
              }
            }
          }
          else{

              $this->session->set_flashdata('rubah','Format Tida Dizinkan, Hanya JPG|JPEG|PNG'); 
             redirect('webadmsekolah/slide');
          }
      }
  }


  function aksi()
  {
    $id = $this->uri->segment(4);

     $where = array(
    'IDSLIDE' => $id
  );
    $this->ProsesDB->delete_data($where, 'tslide_md');
unlink('uploads/'.$this->uri->segment(5));
              $this->session->set_flashdata('data','Data Berhasil Dihapus.'); 
             redirect('webadmsekolah/slide');

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
