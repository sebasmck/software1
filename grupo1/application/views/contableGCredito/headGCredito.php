<!DOCTYPE html>
<html>
<head>
	<title>Generar Credito</title>
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
		.formVPagos
		{
			margin-top: 3%;
			margin-left: 10%;
			width: 100%;
		}
		h4
		{
			margin-top: 10px;
		}
		h5
		{
			margin-left: 50px;
		}


	</style>
</head>
<body>
	<div class="contenido">
		<div class="barraNav">
			<a href="<?= base_url()?>index.php/PageController/dashboard">Regresar</a>
		</div>
		<div class="formVPagos">
			<form action="<?= base_url()?>index.php/ControladorUContableGCredito/generarCredito" method="post">
				<h4>Datos del afiliado</h4>
				<br>
				<h4>identificacion</h4>
				<input type="number" name="idAfiliado" class="inptCampo" required="true">
				<h4>codigo de la linea de credito</h4>
				<input type="number" name="codLineaCredito" class="inptCampo" min=1 max=999999999 required="true">
				<h4>fecha de aprobacion</h4>
				<input type="date" name="fechaAprobacion" class="inptCampo" required="true">
				<h4>fecha de desembolso</h4>
				<input type="date" name="fechaDesembolso" class="inptCampo" required="true">
				<h4>cuotas</h4>
				<input type="number" name="cuotas" class="inptCampo" min=1 max=999999999 required="true">
				<h4>valor del credito</h4>
				<input type="number" name="valor" class="inptCampo" min=1 max=999999999 required="true">

				<input type="submit" name="btnGenerarCredito" class="inptSubmit">
			</form>
		</div>

