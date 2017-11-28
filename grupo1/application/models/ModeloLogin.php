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
     $query =  $this->db->query("SELECT UserName,Contrasena FROM usuario
      	  WHERE UserName= '$usuario' AND Contrasena='$clave'");
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