<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sejarah extends CI_Controller{

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
    $data['menu']= array('pa'=>'sejarah');
    $id='';
    $data['DataArtikel'] = $this->ProsesDB->get_sejarah($id);
    $this->load->view('v_admin/layout/header', $data);
    $this->load->view('v_admin/layout/vdatasejarah', $data);
    $this->load->view('v_admin/layout/footer');
  }

  function tambah()
  {
    $data['menu']= array('pa'=>'sejarah');
    $this->load->view('v_admin/layout/header', $data);
    $this->load->view('v_admin/layout/vformsejarah');
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
      if($tipe_file == "image/jpg" OR $tipe_file == "image/jpeg"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
        // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
        if($ukuran_file <= 1000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
          // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
          // Proses upload
          if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload atau tidak
            // Jika gambar berhasil diupload, Lakukan :

              $judul = $this->input->post('judul');
              $artikel =$this->input->post('art');

              $datSlede = array(
              'JUDUL' => $judul,
              'GAMBARSEJARAH' => $namagb,
              // 'URAIANSEJARAH' => str_replace('</p>','</p><br>',str_replace('<p>','<p align="justify">',str_replace('</blockquote>','</q></blockquote>',str_replace('<blockquote>','<blockquote><q>',$artikel)))),
              'URAIANSEJARAH' => $artikel,
              'STATUSSEJARAH' =>1
            );
            

             $this->ProsesDB->insert_data($datSlede, 'tsejarah_md');
              $this->session->set_flashdata('data','Data Berhasil Ditambahkan.'); 
             redirect('webadmsekolah/sejarah');
          }
        }
        else
         {
         $this->session->set_flashdata('besar','Uluran gambar terlalu besar.'); 
             redirect('webadmsekolah/sejarah');
           }
      }
        else{
          $this->session->set_flashdata('besar','Format Gambar Harus jpg.'); 
             redirect('webadmsekolah/sejarah');
           }
  }

  function edit($id)
  {
    $data['menu']= array('pa'=>'sejarah');
    $id='';
    $data['DataArtikel'] = $this->ProsesDB->get_sejarah($id);
    $this->load->view('v_admin/layout/header', $data);
    $this->load->view('v_admin/layout/vformeditsejarah',$data);
    $this->load->view('v_admin/layout/footer');
  }

  function hapus($id)
  {

    $where = array('IDSEJARAH'=> $id);
    $sql = $this->ProsesDB->delete_data($where, 'tsejarah_md');
    if($sql >0){
        $this->session->set_flashdata('rubah','Data Berhasil Dihapus.'); 
             redirect('webadmsekolah/sejarah');
    }else{
        $this->session->set_flashdata('gagal','Data Gagal Dihapus'); 
             redirect('webadmsekolah/sejarah');
    }
  }

  function simpanedit()
  {
    $ik='';

              $judul = $this->input->post('judul');
              $artikel =$this->input->post('art');

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
    if(empty($_FILES['gambar']['name'])){
      $datSlede = array(
      'JUDUL' => $judul,
      // 'URAIANSEJARAH' => str_replace('</p>','</p><br>',str_replace('<p>','<p align="justify">',str_replace('</blockquote>','</q></blockquote>',str_replace('<blockquote>','<blockquote><q>',$artikel)))),
      'URAIANSEJARAH' => $artikel,
      'STATUSSEJARAH' =>1
      );

      $where = array(
        'IDSEJARAH' => $this->input->post('idsejarah')
      );


      $this->ProsesDB->update_data($where, $datSlede, 'tsejarah_md');
      $this->session->set_flashdata('data','Data Berhasil Ditambahkan.'); 
      redirect('webadmsekolah/sejarah');    
    } else {
      // code...
    
    
     $nama_file = $_FILES['gambar']['name'];
      $ukuran_file = $_FILES['gambar']['size'];
      $tipe_file = $_FILES['gambar']['type'];
      $tmp_file = $_FILES['gambar']['tmp_name'];
      $namagb = ''.date('Y-m-d H-i-s').'-foto-slide.jpg';
      $path = "uploads/artikel/".$namagb;
      if($tipe_file == "image/jpg" OR $tipe_file == "image/jpeg"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
        // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
        if($ukuran_file <= 5000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
          // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
          // Proses upload
          if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload atau tidak
            // Jika gambar berhasil diupload, Lakukan :


              $datSlede = array(
              'JUDUL' => $judul,
              'GAMBARSEJARAH' => $namagb,
              // 'URAIANSEJARAH' => str_replace('</p>','</p><br>',str_replace('<p>','<p align="justify">',str_replace('</blockquote>','</q></blockquote>',str_replace('<blockquote>','<blockquote><q>',$artikel)))),
              'URAIANSEJARAH' => $artikel,
              'STATUSSEJARAH' =>1
            );

              $where = array(
                'IDSEJARAH' => $this->input->post('idsejarah')
              );
            

             $this->ProsesDB->update_data($where, $datSlede, 'tsejarah_md');
              $this->session->set_flashdata('data','Data Berhasil Ditambahkan.'); 
             redirect('webadmsekolah/sejarah');
          }
        }
        else
         {
         $this->session->set_flashdata('besar','Uluran gambar terlalu besar.'); 
             redirect('webadmsekolah/sejarah');
           }
      }
        else{
          $this->session->set_flashdata('gagal','Format Gambar Harus jpg.'); 
             redirect('webadmsekolah/sejarah');
           }
  }
}
}
