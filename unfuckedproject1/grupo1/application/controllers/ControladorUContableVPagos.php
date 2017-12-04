<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 class ControladorUContableVPagos extends CI_Controller
 {
 	function __construct()
 	{
	  	parent::__construct();
	  	$this->load->model('ModeloUContableVPagos');
	  	$this->load->helper('url');
	    //$this->load->library('session');
  	}

  	function index()
  	{
  		$this->load->view('contableVPagos/headVPagos');
  		$this->load->view('contableVPagos/footVPagos');
  	}

  	public function getPagos()
  	{
  		$idCliente = $this->input->post('idAfiliado');
  		$resultado = $this->ModeloUContableVPagos->getPagos($idCliente);
  		$this->load->view('contableVPagos/headVPagos');
  		if($resultado)
  		{
  			$data = array('consulta' => $resultado);
  			$this->load->view('contableVPagos/reportePagosVPagos',$data);
  		}
  		$this->load->view('contableVPagos/footVPagos');
  	}
 }
?>