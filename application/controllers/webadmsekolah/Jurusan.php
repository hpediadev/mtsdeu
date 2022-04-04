<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan extends CI_Controller{

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
    $data['menu']= array('pa'=>'jurusan');
    $id='';
    $data['data'] = $this->ProsesDB->get_prodi($id);
    $this->load->view('v_admin/layout/header', $data);
    $this->load->view('v_admin/layout/vdatajurusan', $data);
    $this->load->view('v_admin/layout/footer');
  }

  function tambah()
  {
    $data['menu']= array('pa'=>'jurusan');
    $this->load->view('v_admin/layout/header', $data);
    $this->load->view('v_admin/layout/vformjurusan');
    $this->load->view('v_admin/layout/footer');
  }

  function simpan()
  {
      $panjang =$this->input->post('panjang');
    $jdl = $panjang;
    // echo $jdl."<br>";
    $simbol = "-)(&*^%$#@!~`,._;+=-|/\/''<>?`~:;\"'";
    for ($i=0; $i < strlen($simbol); $i++) { 
      $jdl = str_replace($simbol[$i],' ', $jdl);
      // echo $jdl.'<br>';

    }  
    $jdl = trim($jdl);
    $jdl = str_replace(' ','-', $jdl);
    $jdl = strtolower($jdl);

    // echo $jdl;
    $ik='';

    $query = $this->db->order_by("IDARTIKEL", "DESC");
    $query = $this->db->limit(1);
    $query = $this->db->get('tartikel_md');
    foreach ($query->result() as $Y) {
      $ik = $Y->IDARTIKEL;
     // echo $ik;
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

              
            $pendek = $this->input->post('pendek');
            $keterangan = $this->input->post('keterangan');
            $kompetensi = $this->input->post('kompetensi');
            $profesi = $this->input->post('profesi');
            $prestasi = $this->input->post('prestasi');

          



              $datSlede = array(
              'IDPRODI' => $pendek,
              'NAMAPRODI' => $panjang,
              'SLUG' => $jdl,
              // 'URAIAN' => str_replace('</p>','</p><br>',str_replace('<p>','<p align="justify">',str_replace('</blockquote>','</q></blockquote>',str_replace('<blockquote>','<blockquote><q>',$keterangan)))),
              'URAIAN' => $keterangan,
              'KOMPETENSI' => $kompetensi,
              'PROFESI' => $profesi,
              'PRESTASI' => $prestasi,
              'IDFAKULTAS' => 1,
              'GAMBAR' => $namagb,
              'STATUSPRODI' =>1
            );
              // echo $ik;

              // echo "<pre>".htmlspecialchars(str_replace('<p>','<p align="justify">',str_replace('</blockquote>','</q></blockquote>',str_replace('<blockquote>','<blockquote><q>',$artikel))))."</pre>";


             $this->ProsesDB->insert_data($datSlede, 'tprodi_md');
              $this->session->set_flashdata('data','Data Berhasil Ditambahkan.'); 
             redirect('webadmsekolah/jurusan');
          }
        }
        else{

              $this->session->set_flashdata('besar','Ukuran Logo Terlalu Besar.'); 
             redirect('webadmsekolah/jurusan');
        }
      }
        else
          $this->session->set_flashdata('gagal','File Harus Format JPG/JPEG'); 
             redirect('webadmsekolah/jurusan');
  }


  function edit($id)
  {
    $data['menu']= array('pa'=>'jurusan');
    $where = array('SLUG'=> $id);
    $data['DataArtikel'] = $this->ProsesDB->getData('tprodi_md', $where)->result();
    $this->load->view('v_admin/layout/header', $data);
    $this->load->view('v_admin/layout/vformeditjurusan', $data);
    $this->load->view('v_admin/layout/footer');
  }
  function lihat($id)
  {
    $data['menu']= array('pa'=>'jurusan');
    $where = array('SLUG'=> $id);
    $data['data'] = $this->ProsesDB->getData('tprodi_md', $where)->result();
    $this->load->view('v_admin/layout/header', $data);
    $this->load->view('v_admin/layout/vlihatjur', $data);
    $this->load->view('v_admin/layout/footer');
  }
  function aksi($id)
  {
    $where = array('IDPRODI'=> $id);
    $sql = $this->ProsesDB->delete_data($where, 'tprodi_md');
    if($sql >0){
        $this->session->set_flashdata('rubah','Data Jurusan Berhasil Dihapus.'); 
             redirect('webadmsekolah/jurusan');
    }else{
        $this->session->set_flashdata('gagal','Hapus Jurusan Gagal'); 
             redirect('webadmsekolah/jurusan');
    }
  }

  function simpanedit()
  {
    $ik='';
     $panjang =$this->input->post('panjang');
    $jdl = $panjang;
    // echo $jdl."<br>";
    $simbol = "-)(&*^%$#@!~`,._;+=-|/\/''<>?`~:;\"'";
    for ($i=0; $i < strlen($simbol); $i++) { 
      $jdl = str_replace($simbol[$i],' ', $jdl);
      // echo $jdl.'<br>';

    }  
    $jdl = trim($jdl);
    $jdl = str_replace(' ','-', $jdl);
    $jdl = strtolower($jdl);
    $pendek = $this->input->post('pendek');
    $keterangan = $this->input->post('keterangan');
    $kompetensi = $this->input->post('kompetensi');
    $profesi = $this->input->post('profesi');
    $prestasi = $this->input->post('prestasi');
    $id = $this->input->post('id');

    $query = $this->db->order_by("IDARTIKEL", "DESC");
    $query = $this->db->limit(1);
    $query = $this->db->get('tartikel_md');
    foreach ($query->result() as $Y) {
      $ik = $Y->IDARTIKEL;
     // echo $ik;
    }
    $ik++;
    if(empty($ik)) 
    {
      $ik=1;
    }

    if(empty($_FILES['gambar']['name'])){
      $where = array(
              'IDPRODI' => $id
            );

      $datSlede = array(
        'IDPRODI' => $pendek,
        'NAMAPRODI' => $panjang,
        'SLUG'=> $jdl,
        // 'URAIAN' => str_replace('</p>','</p><br>',str_replace('<p>','<p align="justify">',str_replace('</blockquote>','</q></blockquote>',str_replace('<blockquote>','<blockquote><q>',$keterangan)))),
        'URAIAN' => $keterangan,
        'KOMPETENSI' => $kompetensi,
        'PROFESI' => $profesi,
        'PRESTASI' => $prestasi,
        'IDFAKULTAS' => 1,
        'STATUSPRODI' =>1
      );
      // echo $ik;

      // echo "<pre>".htmlspecialchars(str_replace('<p>','<p align="justify">',str_replace('</blockquote>','</q></blockquote>',str_replace('<blockquote>','<blockquote><q>',$artikel))))."</pre>";


     // $this->ProsesDB->insert_data($datSlede, 'tprodi_md');
     $this->ProsesDB->update_data($where, $datSlede, 'tprodi_md'); 
      $this->session->set_flashdata('data','Data Berhasil Ditambahkan.'); 
     redirect('webadmsekolah/jurusan');
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

              
            
            $where = array(
                      'IDPRODI' => $id
                    );

              $datSlede = array(
              'IDPRODI' => $pendek,
              'NAMAPRODI' => $panjang,
              'SLUG'=> $jdl,
              // 'URAIAN' => str_replace('</p>','</p><br>',str_replace('<p>','<p align="justify">',str_replace('</blockquote>','</q></blockquote>',str_replace('<blockquote>','<blockquote><q>',$keterangan)))),
              'URAIAN' => $keterangan,
              'KOMPETENSI' => $kompetensi,
              'PROFESI' => $profesi,
              'PRESTASI' => $prestasi,
              'IDFAKULTAS' => 1,
              'GAMBAR' => $namagb,
              'STATUSPRODI' =>1
            );
              // echo $ik;

              // echo "<pre>".htmlspecialchars(str_replace('<p>','<p align="justify">',str_replace('</blockquote>','</q></blockquote>',str_replace('<blockquote>','<blockquote><q>',$artikel))))."</pre>";


             // $this->ProsesDB->insert_data($datSlede, 'tprodi_md');
             $this->ProsesDB->update_data($where, $datSlede, 'tprodi_md'); 
              $this->session->set_flashdata('data','Data Berhasil Ditambahkan.'); 
             redirect('webadmsekolah/jurusan');
          }
        }
        else{

              $this->session->set_flashdata('besar','Ukuran Logo Terlalu Besar.'); 
             redirect('webadmsekolah/jurusan');
        }
      }
        else{
          $this->session->set_flashdata('besar','Format Gambar Harus jpg.'); 
             redirect('webadmsekolah/jurusan');
           }
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
