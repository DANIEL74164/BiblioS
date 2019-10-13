
<td valign="top" class="portada">
        <h3>Registrar ejemplar</h3>
            <hr>

                <table>
            <td>
                <form action="<?= base_url(); ?>crearejemplar/Crear" method="post" enctype="multipart/form-data">





<div class="form-row">
        <div class="form-group col-md-12">

            <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="">Titulo</label>
                  <input type="text" class="form-control form-control-sm" id=""  value="" name="titulo">
                </div>
              </div>
            <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="">Tipo</label>
                    <select id="inputState" class="form-control form-control-sm"  value="" name="ejem_tipo_id"  >
                      <option value="1" >Libro</option>
                      <option value="2" >Revista Cientifica</option>
                      <option value="3" >Tesis</option>
                      <option value="4" >Articulo</option>
                    </select>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="">Area</label>
                    <select id="inputState" class="form-control form-control-sm"  value="" name="area">
                      <option value="1" >Area 1</option>
                      <option value="2" >Area 2</option>
                      <option value="3" >Area 3</option>
                      <option value="4" >Area 4</option>
                      <option value="5" >Area 5</option>
                    </select>
                  </div>
              </div>

            <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="">Autor</label>
                        <textarea class="form-control form-control-sm" rows="2" id="validationTextarea"  value="" name="ejem_autor"></textarea>
                </div>
              </div>

            <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="">Editorial</label>
                  <input type="text" class="form-control form-control-sm" id=""  value="" name="editorial">
                </div>
              </div>

              <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="">Categoria</label>
                    <select id="inputState" class="form-control form-control-sm"  value="" name="cate"  >
                      <option value="1" >Categoria 1</option>
                      <option value="2" >Categoria 2</option>
                      <option value="3" >Categoria 3</option>
                      <option value="4" >Categoria 4</option>
                      <option value="5" >Categoria 5</option>
                    </select>
                  </div>
                </div>
        </div>
    </div>





<!--


                <div class="form-group col-md-12">
                    <label for="codigo">Titulo :</label>
                    <input type="text" name="titulo" required class="form-control form-control-sm" id="codigo">
                    <label for="codigo">Editorial :</label>
                    <input type="text" name="editorial" required class="form-control" id="codigo">
                </div>
            -->
            </td>
        <tr>
            <td colspan="2">
                <button type="submit" class="btn btn-default">registrar ejemplar</button>
                </form>

            </td>
        </tr>
        
    </table>

        </td>
    </tr>
</table>
</body>
