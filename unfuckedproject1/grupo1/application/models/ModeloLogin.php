<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class ModeloLogin extends CI_Model 
{
	function __construct()
	{
		 parent::__construct();
		 $this->load->database();
	}	 

  function iniciarSesion ($usuario,$clave)
  {
     $query =  $this->db->query("SELECT nombre_usuario,clave_usuario FROM usuario
      	  WHERE nombre_usuario= '$usuario' AND clave_usuario='$clave'");
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