<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Cari extends CI_Controller{

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

  function index($id)
  {
    $this->db->like('URAIAN', $id, 'both');      // Produces: WHERE `title` LIKE '%match%' ESCAPE '
    $this->db->limit(7);
    $data['SemuaArtikel'] = $this->ProsesDB->get_artikel();
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
         

        $this->load->view('halaman/layout/header', $data);
       // $this->load->view('halaman/layout/slide', $data);
        $this->load->view('halaman/layout/mainhead');
        //$this->load->view('halaman/layout/vsambutan');
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

}
