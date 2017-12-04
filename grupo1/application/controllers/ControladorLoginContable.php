<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControladorLoginContable extends CI_Controller {
  function __construct(){
  	parent::__construct();
  	$this->load->model('ModeloLoginContable');
  	$this->load->helper('url');
    $this->load->library('session');
  }

public function index(){
  $this->load->view('welcome');
}

  
 public function iniciarSesion(){
  $usuario = $this->input->post('usuario');
  $resultado = $this->ModeloLoginContable->iniciarSesion($this->input->post('nombre_usuario'),$clave = $this->input->post('clave_usuario'));
  $data['message'] = 'Datos No Validos';
  if ($resultado) {
      $this->session->set_userdata($usuario); //inicio de manejo de sesion
      //para finalizar, ejecutar $this->session->sess_destroy(); al presionar en log out o donde corresponda
    	$this->load->view('contable/Ventana_administrador');  //modulo del admin
    	echo "Usuario: $usuario";
    }
    else{
    	$this->load->view('contable/login_contable',$data); //vista login
    } 
  }

    public function sessionDestroy(){

    $this->session->sess_destroy();
    redirect('controladorLoginContable');  
 }
}
?>

