<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profiluser extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
     $this->load->model('ProsesDB');
    // load form and url helpers
    $this->load->helper(array('form', 'url'));
     
    // load form_validation library
    $this->load->library('form_validation');
    $this->load->model("ProsesDB");
    if($this->ProsesDB->isNotLogin()) redirect(site_url('loginadm'));
  }

  function index()
  {
    $data['menu']= array('pa'=>'pengaturan');
    $u=$this->session->userdata("U");
    $p=$this->session->userdata("P");
    $data['data'] = $this->ProsesDB->get_user();
    $this->load->view('v_admin/layout/header', $data);
    $this->load->view('v_admin/layout/vdataprofiluser', $data);
    $this->load->view('v_admin/layout/footer');
  }

   function tambah()
  {
    $data['menu']= array('pa'=>'pengaturan');
    $u=$this->session->userdata("U");
    $p=$this->session->userdata("P");
    $data['datauser'] = $this->ProsesDB->get_user();
    $this->load->view('v_admin/layout/header', $data);
    $this->load->view('v_admin/layout/vformuser', $data);
    $this->load->view('v_admin/layout/footer');
  }
   function simpanuser()
  {
     $username = $this->input->post('username');
      //$u = explode("@", $username);
    $nama = $this->input->post('nama');
    $level =$this->input->post('level');
    $pbaru =$this->input->post('pbaru');
      $p = password_hash($pbaru, PASSWORD_DEFAULT);
    date_default_timezone_set("Asia/Jakarta");
      
        
            $data = array(
            'USERNAME' => $username,
            'GAMBAR' => 'user.jpg',
            'NAMA' => $nama,
            'PASSWORD' => $p,
            'STATUS' => 1,
            'LEVEL' => $level
          );
            //echo $level;
        $this->ProsesDB->insert_data($data, 'tusr_md');
              $this->session->set_flashdata('rubah','Data Berhasil Dirubah.'); 
            redirect('webadmsekolah/profiluser');
      }

  function aksi()
  {
    $id = $this->uri->segment(4);

     $where = array(
    'USERNAME' => $id
  );
     $data = array(
      'STATUS' => 0
     );
    $this->ProsesDB->update_data($where, $data, 'tusr_md');

              $this->session->set_flashdata('data','Data Berhasil Dihapus.'); 
             redirect('webadmsekolah/profiluser');

  }
  function edit()
  {
    $data['menu']= array('pa'=>'pengaturan');
    $u=$this->session->userdata("U");
    $p=$this->session->userdata("P");
    $id = $this->uri->segment(4);
    if ($id==$u) {
   $data['datautabel'] = $this->ProsesDB->get_user_id_satu($id);
    }
    else{
       $data['datautabel'] = $this->ProsesDB->get_user_id_satu($id);
    }
    $this->load->view('v_admin/layout/header', $data);
    $this->load->view('v_admin/layout/vformedituser', $data);
    $this->load->view('v_admin/layout/footer');

  }

  function simpan()
  {
     $username = $this->input->post('username');
      $u = explode("@", $username);
    $nama = $this->input->post('nama');
    $level =$this->input->post('level');
    $pbaru =$this->input->post('pbaru');
    $plama =$this->input->post('plama');
    if(empty($pbaru))
      $p=$plama;
    else if(!empty($pbaru))
      $p = password_hash($pbaru, PASSWORD_DEFAULT);
    else
      $p=$plama;
    date_default_timezone_set("Asia/Jakarta");
    if(empty($_FILES['gambar']['name'])){
      
        

            $where = array(
              'USERNAME' => $u[0],
            );

            $data = array(
            'NAMA' => $nama,
            'PASSWORD' => $p,
            'LEVEL' => $level
          );
            //echo $level;
        $this->ProsesDB->update_data($where, $data, 'tusr_md');
              $this->session->set_flashdata('rubah','Data Berhasil Dirubah.'); 
            redirect('webadmsekolah/profiluser');
      }
      else if(!empty($_FILES['gambar']['name']))
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
              

                    $where = array(
                      'USERNAME' => $u[0],
                    );

                    $data = array(
                    'NAMA' => $nama,
                    'PASSWORD' => $p,
                    'GAMBAR' => $namagb,
                    'LEVEL' => $level
                  );
              $this->ProsesDB->update_data($where, $data, 'tusr_md'); 
              $logol = $this->input->post('gambarasli');
             if(!empty($logol)){
                unlink('uploads/artikel/'.$this->input->post('gambarasal'));
             }
              $this->session->set_flashdata('rubah','Data Berhasil Dirubah.'); 
             redirect('webadmsekolah/profiluser');
              }
            }
            $this->session->set_flashdata('besar','File Maximal 1MB.'); 
             redirect('webadmsekolah/profiluser');
          }
            $this->session->set_flashdata('jpg','Tipe File Harus jpg / jpeg'); 
             redirect('webadmsekolah/profiluser');
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
