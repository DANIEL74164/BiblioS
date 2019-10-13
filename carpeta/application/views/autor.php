<td valign="top" class="portada">
			<div>
			<p>Autores</p>
			<span class="float-right"><a href="<?= base_url() . 'register'; ?>" class="btn btn-primary">Crear autor</a></span>
			</div>
			<hr>

    		<form>
        		Buscar: <input id="searchTerm" type="text" onkeyup="doSearch()" />
    		</form>
    		<hr>

				<table cellpadding="4" class="ejemplaradmin">
					<tr style="background-color: orange;">
						<th>Nombres</th>
						<th>Apellidos</th>
						<th>Biografia</th>
						<th>Opciones</th>
					</tr>
					<?php 
						$i=1;
						foreach ($consulta->result() as $fila) {
					?>
					<tr class="uno">
						<td class="uno"><?php echo $fila->auto_nombres ?></td>
						<td class="uno"><?php echo $fila->auto_apellidos ?></td>
						<td class="uno"><?php echo $fila->auto_biografia ?></td>
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
