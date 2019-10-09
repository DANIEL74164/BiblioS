		<td>
			USUARIO
			<table border="1">
				<tr>
					<th>  </th>
					<th>DATOS</th>
				</tr>
				<?php
				foreach ($consulta->result() as $fila) {  ?>

				<tr>
					<td>NOMBRES: </td>
					<td><?= $fila->usua_nombres?></td>
				</tr>
				<tr>
					<td>APELLIDOS: </td>
					<td><?= $fila->usua_apellidos?></td>
				</tr>
				<tr>
					<td>CODIGO: </td>
					<td><?= $fila->usua_codigo?></td>
				</tr>
				<tr>
					<td>DIRECCION: </td>
					<td><?= $fila->usua_direccion?></td>

				</tr>
				<?php
				}
				?>
			</table>
			
		</td>
	</tr>
</table>

</body>