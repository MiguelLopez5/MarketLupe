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
          <h4>Usuarios</h4>
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
                foreach (parent::searchData($_POST['nombre']) as $datosu): ?>
                  <div class="cpi">
                    <img class="dimip" src="<?= $datosu->linkFoto ?>">
                    <table>
                      <tr>
                        <td class="resalta">Id</td><td><?= $datosu->IdEmpl ?></td>
                      </tr>
                      <tr>
                        <td class="resalta">Nombre</td><td><?= $datosu->NomEmpl ?></td>
                      </tr>
                      <tr>
                        <td class="resalta">Apellido</td><td><?= $datosu->ApelEmpl ?></td>
                      </tr>
                      <tr>
                        <td class="resalta">Edad</td><td><?= $datosu->Edad ?></td>
                      </tr>
                      <tr>
                        <td class="resalta">Teléfono</td><td><?= $datosu->NumTel ?></td>
                      </tr>
                      <tr>
                        <td class="resalta">Rol</td><td><?= $datosu->NomRol ?></td>
                      </tr>
                    </table>
                    <a class="edita" href="?controller=usuario&method=edit&idu=<?= $datosu->IdEmpl ?>"><img class="dimbots" src="assets/img/edit.png"></a>
                    <a class="borra" href="?controller=usuario&method=delete&idu=<?= $datosu->IdEmpl ?>"><img class="dimbots" src="assets/img/remove.png"></a>
                  </div>
            <?php endforeach;
             } else {
             foreach (parent::show() as $datosu): ?>
              <div class="cpi">
                <img class="dimip" src="<?= $datosu->linkFoto ?>">
                <table>
                  <tr>
                    <td class="resalta">Id</td><td><?= $datosu->IdEmpl ?></td>
                  </tr>
                  <tr>
                    <td class="resalta">Nombre</td><td><?= $datosu->NomEmpl ?></td>
                  </tr>
                  <tr>
                    <td class="resalta">Apellido</td><td><?= $datosu->ApelEmpl ?></td>
                  </tr>
                  <tr>
                    <td class="resalta">Edad</td><td><?= $datosu->Edad ?></td>
                  </tr>
                  <tr>
                    <td class="resalta">Teléfono</td><td><?= $datosu->NumTel ?></td>
                  </tr>
                  <tr>
                    <td class="resalta">Rol</td><td><?= $datosu->NomRol ?></td>
                  </tr>
                </table>
                <a class="edita" href="?controller=usuario&method=edit&idu=<?= $datosu->IdEmpl ?>"><img class="dimbots" src="assets/img/edit.png"></a>
                <a class="borra" href="?controller=usuario&method=delete&idu=<?= $datosu->IdEmpl ?>"><img class="dimbots" src="assets/img/remove.png"></a>
              </div>
            <?php endforeach; 
            } ?>
          </div>
        </div>
      </div>
    </div>

    <input type="checkbox" id="regnue" name="nuevo">
    <div class="panreg">
        <form class="cuadr" action="?controller=usuario&method=storage" method="POST" enctype="multipart/form-data">
          <label for="regnue" id="cierra">X</label>
          <img class="posimg" src="assets/icons/nuevoUsu.png">
          <input class="rcampo" type="text" name="nombre" placeholder="Nombre" required>
					<input class="rcampo" type="text" name="apellido" placeholder="Apellido" required>
					<input class="rcampo" type="text" name="edad" placeholder="Edad" required>
					<input class="rcampo" type="text" name="telefono" placeholder="Teléfono" required>
					<input class="rcampo" type="password" name="contrasena" placeholder="Contraseña" required>
          <p class="nota">Cargo</p>
          <select class="rcampo" name="rol">
						<option value="0">Escoje...</option>
						<option value="1">Adminstrador</option>
						<option value="2">Almacenista</option>
						<option value="3">Vendedor</option>
          </select>
          <p class="nota">Foto de perfil</p>
          <input class="rcampo" type="file" name="imagen" placeholder="Foto" required>
          <input class="subir" type="submit" name="regpro" value="Registrar">
        </form>
      </div>
