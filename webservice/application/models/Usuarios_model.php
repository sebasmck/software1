<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function buscar($cedula)
    {
        //    $query = $this->db->select('*')->from('cliente')->where('cod_cliente', $cod_cliente)->get();
          //      return $query->row_array();

         //$query = $this->db->query("Select * from cliente,fact where fact.cod_cliente=cliente.cod_cliente and CLIENTE.cod_cliente=".$cod_cliente);
        $query = $this->db->query("SELECT nombre_afiliado, cupo_afiliado
    FROM afiliado where id_afiliado='".$cedula."'");
        return $query->row();
    }

}

