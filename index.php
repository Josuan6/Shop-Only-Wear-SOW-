

<!DOCTYPE html>
<html lang="en">
<head>
<title>SOW</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Wish shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>
<?php 
    session_start(); 
    error_reporting(E_PARSE);
    if(!isset($_SESSION['contador'])){
        $_SESSION['contador'] = 0;
    }
?>
<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<div class="header_inner d-flex flex-row align-items-center justify-content-start">
			<div class="logo"><a href="index.php">SOW</a></div>
			<nav class="menu_principal">
				<ul>
					<li><a href="#">Inicio</a></li>
					<li><a href="#">Ropa</a></li>
					<li><a href="#">Accesorio</a></li>
					<li><a href="categorias.html">Categoria</a></li>
					<li><a href="contacto.html">Contacto</a></li>
				</ul>
			</nav>
			<div class="header_content ml-auto">
				<div class="search header_search">
					<form action="#">
						<input type="search" class="search_input" required="required">
						<button type="submit" id="search_button" class="search_button"><img src="images/magnifying-glass.svg" alt=""></button>
					</form>
				</div>
				<div class="shopping">
					<!-- Cart -->
					<a href="carrito.html">
						<div class="cart">
							<img src="images/shopping-bag.svg" alt="">
							<div class="cart_num_container">
								<div class="cart_num_inner">
									<div class="cart_num">1</div>
								</div>
							</div>
						</div>
					</a>
					<!-- Star -->
					<a href="#">
						<div class="star">
							<img src="images/star.svg" alt="">
							<div class="star_num_container">
								<div class="star_num_inner">
									<div class="star_num">0</div>
								</div>
							</div>
						</div>
					</a>
					<!-- Avatar -->
					<?php
                             if(!$_SESSION['nombreUser']==""){
                                echo ' 
                                    <a href="pedido.php" class="table-cell-td">Pedido</a>
                                    <a href="#" class="table-cell-td carrito-button-nav all-elements-tooltip" data-toggle="tooltip" data-placement="bottom" title="Ver carrito de compras">
                                        <i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-down"></i>
                                    </a>
                                    <a href="#" class="table-cell-td" data-toggle="modal" data-target=".modal-logout">
                                        <i class="fa fa-user"></i>&nbsp;&nbsp;'.$_SESSION['nombreUser'].'
                                    </a>
                                 ';
                            }else{
                                echo ' 
					<a href="login.html">
						<div class="avatar">
							<img src="images/avatar.svg" alt="">
						</div>
					</a>
                                 ';
                            }
                        ?>
				</div>
			</div>

			<div class="burger_container d-flex flex-column align-items-center justify-content-around menu_mm"><div></div><div></div><div></div></div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="logo menu_mm"><a href="#">SOW</a></div>
		<div class="search">
			<form action="#">
				<input type="search" class="search_input menu_mm" required="required">
				<button type="submit" id="search_button_menu" class="search_button menu_mm"><img class="menu_mm" src="images/magnifying-glass.svg" alt=""></button>
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="index.php">Inicio</a></li>
				<li class="menu_mm"><a href="#">Ropa</a></li>
				<li class="menu_mm"><a href="#">Acesorios</a></li>
				<li class="menu_mm"><a href="categorias.html">Categor&iacute;as</a></li>
				<li class="menu_mm"><a href="contacto.html">Contacto</a></li>
						    <li><a href="login.html">Iniciar Sesi&oacute;n</a></li>
							<li><a href="login.html">Registrarte</a></li>
			</ul>
		</nav>
	</div>

	<!-- Home -->

	<div class="home">
		
		<!-- Home Slider -->

		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(https://www.xtrafondos.com/wallpapers/taylor-swift-en-vestido-rojo-3665.jpg)"></div>
					<div class="home_slider_content">
						<div class="home_slider_content_inner">
							<div class="home_slider_subtitle">Promoci&oacute;n</div>
							<div class="home_slider_title">Nueva Colecci&oacute;n de Vestidos</div>
						</div>	
					</div>
				</div>

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/home_slider_1.jpg)"></div>
					<div class="home_slider_content">
						<div class="home_slider_content_inner">
							<div class="home_slider_subtitle">Promoci&oacute;n</div>
							<div class="home_slider_title">Nueva Colecci&oacute;n de Bikinis</div>
						</div>	
					</div>
				</div>

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(https://redtag-stores.com/en/wp-content/uploads/women-fashion-jumpsuit-1.jpg)"></div>
					<div class="home_slider_content">
						<div class="home_slider_content_inner">
							<div class="home_slider_subtitle">Promoci&oacute;n</div>
							<div class="home_slider_title">Nueva Colecci&oacute;n de Jumpsuit</div>
						</div>	
					</div>
				</div>

			</div>
			
			<!-- Home Slider Nav -->

			<div class="home_slider_next d-flex flex-column align-items-center justify-content-center"><img src="images/arrow_r.png" alt=""></div>

			<!-- Home Slider Dots -->

			<div class="home_slider_dots_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_slider_dots">
								<ul id="home_slider_custom_dots" class="home_slider_custom_dots">
									<li class="home_slider_custom_dot active">01.<div></div></li>
									<li class="home_slider_custom_dot">02.<div></div></li>
									<li class="home_slider_custom_dot">03.<div></div></li>
								</ul>
							</div>
						</div>
					</div>
				</div>		
			</div>
		</div>
	</div>

	<!-- Promo -->

	<div class="promo">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<div class="section_subtitle">Solo lo Mejor</div>
						<div class="section_title">Ofertas</div>
					</div>
				</div>
			</div>
			<div class="row promo_container">

				<!-- Promo Item -->
				<div class="col-lg-4 promo_col">
					<div class="promo_item">
						<div class="promo_image">
							<img src="images/promo_1.jpg" alt="">
							<div class="promo_content promo_content_1">
								<div class="promo_title">-30% de Descuento</div>
								<div class="promo_subtitle">En Todo</div>
							</div>
						</div>
						<div class="promo_link"><a href="#">Comprar Ahora</a></div>
					</div>
				</div>

				<!-- Promo Item -->
				<div class="col-lg-4 promo_col">
					<div class="promo_item">
						<div class="promo_image">
							<img src="images/promo_2.jpg" alt="">
							<div class="promo_content promo_content_2">
								<div class="promo_title">-30% Descuento</div>
								<div class="promo_subtitle">Pantalones</div>
							</div>
						</div>
						<div class="promo_link"><a href="#">Comprar Ahora</a></div>
					</div>
				</div>

				<!-- Promo Item -->
				<div class="col-lg-4 promo_col">
					<div class="promo_item">
						<div class="promo_image">
							<img src="images/promo_3.jpg" alt="">
							<div class="promo_content promo_content_3">
								<div class="promo_title">-25% off</div>
								<div class="promo_subtitle">En Sandaliast</div>
							</div>
						</div>
						<div class="promo_link"><a href="#">Comprar Ahora</a></div><br><br><br>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- New Arrivals -->

		<div class="arrivals">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<div class="section_subtitle">Solo lo Mejor</div>
						<div class="section_title">Nuevo</div>
					</div>
				</div>
			</div>
			<div class="row products_container">
			<?php
			error_reporting(0);
                  include 'library/configServer.php';
                  include 'library/consulSQL.php';
                  $consulta= ejecutarSQL::consultar("select * from producto where Stock > 0 limit 6");
                  $totalproductos = mysql_num_rows($consulta);
                  if($totalproductos>0){
                      while($fila=mysql_fetch_array($consulta)){
                         echo'
				<!-- Product -->
				<div class="col-lg-4 product_col">
					<div class="product">
						<div class="product_image">
							<img src="assets/img-products/'.$fila['Imagen'].'">
						</div>
						<div class="rating rating_4">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<div class="product_content clearfix">
							<div class="product_info">
								<div class="product_name"><a href="producto.html">'.$fila['NombreProd'].'</a></div>
								<div class="product_price">$'.$fila['Precio'].'</div>
							</div>
							<div class="product_options">
								<div class="product_buy product_option"><img src="images/shopping-bag-white.svg" alt=""></div>
								<div class="product_fav product_option">+</div>
							</div>
			                 </div>
		                    </div>
		                   </div> ';
                     }   
                  }else{
                      echo '<h2>No hay Platillos registrados en la tienda</h2>';
                  }  
              ?>  
	  </div>
   </div>
</div>

	<!-- Extra -->

	<div class="extra clearfix">
		<div class="extra_promo extra_promo_1">
			<div class="extra_promo_image" style="background-image:url(images/extra_1.jpg)"></div>
			<div class="extra_1_content d-flex flex-column align-items-center justify-content-center text-center">
				<div class="extra_1_price">30%<span>Descuento</span></div>
				<div class="extra_1_title">Todo Tenis</div>
				<div class="extra_1_text">*Integer ut imperdiet erat. Quisque ultricies lectus tellus, eu tristique magna pharetra.</div>
				<div class="button extra_1_button"><a href="pagar.html">Comprar</a></div>
			</div>
		</div>
		<div class="extra_promo extra_promo_2">
			<div class="extra_promo_image" style="background-image:url(images/extra_2.jpg)"></div>
			<div class="extra_2_content d-flex flex-column align-items-center justify-content-center text-center">
				<div class="extra_2_title">
					<div class="extra_2_center">&</div>
					<div class="extra_2_top">Hombres</div>
					<div class="extra_2_bottom">Mujeres</div>
				</div>
				<div class="extra_2_text">*Integer ut imperdiet erat. Quisque ultricies lectus tellus, eu tristique magna pharetra.</div>
				<div class="button extra_2_button"><a href="pagar.html">Comprar</a></div>
			</div>
		</div>
	</div>

	<!-- Gallery -->

	<div class="gallery">
		<div class="gallery_image" style="background-image:url(images/gallery.jpg)"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="gallery_title text-center">
						<ul>
							<li><a href="#">#sow</a></li>
							<li><a href="#">#sowinstagram</a></li>
							<li><a href="#">#sowchicas</a></li>
						</ul>
					</div>
					<div class="gallery_text text-center">La vida es mucho mejor cuando tienes estilo.</div>
					<div class="button gallery_button"><a href="#">Enviar</a></div>
				</div>
			</div>
		</div>	
		<div class="gallery_slider_container">
			
			<!-- Gallery Slider -->
			<div class="owl-carousel owl-theme gallery_slider">
				
				<!-- Gallery Item -->
				<div class="owl-item gallery_item">
					<a class="colorbox" href="images/gallery_1.jpg">
						<img src="images/gallery_1.jpg" alt="">
					</a>
				</div>

				<!-- Gallery Item -->
				<div class="owl-item gallery_item">
					<a class="colorbox" href="images/gallery_2.jpg">
						<img src="images/gallery_2.jpg" alt="">
					</a>
				</div>

				<!-- Gallery Item -->
				<div class="owl-item gallery_item">
					<a class="colorbox" href="images/gallery_3.jpg">
						<img src="images/gallery_3.jpg" alt="">
					</a>
				</div>

				<!-- Gallery Item -->
				<div class="owl-item gallery_item">
					<a class="colorbox" href="images/gallery_4.jpg">
						<img src="images/gallery_4.jpg" alt="">
					</a>
				</div>

				<!-- Gallery Item -->
				<div class="owl-item gallery_item">
					<a class="colorbox" href="images/gallery_5.jpg">
						<img src="images/gallery_5.jpg" alt="">
					</a>
				</div>

				<!-- Gallery Item -->
				<div class="owl-item gallery_item">
					<a class="colorbox" href="images/gallery_6.jpg">
						<img src="images/gallery_6.jpg" alt="">
					</a>
				</div>

			</div>
		</div>	
	</div>

	<!-- Testimonials -->

	<div class="testimonials">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<div class="section_subtitle">Tu Vida con Estilo</div>
						<div class="section_title">Testimonios</div>
					</div>
				</div>
			</div>
			<div class="row test_slider_container">
				<div class="col">

					<!-- Testimonials Slider -->
					<div class="owl-carousel owl-theme test_slider text-center">

						<!-- Testimonial Item -->
						<div class="owl-item">
							<div class="test_text">“Se han ganado mi confinza, comprar en SOW es lo maximo.”</div>
							<div class="test_content">
								<div class="test_image"><img src="images/testimonials.jpg" alt=""></div>
								<div class="test_name">Josuan Castillo</div>
								<div class="test_title">Cliente</div>
							</div>
						</div>

						<!-- Testimonial Item -->
						<div class="owl-item">
							<div class="test_text">“Tiene una exclente estetica, es una de las mejores paginas para comprar.”</div>
							<div class="test_content">
								<div class="test_image"><img src="images/testimonials.jpg" alt=""></div>
								<div class="test_name">Freilyn Bernabe</div>
								<div class="test_title">Cliente</div>
							</div>
						</div>

						<!-- Testimonial Item -->
						<div class="owl-item">
							<div class="test_text">“Estoy totalmente sadisfecha, hacen un buen trabajo.”</div>
							<div class="test_content">
								<div class="test_image"><img src="images/testimonials.jpg" alt=""></div>
								<div class="test_name">Cristina Martinez</div>
								<div class="test_title">Cliente</div>
							</div>
						</div>

					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="newsletter_content">
			<div class="newsletter_image" style="background-image:url(images/newsletter.jpg)"></div>
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="section_title_container text-center">
							<div class="section_subtitle">Solo lo Mejor</div>
							<div class="section_title">Registrate para un Descuento</div>
						</div>
					</div>
				</div>
				<div class="row newsletter_container">
					<div class="col-lg-10 offset-lg-1">
						<div class="newsletter_form_container">
							<form action="#">
								<input type="email" class="newsletter_input" required="required" placeholder="E-mail here">
								<button type="submit" class="newsletter_button">Registrate</button>
							</form>
						</div>
						<div class="newsletter_text">Tu Vida con Estilo, comienza hoy! Haz que se note el Cambio</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="footer_logo"><a href="#">SOW</a></div>
					<nav class="footer_nav">
						<ul>
							<li><a href="index.php">Inicio</a></li>
							<li><a href="#">Ropa</a></li>
							<li><a href="#">Accesorios</a></li>
							<li><a href="categorias.html">Categoria</a></li>
							<li><a href="contacto.html">Contacto</a></li>
						    <li><a href="login.html">Iniciar Sesi&oacute;n</a></li>
							<li><a href="login.html">Registrarte</a></li>
						</ul>
					</nav>
					<div class="footer_social">
						<ul>
							<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-reddit-alien" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						</ul>
					</div>
					<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>