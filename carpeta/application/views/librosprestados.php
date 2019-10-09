<td valign="top" class="portada">
		<h3>Libros prestados</h3>
    		<hr>

				<table cellpadding="4" class="ejemplaradmin">
					<tr style="background-color: orange;">
						<th>Usuario</th>
						<th>Libro</th>
						<th>Fecha</th>
						<th>Fecha Fin</th>
						<th>Plazo</th>
						<th>Observacion</th>
						<th>Opciones</th>
					</tr>
					<?php 
						$i=1;
						foreach ($consulta->result() as $fila) {
					?>
					<tr class="uno">
						<td class="uno"><?php echo $fila->pres_usua_id ?></td>
						<td class="uno"><?php echo $fila->pres_ejem_id ?></td>
						<td class="uno"><?php echo $fila->pres_fechaprestamo ?></td>
						<td class="uno"><?php echo $fila->pres_fechadevolucion ?></td>
						<td class="uno"><?php echo $fila->pres_dias ?></td>
						<td class="uno"><?php ?></td>
						<td class="uno"><?php ?></td>
					</tr>
					<?php
						}
					 ?>
				</table>
		</td>
	</tr>
</table>
</body>
