<div class="reportePagos">
	<table border="1">
		<tr>
			<td>ID del afiliado</td>
			<td>Nombre del afiliado</td>
			<td>Entidad donde se realizó el pago</td>
			<td>ID del pago</td>
			<td>Fecha del pago</td>
			<td>Monto pagado</td>
		</tr>
		<?php
		foreach($consulta->result() as $fila)
		{
			echo "<tr><td>$fila->id_afiliado</td><td>$fila->nombre_afiliado</td><td>$fila->nombre_entidad</td><td>$fila->id_pago</td><td>$fila->fecha_pago</td><td>$fila->monto_pago</td></tr>";
		}
		?>
	</table>
</div>