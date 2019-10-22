<td valign="top">
	<table class="table table-borderless">
		<tr>
			<td><h4>Ejemplares</h4></td>
			<td><a style="float: right;" href="<?= base_url() . 'crearejemplar/index'; ?>" class="btn btn-primary btn-sm">Crear ejemplar</a></td>
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
    	<th scope="col">Nro</th>
      	<th scope="col">Titulo</th>
		<th scope="col">Autor</th>
		<th scope="col">Area</th>
		<th scope="col">Categoria</th>
		<th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody id="myTable">
  	<?php 
		$i=1;
		foreach ($consulta->result() as $fila) {
	?>
	<tr>
		<td><?php echo $fila->ejem_id ?></td>
		<td><?php echo $fila->ejem_titulo ?></td>
		<td><?php ?></td>
		<td><?php echo $fila->ejem_tipo_id?></td>
		<td><?php echo $fila->ejem_cate_id?></td>
		<td><?php ?>
			<a href="<?= base_url("editarejemplar/mod/$fila->ejem_id") ?>">Editar<a/>
    		<a href="<?= base_url("editarejemplar/eliminar/$fila->ejem_id")?>">Eliminar<a/>
		</td>
	</tr>
	<?php
		}
	?>
</table>
</body>
