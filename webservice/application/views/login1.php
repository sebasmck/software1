<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap-responsive.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/matrix-login.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('font-awesome/css/font-awesome.css') ?>">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>





<body >
	<form action="<?= base_url()?>index.php/LoginAfiliado/iniciar_sesion_post" method="post">
		
		

		
		<div id="loginbox">            
            <form id="loginform" class="form-vertical" action="index.html">
               <div class="control-group normal_text"> <h3><img src="/logo.png" alt="Inicio de sesion" /></h3></div>
               <div class="control-group">
                <div class="controls">
                    <div class="main_input_box">
                        <span class="add-on bg_lg"><i class="icon-user"> </i></span>
                        <input name="id_afiliado" type="text" placeholder="Nombre de usuario" />
                    </div>
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <div class="main_input_box">
                        <span class="add-on bg_ly"><i class="icon-lock"></i></span>
                        <input name="contrasena" type="password" placeholder="Contrasena" required="true" />
                    </div>
                </div>
            </div>
            <div class="form-actions">
                <center>
                    <span class="pull-center"> 
                      <button type="submit" class="btn btn-success">Login</button>
                      <!-- <a type="submit" class="btn btn-success" /> Login</a></span> -->
                  </center>
              </div>
          </form>
    </div>



</form>


<!--?php include('partials/footer.php') ?-->

</body>
</html>