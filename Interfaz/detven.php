<?php
  session_start();
  include('funciones.php');
  verificar_sesion();
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" VALUES="" type="image/png">
        <title>Registrar venta</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="vencss/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="vencss/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
        <link rel="stylesheet" href="vendors/popup/magnific-popup.css">
        <!-- main css -->
        <link rel="stylesheet" href="cssven/style.css">
        <link rel="stylesheet" href="cssven/responsive.css">
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

    
        <section class="banner_area">
           	<div class="box_1620">
           		<div class="banner_inner d-flex align-items-center">
					<div class="container">
						<div class="banner_content text-center">
              <font  color="00000"> 
							<h3>Bienvenido <br />Vendedor</h3>
							<h5>En este espacio podras registrar las ventas.</h5>
							<a class="main_btn" href="vende.php">Volver al inicio</a>
						</div>
					</div>
				</div>
            </div>
        </section>
        
        <br>
        <br>
        <br>
        <br>
        <center><h3>FACTURAS  <br />DE VENTAS</h3></center>
      
<center>
    <h4>SUPERMERCADO  <br />GUADALUPE</h4></center>
<br> 
<br>


<STYLE>
table, th, td {
  border: 1px solid black;
}



</STYLE>

<CENTER><table style="width:20%"> 
<CENTER><table style="width:50%"> 

    <BR>
  <tr>
     <th>CLIENTE </th>
    <th>FECHA</th>
    <th>NIF</th> 
  
   
  </tr>
 </CENTER>

<TR>
 <td><input id="nombre" type="text" value=""><br></td> 
    <td><input id="nombre" type="text" value=""><br></td>
    <td><input id="nombre" type="text" value=""><br></td>
</TR>

<CENTER><table style="width:50%"> 

    <BR>
  <tr>
     <th>CATEGORIA </th>
    <th>Codigo Producto</th>
    <th>Producto</th> 
    <th>Cantidad</th>
      <th>Precio unitario</th>
    <th>TOTAL</th>
   
  </tr>




  <tr>
    <td><select name="CATEGORIA" >

        <option>Escoja...</option>

<option>Dulces</option>

<option>Lacteos</option>

<option>Bebidas</option>

<option>Productos de aseo</option>

<option>Productos de hogar</option>

<option>Pasabocas</option>

<option>Galletas</option>

<option>Cuidado personal</option>

<option>Comida enlatada</option>

</select></td>
    <td><input id="nombre" type="text" value=""><br></td> 
    <td><input id="nombre" type="text" value=""><br></td>
    <td><input id="nombre" type="text" value=""><br></td>
      <td><input id="nombre" type="text" value=""><br></td>
    <td><input id="nombre" type="text" value=""><br></td>
  </tr>

  <tr>
    <td><select name="CATEGORIA" >

         <option>Escoja...</option>

<option>Dulces</option>

<option>Lacteos</option>

<option>Bebidas</option>

<option>Productos de aseo</option>

<option>Productos de hogar</option>

<option>Pasabocas</option>

<option>Galletas</option>

<option>Cuidado personal</option>

<option>Comida enlatada</option>

</select></td>
    <td><input id="nombre" type="text" value=""><br></td>
    <td><input id="nombre" type="text" value=""><br></td>
    <td><input id="nombre" type="text" value=""><br></td>
      <td><input id="nombre" type="text" value=""><br></td>
    <td><input id="nombre" type="text" value=""><br></td>
  </tr>

 <tr>
    <td><select name="CATEGORIA" >

         <option>Escoja...</option>

<option>Dulces</option>

<option>Lacteos</option>

<option>Bebidas</option>

<option>Productos de aseo</option>

<option>Productos de hogar</option>

<option>Pasabocas</option>

<option>Galletas</option>

<option>Cuidado personal</option>

<option>Comida enlatada</option>

</select></td>
    <td><input id="nombre" type="text" value=""><br></td>
    <td><input id="nombre" type="text" value=""><br></td>
    <td><input id="nombre" type="text" value=""><br></td>
      <td><input id="nombre" type="text" value=""><br></td>
    <td><input id="nombre" type="text" value=""><br></td>
  </tr>

   <tr>
    <td><select name="CATEGORIA" >

         <option>Escoja...</option>

<option>Dulces</option>

<option>Lacteos</option>

<option>Bebidas</option>

<option>Productos de aseo</option>

<option>Productos de hogar</option>

<option>Pasabocas</option>

<option>Galletas</option>

<option>Cuidado personal</option>

<option>Comida enlatada</option>

</select></td>
    <td><input id="nombre" type="text" value=""><br></td>
    <td><input id="nombre" type="text" value=""><br></td>
    <td><input id="nombre" type="text" value=""><br></td>
      <td><input id="nombre" type="text" value=""><br></td>
    <td><input id="nombre" type="text" value=""><br></td>
  </tr>


   <tr>
    <td><select name="CATEGORIA" >
         <option>Escoja...</option>

<option>Dulces</option>

<option>Lacteos</option>

<option>Bebidas</option>

<option>Productos de aseo</option>

<option>Productos de hogar</option>

<option>Pasabocas</option>

<option>Galletas</option>

<option>Cuidado personal</option>

<option>Comida enlatada</option>

</select></td>
    <td><input id="nombre" type="text" value=""><br></td>
    <td><input id="nombre" type="text" value=""><br></td>
    <td><input id="nombre" type="text" value=""><br></td>
      <td><input id="nombre" type="text" value=""><br></td>
    <td><input id="nombre" type="text" value=""><br></td>
  </tr>


   <tr>
    <td><select name="CATEGORIA" >

         <option>Escoja...</option>

<option>Dulces</option>

<option>Lacteos</option>

<option>Bebidas</option>

<option>Productos de aseo</option>

<option>Productos de hogar</option>

<option>Pasabocas</option>

<option>Galletas</option>

<option>Cuidado personal</option>

<option>Comida enlatada</option>

</select></td>
    <td><input id="nombre" type="text" value=""><br></td>
    <td><input id="nombre" type="text" value=""><br></td>
    <td><input id="nombre" type="text" value=""><br></td>
      <td><input id="nombre" type="text" value=""><br></td>
    <td><input id="nombre" type="text" value=""><br></td>
  </tr>


   <tr>
    <td><select name="CATEGORIA" >

         <option>Escoja...</option>

<option>Dulces</option>

<option>Lacteos</option>

<option>Bebidas</option>

<option>Productos de aseo</option>

<option>Productos de hogar</option>

<option>Pasabocas</option>

<option>Galletas</option>

<option>Cuidado personal</option>

<option>Comida enlatada</option>

</select></td>
    <td><input id="nombre" type="text" value=""><br></td>
    <td><input id="nombre" type="text" value=""><br></td>
    <td><input id="nombre" type="text" value=""><br></td>
      <td><input id="nombre" type="text" value=""><br></td>
    <td><input id="nombre" type="text" value=""><br></td>
  </tr>


   <tr>
    <td><select name="CATEGORIA" >

         <option>Escoja...</option>

<option>Dulces</option>

<option>Lacteos</option>

<option>Bebidas</option>

<option>Productos de aseo</option>

<option>Productos de hogar</option>

<option>Pasabocas</option>

<option>Galletas</option>

<option>Cuidado personal</option>

<option>Comida enlatada</option>

</select></td>
    <td><input id="nombre" type="text" value=""><br></td>
    <td><input id="nombre" type="text" value=""><br></td>
    <td><input id="nombre" type="text" value=""><br></td>
      <td><input id="nombre" type="text" value=""><br></td>
    <td><input id="nombre" type="text" value=""><br></td>
     <th>TOTAL DE LA COMPRA</th>
    <td><input  id="Total de la compra" type="text" value=""><br></td>
  </tr>


</table>
<BR>

<a class="main_btn" href="#">Guardar</a>
<a class="main_btn" href="DETALLE_VENTA.html">Eliminar</a>
<a class="main_btn" href="DETALLE_VENTA.html">Nuevo</a>


<BR>


 </CENTER>












<BR>
<BR>
<BR>
<BR>
<BR>
<BR>
<BR>
<BR>

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
                                <h3>About Me</h3>
                            </div>
                            <p>Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills,</p>
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">SUPER.GUADALUPE</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
                        </aside>
                    </div>
                    <div class="col-lg-5 col-sm-6">
                        <aside class="f_widget news_widget">
                            <div class="f_title">
                                <h3>Newsletter</h3>
                            </div>
                            <p>Stay updated with our latest trends</p>
                            <div id="mc_embed_signup">
                                <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
                                    <div class="input-group d-flex flex-row">
                                        <input name="EMAIL" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                        <button class="btn sub-btn"><span class="lnr lnr-arrow-right"></span></button>      
                                    </div>              
                                    <div class="mt-10 info"></div>
                                </form>
                            </div>
                        </aside>
                    </div>
                    <div class="col-lg-2">
                        <aside class="f_widget social_widget">
                            <div class="f_title">
                               
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
        </footer>
        <!--================End Footer Area =================-->
        
        
        
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/popup/jquery.magnific-popup.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendors/counter-up/jquery.counterup.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="js/theme.js"></script>
    </body>
</html>