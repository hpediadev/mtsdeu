<?php 

class Demo extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
    }

    function index(){
        $this->load->view('halaman/layout/demo');
    }

    function aksi(){
            $this->load->view('halaman/layout/demo');
        
    }
}