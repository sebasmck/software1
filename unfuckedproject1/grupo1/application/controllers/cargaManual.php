<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CargaManual extends CI_Controller {

    function __construct(){
        parent:: __construct();
        $this->load->model('modelocargamanual');
        $this->load->helper('form');
        $this->load->library('util');
        $this->load->library('validaciones');
    }

    function cargarDatos()
    {

      $idEntidad = $this->input->post('identidad');

        set_time_limit(10800);

     
        $rutaArchivo='C:/Recaudo/Manual';
        $config=[
            'allowed_types' =>"csv",
            'upload_path'=>$rutaArchivo
        ];

        $this->load->library('upload', $config);

        if($this->upload->do_upload('archivo'))
        {
            $datos_archivo= array("datos" =>$this->upload->data());
            $nombre_archivo = $datos_archivo['datos']['file_name'];
            $rutaArchivo = $rutaArchivo."/".$nombre_archivo;
            $this->leerArchivoGenerico($rutaArchivo,$nombre_archivo,$idEntidad);
            
        }
        else{
            echo $this->upload->display_errors();
        }
     }
//FALTA VALIDACION TAMAÑO DE LOS DATOS Y ESPACIOS
     function leerArchivo($rutaArchivo, $nombreArchivo,$idEntidad)
     { //faltan fallos por formato de los datos
        
        $archivoL= file($rutaArchivo);
        $linea=0;
        $totalRecaudo=0;
        $nInfo=-1;
        $infoFalla;
        $numRegistros=0;
        

        echo $info[$nInfo++]="Nombre del archivo: $nombreArchivo";

        $fechaIni = $this->util->calcularFecha();

        echo $info[$nInfo++]="Fecha inicial de carga: $fechaIni";

        foreach($archivoL as $fila)
        {
            
            if($linea > 0){
           
            $arreglo = explode(";",$fila);
            $v0=trim($arreglo[0]);
            $v1=trim($arreglo[1]);
            $v2=trim($arreglo[2]);
            $v3=trim($arreglo[3]);
            $v4=trim($arreglo[4]);
            $v5=trim($arreglo[5]);
            $v6=trim($arreglo[6]);
            $v7=trim($arreglo[7]);              
            

            if(validarTiposDeDatos($v0,$v3,$v5,$v4,$v6,$v7,$idEntidad))
            {
                if($idEntidad == 1)
                {
                      if($this->verificarCreditoCon($v6,$v0,$v1,$v2))
                       {
                           $idEncabezado = $this->ModeloCargaManual->crearEncabezado($nombreArchivo);
                           $idDetalle = $this->ModeloCargaManual->crearDetalle($idEncabezado,$v5,$v4,$v6);
                           $this->ModeloCargaManual->crearDetalleBanco($v3,$idDetalle,$v7);
                           $numeroRegistros ++;
                       }
                       else{
                             $infoFalla="Linea $linea: El número de referencia no coincide con la cédula del afiliado.";
                       }
                }
                else if($idEntidad == 2)
                {
                       if($this->verificarCreditoCon($v5,$v0,$v1,$v2))
                       {
                            $this->ModeloCargaManual->crearEncabezado($nombreArchivo);
                            $idDetalle = $this->ModeloCargaManual->crearDetalle($idEncabezado,$v4,$v6,$v5);
                            $this->ModeloCargaManual->crearDetalleEfecty($v3,$idDetalle,$v7);
                            $numeroRegistros ++;
                       }
                       else{
                            $infoFalla="Linea $linea: El número de crédito no coincide con la cédula del afiliado.";
                        }
                }
            }
            else{
                $infoFalla="Linea $linea: Revise los datos, algunos no corresponden al tipo o formato que deben tener según su columna.";

            }

        }
        $linea++;

        }

        $this->ModeloCargaManual->modificarEncabezado($numRegistros, $tiempoDeCarga,$fecha)
        

     }


     function verificarCreditoCon($codCredito,$v0,$v1,$v2)
     {
         $afiliado = $this->ModeloCargaManual->verificarCredito($codCredito);
 
         if($afiliado->num_rows >0)
         {
            if((int)$v0 == $afiliado)
            {
                return true;
            }
            else{
               return false;
            }
         }
         else{
            
               $this->verificarAfiliadoCon($v0,$v1,$v2);
               $this->ModeloCargaManual->agregarCredito($codCredito,$v0);
               return true;
            
         }
     }


    function verificarAfiliadoCon($v0,$v1,$v2)
    {
        $afiliado = $this->ModeloCargaManual->verificarAfiliado($v0);

        if($afiliado->num_rows <1)
        {
            $this->ModeloCargaManual->agregarAfiliado($v0,$v1,$v2);
        }
    }



            // e(4), g(6) y h(7) cambian

            function validarTiposDeDatos($v0,$v3,$v5,$v4,$v6,$v7,$idEntidad)
            {
             
               if(!$this->validaciones->validarNumero($v0) ||  !$this->validaciones->validarNumero($v3) || !$this->validaciones->validarNumero($v5))
               {
                   return false;
               }
               else if($idEntidad == 1)  //Si es una entidad bancaria
               {
                  if(!$this->validaciones->validarNumero($v6) || !$this->validaciones->validarFecha($v4))
                  {
                   return false;
                  }
                  else{
                      return true;
                  }
                
               }
               else if($idEntidad == 2)   //si es un Efecty
               {
                   if(!$this->validaciones->validarNumero($v4) || !$this->validaciones->validarNumero($v7) || !$this->validaciones->validarFecha($v6))
                   {
                    return false;
                   }
                   else{
                       return true;
                   }
               }
            }
       
          
       
       
}
?>