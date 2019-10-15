<?php 
	echo validation_errors(); 
	if($this->session->flashdata('successMsg'))
	{
		echo '<div class="col-md-6 col-md-offset-3"><div class="alert alert-success">';
		echo $this->session->flashdata('successMsg');
		echo '</div></div>';
	}
		
	if(isset($errorMsg))
	{
		echo '<div class="col-md-6 col-md-offset-3"><div class="alert alert-danger">';
		echo $errorMsg;
		echo '</div></div>';
		unset($errorMsg);
	}
?>

		<td>
			<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Datos del administrador</h6>
    </div>
	<div class="card-body">
		<form action="<?php echo base_url().'index.php/Welcomeadmin/about/'.$usuarioInfo['usua_id']?>" method="post">
		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="inputEmail4">Nombres</label>
		      <input type="text" class="form-control form-control-sm" value="<?php echo $this->session->userdata('usua_nombres') ?>" id="" name="usua_nombres" >
		    </div>
		    <div class="form-group col-md-6">
		      <label for="inputPassword4">Apellidos</label>
		      <input type="text" class="form-control form-control-sm" value="<?php echo $this->session->userdata('usua_apellidos') ?>" id="" name="usua_apellidos" >
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputAddress">Direccion</label>
		    <input type="text" class="form-control form-control-sm" value="<?php echo $usuarioInfo['usua_direccion'] ?>" id="inputAddress" name="usua_direccion" >
		  </div>
		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="inputEmail4">E-mail</label>
		      <input type="email" class="form-control form-control-sm" value="<?php echo $usuarioInfo['usua_email'] ?>" id="" name="usua_email" >
		    </div>
		    <div class="form-group col-md-6">
		      <label for="inputPassword4">Telefono</label>
		      <input type="text" class="form-control form-control-sm" value="<?php echo $usuarioInfo['usua_telefono'] ?>" id="" name="usua_telefono" >
		    </div>
		  </div>
		  <div class="form-row">
		    <div class="form-group col-md-3">
		      <label for="inputEmail4">Usuario</label>
		      <input type="text" class="form-control form-control-sm" value="<?php echo $this->session->userdata('usua_login') ?>" id="" disabled="1">
		    </div>
		  </div>
		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="inputEmail4">Contraseña</label>
		      <input type="password" class="form-control form-control-sm"  id="" name="usua_password" >
		    </div>
		    <div class="form-group col-md-6">
		      <label for="inputPassword4">Confirmar Contraseña</label>
		      <input type="password" class="form-control form-control-sm"  id="" name="usua_reppassword" >
		    </div>
		  </div>
		        <!-- Divider -->
     		 <hr class="sidebar-divider my-2">
     		 <div class="text-center">
     		 	<a href="<?php echo base_url()?>/Welcomeadmin/vistageneral" class="btn btn-danger mb-2 btn-sm">Cancelar</a>
     		 	<button type="submit" class="btn btn-primary mb-2 btn-sm">Actualizar Datos</button>
     		 </div>
		</form>
	</div>
</div>
			
		</td>
	</tr>
</table>

</body>