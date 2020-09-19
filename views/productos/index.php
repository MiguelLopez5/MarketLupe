      <main>
        <div id="conpad">
          <input type="checkbox" id="botres" name="otrobot">
          <div id="menop">
            <label id="menusel" for="botres">Opciones</label>
            <ul>
              <li><label class="botop" for="regnue">Crear<img class="dico" src="assets/icons/mas.png"></label></li>
              <li><label class="botop" for="chedti">Editar<img class="dico" src="assets/icons/icon-e.png"></label></li>
              <li><label class="botop" for="chelim">Eliminar<img class="dico" src="assets/icons/icon-elim.png"></label></li>
            </ul>
          </div>
          <div id="contener">
            <div class="conbus">
              <h4>Productos</h4>
              <form action="" method="POST">
                <?php
                  if (isset($_POST['nombre'])) { ?>
                    <input class="campoen" type="text" name="nombre" value="<?= $_POST['nombre'] ?>" required>
                <?php } else { ?>
                    <input class="campoen" type="text" name="nombre" required>
                <?php } ?>
                <input class="botbus" type="submit" name="buspro" value="Buscar">
              </form>
            </div>
            <div class="union">
              <div class="contp">
                <input type="radio" name="opmod" id="chedti">
                <input type="radio" name="opmod" id="chelim">
                <?php
                  if (isset($_POST['nombre'])) {
                    foreach (parent::searchData($_POST['nombre']) as $datosp): ?>
                      <div class="cpi">
                        <img class="dimip" src="<?= $datosp->linkImg ?>">
                        <table>
                          <tr>
                            <td class="resalta">Id</td><td><?= $datosp->IdProd ?></td>
                          </tr>
                          <tr>
                            <td class="resalta">Nombre</td><td><?= $datosp->NomProd ?></td>
                          </tr>
                          <tr>
                            <td class="resalta">Tipo</td><td><?= $datosp->NomCate ?></td>
                          </tr>
                          <tr>
                            <td class="resalta">Precio de entrada</td><td><?= $datosp->PrecEnt ?></td>
                          </tr>
                          <tr>
                            <td class="resalta">Precio de salida</td><td><?= $datosp->PrecSal ?></td>
                          </tr>
                          <tr>
                            <td class="resalta">Cantidad</td><td><?= $datosp->Cant ?></td>
                          </tr>
                        </table>
                        <a class="edita" href="?controller=producto&method=edit&idp=<?= $datosp->IdProd ?>"><img class="dimbots" src="assets/img/edit.png"></a>
                        <a class="borra" href="?controller=producto&method=delete&idp=<?= $datosp->IdProd ?>"><img class="dimbots" src="assets/img/remove.png"></a>
                      </div>
                  <?php
                  endforeach;
                  } else {
                      foreach (parent::show() as $datosp): ?>
                      <div class="cpi">
                        <img class="dimip" src="<?= $datosp->linkImg ?>">
                        <table>
                          <tr>
                            <td class="resalta">Id</td><td><?= $datosp->IdProd ?></td>
                          </tr>
                          <tr>
                            <td class="resalta">Nombre</td><td><?= $datosp->NomProd ?></td>
                          </tr>
                          <tr>
                            <td class="resalta">Tipo</td><td><?= $datosp->NomCate ?></td>
                          </tr>
                          <tr>
                            <td class="resalta">Precio de entrada</td><td><?= $datosp->PrecEnt ?></td>
                          </tr>
                          <tr>
                            <td class="resalta">Precio de salida</td><td><?= $datosp->PrecSal ?></td>
                          </tr>
                          <tr>
                            <td class="resalta">Cantidad</td><td><?= $datosp->Cant ?></td>
                          </tr>
                        </table>
                        <a class="edita" href="?controller=producto&method=edit&idp=<?= $datosp->IdProd ?>"><img class="dimbots" src="assets/img/edit.png"></a>
                        <a class="borra" href="?controller=producto&method=delete&idp=<?= $datosp->IdProd ?>"><img class="dimbots" src="assets/img/remove.png"></a>
                      </div>
              <?php endforeach;
                  }
                ?>
              </div>

              <!--<div class="paginacion">
                <ul>
                  <li><a href="#"><span class="fa fa-chevron-left"></span></a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li><a href=""><span class="fa fa-chevron-right"></span></a></li>
                </ul>
              </div>-->
            </div>
          </div>
        </div>

        <input type="checkbox" id="regnue" name="nuevo">
        <div class="panreg">
            <form class="cuadr" action="?controller=producto&method=storage" method="POST" enctype="multipart/form-data">
              <label for="regnue" id="cierra">X</label>
              <img class="posimg" src="assets/icons/nuevo.png">
              <input class="rcampo" type="text" name="nombre" placeholder="Nombre del producto" required>
              <p class="nota">Tipo de producto</p>
              <select class="rcampo" name="categoria">
    						<option value="0">Escoje...</option>
    						<option value="1">Grano</option>
    						<option value="2">Frutas</option>
    						<option value="3">Dulces</option>
    						<option value="4">Cerales</option>
    						<option value="5">Bebidas</option>
                <option value="6">Lacteos y huevos</option>
    						<option value="7">Comida enlatada y salsas</option>
                <option value="8">Aseo</option>
    						<option value="9">Cuidado personal</option>
                <option value="10">Galletas y confitería</option>
    						<option value="11">Pasabocas</option>
    						<option value="12">Hogar, descechables y miscelanea</option>
              </select>
              <input class="rcampo" type="text" name="precioe" placeholder="Precio de entrada" required>
              <input class="rcampo" type="text" name="precios" placeholder="Precio de salida" required>
              <input class="rcampo" type="number" name="cantidad" placeholder="Cantidad" required>
              <p class="nota">Imagen del producto</p>
              <input class="rcampo" type="file" name="imagen" placeholder="Foto" required>
              <input class="subir" type="submit" name="regpro" value="Registrar">
            </form>
          </div>
        </main>