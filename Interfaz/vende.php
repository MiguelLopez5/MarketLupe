<?php
    session_start();
    include('funciones.php');
    verificar_sesion();
?>
<!DOCTYPE html>
<html >
    <head>
        <title>Vendedor</title>
        <link rel="stylesheet" href="vencss/bootstrap.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" type="text/css" href="css/prinalm.css">
        <link rel="stylesheet" type="text/css" href="css/contenido.css">
        <link rel="stylesheet" href="vencss/style.css">
        <link rel="stylesheet" href="vencss/responsive.css">
        <link rel="stylesheet" type="text/css" href="css/fontello.css">
        <link rel="stylesheet" type="text/css" href="css/estilosalma.css">
        <link rel="stylesheet" type="text/css" href="css/menualma.css">
        <link rel="stylesheet" type="text/css" href="css/contenidoalma.css">
    </head>
<body>
  <header>
      <div class="contenedor">
        <h1>Vendedor</h1>
        <input type="checkbox" id="menu-bar">
        <label class="icon-menu" for="menu-bar"></label>
        <nav class="menu">
          <a href="productos.php">Inventario</a>
          <a href="ingresos.php">Ventas</a>
          <a href="detven.php">Detalle de factura</a>
          <a href="">Editar perfil </a>
          <a href="cerrar.php">Cerrar sesión</a>
        </nav>
      </div>
    </header>
 <main>
    <section id="imm">
      <img src="img/bandira.jpg">
      <div class="contenedor">
        <h3>Bienvenido Vendedor</h3>
        <center> <h5>Es este espacio podras registrar los datos de <br> cada venta realizada en el Super mercado guadalupe. </h5> </center>
        <center>  <a class="main_btn" href="ingresos.php">Explorar Ventas</a></center>
      </div>
    </section>
    <div class="contener">
        <section class="header">
        <section class="banner_area">
             <section id="imm">
    </main>
        <center><h2>PRODUCTOS <br/>EXISTENTES</h2></center>
        <section class="home_blog_area pad_top">
        	<div class="container">
        		<div class="home_blog_inner">
        			<div class="row h_blog_item">
        				<div class="col-lg-6">
							<div class="h_blog_img">
								<img class="img-fluid" src="img/granos.jpg" alt="">
							</div>
						</div>
						<div class="col-lg-6">
							<div class="h_blog_text">
								<div class="h_blog_text_inner left">
									<h4>PRODUCTOS DE <br />GRANO</h4>
									<p>En esta area se mostraran todos los productos de granos existentes en el Super Mercado.</p>
									<a class="main_btn2" href="PRO_GRANO.html">Explorar productos</a>
								</div>
							</div>
						</div>
        			</div>
        			<div class="row h_blog_item">
						<div class="col-lg-6">
							<div class="h_blog_text">
								<div class="h_blog_text_inner right">
									<h4>PRODUCTOS: <br /> FRUTAS </h4>
									<p>En esta area se mostraran todos los productos de fruta existentes en el Super Mercado.</p>
									<a class="main_btn2" href="PRO_FRUTAS.html">Explorar productos</a>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="h_blog_img">
								<img class="img-fluid" src="img/frutas.jpg" alt="">
							</div>
						</div>
        			</div>
        			<div class="row h_blog_item">
        				<div class="col-lg-6">
							<div class="h_blog_img">
								<img class="img-fluid" src="img/dulces.jpg" alt="">
							</div>
						</div>
						<div class="col-lg-6">
							<div class="h_blog_text">
								<div class="h_blog_text_inner left">
									<h4>PRODUCTOS: <br />DULCES</h4>
									<p>En esta area se mostraran todos los productos de dulces existentes en el Super Mercado.</p>
									<a class="main_btn2" href="PRO_DULCES.html">Explorar productos</a>
								</div>
							</div>
						</div>
        			</div>
        			<div class="row h_blog_item">
						<div class="col-lg-6">
							<div class="h_blog_text">
								<div class="h_blog_text_inner right">
									<h4>PRODUCTOS DE: <br /> CEREALES</h4>
									<p>En esta area se mostraran todos los productos de cereal existentes en el Super Mercado.</p>
									<a class="main_btn2" href="PRO_CEREAL.html">Explorar productos</a>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="h_blog_img">
								<img class="img-fluid" src="img/cereall.jpg" alt="">
							</div>
						</div>
        			</div>
        		</div>
     <div class="row h_blog_item">
                        <div class="col-lg-6">
                            <div class="h_blog_img">
                                <img class="img-fluid" src="img/liquido.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="h_blog_text">
                                <div class="h_blog_text_inner left">
                                    <h4>PRODUCTOS: <br />BEBIDAS</h4>
                                    <p>En esta area se mostraran todos los productos de BEBIDAS existentes en el Super Mercado.</p>
                                    <a class="main_btn2" href="PRO_BEBIDAS.html">Explorar productos</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row h_blog_item">
                        <div class="col-lg-6">
                            <div class="h_blog_text">
                                <div class="h_blog_text_inner right">
                                    <h4>PRODUCTOS: <br /> LACTEOS Y HUEVOS</h4>
                                    <p>En esta area se mostraran todos los productos de lacteo existentes en el Super Mercado.</p>
                                    <a class="main_btn2" href="PRO_LACTEOS.html">Explorar productos</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="h_blog_img">
                                <img class="img-fluid" src="img/LACT.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                     <div class="row h_blog_item">
                        <div class="col-lg-6">
                            <div class="h_blog_img">
                                <img class="img-fluid" src="img/COMIDA.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="h_blog_text">
                                <div class="h_blog_text_inner left">
                                    <h4>PRODUCTOS: <br />COMIDA ENLATADA Y SALSAS</h4>
                                    <p>En esta area se mostraran todos los productos de comidas enlatadas o salsas especiales existentes en el Super Mercado.</p>
                                    <a class="main_btn2" href="PRO_ENLATADA.html">Explorar productos</a>
                                </div>
                            </div>
                        </div>
                    </div>

<div class="row h_blog_item">
                        <div class="col-lg-6">
                            <div class="h_blog_text">
                                <div class="h_blog_text_inner right">
                                    <h4>PRODUCTOS DE: <br /> ASEO</h4>
                                    <p>En esta area se mostraran todos los productos de ASEO existentes en el Super Mercado.</p>
                                    <a class="main_btn2" href="PRO_ASEO.html">Explorar productos</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="h_blog_img">
                                <img class="img-fluid" src="img/ASEO.jpg" width="500" height="500" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                 <div class="row h_blog_item">
                        <div class="col-lg-6">
                            <div class="h_blog_img">
                                <img class="img-fluid" src="img/LIMP.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="h_blog_text">
                                <div class="h_blog_text_inner left">
                                    <h4>PRODUCTOS: <br />CUIDADO PERSONAL</h4>
                                    <p>En esta area se mostraran todos los productos de CUIDADO PERSONAL existentes en el Super Mercado.</p>
                                    <a class="main_btn2" href="#">Explorar productos</a>
                                </div>
                            </div>
                        </div>
                    </div>

<div class="row h_blog_item">
                        <div class="col-lg-6">
                            <div class="h_blog_text">
                                <div class="h_blog_text_inner right">
                                    <h4>PRODUCTOS: <br /> GALLETAS Y CONFITERIA </h4>
                                    <p>En esta area se mostraran todos los productos de fruta existentes en el Super Mercado.</p>
                                    <a class="main_btn2" href="PRO_GALLETAS.html">Explorar productos</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="h_blog_img">
                                <img class="img-fluid" src="img/GALLETAS.jpg" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="row h_blog_item">
                        <div class="col-lg-6">
                            <div class="h_blog_img">
                                <img class="img-fluid" src="img/PASAB.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="h_blog_text">
                                <div class="h_blog_text_inner left">
                                    <h4>PRODUCTOS: <br />PASABOCAS</h4>
                                    <p>En esta area se mostraran todos los productos de PASABOCAS existentes en el Super Mercado.</p>
                                    <a class="main_btn2" href="PRO_DULCES.html">Explorar productos</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row h_blog_item">
                        <div class="col-lg-6">
                            <div class="h_blog_text">
                                <div class="h_blog_text_inner right">
                                    <h4>PRODUCTOS DE: <br /> HOGAR <BR> DESCECHABLES Y MISCELANEA</h4>
                                    <p>En esta area se mostraran todos los productos de cereal existentes en el Super Mercado.</p>
                                    <a class="main_btn2" href="PRO_CEREAL.html">Explorar productos</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="h_blog_img">
                                <img class="img-fluid" src="img/HOGAR.jpg" alt="">
                            </div>
                        </div>
                    </div>

        	</div>
        </section>

        <section class="service_area p_120">
        	<div class="container box_1620">
        		<div class="main_title">
        			<h2>Servicios ofrecidos</h2>
        			<p></p>
        		</div>
        		<div class="row m0 service_inner">
        			<div class="col-lg-3 col-md-6 p0">
        				<div class="service_img">
        					<img class="img-fluid" src="img/dulces.jpg" alt="">
        				</div>
        			</div>
        			<div class="col-lg-3 col-md-6 p0">
        				<div class="service_text">
        					<h4>DULCES  <br />GUADALUPE</h4>
        					<p>Creemos que lo que queda en la mente del consumidor son los momentos, las emociones y con nuestros dulces  lo podemos lograr</p>
        				</div>
        			</div>
        			<div class="col-lg-3 col-md-6 p0">
        				<div class="service_img">
        					<img class="img-fluid" src="img/frutas.jpg" alt="">
        				</div>
        			</div>
        			<div class="col-lg-3 col-md-6 p0">
        				<div class="service_text">
        					<h4>FRUTAS <br />GUADALUPE</h4>
        					<p>la fruta y las verduras suelen estar nada más entrar, señalará el comprador más observador. .</p>
        				</div>
        			</div>
        			<div class="col-lg-3 col-md-6 p0">
        				<div class="service_text">
        					<h4>Super <br />Guadalupe</h4>
        					<p>En este entorno, la publicidad se ve más como una oferta que como un factor perturbador, por lo que creamos una base óptima para una comunicación de éxito entre consumidores y clientes.</p>
        				</div>
        			</div>
        			<div class="col-lg-3 col-md-6 p0">
        				<div class="service_img">
        					<img class="img-fluid" src="img/service/service-3.jpg" alt="">
        				</div>
        			</div>
        			<div class="col-lg-3 col-md-6 p0">
        				<div class="service_text">
        				
        					<p>Supermercado GUADALUPE. Los mejores productos del Supermercado ¡Pide aquí! Pide frutas, verduras, lácteos, carnes, panadería, aseo y mas aquí. SUPER.GUADALUPE</p>
        				</div>
        			</div>
        			<div class="col-lg-3 col-md-6 p0">
        				<div class="service_img">
        					<img class="img-fluid" src="img/service/service-4.jpg" alt="">
        				</div>
        			</div>
        		</div>
        	</div>
        </section>



        <section class="instagram_area">
        	<div class="container box_1620">
        		<div class="insta_btn">
        			<a class="btn theme_btn" href="#">INICIO</a>
        		</div>
        		<div class="instagram_image row m0">
        			<a href="#"><img src="img/dulces.jpg" alt=""></a>
        			<a href="#"><img src="img/paquetes.jpg" alt=""></a>
        			<a href="#"><img src="img/COMIDA.jpg" alt=""></a>
        			<a href="#"><img src="img/dulces.jpg" alt=""></a>
        			<a href="#"><img src="img/paquetes.jpg" alt=""></a>
        			<a href="#"><img src="img/dulces.jpg" alt=""></a>
        		</div>
        	</div>
        </section>
        <!--================End Instagram Area =================-->

        <!--================Footer Area =================-->
        <footer class="footer_area">
        	<div class="container">
        		<div class="row footer_inner">
        			<div class="col-lg-5 col-sm-6">
        				<aside class="f_widget ab_widget">
        					<div class="f_title">
        						<h3>Contactenos</h3>
        					</div>
        					<p> Num. 3215289632</p>
                            <p> Num. 3135987542</p>

        					<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Superm &copy;<script>document.write(new Date().getFullYear());</script> guadalupe |  <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="index.html" target="_blank">SUPER.GUADALUPE</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
        				</aside>
        			</div>
        			<div class="col-lg-5 col-sm-6">
        				<aside class="f_widget news_widget">
        					<div class="f_title">
        						<h3>SUPER GUDALUPE</h3>
        					</div>
        					<p>Para mas informacion: </p>
        					<div id="mc_embed_signup">
                              
                                	<div class="input-group d-flex flex-row">
                                        <input name="EMAIL" placeholder="Ingresa tu email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'EMAIL '" required="" type="email">
                                        <button class="btn sub-btn"><span class="lnr lnr-arrow-right"></span></button>
                                    </div>
                                    <div class="mt-10 info"></div>
                                </form>
                            </div>
        				</aside>
        			</div>
        			
        		</div>
        	</div>
        </footer>
    </body>
</html>
