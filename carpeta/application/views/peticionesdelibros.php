	<td valign="top" class="portada">
		<h3>Peticiones de libros</h3>
    		<hr>

				<table cellpadding="4" class="ejemplaradmin">
					<tr style="background-color: orange;">
						<th>Libro</th>
						<th>Fecha</th>
						<th>Observacion</th>
						<th>Opciones</th>
					</tr>
					<?php 
						$i=1;
						foreach ($consulta->result() as $fila) {
					?>
					<tr class="uno">
						<td class="uno"><?php echo $fila->peti_ejem_id ?></td>
						<td class="uno"><?php echo $fila->peti_fechareg ?></td>
						<td class="uno"><?php  ?></td>
						<td class="uno"><?php  ?></td>
						
					</tr>
					<?php
						}
					 ?>
				</table>
		</td>
	</tr>
</table>
<script type="text/javascript" src="<?php base_url(); ?>assets/js/script.js"></script>
</body>
