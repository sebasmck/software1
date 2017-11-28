<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControladorLogin extends CI_Controller {
  function __construct(){
  	parent::__construct();
  	$this->load->model('ModeloLogin');
  	$this->load->helper('url');
  }
	function index() {
		$data['message'] = ''; //mensaje en caso de que los datos sean incorrectos
		$this->load->view('login', $data); //cambiar por la nueva vista del login

 }
 public function iniciarSesion()
 {
   	$resultado = $this->ModeloLogin->iniciarSesion($this->input->post('usuario'),$clave = $this->input->post('clave'));
    $data['message'] = 'Datos No Validos';
    if ($resultado) 
    {
    	$this->load->view('VentanaAdministrador');  //modulo del admin
    	echo "Usuario: ";
    }
    else
    {
    	$this->load->view('login',$data); //vista login
    } 
 }

}
?>

