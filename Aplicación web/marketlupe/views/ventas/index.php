    <div id="conpad">
      <input type="checkbox" id="botres" name="otrobot">
      <div id="menop">
        <label id="menusel" for="botres">Opciones</label>
        <ul>
        	<li><a class="botop" href="home.php">Crear<img class="dico" src="assets/icons/mas.png"></a></li>
        	<li><label class="botop" for="chelim">Eliminar<img class="dico" src="assets/icons/icon-elim.png"></label></li>
        </ul> 
      </div>
      <div id="contener">
        <div class="conbus">
          <h4>Ventas</h4>
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
            <table>
              <thead class="titulos">
                <tr>
                  <td class="campot">Id venta</td>
                  <td class="campot">Empleado</td>
                  <td class="campot">Fecha de venta</td>
                  <td class="campot">Precio total</td>
                  <td class="campot">Cliente</td>
                  <td class="edita"><p>Editar</p></td>
                  <td class="borra"><p>Eliminar</p></td>
                </tr>
              </thead>
              <thead>
                <?php
                  if (isset($_POST['nombre'])) {
                    foreach (parent::searchData($_POST['nombre']) as $datosv): ?>
                      <tr class="filas">
                        <td><?= $datosv->IdVenta ?></td>
                        <td><?= $datosv->NomEmpl ?></td>
                        <td><?= $datosv->FechaVen ?></td>
                        <td><?= $datosv->PrecTotal ?></td>
                        <td><?= $datosv->IdCli ?></td>
                        <td class="borra"><a href="?controller=venta&method=delete&idv=<?= $datosv->IdVenta ?>"><img class="dimbots" src="assets/img/remove.png"></a></td>
                      </tr>
                <?php endforeach; 
                } else {
                    foreach (parent::show() as $datosv): ?>
                      <tr class="filas">
                        <td><?= $datosv->IdVenta ?></td>
                        <td><?= $datosv->NomEmpl ?></td>
                        <td><?= $datosv->FechaVen ?></td>
                        <td><?= $datosv->PrecTotal ?></td>
                        <td><?= $datosv->IdCli ?></td>
                        <td class="borra"><a href="?controller=venta&method=delete&idv=<?= $datosv->IdVenta ?>"><img class="dimbots" src="assets/img/remove.png"></a></td>
                      </tr>
                <?php endforeach; 
                  } ?>
              </thead>
            </table>
          </div>
        </div>
      </div>
    </div>