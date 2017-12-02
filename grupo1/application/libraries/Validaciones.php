<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Validaciones{

public function __construct(){
}

    function validarNumero($n)
    {
        try{
             if(is_numeric($n)){
                return true;
             }
             else{
               return false;
             }
        }
        catch (Exception $a){
            return false;
        }
    }

    function validarFecha($f)
    {
        try{
            
            $fe = substr($f,0,10);
            
            $val= explode("-",$fe);
            $m=$val[1];
            $d=$val[2];
            
            if(substr($m,0,1) == '0')
            {
                $m=substr($m,1);
            
            }
            if(substr($d,0,1) == '0')
            {
                $d = substr($d,1);
            
            }
            
                if(checkdate((int)$m,(int)$d,(int)$val[0]))
                {
                    echo 'true en el if';
                    return true;
                }
                else
                {
                    echo 'false en el else';
                    return false;
                }
            }
            catch(Exception $a)
            {
            echo 'false en el catch 2';
            return false;
            }
            
    }

 

}



?>