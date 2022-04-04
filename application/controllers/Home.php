<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Home extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('ProsesDB');
    // load form and url helpers
    $this->load->helper(array('form', 'url'));
     
    // load form_validation library
    $this->load->library('form_validation');
    $this->load->model('m_data');
  }

  function index()
  {
    $this->db->limit(7);
    $data['SemuaArtikel'] = $this->ProsesDB->get_artikel();

        $data['artikelacak'] = $this->ProsesDB->get_artikel_acak();
    $id='';
    if($data['dataUser'] = $this->ProsesDB->get_user())
    {
      if($data['dataLembaga'] = $this->ProsesDB->get_lembaga($id)){
        $id=1;
        $data['dataartikel'] = $this->ProsesDB->get_artikel();
        $data['slide'] = $this->ProsesDB->get_slide($id);

    
         $this->load->database();
         $jumlah_data = $this->m_data->jumlah_data_home();
         $this->load->library('pagination');
         $config['base_url'] = base_url().'home/index';
         $config['total_rows'] = $jumlah_data;
         $config['per_page'] = 3;
         $from = $this->uri->segment(3);
        $config['next_link'] = '>';
        $config['prev_link'] = '<';
        $config['first_link'] = '<<';
        $config['last_link'] = '>>';
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_open'] = '<li>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_open'] = '<li>';
         $this->pagination->initialize($config); 
         $data['user'] = $this->m_data->data_home($config['per_page'],$from);
         
         $where = array();
         $this->db->limit(6);
         $this->db->order_by('IDARTIKEL','DESC');
         $data['latest'] = $this->ProsesDB->getData('tartikel_md', $where)->result();
         
        $where = array();
        $data['data'] = $this->ProsesDB->getData('tsambutan_md', $where);
        $where = array();
        $this->db->order_by('IDTESTI','DESC');
        $data['datatesti'] = $this->ProsesDB->getData('ttestimoni_md', $where)->result();
        $this->load->view('halaman/layout/header', $data);
       // $this->load->view('halaman/layout/slide', $data);
        $this->load->view('halaman/layout/mainhead');
        // $this->load->view('halaman/layout/vsambutan');
        $this->load->view('halaman/layout/maincenter', $data);
        $this->load->view('halaman/layout/mainslidebar',$data);
        $this->load->view('halaman/layout/mainfoot');
        $this->load->view('halaman/layout/footer', $data);
        }
      }
    else
     $this->load->view('halaman/layout/vinstalasi');
    
  }

  function indexss()
  {
    $id='';
    if($data['dataUser'] = $this->ProsesDB->get_user())
    {
      if($data['dataLembaga'] = $this->ProsesDB->get_lembaga($id)){
        $id=1;
        $data['dataartikel'] = $this->ProsesDB->get_artikel();
        $data['slide'] = $this->ProsesDB->get_slide($id);
        $this->load->view('halaman/layout/header', $data);
        $this->load->view('halaman/layout/slide', $data);
        $this->load->view('halaman/layout/mainhead');
        $this->load->view('halaman/layout/maincenter', $data);
        $this->load->view('halaman/layout/mainslidebar');
        $this->load->view('halaman/layout/mainfoot');
        $this->load->view('halaman/layout/footer', $data);
    }
  }
    else
     $this->load->view('halaman/layout/vinstalasi');
    
  }
  // function simpan(){
  //       $this->form_validation->set_rules('npsn','NPNS','required');
  //       $this->form_validation->set_rules('nama','Nama Instansi','required');
  //       $this->form_validation->set_rules('jenis','Jenis Instansi','required');
  //       $this->form_validation->set_rules('email','Email Instansi','required');
  //       $this->form_validation->set_rules('alamat','Alamat Instansi','required');
  //       $this->form_validation->set_rules('telp','Telp','required');
  //       $this->form_validation->set_rules('hp','Hp','required');
  //       $this->form_validation->set_rules('fax','Fax','required');
  //       $this->form_validation->set_rules('fb','Facbook','required');
  //       $this->form_validation->set_rules('tw','Twitter','required');
  //       $this->form_validation->set_rules('ig','Instagram','required');
  //       $this->form_validation->set_rules('yt','Youtube','required');
  //       $this->form_validation->set_rules('kpl','Kepala Sekolah','required');
  //       $this->form_validation->set_rules('logo','Logo','required');
  //       $this->form_validation->set_rules('ops','Nama Admin','required');
  //       $this->form_validation->set_rules('usr','Nama Pengguna Admin','required');
  //       $this->form_validation->set_rules('pass','Kata Sandi Admin','required');

  //       if($this->form_validation->run() != false){
  //         //proses insert user admin 
  //         $npsn = $this->input->post('npsn');
  //         $nama = $this->input->post('nama');
  //         $jenis = $this->input->post('jenis');
  //         $email = $this->input->post('email');
  //         $alamat = $this->input->post('alamat');
  //         $telp = $this->input->post('telp');
  //         $hp = $this->input->post('hp');
  //         $fax = $this->input->post('fax');
  //         $fb = $this->input->post('fb');
  //         $tw = $this->input->post('tw');
  //         $ig = $this->input->post('ig');
  //         $yt = $this->input->post('yt');
  //         $kpl = $this->input->post('kpl');
  //         $logo = $this->input->post('logo');
  //         $ops = $this->input->post('ops');
  //         $usr = $this->input->post('usr');
  //         $pass = $this->input->post('pass');

  //         $user = array(
  //         'USERNAME' => $usr,
  //         'PASSWORD' => $pass,
  //         'NAMA' => $nama,
  //         'LEVEL' =>'1'
  //         );

          

  //         $lembaga = array(
  //         'USERNAME' => $usr,
  //         'NPSN' => $npsn,
  //         'NAMALEMBAGA' => $nama,
  //         'JENISLEMBAGA' => $jenis,
  //         'EMAILLEMBAGA' => $email,
  //         'ALAMATLEMBAGA' => $alamat,
  //         'TELP' => $telp,
  //         'Hp' => $hp,
  //         'FAX' => $fax,
  //         'FACEBOOK' => $fb,
  //         'TWITTER' => $tw,
  //         'INSTAGRAM' => $ig,
  //         'YOUTUBE' => $yt,
  //         'KEPALA' => $kpl,
  //         'LOGO' => $logo,
  //         'STATUSLEMBAGA' =>'1'
  //         );
  //         $sql = $this->ProsesDB->insert_data($user,'tusr_md');
  //         if(!$sql){
  //           if(!$this->ProsesDB->insert_data($lembaga, 'tlembaga_md')){
  //               redirect('admin/loginadm');
  //           }
  //           else{
  //             $where = array('USERNAME' => $usr);
  //             $this->ProsesDB->delete_data($where,'tusr_md');
  //           }
  //         }
  //         else{
  //           $where = array('USERNAME' => $usr);
  //           $this->ProsesDB->delete_data($where,'tusr_md');
  //         }
          
  //            // redirect('admin');
  //       }else{          
  //           $this->load->view('halaman/layout/vinstalasi');
  //       }
  //   }

  // function cetak_barang()
  // {
  //   $data['dataBarang'] = $this->Barang_model->get_all();
  //   $this->load->library('pdf');
  //   $this->pdf->setPaper('A4','potrait');
  //   $this->pdf->filename = "barang";
  //   $this->pdf->load_view('cetak/barang',$data);
  // }

}
