<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model("ProsesDB");
    if($this->ProsesDB->isNotLogin()) redirect(site_url('loginadm'));
  }

  function index()
  {
    $data['menu']= array('pa'=>'siswa');
    $where = array();
    $this->db->order_by('IDSISWA','DESC');
    $data['data'] = $this->ProsesDB->getData('tdatasiswa_md', $where)->result();
    $this->load->view('v_admin/layout/header',$data);
    $this->load->view('v_admin/layout/vdatasiswa', $data);
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
  function tambah()
  {
    $data['menu']= array('pa'=>'siswa');
    $this->load->view('v_admin/layout/header', $data);
    $this->load->view('v_admin/layout/vformsiswa');
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

    $tp =$this->input->post('tp');
    $vii =$this->input->post('vii');
    $viip =$this->input->post('viip');
    $viii =$this->input->post('viii');
    $viiip =$this->input->post('viiip');
    $ix =$this->input->post('ix');
    $ixp =$this->input->post('ixp');

    $data = array(
      'IDSISWA'=> substr($tp, 0,4),
      'TP'=> $tp,
      'X'=> $vii,
      'XP'=> $viip,
      'XI'=> $viii,
      'XIP'=> $viiip,
      'XII'=> $ix,
      'XIIP'=> $ixp
    );
     $where = array('IDSISWA'=> substr($tp, 0,4));
     $s = $this->ProsesDB->getData('tdatasiswa_md', $where);
     if($s->num_rows()>0){
      $this->session->set_flashdata('gagal','Data Tahun Pelajaran Tersebut Sudah Ada'); 
             redirect('webadmsekolah/siswa');
     }
     else{
      $this->ProsesDB->insert_data($data, 'tdatasiswa_md');
      $this->session->set_flashdata('data','Data Berhasil Ditambahkan.'); 
             redirect('webadmsekolah/siswa');
     }
  }

  function hapus($id)
  {
     $where = array(
    'IDSISWA' => $id
  );
    $this->ProsesDB->delete_data($where, 'tdatasiswa_md');

              $this->session->set_flashdata('data','Data Berhasil Dihapus.'); 
             redirect('webadmsekolah/siswa');
  }

  function edit($id)
  {
    $data['menu']= array('pa'=>'siswa');
    $id = $this->uri->segment(4);
    $where = array('IDsiswa'=> $id);
    $data['data'] = $this->ProsesDB->getData('tdatasiswa_md', $where)->result();
    $this->load->view('v_admin/layout/header', $data);
    $this->load->view('v_admin/layout/veditsiswa', $data);
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
    $where = array('IDsiswa'=> $id);
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

    $id =$this->input->post('id');
    $vii =$this->input->post('vii');
    $viip =$this->input->post('viip');
    $viii =$this->input->post('viii');
    $viiip =$this->input->post('viiip');
    $ix =$this->input->post('ix');
    $ixp =$this->input->post('ixp');

    $data = array(
      'IDSISWA'=> substr($tp, 0,4),
      'X'=> $vii,
      'XP'=> $viip,
      'XI'=> $viii,
      'XIP'=> $viiip,
      'XII'=> $ix,
      'XIIP'=> $ixp
    );
     $where = array('IDSISWA'=> $id);
      $this->ProsesDB->update_data($where, $data, 'tdatasiswa_md');
      $this->session->set_flashdata('data','Data Berhasil Ditambahkan.'); 
             redirect('webadmsekolah/siswa');
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
