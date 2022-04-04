<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * |==============================================================|
 * | Mohon Jangan Merubah Informasin Ini:                         |
 * |--------------------------------------------------------------|
 * | Author          : MediaDigital                               |
 * | Email           : admin@mediadigitalofficial.com             |
 * | Filename        : Berita.php                                 |
 * | Instagram       : @mediadigital_                             |
 * | Website         : http://www.mediadigitalofficial.com        |
 * |==============================================================|
 */

class Ekskul extends CI_Controller{

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
    
  }

  
  function read()
  {
    $this->db->limit(7);
    $data['SemuaArtikel'] = $this->ProsesDB->get_artikel();
    $data['artikelacak'] = $this->ProsesDB->get_artikel_acak();
    $ida = str_replace("-"," ",$this->uri->segment(3));
    $jdl = str_replace("-"," ",$this->uri->segment(4));
    $id='';
    if($data['dataUser'] = $this->ProsesDB->get_user())
    {
      if($data['dataLembaga'] = $this->ProsesDB->get_lembaga($id)){
        $id=1;
        $data['dataartikel'] = $this->ProsesDB->get_eksul_id($ida);
        $data['slide'] = $this->ProsesDB->get_slide($id);
        $data['prevnext'] = $this->ProsesDB->get_artikel();
        //$data['nextA'] = $this->ProsesDB->get_artikel_next($ida);


        $this->load->view('halaman/layout/header', $data);
        $this->load->view('halaman/layout/mainhead',$data);
        //$this->load->view('halaman/layout/vbacaberita',$data);
        
       $this->load->view('halaman/layout/vbacaekskul', $data);
        $this->load->view('halaman/layout/slidebarid',$data);
        $this->load->view('halaman/layout/mainfoot');
        $this->load->view('halaman/layout/footer', $data);
        }
      }
    else
     $this->load->view('halaman/layout/vinstalasi');

  }

}
