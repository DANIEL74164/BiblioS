<br />
<form action="<?= base_url(); ?>login/doLogin" method="post">
    <h1>BiblioSis</h1>

    <div class="izquierda">
        
        <h5 class="log">Acceso al sistema</h5>

    <table>
        <tr>
            <td>

    <?php if ($this->session->flashdata()) { ?>
        <div class="alert alert-warning">
            <?= $this->session->flashdata('msg'); ?>
        </div>
    <?php } ?>
    <div class="form-group">
        <label for="usuario">Usuario</label>
        <input type="text" name="usuario" required class="form-control" id="usuario">
    </div>
    <div class="form-group">
        <label for="password">Contraseña:</label>
        <input type="password" name="password" required class="form-control" id="password">
    </div>
    <button type="submit" class="btn btn-default">Ingresar</button>

            </td>
        </tr>
    </table>

    </div>

    <div class="derecha">
        <h5 class="log">Registrarse</h5>
        <p>Para poder usar el sistema de biblioteca es necesario ser estudiante de la Universidad Nacional del Altiplano - Puno.</p>
        <p>Favor de registrarse en el siguiente formulario</p>
        
    <span class="float-left"><a href="<?= base_url() . 'register'; ?>" class="btn btn-primary">Registrarse</a></span>

    </div>



    
</form>