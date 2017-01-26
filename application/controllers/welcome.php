<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Welcome extends CI_Controller {
  public function index() {
    // $path = base_url().'js/ckfinder';
    $path = base_url().'/assets/js/ckfinder';
    $width = '850px';
    $this->editor($path, $width);
    $this->form_validation->set_rules('description', 'Page Description', 'trim|required|xss_clean');
    if ($this->form_validation->run() == FALSE) {
      $this->load->view('welcome_message');
    }
    else {
      // do your stuff with post data.
      echo $this->input->post('description');
    }
  }
  function editor($path,$width) {
    //Loading Library For Ckeditor
    $this->load->library('ckeditor');
    $this->load->library('ckFinder');
    //configure base path of ckeditor folder 
    $this->ckeditor->basePath = base_url().'/assets/js/ckeditor/';
    $this->ckeditor-> config['toolbar'] = 'Full';
    $this->ckeditor->config['language'] = 'en';
    $this->ckeditor-> config['width'] = $width;
    //configure ckfinder with ckeditor config 
    $this->ckfinder->SetupCKEditor($this->ckeditor,$path); 
  }
}