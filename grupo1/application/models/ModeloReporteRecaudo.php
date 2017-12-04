<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class ModeloReporteRecaudo extends CI_Model 
{
	function __construct()
	{
   parent::__construct();
   $this->load->database();
 }	 

 
 function obtenerEntidades () 
 {
  $query = $this->db->get("entidad_pago");
  if ($query -> num_rows() > 0) 
  {
   return $query->result(); ;
 }else
 {
  return false;  
} 
}

function obtenerDatosReporte ($datos)
{
    // $id_entidad=$datos['id_entidad'];
    // $fecha_inicial=$datos['finicial'];
    // $fecha_final = $datos['ffinal']; 

   $query =  $this->db->query(
    "SELECT Nombre_EntidadPago, Valor_Consignado, FechaRecaudo FROM entidad_pago, detalle_pago WHERE entidad_pago.id = detalle_pago.id_EntidadPago AND entidad_pago.id = ".$this->db->escape($datos)." " );
   if ($query -> num_rows() > 0) 
   {
        return $query;
   }else
   {
      return false;  
   } 

}


}

?>