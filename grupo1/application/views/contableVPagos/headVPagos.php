<!DOCTYPE html>
<html>
<head>
	<title>Reporte de pagos</title>
	<style type="text/css">
		*
		{
			margin: 0px;
			padding: 0px;
			font-family: sans-serif;
			background-color: #2D3F44;
			color: #A4A4A4;
		}
		a
		{
			background-color: #1f262d;
			text-decoration: none;
		}
		.inptCampo
		{
			background-color: #F4F4F4;
		}
		.inptSubmit
		{
			background-color: #1f262d;
			padding: 3px 5px;
			border: none;
			font-size: 18px;
		}
		.contenido
		{
			background-color: #2D3F44;
			height: 100%;
		}
		.barraNav
		{
			background-color: #1f262d;
			height: 2em;
		}
		.formVPagos, .reportePagos
		{
			margin-top: 3%;
			margin-left: 10%;
		}
		td
		{
			background-color: #464F52; 
		}


	</style>
</head>
<body>
	<div class="contenido">
		<div class="barraNav">
			<a href="<?= base_url()?>index.php/PageController/dashboard">Regresar</a>
		</div>
		<div class="formVPagos">
			<form action="<?= base_url()?>index.php/ControladorUContableVPagos/getPagos" method="post">
				<h4>ID del afiliado:</h4>
				<input type="number" name="idAfiliado" class="inptCampo" required="true">
				<input type="submit" name="btnBuscarAfiliado" class="inptSubmit">
			</form>
		</div>


