<?php
class Resize extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url', 'html'));
        $this->load->library(array('upload','image_lib'));
    }
    
    public function index()
    {
        $data = array();
        $data['error'] = '';
        $data['output'] = '';
         
        if(isset($_FILES['userfile']))
        {
            $this->upload->initialize(array(
                'upload_path' => './assets/', // nama folder gambar
                'allowed_types' => 'png|jpg|gif', // format gambar
                'max_size' => '5000', // maximal size gamabar dalam kb
                'max_width' => '3000', // lebar gamabar yang akan kita upload dalam px
                'max_height' => '3000' // tinggi gambar dalam px
            )); 
         
            if($this->upload->do_upload())
            {
                $data_upload = $this->upload->data();
                $this->image_lib->initialize(array(
                    'image_library' => 'gd2', //library yang kita gunakan
                    'source_image' => './assets/'. $data_upload['file_name'],
                    'maintain_ratio' => FALSE,
                    'create_thumb' => TRUE,
                ));
                 
                if($this->image_lib->resize())
                {
                    $output = '<h3>Thumb - Hasil Resize</h3>';
                    $output .= '<div class="col-md-12">'.img('./assets/'.$data_upload['raw_name'].'_thumb'.$data_upload['file_ext']).'</div>';
                    $output .= '<h3>Gambar Awal</h3>';
                    $output .= '<div class="col-md-12">'.img('./assets/'.$data_upload['file_name']).'</div>';
                     
                    $data['output'] = $output;
                }
                else
                {
                    $data['error'] = $this->image_lib->display_errors();
                }
                 
            }
            else
            {
                $data['error'] = $this->upload->display_errors();
            }
        }
         
        $this->load->view('resize_view', $data);
    }
}