<?php
include_once("header.php")
?>
<body class="contact-template page-template belle">
<div class="pageWrapper">
	<!--Search Form Drawer-->
	<div class="search">
        <div class="search__form">
            <form class="search-bar__form" action="#">
                <button class="go-btn search__button" type="submit"><i class="icon anm anm-search-l"></i></button>
                <input class="search__input" type="search" name="q" value="" placeholder="Search entire store..." aria-label="Search" autocomplete="off">
            </form>
            <button type="button" class="search-trigger close-btn"><i class="icon anm anm-times-l"></i></button>
        </div>
    </div>
    <!--End Search Form Drawer-->
 
    <!--Header-->
    <div class="header-wrap animated d-flex">
    	<div class="container-fluid">        
            <div class="row align-items-center">
            	<!--Desktop Logo-->
                <div class="logo col-md-2 col-lg-2 d-none d-lg-block">
                    <a href="index.html">
                    	<img src="assets/images/logo.svg" width="100px" alt="Belle Multipurpose Html Template" title="Belle Multipurpose Html Template" />
                    </a>
                </div>
                <!--End Desktop Logo-->
                <div class="col-2 col-sm-3 col-md-3 col-lg-8">
                	<div class="d-block d-lg-none">
                        <button type="button" class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open">
                        	<i class="icon anm anm-times-l"></i>
                            <i class="anm anm-bars-r"></i>
                        </button>
                    </div>
                	<!--Desktop Menu-->
                	<nav class="grid__item" id="AccessibleNav"><!-- for mobile -->
                        <ul id="siteNav" class="site-nav medium center hidearrow">
                            <li class="lvl1 parent megamenu"><a href="index.php">INICIO <i class="anm anm-angle-down-l"></i></a>
                                
                            </li>
                            <li class="lvl1 parent megamenu"><a href="catalogo.php">CATALOGO <i class="anm anm-angle-down-l"></i></a>
                            	
                            </li>
                        <li class="lvl1 parent megamenu"><a href="about.php">SOBRE NOSOTROS <i class="anm anm-angle-down-l"></i></a>
                        	
                        </li>
                        <li class="lvl1 parent dropdown"><a href="contacto.php">CONTACTO <i class="anm anm-angle-down-l"></i></a>
                          
                        </li>
                      
                          
                     
                        
                      </ul>
                    </nav>
                    <!--End Desktop Menu-->
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-2 d-block d-lg-none mobile-logo">
                	<div class="logo">
                        <a href="index.html">
                            <img src="assets/images/logo.svg" width="60px" alt="Belle Multipurpose Html Template" title="Belle Multipurpose Html Template" />
                        </a>
                    </div>
                </div>
                
        	</div>
        </div>
    </div>
    <!--End Header-->
    <!--Mobile Menu-->
    <div class="mobile-nav-wrapper" role="navigation">
		<div class="closemobileMenu"><i class="icon anm anm-times-l pull-right"></i>CERRAR MENU</div>
        <ul id="MobileNav" class="mobile-nav">
        	<li class="lvl1 parent megamenu"><a href="index.php">INICIO</a>
          
        </li>
        	<li class="lvl1 parent megamenu"><a href="catalogo.php">CATALOGO</a>
          
        </li>
        	<li class="lvl1 parent megamenu"><a href="about.php">SOBRE NOSOTROS</a>
          
        </li>
        	<li class="lvl1 parent megamenu"><a href="contacto.php">CONTACTO</a>
          
        </li>
        	
        	
      </ul>
	</div>
	<!--End Mobile Menu-->
    
    <!--Body Content-->
    <div id="page-content">
    	<!--Page Title-->
    	<div class="page section-header text-center">
			<div class="page-title">
        		<div class="wrapper"><h1 class="page-width">CONTACTO</h1></div>
      		</div>
		</div>
        <!--End Page Title-->
        <div class="map-section map">
        	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4500.4439469099625!2d-69.93605533610426!3d18.465206442389164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8ea563d92a3824df%3A0x4b258914d8f6f964!2sPlaza%20Central!5e0!3m2!1sen!2sdo!4v1618412526205!5m2!1sen!2sdo" height="350" allowfullscreen></iframe>
            <div class="container">
            	<div class="row">
                	<div class="map-section__overlay-wrapper">
                        <div class="map-section__overlay">
                            <h3 class="h4">NUESTRAS TIENDAS</h3>
                            <div class="rte-setting">
                               <p>Piantini 56,<br>Esquina Rodrigo Pedro Bravo Santo Domingo</p>
                                <p>Lunes-viernes, 10am - 9pm<br>sabado, 11am - 9pm<br>domingo, 11am - 5pm</p>
                            </div>
                            <p><a href="https://www.google.com/maps?ll=18.463679,-69.934806&z=16&t=m&hl=en&gl=DO&mapclient=embed&cid=5414884849615305060" class="btn btn--secondary btn--small" target="_blank">OBTENER DIRECCION</a></p>
                        </div>
                   	</div>
                </div>
            </div>
        </div>
        
        <br>
        <div class="container">
            <div class="row">
            	<div class="col-12 col-sm-12 col-md-8 col-lg-8 mb-4">
                	<h2>CONTACTANOS</h2>
                    <p>Escribenos para resolverte cualquier duda, que pueda tener </p>
                	<div class="formFeilds contact-form form-vertical">
                      <form method="post"  id="contact_form" class="contact-form">	
                      <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        	<div class="form-group">
                          	<input type="text" id="ContactFormName" name="nombre" placeholder="Nombre" value="" required="">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        	<div class="form-group">
							<input type="email" id="ContactFormEmail" name="correo" placeholder="Correo" value="" required="">                        	
                            </div>
                        </div>
                      </div>
                      <div class="row">
                          <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                          	<div class="form-group">
                            <input required="" type="tel" id="ContactFormPhone" name="telefono" pattern="[0-9\-]*" placeholder="Telefono" value="">
                            </div>
                          </div>
                          <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                          	<div class="form-group">
                            <input required="" type="text" id="ContactSubject" name="asunto" placeholder="Tema" value="">
                            </div>
                          </div>
                      </div>
                      <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        	<div class="form-group">
                            <textarea required="" rows="10" id="ContactFormMessage" name="mensaje" placeholder=" Mensaje"></textarea>
                            </div>
                        </div>  
                      </div>
                      <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <input type="submit" name="enviar" class="btn" value="Enviar mensaje">
                        </div>
                     </div>
                     </form>

                     <?php 
                     include_once("contactoreg.php")
                     ?>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                	<div class="open-hours">
                    	<strong>SOPORTE</strong><br>
						lunes - sabado : 9am - 11pm<br>
						Domingo: 11am - 5pm
                    </div>
                	<hr />
                    <ul class="addressFooter">
                        <li><i class="icon anm anm-map-marker-al"></i><p>Piantini 56,<br>Esquina Rodrigo Pedro Bravo Santo Domingo</p></li>
                        <li class="phone"><i class="icon anm anm-phone-s"></i><p>(849) 785 666 7541</p></li>
                        <li class="email"><i class="icon anm anm-envelope-l"></i><p>sales@yousite.com</p></li>
                    </ul>
                    <hr />
                    <ul class="list--inline site-footer__social-icons social-icons">
                        <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Facebook"><i class="icon icon-facebook"></i></a></li>
                        <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Twitter"><i class="icon icon-twitter"></i> <span class="icon__fallback-text">Twitter</span></a></li>
                       
                        <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Instagram"><i class="icon icon-instagram"></i> <span class="icon__fallback-text">Instagram</span></a></li>
                      
                        <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on YouTube"><i class="icon icon-youtube"></i> <span class="icon__fallback-text">YouTube</span></a></li>
                        
                    </ul>
                </div>
            </div>
        </div>
        
    </div>
    <!--End Body Content-->
<?php
include_once("footer.php")
?>