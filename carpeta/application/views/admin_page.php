<body>
	<table cellpadding="7" style="width: 100%; height: 60em; background-color: #4682B4;" class="table">
    <thead class="thead-dark">
    	<th><h2>BiblioSis</h2></th>
    	<th><a style="float: right;" href="<?= base_url() . 'login/logout'; ?>" class="btn btn-danger btn-sm">Cerrar sesion</a></th>
    </thead>
    <tr style="height: 100%;">
      <td valign="top" style="width: 22%;">
      	<div class="btn-group-vertical" style="width: 100%;">
      		<a href="<?= base_url() . 'welcomeadmin/vistageneral'; ?>" class="btn btn-warning btn-lg" role="button" aria-disabled="true">Vista general</a>
      		<a href="<?= base_url() . 'welcomeadmin/ejemplaradmin'; ?>" class="btn btn-warning btn-lg" role="button" aria-disabled="true">Ejemplares</a>
      		<a href="<?= base_url() . 'welcomeadmin/autor'; ?>" class="btn btn-warning btn-lg" role="button" aria-disabled="true">Autores</a>
      		<a href="<?= base_url() . 'welcomeadmin/peticionesdelibros'; ?>" class="btn btn-warning btn-lg" role="button" aria-disabled="true">Peticiones de libros</a>
      		<a href="<?= base_url() . 'welcomeadmin/librosprestados'; ?>" class="btn btn-warning btn-lg" role="button" aria-disabled="true">Libros prestados</a>
      		<a href="<?= base_url() . 'welcomeadmin/about'; ?>" class="btn btn-warning btn-lg" role="button" aria-disabled="true">Datos del administrador</a>
		</div>
	</td>