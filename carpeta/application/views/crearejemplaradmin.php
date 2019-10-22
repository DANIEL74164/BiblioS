 
<td valign="top" class="portada">
        <h4>Registrar ejemplar</h4>
            <hr>

                <table align="center" cellpadding="10" style="width: 70%;background-color: white; border-radius: 7px;">
            <td>
                <form action="<?= base_url(); ?>crearejemplar/Crear" method="post">

                <div class="form-group">
                  <label for="">Titulo</label>
                  <input type="text" class="form-control" id="titulo" name="titulo" placeholder="titulo del libro">
                </div>
                <div class="form-group">
                  <label for="">Editorial</label>
                  <input type="text" class="form-control" id="editorial" name="editorial" placeholder="editorial">
                </div>
                <div class="form-group">
                  <label for="">Numero de paginas</label>
                  <input type="number" class="form-control" id="paginas" name="paginas" placeholder="Numero de paginas">
                </div>
                <div class="form-group">
                  <label for="">ISBN</label>
                  <input type="number" class="form-control" id="isbn" name="isbn" placeholder="ISBN">
                </div>
                <div class="form-group">
                  <label for="">Idioma</label>
                  <input type="text" class="form-control" id="idioma" name="idioma" placeholder="Idioma del libro">
                </div>
                <div class="form-group">
                  <label for="">Portada</label>
                  <input type="text" class="form-control" id="portada" name="portada" placeholder="portada del libro">
                </div>
              </td>
              <td>
                <div class="form-group">
                  <label for="">Digital</label>
                  <input type="text" class="form-control" id="digital" name="digital" placeholder="ejemplo digital">
                </div>
                <div class="form-group">
                  <label for="">Audio</label>
                  <input type="text" class="form-control" id="audio" name="audio" placeholder="Ejemplo en audio del libro">
                </div>
                <div class="form-group">
                  <label for="">Resumen</label>
                  <input type="textarea" class="form-control" id="resumen" name="resumen" placeholder="breve resumen del libro">
                </div>
                <div class="form-group">
                  <label for="">Tipo</label>
                  <select id="tipo" class="form-control" name="tipo">
                  <option selected="1">1</option>
                  <option selected="2">2</option>
                  <option selected="3">3</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Cateogira</label>
                  <select id="categoria" class="form-control" name="categoria">
                  <option selected="1">1</option>
                  <option selected="2">2</option>
                  <option selected="3">3</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Año</label>
                  <input type="text" class="form-control" id="date" name="date" placeholder="Año de publicacion">
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