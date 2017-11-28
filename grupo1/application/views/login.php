<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Iniciar Sesión</title>
	<style >
	* {
	margin: 0;
	padding: 0;
	font-family: sans-serif;
	box-sizing: border-box;
	color: #E1E1E1;
}

body{
background-color: #C6D3C3;
display: flex;
min-height: 100vh;
margin: 0;

}

form 
{
	margin: auto;
	width: 50%;
	max-width: 500px;
	background-color: #47525E;
	padding: 30px;
	border: 1px solid rgba (0,0,0,0,2);
}
h2
{
	text-align: center;
	margin-bottom: 20px;
	color:rgba(0,0,0,0,5);
}
input 
{
	display: block;
	padding: 10px;
	width: 100%;
	margin: 30px 0;
	font-size: 20px;
}
input[type ="submit"]
{
 background-color: #98D788;
 border: 0;
 color:black;
 opacity: 0.8;
 cursor: pointer;
 margin-bottom: 0;
}
input[type ="submit"]:hover
{
	opacity:1;
}
input[type ="submit"]:active
{
	transform-scale:(0,95);
}
div.message
 {
	color: red;
	font-family: "Arial Rounded MT Bold", "Helvetica Rounded", Arial, sans-serif;
	font-size: 20px;
	margin-bottom: 5%;
}
@media (max-width: 768px) 
{
	form
	{
		width:95%;
	}
	
}	
	</style>
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