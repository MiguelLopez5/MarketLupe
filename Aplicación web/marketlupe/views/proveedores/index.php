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
          <h4>Proveedores</h4>
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
                  <td class="campot">Id proveedor</td>
                  <td class="campot">Nombre</td>
                  <td class="campot">Apellido</td>
                  <td class="campot">Teléfono</td>
                  <td class="campot">Correo</td>
                  <td class="edita"><p>Editar</p></td>
                  <td class="borra"><p>Eliminar</p></td>
                </tr>
              </thead>
              <thead>
                <?php
                  if (isset($_POST['nombre'])) {
                    foreach (parent::searchData($_POST['nombre']) as $datospr): ?>
                      <tr class="filas">
                        <td><?= $datospr->IdProve ?></td>
                        <td><?= $datospr->NomProve ?></td>
                        <td><?= $datospr->ApelProve ?></td>
                        <td><?= $datospr->TelProve ?></td>
                        <td><?= $datospr->EmailProve ?></td>
                        <td class="edita"><a href="?controller=proveedor&method=edit&idpr=<?= $datospr->IdProve ?>"><img class="dimbots" src="assets/img/edit.png"></a></td>
                        <td class="borra"><a href="?controller=proveedor&method=delete&idpr=<?= $datospr->IdProve ?>"><img class="dimbots" src="assets/img/remove.png"></a></td>
                      </tr>
                  <?php endforeach;
                  } else{
                  foreach (parent::show() as $datospr): ?>
                    <tr class="filas">
                      <td><?= $datospr->IdProve ?></td>
                      <td><?= $datospr->NomProve ?></td>
                      <td><?= $datospr->ApelProve ?></td>
                      <td><?= $datospr->TelProve ?></td>
                      <td><?= $datospr->EmailProve ?></td>
                      <td class="edita"><a href="?controller=proveedor&method=edit&idpr=<?= $datospr->IdProve ?>"><img class="dimbots" src="assets/img/edit.png"></a></td>
                      <td class="borra"><a href="?controller=proveedor&method=delete&idpr=<?= $datospr->IdProve ?>"><img class="dimbots" src="assets/img/remove.png"></a></td>
                    </tr>
                <?php endforeach; 
                  } ?>
              </thead>
            </table>
          </div>
        </div>
        
      </div>
    </div>
    <input type="checkbox" id="regnue" name="nuevo">
    <div class="panreg">
        <form class="cuadr" action="?controller=proveedor&method=storage" method="POST">
          <label for="regnue" id="cierra">X</label>
          <img class="posimg" src="assets/icons/nuevoProv.png">
          <input class="rcampo" type="text" name="nombre" placeholder="Nombre del proveedor" required>
					<input class="rcampo" type="text" name="apellido" placeholder="Apellido del proveedor" required>
					<input class="rcampo" type="text" name="telefono" placeholder="Teléfono" required>
					<input class="rcampo" type="email" name="correoe" placeholder="Correo electrónico" required>
          <input class="subir" type="submit" name="regpro" value="Registrar">
        </form>
      </div>