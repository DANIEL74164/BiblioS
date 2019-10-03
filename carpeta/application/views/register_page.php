<br />
    <h2>BiblioSis</h2>
    <h5>Registrarse</h5>

    <table class="registro">
        <tr>
            <td>
                
<form action="<?= base_url(); ?>register/doRegister" method="post">

                
    <?php if ($this->session->flashdata()) { ?>
        <div class="alert alert-danger">
            <?=$this->session->flashdata('errors'); ?>
        </div>
    <?php } ?>
    <div class="form-group">
        <label for="codigo">Codigo de estudiante:</label>
        <input type="text" name="codigo" required class="form-control" id="codigo">
    </div>
    <div class="form-group">
        <label for="nombres">Nombres:</label>
        <input type="text" name="nombres" required class="form-control" id="nombres">
    </div>
    <div class="form-group">
        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" required class="form-control" id="apellidos">
    </div>
    <div class="form-group">
        <label for="direccion">Direccion:</label>
        <input type="text" name="direccion" required class="form-control" id="direccion">
    </div>
    <div class="form-group">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" required class="form-control" id="usuario">
    </div>
    <div class="form-group">
        <label for="pwd">Contraseña:</label>
        <input type="password" name="password" required class="form-control" id="pwd">
    </div>
    <div class="form-group">
        <label for="confirmar">Confirmar:</label>
        <input type="password" name="confirmar" required class="form-control" id="password">
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="password" required class="form-control" id="email">
    </div>
    <div class="form-group">
        <label for="telefono">Telefono:</label>
        <input type="text" name="telefono" required class="form-control" id="telefono">
    </div>
    <button type="submit" class="btn btn-default">Registrarse</button>
    <hr>
    <span class="float-right"><a href="<?= base_url() . 'login'; ?>" class="btn btn-primary">Login</a></span>
</form>

            </td>
        </tr>
    </table>