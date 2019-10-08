		<td valign="top" class="portada">
			<p>Portada</p>
			<hr>

				<table>
					<tr>
						<td>Libros</td>
					</tr>
					<?php 
						$i=1;
						foreach ($consulta->result() as $fila) {
					?>
					<tr>
						<td>
							<?php
								while ($i>0) { 
								 	if ($i) {
							?>
<a href="<?= base_url() . 'welcome/portada'; ?>"><img src="<?php echo base_url(); ?>carpeta/assets/images/<?=$i?>.png" alt="prueba"></a>
							<?php
									echo $i;
								 		break;
								 	}
								 } 
								echo $fila->ejem_titulo;
								echo $fila->ejem_valoracion;
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
