<!DOCTYPE html>
<html lang="en">
<head>


	<meta charset="UTF-8">
	<title>Iniciar Sesión</title>
	
	<?php 

		echo link_tag('css/temporal.css');

	 ?>

</head>
<body>
	<form action="<?= base_url()?>index.php/ControladorLogin/iniciarSesion" method="post">
		<div class="message">
			<?= $message ?>
		</div>
		<h2>Login Usuario</h2>
		<input type="text" placeholder="Usuario" name="usuario" required="true">
		<input type="password" placeholder="Contraseña" name="clave" required="true">
		<input type="submit" value="Ingresar" >
	</form>
</body>
</html>