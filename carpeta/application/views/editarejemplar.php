<td valign="top">
        <h4>Registrar ejemplar</h4>
            <hr>

                <table align="center" cellpadding="10" style="width: 70%;background-color: white; border-radius: 7px;">
            <td>
                <form action="<?= base_url(); ?>editarejemplar/mod" method="post">

                <div class="form-group">
                  <label for="">Nombre</label>
                  <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del autor">
                </div>
                <div class="form-group">
                  <label for="">Apellidos</label>
                  <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellido del autor">
                </div>
                <div class="form-group">
                  <label for="">Biografia</label>
                  <input type="text" class="form-control" id="biografia" name="biografia" placeholder="Biografia del autor">
                </div>
                </td>
                <tr>
                  <td colspan="2">
                    <button type="submit" class="btn btn-primary">registrar</button>
                  </form>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
          </table>
          </body>




<td>
        <h2>Modificar usuario</h2>
        <form action="" method="POST">
            <?php foreach ($mod as $fila){ ?>
            <input type="email" name="email" value="<?=$fila->email?>"/>
            <input type="text"  name="password" value="<?=$fila->password?>"/>
            <input type="nombre" name="nombre" value="<?=$fila->nombre?>"/>
            <input type="apellido" name="apellido" value="<?=$fila->apellido?>"/>
            <input type="submit" name="submit" value="Modificar"/>
            <?php } ?>
        </form>
        <a href="<?=base_url()?>">Volver</a>
        </td>
    </tr>
</table>
</body>