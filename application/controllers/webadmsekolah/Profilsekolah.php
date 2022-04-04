<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profilsekolah extends CI_Controller{

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
    if($this->session->userdata("L")!=1)
    header('Location: '.base_url('webadmsekolah'));
    $this->session->set_userdata('menu','profil');
  }

  function index()
  {
    $data['menu']= array('pa'=>'profilesekolah');
  	$id='';
  	$data['dataLembaga'] = $this->ProsesDB->get_lembaga($id);
    $this->load->view('v_admin/layout/header', $data);
    $this->load->view('v_admin/layout/vprofilsekolah', $data);
    $this->load->view('v_admin/layout/footer');
  }

  function aksi()
  {
    $data['menu']= array('pa'=>'profilesekolah');
    $id = $this->uri->segment(4);
    $data['lembaga'] = $this->ProsesDB->get_lembaga($id);
    $this->load->view('v_admin/layout/header', $data);
    $this->load->view('v_admin/layout/vprofil', $data);
    $this->load->view('v_admin/layout/footer');

  }function edit()
  {
    $data['menu']= array('pa'=>'profilesekolah');
    $id = $this->uri->segment(4);
    $data['lembaga'] = $this->ProsesDB->get_lembaga($id);
    $this->load->view('v_admin/layout/header', $data);
    $this->load->view('v_admin/layout/vformprofil', $data);
    $this->load->view('v_admin/layout/footer');

  }

  function simpanedit()
  {
    
    date_default_timezone_set("Asia/Jakarta");
    if(empty($_FILES['logo']['name'])){
            $namagb = ''.$this->input->post('logoasal');
            $this->form_validation->set_rules('npsn','NPNS','required');
            $this->form_validation->set_rules('nama','Nama Instansi','required');
            $this->form_validation->set_rules('jenis','Jenis Instansi','required');
            $this->form_validation->set_rules('email','Email Instansi','required');
            $this->form_validation->set_rules('alamat','Alamat Instansi','required');
            $this->form_validation->set_rules('telp','Telp','required');
            $this->form_validation->set_rules('hp','Hp','required');
            $this->form_validation->set_rules('fax','Fax','required');
            $this->form_validation->set_rules('fb','Facbook','required');
            $this->form_validation->set_rules('tw','Twitter','required');
            $this->form_validation->set_rules('ig','Instagram','required');
            $this->form_validation->set_rules('yt','Youtube','required');
            $this->form_validation->set_rules('kpl','Kepala Sekolah','required');
            $this->form_validation->set_rules('logo','Logo','required');
            $this->form_validation->set_rules('ops','Nama Admin','required');
            $this->form_validation->set_rules('usr','Nama Pengguna Admin','required');
            $this->form_validation->set_rules('pass','Kata Sandi Admin','required');

            //if($this->form_validation->run() != false){
              //proses insert user admin 
              $npsnasal = $this->input->post('npsnasal');
              $npsn = $this->input->post('npsn');
              $nama = $this->input->post('nama');
              $jenis = $this->input->post('jenis');
              $email = $this->input->post('email');
              $alamat = $this->input->post('alamat');
              $telp = $this->input->post('telp');
              $hp = $this->input->post('hp');
              $fax = $this->input->post('fax');
              $fb = $this->input->post('fb');
              $tw = $this->input->post('tw');
              $ig = $this->input->post('ig');
              $yt = $this->input->post('yt');
              $kpl = $this->input->post('kpl');

              $where = array(
                'NPSN' => $npsnasal
              );

              $lembaga = array(
              'NPSN' => $npsn,
              'NAMALEMBAGA' => $nama,
              'JENISLEMBAGA' => $jenis,
              'EMAILLEMBAGA' => $email,
              'ALAMATLEMBAGA' => $alamat,
              'TELP' => $telp,
              'Hp' => $hp,
              'FAX' => $fax,
              'FACEBOOK' => $fb,
              'TWITTER' => $tw,
              'INSTAGRAM' => $ig,
              'YOUTUBE' => $yt,
              'KEPALA' => $kpl,
              'LOGO' => $namagb,
              'STATUSLEMBAGA' =>'1'
              );

              $this->ProsesDB->update_data($where, $lembaga, 'tlembaga_md');
              $this->session->set_flashdata('data','Data Berhasil Ditambahkan.'); 

          //     $id = $npsnasal;
            // $data['lembaga'] = $this->ProsesDB->get_lembaga($id);
            // foreach ($lembaga as $u) {
            //  echo $u=>'NPSN';
            //  # code...
            // }
             redirect('webadmsekolah/profilsekolah');
            // echo "string";
    }else{
      // Ambil Data yang Dikirim dari Form
      $nama_file = $_FILES['logo']['name'];
      $ukuran_file = $_FILES['logo']['size'];
      $tipe_file = $_FILES['logo']['type'];
      $tmp_file = $_FILES['logo']['tmp_name'];
      $namagb = ''.date('YmdHis').'-logo-sekolah.png';
      $path = "uploads/".$namagb;
      if($tipe_file == "image/png"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
        // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
        if($ukuran_file <= 1000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
          // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
          // Proses upload
          if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload atau tidak
            // Jika gambar berhasil diupload, Lakukan : 
            
    $this->form_validation->set_rules('npsn','NPNS','required');
            $this->form_validation->set_rules('nama','Nama Instansi','required');
            $this->form_validation->set_rules('jenis','Jenis Instansi','required');
            $this->form_validation->set_rules('email','Email Instansi','required');
            $this->form_validation->set_rules('alamat','Alamat Instansi','required');
            $this->form_validation->set_rules('telp','Telp','required');
            $this->form_validation->set_rules('hp','Hp','required');
            $this->form_validation->set_rules('fax','Fax','required');
            $this->form_validation->set_rules('fb','Facbook','required');
            $this->form_validation->set_rules('tw','Twitter','required');
            $this->form_validation->set_rules('ig','Instagram','required');
            $this->form_validation->set_rules('yt','Youtube','required');
            $this->form_validation->set_rules('kpl','Kepala Sekolah','required');
            $this->form_validation->set_rules('logo','Logo','required');
            $this->form_validation->set_rules('ops','Nama Admin','required');
            $this->form_validation->set_rules('usr','Nama Pengguna Admin','required');
            $this->form_validation->set_rules('pass','Kata Sandi Admin','required');

            //if($this->form_validation->run() != false){
              //proses insert user admin 
              $npsnasal = $this->input->post('npsnasal');
              $npsn = $this->input->post('npsn');
              $nama = $this->input->post('nama');
              $jenis = $this->input->post('jenis');
              $email = $this->input->post('email');
              $alamat = $this->input->post('alamat');
              $telp = $this->input->post('telp');
              $hp = $this->input->post('hp');
              $fax = $this->input->post('fax');
              $fb = $this->input->post('fb');
              $tw = $this->input->post('tw');
              $ig = $this->input->post('ig');
              $yt = $this->input->post('yt');
              $kpl = $this->input->post('kpl');

              $where = array(
                'NPSN' => $npsnasal
              );

              $lembaga = array(
              'NPSN' => $npsn,
              'NAMALEMBAGA' => $nama,
              'JENISLEMBAGA' => $jenis,
              'EMAILLEMBAGA' => $email,
              'ALAMATLEMBAGA' => $alamat,
              'TELP' => $telp,
              'Hp' => $hp,
              'FAX' => $fax,
              'FACEBOOK' => $fb,
              'TWITTER' => $tw,
              'INSTAGRAM' => $ig,
              'YOUTUBE' => $yt,
              'KEPALA' => $kpl,
              'LOGO' => $namagb,
              'STATUSLEMBAGA' =>'1'
              );

              $this->ProsesDB->update_data($where, $lembaga, 'tlembaga_md');
              $this->session->set_flashdata('data','Data Berhasil Ditambahkan.'); 

          //     $id = $npsnasal;
            // $data['lembaga'] = $this->ProsesDB->get_lembaga($id);
            // foreach ($lembaga as $u) {
            //  echo $u=>'NPSN';
            //  # code...
            // }
             //redirect('webadmsekolah/profilsekolah');
             //echo $namagb;
             $logol = $this->input->post('logoasal');
             if(!empty($logol)){
                unlink('uploads/'.$this->input->post('logoasal'));
             }
             redirect('webadmsekolah/profilsekolah');
          }
          else
              $this->session->set_flashdata('gagal','Gagal Upload'); 
             redirect('webadmsekolah/profilsekolah');
        }
          else
              $this->session->set_flashdata('besar','File Terlalu Besar.'); 
             redirect('webadmsekolah/profilsekolah');
      }
          else
              $this->session->set_flashdata('png','Harap Upload file png'); 
             redirect('webadmsekolah/profilsekolah');
    }
   // }
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
