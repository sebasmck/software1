<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class ModeloCargaManual extends CI_Model {

function __construct(){
    parent:: __construct();
    $this->load->database();
}

function crearEncabezado($nombreArchivo)
{
    $sql= "INSERT into encabezado (nombre_archivo) values(?)";
    $this->db->query($sql, array($nombreArchivo));
    return $this->db->insert_id();
}

function modificarEncabezado($numeroRegistros, $tiempoDeCarga,$fecha)
{
    $sql= "INSERT into encabezado (numero_registros, tiempo_de_carga,fecha) values(?)";
    $this->db->query($sql, array($numeroRegistros, $tiempoDeCarga,$fecha));
}

function verificarAfiliado($codAfiliado)
{
    $sql= "SELECT cod_afiliado from afiliado where cod_afiliado=?";
    $this->db->query($sql, array($codAfiliado));
    return $query->row()->cod_afiliado;
}

function agregarAfiliado($codAfiliado,$nombre,$apellido)
{
    $sql= "INSERT into afiliado values(?,?,?)";
    $this->db->query($sql, array($codAfiliado,$nombre,$apellido));
}


function verificarCredito($codCredito)
{
    $sql= "SELECT cod_afiliado from credito where cod_credito=?";
    $this->db->query($sql, array($codCredito));
    return $query->row()->cod_afiliado;
}

function agregarCredito($codCredito,$codAfiliado)
{
    $sql= "INSERT into credito values(?,?)";
    $this->db->query($sql, array($codCredito,$codAfiliado));
}

function crearDetalle($codEncabezado,$valorPagado,$fechaRecaudo,$codCredito)
{
    $sql= "INSERT into detalle_pago (cod_encabezado,valor_pagado,fecha_recaudo,cod_credito) VALUES(?,?,?,?)";
    $this->db->query($sql, array($codEncabezado,$valorPagado,$fechaRecaudo,$codCredito));
    return $this->db->insert_id();
}

function crearDetalleBanco()
{
    $sql= "INSERT into pago_banco (cod_banco,cod_detalle_pago,codigo_barras) VALUES(?,?,?)";
    $this->db->query($sql, array($codBanco,$codDetallePago,$codigoBarras));
}

function crearDetalleEfecty($codOficina,$codDetallePago,$valorComision)
{
    $sql= "INSERT into pago_efecty (cod_oficina,cod_detalle_pago,valor_comision) VALUES(?,?,?)";
    $this->db->query($sql, array($codOficina,$codDetallePago,$valorComision));
}


}
?>



