<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PageController extends CI_Controller {
  
  function __construct(){
  	parent::__construct();
  	$this->load->model('ModeloLogin');
  	$this->load->helper('url');
    $this->load->library('session');
  }


  public function subirArchivo (){ 
    $this->load->view('subir_archivo');
  }

  public function dashboard(){
    $this->load->view('ventana_administrador');
  }

}
?>

