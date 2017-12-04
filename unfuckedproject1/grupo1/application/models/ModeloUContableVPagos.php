<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ModeloUContableVPagos extends CI_MODEL
{

	function __construct()
	{
		 parent::__construct();
		 $this->db_p = $this->load->database('postgres',TRUE);
	}	

	public function getPagos($idCliente)
	{
		$consulta = "SELECT afiliado.id_afiliado, nombre_afiliado, nombre_entidad, id_pago, fecha_pago, monto_pago FROM afiliado JOIN credito ON(afiliado.id_afiliado = credito.id_afiliado)
			JOIN pago on(credito.id_credito = pago.id_credito)
			JOIN tipo_entidad ON(pago.id_entidad = tipo_entidad.id_entidad) WHERE afiliado.id_afiliado = '$idCliente'";
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