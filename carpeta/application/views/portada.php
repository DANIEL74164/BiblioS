		<td valign="top" class="portada">
			<p>Portada</p>
			<hr>
			<?php 
				foreach ($consulta->result() as $fila) {
					echo $fila->ejem_titulo;
					echo $fila->ejem_paginas;
					echo $fila->ejem_isbn;
				}
			 ?>
		</td>
	</tr>
</table>
</body>
