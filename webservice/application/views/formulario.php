<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Menú afiliado </title>
    <link rel = "stylesheet" type = "text/css" 
     href = "<?php echo base_url(); ?>css/estilos.css">

<nav>
    
            <ul>
                
                <li><a href="/CodeIgniter/index.php/usuarios/"><FONT FACE="arial">Inicio</FONT></a></li>
                <li><a href="/CodeIgniter/index.php/Generador/"><FONT FACE="arial">Generar Código QR</FONT></a></li>


                </FONT>

            </ul>

        </nav>
        <br><br><br><br>

<center>
 <FONT size=5 FACE="arial"> <?php echo form_open('form'); 
 echo form_label('Ingresa tu cédula para ver la información', 'nombre');
 echo '<br>';
 echo form_input('cedula');?>
  <div><input type="submit" value="Enviar" /></div>
</font></form></center>


    </body>
</html>