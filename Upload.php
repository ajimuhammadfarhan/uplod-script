//ini script yang dicontrollernya
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends Dashboard_Controller {
      public $data = array(
        'halaman' => 'Upload',
        'main_view' => 'dashboard/upload',
        'title'  => 'upload_file',
    );

 public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

 public function index()
 {
  $this->load->view($this->layout, $this->data);
 }
 
 function do_upload_multi()
 {        
             $this->load->library('upload');
  
      //Configure upload.
             $this->upload->initialize(array(
   "allowed_types" => "gif|jpg|png|jpeg",
                 "upload_path"   => "./uploads/"
             ));
        
             //Perform upload.
             if($this->upload->do_upload("images")) {
                 $uploaded = $this->upload->data();
                 echo '<pre>';
   echo('BERHASIL UPLOAD');
   $this->load->view($this->layout, $this->data);
   echo '</pre>';
             }else{
             echo '<pre>';
   echo('GAGAL UPLOAD');
   $this->load->view($this->layout, $this->data);
   echo '</pre>';
      }
 }
}
