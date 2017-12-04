<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ModeloUContableGCredito extends CI_MODEL
{
	function __construct()
	{
		 parent::__construct();
		 $this->db_p = $this->load->database('postgres',TRUE);
	}	

	function tieneCredito($codAfiliado,$lineaCredito)
	{
		$consulta = "SELECT afiliado.id_afiliado FROM afiliado JOIN CREDITO ON(afiliado.id_afiliado = credito.id_afiliado) JOIN linea_de_credito ON(credito.id_linea_de_credito = linea_de_credito.id_linea_de_credito) WHERE afiliado.id_afiliado = '$codAfiliado' AND linea_de_credito.id_linea_de_credito = $lineaCredito;";
		$resultado = $this->db_p->query($consulta);
		if ($resultado -> num_rows() > 0) 
   		{
    	   return true;
   		}else
   		{
   	  		return false;  
   		} 
	}

	function generarCredito($codAfiliado,$codLineaCredito,$fechaAprobacion,$fechaDesembolso,$cuotas,$valor)
	{
		$tieneCredito = $this->tieneCredito($codAfiliado,$codLineaCredito);
		$gCupo = $this->getCupo($codAfiliado,$codLineaCredito);
		//$cupoActual = array("cupo" => $gCupo );
		//$cupoAfiliado = $cupoActual["cupo"];
		//foreach ($gCupo as $fila) 
		//{
			//$cupoAfiliado = $fila->cupo_afiliado;
		//}

		if($tieneCredito)
		{
			return false;
		}
		else
		{
			$consulta = "INSERT INTO credito(id_afiliado,id_linea_de_credito,fecha_aprobacion,fecha_desembolso,cuotas_credito,valor_credito,valor_pagado) 
			VALUES($codAfiliado,$codLineaCredito,'$fechaAprobacion','$fechaDesembolso',$cuotas,$valor,0);";
			$resultado = $this->db_p->query($consulta);
			if ($resultado) 
	   		{
	    		return true;
	   		}else
	   		{
	   	  		return false;  
	   		} 
		}
	}

	function getCupo($codAfiliado)
	{
		$consulta = "SELECT cupo_afiliado FROM afiliado WHERE id_afiliado = '$codAfiliado';";
		$resultado = $this->db_p->query($consulta);
		if ($resultado -> num_rows() > 0) 
   		{
    	   return $resultado;
   		}else
   		{
   	  		return false;  
   		} 
	}
}
?>	