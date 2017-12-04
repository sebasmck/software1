<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 class ControladorUContableGCredito extends CI_Controller
 {
 	function __construct()
 	{
	  	parent::__construct();
	  	$this->load->model('ModeloUContableGCredito');
	  	$this->load->helper('url');
	    //$this->load->library('session');
  	}

  	function index()
  	{
  		$this->load->view('contableGCredito/headGCredito');
  		$this->load->view('contableGCredito/footGCredito');
  	}

  	public function generarCredito()
  	{
  		$generado = $this->ModeloUContableGCredito->generarCredito($this->input->post('idAfiliado'),$this->input->post('codLineaCredito'),$this->input->post('fechaAprobacion'),$this->input->post('fechaDesembolso'),$this->input->post('cuotas'),$this->input->post('valor'));
      $this->load->view('contableGCredito/headGCredito');
  		if($generado)
  		{
        $data = array("mensaje" => 'se genero el credito correctamente');
  		}
  		else
  		{
  			$data = array("mensaje" => 'el afiliado ya tiene un crédito con sea linea de crédito o el valor del crédito es mayor al cupo disponible');
  		}
      $this->load->view('contableGCredito/mensajeGCredito',$data);  
      $this->load->view('contableGCredito/footGCredito');
  	}
 }
?>