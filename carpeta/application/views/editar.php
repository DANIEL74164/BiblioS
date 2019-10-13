
<body topmargin="0"leftmargin="0" marginwidth="0" marginheight="0"></body>
    <h2>BiblioSis</h2>
    <h5>Registrarse</h5>
        <tr>

    <table class="registro">
            <td>
                <form action="<?= base_url(); ?>opciones/editar" method="post">

                <div class="form-group">
                    <label for="codigo">Codigo de estudiante:</label>
                    <input type="text" name="codigo" required class="form-control" id="codigo">
                </div>
            </td>
            <td>
 
            </td>
        </tr>
        <tr>
            <td colspan="2">
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
            </td>
        </tr>
        <tr>
            <td>
                <div class="form-group">
                    <label for="usuario">Usuario:</label>
                    <input type="text" name="usuario" required class="form-control" id="usuario">
                </div>
            </td>
            <td>
                <div class="form-group">
                    <label for="pwd">Contraseña:</label>
                    <input type="password" name="password" required class="form-control" id="pwd">
                </div>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <div class="form-group">
                    <label for="confirmar">Confirmar:</label>
                    <input type="password" name="confirmar" required class="form-control" id="password">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" required class="form-control" id="email">
                </div>
            </td>
            <td>
                <div class="form-group">
                    <label for="telefono">Telefono:</label>
                    <input type="text" name="telefono" required class="form-control" id="telefono">
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <button type="submit" class="btn btn-default">Registrarse</button>
                </form>

            </td>
        </tr>
        
    </table>