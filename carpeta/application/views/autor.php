<td valign="top">
	<table class="table table-borderless">
		<tr>
			<td><h4>Autores</h4></td>
			<td><a style="float: right;" href="<?= base_url() . 'crearautor/index'; ?>" class="btn btn-primary btn-sm">Crear Autor</a></td>
		</tr>
	</table>
	<hr>
		Busqueda:
 	 	<input style="width: 40%;" id="myInput" type="text" class="form-control" placeholder="Buscar">
    <hr>
<div class="table-responsive">
<table class="table table-hover table-bordered" style="background-color: white;">
  <thead class="thead-dark">
    <tr>
      	<th scope="col">Nombres</th>
		<th scope="col">Apellidos</th>
		<th scope="col">Biografia</th>
		<th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody id="myTable">
  	<?php 
		$i=1;
		foreach ($consulta->result() as $fila) {
	?>
	<tr>
		<td><?php echo $fila->auto_nombres ?></td>
		<td><?php echo $fila->auto_apellidos ?></td>
		<td><?php echo $fila->auto_biografia ?></td>
		<td><?php  ?></td>
	</tr>
	<?php
		}
	?>
</table>
</body>
