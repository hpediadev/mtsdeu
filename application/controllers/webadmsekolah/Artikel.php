<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model("ProsesDB");
    if($this->ProsesDB->isNotLogin()) redirect(site_url('loginadm'));
    
  }

  function index()
  {
    $data['menu']= array('pa'=>'artikel');
    $id='';
    $data['DataArtikel'] = $this->ProsesDB->get_artikel($id);
    $this->load->view('v_admin/layout/header',$data);
    $this->load->view('v_admin/layout/vdataartikel', $data);
    $this->load->view('v_admin/layout/footer');
  }
  function addfoto(){
    $this->load->view('v_admin/layout/vformfoto');
  }
  function tes(){
     $config['upload_path']="./uploads/images";
        $config['allowed_types']='gif|jpg|png|jpeg';
        $config['encrypt_name'] = TRUE;
        
        $this->load->library('upload',$config);
      if($this->upload->do_upload("file")){
          $data = array('upload_data' => $this->upload->data());

          $judul= 'lll';
          $image= $data['upload_data']['file_name']; 
          
          $result= $this->ProsesDB->simpan_upload($judul,$image);
          if($result>0){
             echo json_encode(array('success' => 1, 'message' => base_url('uploads/images/').$image));
          }else{
            echo json_encode(array('success' => 0, 'message' => 'Berhasil di proses'));
          }
        }
  }
  function hapus($id)
  {


     $where = array(
    'IDARTIKEL' => $id
  );
    $this->ProsesDB->delete_data($where, 'tartikel_md');

              $this->session->set_flashdata('data','Data Berhasil Dihapus.'); 
             redirect('webadmsekolah/artikel');

  }
  function tambah()
  {
    $data['menu']= array('pa'=>'artikel');
    $this->load->view('v_admin/layout/header', $data);
    $this->load->view('v_admin/layout/vformartikel');
    $this->load->view('v_admin/layout/footer');
  }

  function simpanartikel()
  {
    $jdl = $this->input->post('judul');
    // echo $jdl."<br>";
    $simbol = "-)(&*^%$#@!~`,._;+=-|/\/''<>?`~:;\"'";
    for ($i=0; $i < strlen($simbol); $i++) { 
      $jdl = str_replace($simbol[$i],' ', $jdl);
      // echo $jdl.'<br>';

    }  
    $simbol = "          ";
    for ($i=0; $i < strlen($simbol); $i++) { 
      $jdl = str_replace(substr($simbol, $i),' ', $jdl);
      // echo $jdl.'<br>';

    }  
    $jdl = trim($jdl);
    $jdl = str_replace(' ','-', $jdl);
    $jdl = strtolower($jdl);


    date_default_timezone_set("Asia/Jakarta");
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
      $namagb = ''.date('Y-m-d H-i-s').'-smkpbwaru.jpg';
      $path = "uploads/artikel/".$namagb;
      if($tipe_file == "image/jpg" OR $tipe_file == "image/jpeg"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
        // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
        if($ukuran_file <= 1000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
          // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
          // Proses upload
          if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload atau tidak
            // Jika gambar berhasil diupload, Lakukan :
              $judul = htmlspecialchars($this->input->post('judul'));
              $artikel =$this->input->post('art');
              $sub =$this->input->post('sub');
              $kategori =$this->input->post('kate');
              $link = str_replace('-',' ', $jdl);

              $datSlede = array(
              'SUB' => $sub,
              'USERNAME'=> $us,
              'KATEGORI' => $kategori,
              'IDARTIKEL' => $ik,
              'LINK' => $jdl,
              'JUDUL' => $judul,
              'GAMBAR' => $namagb,
              // 'URAIAN' => str_replace('</p>','</p><br>',str_replace('<p>','<p align="justify">',str_replace('</blockquote>','</q></blockquote>',str_replace('<blockquote>','<blockquote><q>',$artikel)))),
              'URAIAN' => $artikel,
              'STATUSARTIKEL' =>1,
              'TANGGALARTIKEL' => date('Y-m-d H-i-s')
            );
              // echo $ik;

              // echo "<pre>".htmlspecialchars(str_replace('<p>','<p align="justify">',str_replace('</blockquote>','</q></blockquote>',str_replace('<blockquote>','<blockquote><q>',$artikel))))."</pre>";


             $this->ProsesDB->insert_data($datSlede, 'tartikel_md');
              $this->session->set_flashdata('data','Data Berhasil Ditambahkan.'); 
             redirect('webadmsekolah/artikel');
          }
        }
        else
          echo "lebih ";
      }
        else
          echo "jpg ".$tipe_file;
  }

  function lihat()
  {
    $data['menu']= array('pa'=>'artikel');
    $id = $this->uri->segment(4);
    $data['artikel'] = $this->ProsesDB->get_artikel_id($id);
    $this->load->view('v_admin/layout/header', $data);
    $this->load->view('v_admin/layout/vlihatartikel', $data);
    $this->load->view('v_admin/layout/footer');
  }

  function edit()
  {
    $data['menu']= array('pa'=>'artikel');
    $id = $this->uri->segment(4);
    $data['artikel'] = $this->ProsesDB->get_artikel_id($id);
    $this->load->view('v_admin/layout/header', $data);
    $this->load->view('v_admin/layout/vformeditartikel', $data);
    $this->load->view('v_admin/layout/footer');
  }

  function simpanedit()
  {

    $jdl = $this->input->post('judul');
    // echo $jdl."<br>";
    $simbol = "-)(&*^%$#@!~`,._;+=-|/\/''<>?`~:;\"'";
    for ($i=0; $i < strlen($simbol); $i++) { 
      $jdl = str_replace($simbol[$i],' ', $jdl);
      // echo $jdl.'<br>';

    }  
    $simbol = "          ";
    for ($i=0; $i < strlen($simbol); $i++) { 
      $jdl = str_replace(substr($simbol, $i),' ', $jdl);
      // echo $jdl.'<br>';

    }  
    $jdl = trim($jdl);
    $jdl = str_replace(' ','-', $jdl);
    $jdl = strtolower($jdl);

    $id = $this->input->post('id');
        $judul = htmlspecialchars($this->input->post('judul'));
              $artikel =$this->input->post('art');
              $sub =$this->input->post('sub');
              $kategori =$this->input->post('kate');
              $gambarasal =$this->input->post('gambarasal');
    date_default_timezone_set("Asia/Jakarta");
    if(empty($_FILES['gambar']['name'])){
      
        

            $where = array(
              'IDARTIKEL' => $id
            );

            $data = array(
              'LINK' => $jdl,
            'JUDUL' => $judul,
            'URAIAN' => $artikel,
              'KATEGORI' => $kategori,
            'SUB' => $sub,
            'KATEGORI'=>$kategori
          );
        $this->ProsesDB->update_data($where, $data, 'tartikel_md');
              $this->session->set_flashdata('rubah','Data Berhasil Dirubah.'); 
             redirect('webadmsekolah/artikel');
      }
      else
      {

          $nama_file = $_FILES['gambar']['name'];
      $ukuran_file = $_FILES['gambar']['size'];
      $tipe_file = $_FILES['gambar']['type'];
      $tmp_file = $_FILES['gambar']['tmp_name'];
      $namagb = ''.date('Y-m-d H-i-s').'-smkpbwaru.jpg';
      $path = "uploads/artikel/".$namagb;
      if($tipe_file == "image/jpg" OR $tipe_file == "image/jpeg"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
        // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
        if($ukuran_file <= 1000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
          // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
          // Proses upload
          if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload atau tidak
            // Jika gambar berhasil diupload, Lakukan :
              $judul = htmlspecialchars($this->input->post('judul'));
              $artikel =$this->input->post('art');
              $sub =$this->input->post('sub');
              $kategori =$this->input->post('kate');
                $id = $this->input->post('id');

                    $where = array(
                      'IDARTIKEL' => $id
                    );

                  $data = array(
                    'LINK' => $jdl,
                 'JUDUL' => $judul,
                 'URAIAN' => $artikel,
                 'KATEGORI' => $kategori,
                 'SUB' => $sub,
                 'GAMBAR'=>$namagb,
                 'KATEGORI'=>$kategori
                );
              $this->ProsesDB->update_data($where, $data, 'tartikel_md'); 
              $logol = $this->input->post('gambarasli');
             if(!empty($namagb)){
                unlink('uploads/artikel/'.$this->input->post('gambarasal'));
             }
              $this->session->set_flashdata('rubah','Data Berhasil Dirubah.'); 
             redirect('webadmsekolah/artikel');
              // echo $namagb;
              }
            }
          }
          else{
            echo "PNG|JPG|JPEG";
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
