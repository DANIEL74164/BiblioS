<body class="usuariobody">
<table cellpadding="10" class="usuariopage">
	<tr>
		<th colspan="2">
			BiblioSis
			<span class="float-right"><a class="btn btn-danger" href="<?=base_url().'login/logout';?>">Salir</a></span>
		</th>
	</tr>
	<tr>
		<td valign="top" class="lista">
			<table class="usuarionav">
				<tr>
					<td><a href="<?= base_url() . 'welcomeadmin/vistageneral'; ?>">Vista general</a></td>
				</tr>
				<tr>
					<td><a href="<?= base_url() . 'welcomeadmin/ejemplaradmin'; ?>">Ejemplares</a></td>
				</tr>
				<tr>
					<td><a href="<?= base_url() . 'welcomeadmin/autores'; ?>">Autores</a></td>
				</tr>
				<tr>
					<td><a href="<?= base_url() . 'welcomeadmin/peticionesdelibros'; ?>">Peticiones de libros</a></td>
				</tr>
				<tr>
					<td><a href="<?= base_url() . 'welcomeadmin/librosprestados'; ?>">Libros prestados</a></td>
				</tr>
				<tr>
					<td><a href="<?= base_url() . 'welcomeadmin/reportes'; ?>">Reportes</a></td>
				</tr>
				<tr>
					<td><a href="<?= base_url() . 'Welcomeadmin/about'; ?>">Datos del administrador</a></td>
				</tr>
			</table>