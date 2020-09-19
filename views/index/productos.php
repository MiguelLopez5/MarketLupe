    <div class="slideshow">
			<ul class="slider">
				<li>
					<img src="assets/img/banner.jpg" alt="">
					<section class="caption">
						<h1>Bienvenido a nuestra página</h1>
						<p>Es este espacio podras visualizar con detalle cada uno de los productos
							 que se encuentran en el Super mercado guadalupe.</p>
						<a class="botonslider" href="?method=showAll">Ver todos los productos</a>
					</section>
				</li>
				<li>
					<img src="assets/img/banner2.jpg" alt="">
					<section class="caption">
						<h1>Energía para tu vida</h1>
						<p>Es este espacio podras visualizar con detalle cada uno de los productos
							de frutas que se encuentran en el Super mercado guadalupe.</p>
						<a class="botonslider" href="?method=showAll&idca=2">Ver frutas</a>
					</section>
				</li>
			</ul>

			<ol class="pagination">

			</ol>

			<div class="left">
				<span class="fa fa-chevron-left"></span>
			</div>
			<div class="right">
				<span class="fa fa-chevron-right"></span>
			</div>
    </div>
		<main>
			<h2>Explora más categorías</h2>
	    <section class="links">
	    	<div class="linksolo">
	    		<img class="dimcabimg" src="assets/img/lacteos.jpg">
	    		<a class="info" href="?method=showAll&idca=6">
						Lacteos
						<span class="linea"></span>
					</a>
	    	</div>
				<div class="linksolo">
	    		<img class="dimcabimg" src="assets/img/pasabocas.jpg">
	    		<a class="info" href="?method=showAll&idca=11">
						Paquetes
						<span class="linea"></span>
					</a>
	    	</div>
				<div class="linksolo">
	    		<img class="dimcabimg" src="assets/img/frutas.jpg">
	    		<a class="info" href="?method=showAll&idca=2">
						Frutas
						<span class="linea"></span>
					</a>
	    	</div>
	    </section>
			<h2>Productos alimeticios</h2>
			<section class="contenido">
				<input type="checkbox" id="dnone">
				<section class="menurespon">
					<label for="dnone" id="iconomenu"><span class="fa fa-bars"></span></label>
				</section>
				<div class="productos">
					<?php 
					if (isset($_POST['nombre'])) { 
						foreach (Producto::searchData($_POST['nombre']) as $dato) : ?>
							<div class="cuadro">
								<img class="dimpro" src="<?= $dato->linkImg ?>" alt="imagen_producto">
								<h3><?= $dato->NomProd ?></h3>
								<p>$<?= $dato->PrecSal ?></p>
								<button class="botcomprar" type="button" name="button">Comprar</button>
							</div>
					<?php endforeach; 
					}
					elseif ((isset($_POST['orden']))&&(isset($_GET['idca']))) {
						foreach (Producto::showCategory($_GET['idca'], $_POST['orden']) as $dato) : ?>
							<div class="cuadro">
								<img class="dimpro" src="<?= $dato->linkImg ?>" alt="imagen_producto">
								<h3><?= $dato->NomProd ?></h3>
								<p>$<?= $dato->PrecSal ?></p>
								<button class="botcomprar" type="button" name="button">Comprar</button>
							</div>
					<?php endforeach; 
					}
					elseif ((isset($_GET['idca']))) {
						foreach (Producto::showCategory($_GET['idca'], 1) as $dato) : ?>
							<div class="cuadro">
								<img class="dimpro" src="<?= $dato->linkImg ?>" alt="imagen_producto">
								<h3><?= $dato->NomProd ?></h3>
								<p>$<?= $dato->PrecSal ?></p>
								<button class="botcomprar" type="button" name="button">Comprar</button>
							</div>
					<?php endforeach; 
					} 
					elseif (isset($_POST['orden'])){
						foreach (Producto::showOrder($_POST['orden']) as $dato) : ?>
							<div class="cuadro">
								<img class="dimpro" src="<?= $dato->linkImg ?>" alt="imagen_producto">
								<h3><?= $dato->NomProd ?></h3>
								<p>$<?= $dato->PrecSal ?></p>
								<button class="botcomprar" type="button" name="button">Comprar</button>
							</div>
					<?php endforeach; 
					}
					else{ 
						foreach (Producto::show() as $dato) : ?>
							<div class="cuadro">
								<img class="dimpro" src="<?= $dato->linkImg ?>" alt="imagen_producto">
								<h3><?= $dato->NomProd ?></h3>
								<p>$<?= $dato->PrecSal ?></p>
								<button class="botcomprar" type="button" name="button">Comprar</button>
							</div>
					<?php endforeach;  
					} ?>
				</div>
				<div class="opciones">
					<div class="cuadro2">
						<form action="" class="espacio" method="POST">
							<div class="barrab">
								<?php
									if (isset($_POST['nombre'])) { ?>
										<input class="campob" type="text" name="nombre" placeholder="Buscar productos" value="<?= $_POST['nombre'] ?>" required>
								<?php } else { ?>
										<input class="campob" type="text" name="nombre" placeholder="Buscar productos" required>
								<?php } ?>
								<input id="hide" type="submit" name="" value="buscar">
								<label id="iconob" for="hide"><span class="fa fa-search"></span></label>
							</div>
						</form>
						<hr>
						<form class="espacio" action="" method="POST">
							<p>Ordenar por</p>
							<select class="order" name="orden">
								<option value="NomProd">Nombre</option>
								<option value="PrecSal">Menor precio</option>
								<option value="PrecSal DESC">Mayor precio</option>
							</select>
							<input class="botonfiltros" type="submit" name="filtro" value="Aplicar filtros">
						</form>
						<hr>
						<ul class="espacio">
							<li><h3>Buscar otras categorías</h3></li>
							<li>
								<a href="?method=showAll&idca=3">
									<span class="der">Dulces</span>
									<span class="izq">
										<?php
											foreach (Producto::showTotal(3) as $cantidad) : 
												echo $cantidad->total;
											endforeach; 
										?>
									 productos
									</span>
								</a>
							</li>
							<li>
								<a href="?method=showAll&idca=5">
									<span class="der">Liquido</span>
									<span class="izq">
										<?php
											foreach (Producto::showTotal(5) as $cantidad) : 
												echo $cantidad->total;
											endforeach; 
										?>
									 productos</span>
								</a>
							</li>
							<li>
								<a href="?method=showAll&idca=1">
									<span class="der">Granos</span>
									<span class="izq">
										<?php
											foreach (Producto::showTotal(1) as $cantidad) : 
												echo $cantidad->total;
											endforeach; 
										?>
									 productos</span>
								</a>
							</li>
							<li>
								<a href="?method=showAll&idca=11">
									<span class="der">Paquetes</span>
									<span class="izq">
										<?php
											foreach (Producto::showTotal(11) as $cantidad) : 
												echo $cantidad->total;
											endforeach; 
										?>
									 productos</span>
								</a>
							</li>
							<li>
								<a href="?method=showAll&idca=6">
									<span class="der">Lacteos</span>
									<span class="izq">
										<?php
											foreach (Producto::showTotal(6) as $cantidad) : 
												echo $cantidad->total;
											endforeach; 
										?>
									 productos</span>
								</a>
							</li>
							<li>
								<a href="?method=showAll&idca=7">
									<span class="der">Comida enlatada y salsas</span>
									<span class="izq">
										<?php
											foreach (Producto::showTotal(7) as $cantidad) : 
												echo $cantidad->total;
											endforeach; 
										?>
									 productos</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</section>
		</main>
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