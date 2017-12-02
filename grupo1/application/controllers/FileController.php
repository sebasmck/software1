<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FileControler extends CI_Controller {
  function __construct(){
  	parent::__construct();
  	$this->load->model('ModeloLogin');
  	$this->load->helper('url');
    $this->load->library('session');
  }
	function index() {
		$data['message'] = ''; //mensaje en caso de que los datos sean incorrectos
		$this->load->view('subir_archivo', $data); //cambiar por la nueva vista del login
 }

}