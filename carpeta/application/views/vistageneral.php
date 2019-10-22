	<td>
      <h4>Vista general</h4>
    	<hr>
<div class="table-responsive">			
<table class="table" style="width: 60%;background-color: white;" align="center">
	<thead class="thead-dark">
    <tr>
      <th>Total de libros prestados</th>
      <th>Total de libros fuera de plazo</th>
    </tr>
	</thead>
    <tr align="center">
      <td>
      	<?php 
		foreach ($consulta->result() as $value) {
			$total = $value->ejem_id;
			}
			echo $total;
		?>
      </td>
      <td>
      	<?php 
		foreach ($consulta->result() as $value) {
			$total = $value->ejem_id;
			}
			echo $total;
		?>
      </td>
    </tr>
    <tr align="center">
      <th colspan="2">Libros mas prestados</th>
    </tr>
    <tr align="center">
      <td colspan="2">
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
</div>


</body>
