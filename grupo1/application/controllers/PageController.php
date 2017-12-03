<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PageController extends CI_Controller {
  
  function __construct(){
  	parent::__construct();
  	$this->load->model('ModeloLogin');
  	$this->load->helper('url');
    $this->load->library('session');
  }

function index() {
    $data['message'] = ''; //mensaje en caso de que los datos sean incorrectos
    $this->load->view('welcome', $data); //cambiar por la nueva vista del login
 }

  public function welcome(){
    $this->load->view('welcome');
  }

  public function login_recaudo(){
    $data['message'] = ''; //mensaje en caso de que los datos sean incorrectos
    $this->load->view('recaudo/login_recaudo', $data);
  }

  public function login_contable(){
    $this->load->view('contable/login_contable');
  }



  public function subirArchivo (){ 
    $this->load->view('recaudo/subir_archivo');
  }

  public function dashboard(){
    $this->load->view('recaudo/ventana_administrador');
  }



}
?>

