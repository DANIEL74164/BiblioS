<td valign="top" class="portada">
			<h3>Vista general</h3>
			<hr>
				<table style="width: 20%; height: 20%; float: left; margin-left: 25%;">
					<tr>
						<td valign="bottom">Total de libros prestados</td>
					</tr>
					<tr>
						<td style="border: 1px solid; text-align: center;">
							<?php 
							foreach ($consulta->result() as $value) {
								$total = $value->ejem_id;
							}
							echo $total;
							 ?>
						</td>
					</tr>
				</table>
				<table style="width: 20%; height: 20%;">
					<tr>
						<td valign="bottom">Total de libros fuera de plazo</td>
					</tr>
					<tr>
						<td style="border: 1px solid; text-align: center;">
							<?php
							foreach ($consulta->result() as $value) {
								$total = $value->ejem_id;
							}
							echo $total;
							 ?>
						</td>
					</tr>
				</table>
				<table style="width: 40%; height: 20%; margin-left: 25%;">
					<tr>
						<td valign="bottom">Libros mas prestados</td>
					</tr>
					<tr>
						<td style="border: 1px solid; text-align: center;">
							<?php
							foreach ($consulta->result() as $value) {
								$total = $value->ejem_id;
							}
							echo $total;
							 ?>
						</td>
					</tr>
				</table>
		</td>
	</tr>
</table>
</body>
