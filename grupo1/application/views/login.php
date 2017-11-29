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
	<form action="<?= base_url()?>index.php/ControladorLogin/iniciarSesion" method="post">
		
		<div class="message">
			<?= $message ?>
		</div>

		
		<div id="loginbox">            
            <form id="loginform" class="form-vertical" action="index.html">
				 <div class="control-group normal_text"> <h3><img src="/logo.png" alt="Inicio de sesion" /></h3></div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user"> </i></span>
                            <input name="nombre_usuario" type="text" placeholder="Nombre de usuario" />
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span>
                            <input name="clave_usuario" type="password" placeholder="Contrasena" required="true" />
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
            <form id="recoverform" action="#" class="form-vertical">
				<p class="normal_text">Enter your e-mail address below and we will send you instructions how to recover a password.</p>
				
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lo"><i class="icon-envelope"></i></span><input type="text" placeholder="E-mail address" />
                        </div>
                    </div>
               
                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link btn btn-success" id="to-login">&laquo; Back to login</a></span>
                    <span class="pull-right"><a class="btn btn-info"/>Reecover</a></span>
                </div>
            </form>
        </div>



	</form>


<?php include('partials/footer.php') ?>

</body>
</html>