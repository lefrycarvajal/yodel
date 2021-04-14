<?php
include_once("header.php")
?>
	
<body class="template-index belle home9-parallax">
<div id="pre-loader">
    <img src="assets/images/loader.gif" alt="Loading..." />
</div>
<div class="pageWrapper">
	<!--Search Form Drawer-->
	<div class="search">
        <div class="search__form">
            <form class="search-bar__form" action="#">
                <button class="go-btn search__button" type="submit"><i class="icon anm anm-search-l"></i></button>
                <input class="search__input" type="search" name="q" value="" placeholder="Search entire store..." aria-label="Search" autocomplete="off">
            </form>
            <button type="button" class="search-trigger close-btn"><i class="anm anm-times-l"></i></button>
        </div>
    </div>
    <!--End Search Form Drawer-->
   
    <!--Header-->
    <div class="header-wrap classicHeader animated d-flex">
    	<div class="container-fluid">        
            <div class="row align-items-center">
            	<!--Desktop Logo-->
                <div class="logo col-md-2 col-lg-2 d-none d-lg-block">
                    <a href="index.html">
                    	<img src="assets/images/logo.svg" width="90px" alt="Belle Multipurpose Html Template" title="Belle Multipurpose Html Template" />
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
                            <li class="lvl1 parent megamenu"><a href="index.php">INICIO<i class="anm anm-angle-down-l"></i></a>
                                
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
                <!--Mobile Logo-->
                <div class="col-6 col-sm-6 col-md-6 col-lg-2 d-block d-lg-none mobile-logo">
                	<div class="logo">
                        <a href="index.html">
                            <img src="assets/images/logo.svg" width="60px" alt="Belle Multipurpose Html Template" title="Belle Multipurpose Html Template" />
                        </a>
                    </div>
                </div>
                <!--Mobile Logo-->
                
        	</div>
        </div>
    </div>
    <!--End Header-->
    <!--Mobile Menu-->
    <div class="mobile-nav-wrapper" role="navigation">
		<div class="closemobileMenu"><i class="icon anm anm-times-l pull-right"></i> CERRAR MENU</div>
        <ul id="MobileNav" class="mobile-nav">
        	<li class="lvl1 parent megamenu"><a href="index.php">INICIO</a>
          
        </li>
        	<li class="lvl1 parent megamenu"><a href="catalogo.php">CATALOGO </a>
          
        </li>
        	<li class="lvl1 parent megamenu"><a href="about.php">SOBRE NOSOTROS </a>
          
        </li>
        	<li class="lvl1 parent megamenu"><a href="contacto.php">CONTACTO </a>
          
        </li>
        
      </ul>
	</div>
	<!--End Mobile Menu-->
    
    <!--Body Content-->
    <div id="page-content">
    	<!--Home slider-->
    	<div class="slideshow slideshow-wrapper">
        	<div class="home-slideshow">
            	<div class="slide">
                	<div class="blur-up lazyload">
                        <img class="blur-up lazyload" data-src="assets/images/slideshow-banners/home9-banner1.jpg" src="assets/images/slideshow-banners/home9-banner1.jpg" alt="Gift For her" title="Gift For her" />
                        <div class="slideshow__text-wrap slideshow__overlay classic bottom">
                            <div class="slideshow__text-content left">
                            	<div class="container">
                                    <div class="wrap-caption left">
                                        <h2 class="h1 mega-title slideshow__title">SUMÉRGETE EN
BLEU</h2>
                                        <span class="mega-subtitle slideshow__subtitle">FRESCURA, CLARIDAD Y SENSUALIDAD</span>
                                        <span class="btn" >COMPRAR AHORA</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Home slider-->
        
        <!--Hero Parallax Section1-->
        <div class="section">
        	<div class="hero hero--large hero__overlay bg-size">
            	<img class="bg-img blur-up" src="assets/images/parallax-banners/home9-parallax-banner1.jpg" alt="" />
				<div class="hero__inner">
                    <div class="container">
                     <div class="wrap-text  right text-medium font-bold">
                          <h2 class="h2 mega-title">TODAS LAS INTERPRETACIONES</h2>
                          <div class="rte-setting mega-subtitle">BLEU DE CHANEL</div>
                          <a href="#" class="btn">COMPRAR AHORA</a>
                      </div>
                    </div>
                  </div>            
            </div>
        </div>
        <!--End Hero Parallax Section1-->
        
        <!--Hero Parallax Section2-->
        <div class="section">
        	<div class="hero hero--large hero__overlay bg-size">
            	<img class="bg-img" src="assets/images/parallax-banners/home9-parallax-banner2.jpg" alt="" />
				<div class="hero__inner">
                    <div class="container">
                    	<div class="wrap-text  left text-large font-bold">
                          <h2 class="h2 mega-title">BOY DE CHANEL</h2>
                          <div class="rte-setting mega-subtitle">LA LINEA DE MAQUILLAJE Y TRATAMIENTO PARA HOMBRES DE CHANEL</div>
                          <a href="#" class="btn">COMPRAR AHORA</a>                        
                      </div>
                    </div>
                </div>            
            </div>
        </div>
        <!--End Hero Parallax Section2-->
        
        <!--Hero Parallax Section3-->
        <div class="section">
        	<div class="hero hero--large hero__overlay bg-size">
            	<img class="bg-img" src="assets/images/parallax-banners/home9-parallax-banner3.jpg" alt="" />
				<div class="hero__inner">
                    <div class="container">
                    	<div class="wrap-text  center text-medium font-bold">
          					<h2 class="h2 mega-title">BAÑO Y CUERPO</h2>
          					<div class="rte-setting mega-subtitle">NUEVAS PRESENTACIONES</div>
          					<a href="#" class="btn">COMPRAR AHORA</a>
      					</div>
                    </div>
                </div>            
            </div>
        </div>
		
		<div class="section">
        	<div class="hero hero--large hero__overlay bg-size">
            	<img class="bg-img" src="assets/images/parallax-banners/home9-parallax-banner4.jpg" alt="" />
				<div class="hero__inner">
                    <div class="container">
                    	<div class="wrap-text  center text-medium font-bold">
          					<h2 class="h2 mega-title">twist and spray</h2>
          					<div class="rte-setting mega-subtitle">CARÁCTER REAFIRMADO EN UNA FÓRMULA PURA</div>
          					<a href="#" class="btn">COMPRAR AHORA</a>
      					</div>
                    </div>
                </div>            
            </div>
        </div>
		
		<div class="section">
        	<div class="hero hero--large hero__overlay bg-size">
            	<img class="bg-img" src="assets/images/parallax-banners/home9-parallax-banner5.jpg" alt="" />
				<div class="hero__inner">
                    <div class="container">
                    	<div class="wrap-text  center text-medium font-bold">
          					<h2 class="h2 mega-title">LOS ESENCIALES DEL AFEITADO</h2>
          					<div class="rte-setting mega-subtitle">UNA COLECCION PARA TODOS LOS HOMBRES</div>
          					<a href="#" class="btn">COMPRAR AHORA</a>
      					</div>
                    </div>
                </div>            
            </div>
        </div>
		
		<div class="section">
        	<div class="hero hero--large hero__overlay bg-size">
            	<img class="bg-img" src="assets/images/parallax-banners/home9-parallax-banner6.jpg" alt="" />
				<div class="hero__inner">
                    <div class="container">
                    	<div class="wrap-text  center text-medium font-bold">
          					<h2 class="h2 mega-title">EL ARTE DE PERFURMARSE</h2>
          					<div class="rte-setting mega-subtitle">CONTEXTURA FRESCA, LIGERA Y NO GRASA</div>
          					<a href="#" class="btn">COMPRAR AHORA</a>
      					</div>
                    </div>
                </div>            
            </div>
        </div>
		
		<div class="section">
        	<div class="hero hero--large hero__overlay bg-size">
            	<img class="bg-img" src="assets/images/parallax-banners/home9-parallax-banner7.jpg" alt="" />
				<div class="hero__inner">
                    <div class="container">
                    	<div class="wrap-text  center text-medium font-bold">
          					<h2 class="h2 mega-title">INSPIRACION</h2>
          					<div class="rte-setting mega-subtitle">PERFUME DE UN HOMBRE QUE SE ALEJA DE TODOS LOS CÓDIGOS</div>
          					<a href="#" class="btn">COMPRAR AHORA</a>
      					</div>
                    </div>
                </div>            
            </div>
        </div>
		
		<div class="section">
        	<div class="hero hero--large hero__overlay bg-size">
            	<img class="bg-img" src="assets/images/parallax-banners/home9-parallax-banner8.jpg" alt="" />
				<div class="hero__inner">
                    <div class="container">
                    	<div class="wrap-text  center text-medium font-bold">
          					<h2 class="h2 mega-title">EL PERFUME</h2>
          					<div class="rte-setting mega-subtitle">UNA FRAGANCIA AROMÁTICA, INTENSAMENTE AMEDERADA</div>
          					<a href="#" class="btn">COMPRAR AHORA</a>
      					</div>
                    </div>
                </div>            
            </div>
        </div>
        <!--End Hero Parallax Section3-->
        
    </div>
    <!--End Body Content-->
<?php
include_once("footer.php")
?>