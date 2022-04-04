<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sambutan extends CI_Controller{

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
    $data['menu']= array('pa'=>'sambutan');
    $id='';
    $data['sambutan'] = $this->ProsesDB->get_sambutan($id);
    $this->load->view('v_admin/layout/header', $data);
    $this->load->view('v_admin/layout/vdatasambutan', $data);
    $this->load->view('v_admin/layout/footer');
  }

  function tambah()
  {
    $data['menu']= array('pa'=>'sambutan');
    $this->load->view('v_admin/layout/header', $data);
    $this->load->view('v_admin/layout/vformsambutan');
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
              'GAMBAR' => $namagb,
              // 'URAIANSEJARAH' => str_replace('</p>','</p><br>',str_replace('<p>','<p align="justify">',str_replace('</blockquote>','</q></blockquote>',str_replace('<blockquote>','<blockquote><q>',$artikel)))),
              'SAMBUTAN' => $artikel,
              'STATUSSAMBUTAN' =>1
            );
            

             $this->ProsesDB->insert_data($datSlede, 'tsambutan_md');
              $this->session->set_flashdata('data','Data Berhasil Ditambahkan.'); 
             redirect('webadmsekolah/sambutan');
          }
        }
        else
         {
         $this->session->set_flashdata('besar','Uluran gambar terlalu besar.'); 
             redirect('webadmsekolah/sambutan');
           }
      }
        else{
          $this->session->set_flashdata('besar','Format Gambar Harus jpg.'); 
             redirect('webadmsekolah/sambutan');
           }
  }

  function edit($id)
  {
    $data['menu']= array('pa'=>'sambutan');
    $id='';
    $data['DataArtikel'] = $this->ProsesDB->get_sambutan($id);
    $this->load->view('v_admin/layout/header', $data);
    $this->load->view('v_admin/layout/vformeditsambutan',$data);
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
      'SAMBUTAN' => $artikel,
      'STATUSSAMBUTAN' =>1
      );

      $where = array(
        'IDS' => $this->input->post('idsambutan')
      );


      $this->ProsesDB->update_data($where, $datSlede, 'tsambutan_md');
      $this->session->set_flashdata('data','Data Berhasil Ditambahkan.'); 
      redirect('webadmsekolah/sambutan');    
    } else {
      // code...
    
    
     $nama_file = $_FILES['gambar']['name'];
      $ukuran_file = $_FILES['gambar']['size'];
      $tipe_file = $_FILES['gambar']['type'];
      $tmp_file = $_FILES['gambar']['tmp_name'];
      $namagb = ''.date('Y-m-d H-i-s').'-foto-slide.jpg';
      $path = "uploads/artikel/".$namagb;

               function compressedImage($source, $path, $quality) {

                        $info = getimagesize($source);

                        if ($info['mime'] == 'image/jpeg') 
                            $image = imagecreatefromjpeg($source);

                        elseif ($info['mime'] == 'image/gif') 
                            $image = imagecreatefromgif($source);

                        elseif ($info['mime'] == 'image/png') 
                            $image = imagecreatefrompng($source);

                        imagejpeg($image, $path, $quality);

                  }
                  // $namagb = compressedImage($_FILES['gambar']['tmp_name'],'uploads/artikel/','60%');

                        // $namagb = compress_image($tmp_file, "uploads/artikel/" . $namagb, 10);
      if($tipe_file == "image/jpg" OR $tipe_file == "image/jpeg"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
        // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
        if($ukuran_file <= 5000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
          // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
          // Proses upload
          if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload atau tidak
            // Jika gambar berhasil diupload, Lakukan :



              $datSlede = array(
              'JUDUL' => $judul,
              'GAMBAR' => $namagb,
              // 'URAIANSEJARAH' => str_replace('</p>','</p><br>',str_replace('<p>','<p align="justify">',str_replace('</blockquote>','</q></blockquote>',str_replace('<blockquote>','<blockquote><q>',$artikel)))),
              'SAMBUTAN' => $artikel,
              'STATUSSAMBUTAN' =>1
            );

              $where = array(
                'IDS' => $this->input->post('idsambutan')
              );
            

             $this->ProsesDB->update_data($where, $datSlede, 'tsambutan_md');
              $this->session->set_flashdata('data','Data Berhasil Ditambahkan.'); 
             redirect('webadmsekolah/sambutan');
          }
        }
        else
         {
         $this->session->set_flashdata('besar','Uluran gambar terlalu besar.'); 
             redirect('webadmsekolah/sambutan');
           }
      }
        else{
          $this->session->set_flashdata('gagal','Format Gambar Harus jpg.'); 
             redirect('webadmsekolah/sambutan');
           }
  }
}
}
