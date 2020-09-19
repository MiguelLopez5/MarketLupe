    <main class="conpadre">
    	<?php if (isset($_GET['controller'])&&isset($_GET['method'])) {
    		switch ($_GET['controller']) {
    		 	case 'producto': ?>
    		 		<a class="botonatras" href="?controller=producto"><span class="fa fa-chevron-left"></span> Volver</a>
        <form class="editform" action="?controller=producto&method=update" method="POST" enctype="multipart/form-data">
					<?php foreach ($producto as $editd): ?>
					<div class="izquierda">
						<h2>Editar producto</h2>
						<img class="dimedit" src="<?= $editd->linkImg ?>" alt="imagen del producto">
					</div>
          <div class="derecha">
						<p class="frase">Cambiar imagen</p>
						<input class="editcampo" type="file" name="imagen" placeholder="Foto" required>
						<input type="hidden" name="idpro" value="<?= $editd->IdProd ?>">
	          <input class="editcampo" type="text" name="nombre" placeholder="Nombre del producto" value="<?= $editd->NomProd ?>" required>
	          <p class="frase">Tipo de producto</p>
	          <select class="editcampo" name="categoria">
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
						<div class="group">
							<input class="gcampo" type="text" name="precioe" placeholder="Precio de entrada" value="<?= $editd->PrecEnt ?>" required>
		          <input class="gcampo" type="text" name="precios" placeholder="Precio de salida" value="<?= $editd->PrecSal ?>" required>
						</div>
	          <input class="editcampo" type="number" name="cantidad" placeholder="Cantidad" value="<?= $editd->Cant ?>" required>
	          <input class="guardar" type="submit" name="regpro" value="Guardar">
          </div>
				<?php endforeach; ?>
        </form>
    		 	<?php break;

    		 	case 'proveedor': ?>
    		 		<a class="botonatras" href="?controller=proveedor"><span class="fa fa-chevron-left"></span> Volver</a>
			        <form class="dataform" action="?controller=proveedor&method=update" method="POST" enctype="multipart/form-data">
			        	<?php foreach ($proveedor as $editd): ?>
			          <div class="izquierda">
						<h2>Editar proveedor</h2>
						<input type="hidden" name="proveedor" value="<?= $editd->IdProve ?>">
				          <input class="editcampo" type="text" name="nombre" placeholder="Nombre del proveedor" value="<?= $editd->NomProve ?>" required>
				          <input class="editcampo" type="text" name="apellido" placeholder="Apellido del proveedor" value="<?= $editd->ApelProve ?>" required>
				          <input class="editcampo" type="text" name="telefono" placeholder="Teléfono" value="<?= $editd->TelProve ?>" required>
				          <input class="editcampo" type="text" name="correoe" placeholder="Correo electrónico" value="<?= $editd->EmailProve ?>" required>
				          <input class="guardar" type="submit" name="regpro" value="Guardar">
			          </div>
			        </form>
              <?php endforeach;
                break;

        		 	case 'usuario': ?>
    		 	<a class="botonatras" href="?controller=usuario"><span class="fa fa-chevron-left"></span> Volver</a>
    		 		<form class="editform" action="?controller=usuario&method=update" method="POST" enctype="multipart/form-data">
    		 			<?php foreach ($usuario as $editd): ?>
			<div class="izquierda">
				<h2>Editar datos de usuario</h2>
				<img class="dimedit" src="<?= $editd->linkFoto ?>" alt="imagen de usuario">
			</div>
          	<div class="derecha">
			  <p class="frase">Cambiar foto de perfil</p>
			  <input type="hidden" name="usuario" value="<?= $editd->IdEmpl ?>">
			  <input class="editcampo" type="file" name="imagen" placeholder="Foto" required>
			  <input class="editcampo" type="text" name="nombre" placeholder="Nombre" value="<?= $editd->NomEmpl ?>" required>
		      <input class="editcampo" type="text" name="apellido" placeholder="Apellido" value="<?= $editd->ApelEmpl ?>" required>
			  <div class="group">
				  <input class="gcampo" type="text" name="edad" placeholder="Edad" value="<?= $editd->Edad ?>" required>
		          <input class="gcampo" type="text" name="telefono" placeholder="Telefono" value="<?= $editd->NumTel ?>" required>
			  </div>
	          <input class="editcampo" type="password" name="contrasena" placeholder="Por favor confirma la contraseña" required>
	          <p class="frase">Selecciona el cargo</p>
	          <select class="editcampo" name="rol">
				<option value="0">Escoje...</option>
				<option value="1">Adminstrador</option>
				<option value="2">Almacenista</option>
				<option value="3">Vendedor</option>
	          </select>
	          <input class="guardar" type="submit" name="regpro" value="Guardar">
          </div>
        </form>
      <?php endforeach;
          break;
    		 }
    	} ?>
    </main>
