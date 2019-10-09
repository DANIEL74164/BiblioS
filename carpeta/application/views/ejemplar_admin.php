		<td valign="top" class="portada">

    <span class="float-right"><a href="<?= base_url() . 'register'; ?>" class="btn btn-primary">Crear ejemplar</a></span>
			<p>Ejemplares</p>
			<hr>

			<div>
        		<input type="search" name="Buscar" required class="form-control" id="Buscar">
    		</div>
    		<button>buscar</button>
				<table class="ejemplar">
					

					<?php 
						$i=1;
						foreach ($consulta->result() as $fila) {
					?>
					<tr>
						<td>
							<?php
								/*while ($i>0) { 
								 	if ($i) {
									echo $i;
								 		break;
								 	}
								 }*/ 
								echo '<td>';
								echo $fila->ejem_cate_id;
								echo '</td>';
								echo '<td>';
								echo $fila->ejem_titulo;
								echo '</td>';
								echo '<td>';
								echo $fila->ejem_cate_id;
								echo '</td>';
								$i=$i+1;
						 	?>	
						 </td>
					</tr>
					<?php
						}
					 ?>

				</table>
		</td>
	</tr>
</table>
</body>