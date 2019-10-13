	<td valign="top" class="portada">
			<div>
			<p>Ejemplares</p>
			<span class="float-right"><a href="<?= base_url() . 'crearejemplar/index'; ?>" class="btn btn-primary">Crear ejemplar</a></span>
			</div>
			<hr>

    		<form>
        		Buscar: <input id="searchTerm" type="text" onkeyup="doSearch()" />
    		</form>
    		<hr>

				<table cellpadding="4" class="ejemplaradmin">
					<tr style="background-color: orange;">
						<th>Titulo</th>
						<th>Autor</th>
						<th>Area</th>
						<th>Categoria</th>
						<th>Opciones</th>
					</tr>
					<?php 
						$i=1;
						foreach ($consulta->result() as $fila) {
					?>
					<tr class="uno">
						<td class="uno"><?php echo $fila->ejem_titulo ?></td>
						<td class="uno"><?php  ?></td>
						<td class="uno"><?php echo $fila->ejem_area_id?></td>
						<td class="uno"><?php echo $fila->ejem_cate_id?></td>
						<td class="uno"><?php ?></td>
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
