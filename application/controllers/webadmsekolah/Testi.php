<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testi extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model("ProsesDB");
    if($this->ProsesDB->isNotLogin()) redirect(site_url('loginadm'));
  }

  function index()
  {
    $data['menu']= array('pa'=>'testi');
    $where = array();
    $this->db->order_by('IDTESTI','DESC');
    $data['data'] = $this->ProsesDB->getData('ttestimoni_md', $where)->result();
    $this->load->view('v_admin/layout/header',$data);
    $this->load->view('v_admin/layout/vdatatesti', $data);
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
    'IDTESTI' => $id
  );
    $this->ProsesDB->delete_data($where, 'ttestimoni_md');

              $this->session->set_flashdata('data','Data Berhasil Dihapus.'); 
             redirect('webadmsekolah/testi');

  }
  function tambah()
  {
    $data['menu']= array('pa'=>'testi');
    $this->load->view('v_admin/layout/header', $data);
    $this->load->view('v_admin/layout/vformtesti');
    $this->load->view('v_admin/layout/footer');
  }

  function simpan()
  {

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
      if($tipe_file == "image/jpg" OR $tipe_file == "image/jpeg" OR $tipe_file == "image/png"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
        // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
        if($ukuran_file <= 1000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
          // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
          // Proses upload
          if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload atau tidak
            // Jika gambar berhasil diupload, Lakukan :
              $nama = htmlspecialchars($this->input->post('nama'));
              $artikel =$this->input->post('art');
              $sts = htmlspecialchars($this->input->post('sts'));
              $jk =$this->input->post('jk');
              $kantor = htmlspecialchars($this->input->post('kantor'));
              $masuk =$this->input->post('masuk');
              $lulus =$this->input->post('lulus');
              $jab =$this->input->post('jab');
              $nilai =$this->input->post('nilai');

              $data = array(
              'LULUS'=> $lulus,
              'MASUK' => $masuk,
              'PEKERJAAN' => $sts,
              'JK' => $jk,
              'NILAI' => $nilai,
              'KANTOR' => $kantor,
              'JABATAN' => $jab,
              'NAMATESTI' => $nama,
              'GAMBAR' => $namagb,
              'TESTIMONI' => $artikel,
              'STATUSTESTI' =>1,
              'TGLTESTI' => date('Y-m-d H-i-s')
            );
              // echo $ik;

              // echo "<pre>".htmlspecialchars(str_replace('<p>','<p align="justify">',str_replace('</blockquote>','</q></blockquote>',str_replace('<blockquote>','<blockquote><q>',$artikel))))."</pre>";


             $this->ProsesDB->insert_data($data, 'ttestimoni_md');
              $this->session->set_flashdata('data','Data Berhasil Ditambahkan.'); 
             redirect('webadmsekolah/testi');
          }
        }
        else{
              $this->session->set_flashdata('error','Ukuran Gambar Tidak boleh Lebih dari 1MB'); 
             redirect('webadmsekolah/testi');
           }
      }
        else{
              $this->session->set_flashdata('error','Format Gambar Harus jpg|jpeg|png'); 
             redirect('webadmsekolah/testi');
           }
  }

  function lihat()
  {
    $data['menu']= array('pa'=>'testi');
    $id = $this->uri->segment(4);
    $data['artikel'] = $this->ProsesDB->get_artikel_id($id);
    $this->load->view('v_admin/layout/header', $data);
    $this->load->view('v_admin/layout/vlihattesti', $data);
    $this->load->view('v_admin/layout/footer');
  }

  function edit($id)
  {
    $data['menu']= array('pa'=>'testi');
    $id = $this->uri->segment(4);
    $where = array('IDTESTI'=> $id);
    $data['data'] = $this->ProsesDB->getData('ttestimoni_md', $where)->result();
    $this->load->view('v_admin/layout/header', $data);
    $this->load->view('v_admin/layout/vformedittesti', $data);
    $this->load->view('v_admin/layout/footer');
  }

  function simpanedit()
  {

    $nama = htmlspecialchars($this->input->post('nama'));
    $artikel =$this->input->post('art');
    $sts = htmlspecialchars($this->input->post('sts'));
    $jk =$this->input->post('jk');
    $kantor = htmlspecialchars($this->input->post('kantor'));
    $masuk =$this->input->post('masuk');
    $lulus =$this->input->post('lulus');
    $jab =$this->input->post('jab');
    $nilai =$this->input->post('nilai');
    $id =$this->input->post('id');
    $where = array('IDTESTI'=> $id);
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

    if (empty($nama_file)) {
       $data = array(
              'LULUS'=> $lulus,
              'MASUK' => $masuk,
              'PEKERJAAN' => $sts,
              'JK' => $jk,
              'NILAI' => $nilai,
              'KANTOR' => $kantor,
              'JABATAN' => $jab,
              'NAMATESTI' => $nama,
              'TESTIMONI' => $artikel,
              'STATUSTESTI' =>1,
              'TGLTESTI' => date('Y-m-d H-i-s')
            );
       $this->ProsesDB->update_data($where, $data, 'ttestimoni_md');
              $this->session->set_flashdata('data','Data Berhasil Ditambahkan.'); 
             redirect('webadmsekolah/testi');
    }
    else{
      $ukuran_file = $_FILES['gambar']['size'];
      $tipe_file = $_FILES['gambar']['type'];
      $tmp_file = $_FILES['gambar']['tmp_name'];
      $namagb = ''.date('Y-m-d H-i-s').'-smkpbwaru.jpg';
      $path = "uploads/artikel/".$namagb;
      if($tipe_file == "image/jpg" OR $tipe_file == "image/jpeg"  OR $tipe_file == "image/png"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
        // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
        if($ukuran_file <= 1000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
          // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
          // Proses upload
          if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload atau tidak
            // Jika gambar berhasil diupload, Lakukan :

              $data = array(
              'LULUS'=> $lulus,
              'MASUK' => $masuk,
              'PEKERJAAN' => $sts,
              'JK' => $jk,
              'NILAI' => $nilai,
              'KANTOR' => $kantor,
              'JABATAN' => $jab,
              'NAMATESTI' => $nama,
              'GAMBAR' => $namagb,
              'TESTIMONI' => $artikel,
              'STATUSTESTI' =>1,
              'TGLTESTI' => date('Y-m-d H-i-s')
            );
              // echo $ik;

              // echo "<pre>".htmlspecialchars(str_replace('<p>','<p align="justify">',str_replace('</blockquote>','</q></blockquote>',str_replace('<blockquote>','<blockquote><q>',$artikel))))."</pre>";

             $this->ProsesDB->update_data($where, $data, 'ttestimoni_md');
              $this->session->set_flashdata('data','Data Berhasil Ditambahkan.'); 
             redirect('webadmsekolah/testi');
          }
        }
        else{
              $this->session->set_flashdata('error','Ukuran Gambar Tidak boleh Lebih dari 1MB'); 
             redirect('webadmsekolah/testi');
           }
      }
        else{
              $this->session->set_flashdata('error','Format Gambar Harus jpg|jpeg|png'); 
             redirect('webadmsekolah/testi');
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
