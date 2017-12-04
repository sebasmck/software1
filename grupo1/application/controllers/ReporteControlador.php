<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReporteControlador extends CI_Controller {
	function __construct(){
		parent::__construct();

		$this->load->model('ModeloReporteRecaudo');
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->library('export_excel');
	}


	function index() {
		$data['message'] = ''; //mensaje en caso de que los datos sean incorrectos
		$data['entidades'] = $this->ModeloReporteRecaudo->obtenerEntidades();
		$this->load->view('reportes', $data); 
	}	


	public function generarReporte(){

     $id_entidad = $this->input->post('id_entidad');
     

     $resultado = $this->ModeloReporteRecaudo->obtenerDatosReporte($id_entidad);
    

    if ($resultado) 
    { 
      $resultado1 = $this->ModeloReporteRecaudo->obtenerDatosReporte();
      $data['entidades'] = $resultado1;
   
     
      $this->export_excel->to_excel($resultado, 'Archivo_Excel');
    }
    else
    {
      
      echo"no Entro a la consulta";
    } 
 }










}