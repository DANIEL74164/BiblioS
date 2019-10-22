<body class="bg-dark">
<form action="<?= base_url(); ?>login/doLogin" method="post">
    <h1 align="center" class="text-white" style="padding: 0.5em;">BiblioSis</h1>


<div class="d-flex justify-content-center">
    <div class="card">
        <h5 class="card-header">Acceso al sistema</h5>
            <div class="card-body">
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
                <input type="user" name="usuario" required class="form-control" placeholder="Usuario">
            </div>
                <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" name="password" required class="form-control" placeholder="Contraseña">
                </div>
            <div class="checkbox">
                <input type="checkbox" name="checkbox" id="checkbox" value="1">
                <label for="checkbox">Ingresar como administrador?</label>
            </div>
            <button type="submit" class="btn btn-warning btn-block">Ingresar</button>

            </td>
        </tr>
    </table>
            </div>
    </div>

    <div class="card">
        <h5 class="card-header">Registrarse</h5>
            <div class="card-body">
                <br>
                <p>Para poder usar el sistema de biblioteca es<br> necesario ser estudiante de la Universidad <br> Nacional del Altiplano - Puno.</p>
                <p>Favor de registrarse en el siguiente 
                <br>formulario</p>
                <br>
            <span><a href="<?= base_url() . 'register'; ?>" class="btn btn-warning btn-block">Registrarse</a></span>
            </div>
    </div>
</div>

</form>
</body>