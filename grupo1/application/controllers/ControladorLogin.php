<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControladorLogin extends CI_Controller {
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
 public function iniciarSesion(){
  $usuario = $this->input->post('usuario');
  $resultado = $this->ModeloLogin->iniciarSesion($this->input->post('nombre_usuario'),$clave = $this->input->post('clave_usuario'));
  $data['message'] = 'Datos No Validos';
  if ($resultado) {
      $this->session->set_userdata($usuario); //inicio de manejo de sesion
      //para finalizar, ejecutar $this->session->sess_destroy(); al presionar en log out o donde corresponda
    	$this->load->view('recaudo/Ventana_administrador');  //modulo del admin
    	echo "Usuario: $usuario";
    }
    else{
    	$this->load->view('recaudo/login_recaudo',$data); //vista login
    } 
  }

  public function subirArchivo (){ 
    $this->load->view('recaudo/subir_archivo');
  }

    public function sessionDestroy(){

    $this->session->sess_destroy();
    redirect('controladorLogin');  
 }
}
?>

