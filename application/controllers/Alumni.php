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

class Alumni extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('ProsesDB');
    // load form and url helpers
    $this->load->helper(array('form', 'url'));
     
    // load form_validation library
    $this->load->library('form_validation');

    $this->load->model('m_data');
        $data['all'] = $this->ProsesDB->get_artikel();

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
         $jumlah_data = $this->m_data->jumlahData('ttestimoni_md');
         $this->load->library('pagination');
         $config['base_url'] = base_url().'alumni/index';
         $config['total_rows'] = $jumlah_data;
         $config['per_page'] = 1;
         $from = $this->uri->segment(3);
        $config['next_link'] = '>';
        $config['prev_link'] = '<';
        $config['first_link'] = '<<';
        $config['last_link'] = '>>';
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li><a  style="background-color:green;color:white" href="#">';
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

        $this->db->order_by('IDTESTI','DESC');
         $data['user'] = $this->m_data->vdata('ttestimoni_md',$config['per_page'],$from);
         

        $this->load->view('halaman/layout/header', $data);
        //$this->load->view('halaman/layout/slide', $data);
        $this->load->view('halaman/layout/mainhead');
        $this->load->view('halaman/layout/valumni', $data);
        $this->load->view('halaman/layout/mainslidebar',$data);
        $this->load->view('halaman/layout/mainfoot');
        $this->load->view('halaman/layout/footer', $data);
        }
      }
    else
     $this->load->view('halaman/layout/vinstalasi');
    
  }

  function indexd()
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


        $this->load->view('halaman/layout/header', $data);
        $this->load->view('halaman/layout/slide', $data);
        $this->load->view('halaman/layout/mainhead');
        $this->load->view('halaman/layout/vberita', $data);
        $this->load->view('halaman/layout/mainslidebar',$data);
        $this->load->view('halaman/layout/mainslidebar');
        $this->load->view('halaman/layout/mainfoot');
        $this->load->view('halaman/layout/footer');
        }
      }
    else
     $this->load->view('halaman/layout/vinstalasi');
    
  }
  
  function read($tgl, $bln, $thn, $jdl)
  {
    
    $this->db->limit(7);
    $data['SemuaArtikel'] = $this->ProsesDB->get_artikel();
    $data['artikelacak'] = $this->ProsesDB->get_artikel_acak();
    // $ida = str_replace("-"," ",$this->uri->segment(3));
    // $jdl = str_replace("-"," ",$this->uri->segment(4));
    $id='';

    if($data['dataUser'] = $this->ProsesDB->get_user())
    {
      if($data['dataLembaga'] = $this->ProsesDB->get_lembaga($id)){
        $id=1;

        // $data['dataartikel'] = $this->ProsesDB->get_artikel_rinci($jdl);
        $t= $thn.'-'.$bln.'-'.$tgl;
        $where = array('LINK'=> $jdl);
        $this->db->like('TANGGALARTIKEL',$t,'both');
        $data['dataartikel'] = $this->ProsesDB->getData('tartikel_md', $where)->result();
        $tg=0;
        foreach ($data['dataartikel'] as $ve) {
          $tg = $ve->TANGGALARTIKEL;
        }
        $this->db->limit(2);
        $data['nextNews'] = $this->ProsesDB->get_artikel_PrevNext();



        $data['slide'] = $this->ProsesDB->get_slide($id);
        $data['prevnext'] = $this->ProsesDB->get_artikel();
        //$data['nextA'] = $this->ProsesDB->get_artikel_next($ida);

        $where = array('LINK'=> $jdl);
        $this->db->limit(2);
        $this->db->order_by('IDARTIKEL','ASC');
        $data['after'] = $this->ProsesDB->getData('tartikel_md', $where)->result();


        // $where = array('LINK'=> $jdl);
        // $this->db->limit(2);
        // $this->db->order_by('IDARTIKEL','DESC');
        // $data['before'] = $this->ProsesDB->getData('tartikel_md', $where)->result();

        $where = array();
        $this->db->limit(1);
        $this->db->where('TANGGALARTIKEL <', $tg);
        $data['before'] = $this->ProsesDB->getData('tartikel_md', $where)->result();

        $where = array('LINK'=> $jdl);
        $sql = $this->ProsesDB->getData('tartikel_md', $where)->result();
        $v='';
        $id ='';
        foreach ($sql as $v) {
          $u = $v->USERNAME;
          $id = $v->IDARTIKEL;
        }
        $where = array('USERNAME'=> $u);
        $data['datUser'] = $this->ProsesDB->getData('tusr_md', $where)->result();
        
        $where = array(
          'IDARTIKEL'=> $id,
          'AKTIF' => true
        );
        $data['datKom'] = $this->ProsesDB->getData('tkomentar_md', $where)->result();



        $this->load->view('halaman/layout/header', $data);
        $this->load->view('halaman/layout/mainhead',$data);
        $this->load->view('halaman/layout/vbacaberita',$data);
       // echo $this->uri->segment(3);
       // $this->load->view('halaman/layout/maincenter', $data);
        $this->load->view('halaman/layout/mainslidebar',$data);
        $this->load->view('halaman/layout/mainfoot');
        $this->load->view('halaman/layout/footer');
        }
      }
    else
     $this->load->view('halaman/layout/vinstalasi');
    
  }

  function simpan(){

        $data = array(
            'IDARTIKEL'=>$this->input->post('id'),
            'NAMA'=>$this->input->post('nama'),
            'KOMENTAR'=>$this->input->post('komentar'),
            'EMAIL' => $this->input->post('email'),
            );
        $sql = $this->db->insert('tkomentar_md', $data);
        $this->session->set_userdata("nama","Sukses");
        redirect();
  }

  function cari()
  {
    $datacari = $this->input->post('cari');
    // echo $datacari;
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
         $jumlah_data = $this->m_data->jumlah_data();
         $this->load->library('pagination');
         $config['base_url'] = base_url().'berita/index';
         $config['total_rows'] = $jumlah_data;
         $config['per_page'] = 5;
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
         $data['user'] = $this->m_data->data($config['per_page'],$from);
         $this->db->like('JUDUL', $datacari, 'both');  
         $this->db->or_like('URAIAN', $datacari, 'both');  
         $data['user'] = $this->ProsesDB->get_artikel_cari();
         

        $this->load->view('halaman/layout/header', $data);
        //$this->load->view('halaman/layout/slide', $data);
        $this->load->view('halaman/layout/mainhead');
        $this->load->view('halaman/layout/vcari', $data);
        $this->load->view('halaman/layout/mainslidebar',$data);
        $this->load->view('halaman/layout/mainfoot');
        $this->load->view('halaman/layout/footer', $data);
        }
      }
    else
     $this->load->view('halaman/layout/vinstalasi');
    
  }


}
