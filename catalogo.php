<?php
include_once("header.php")
?>
<body class="template-collection belle">
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
                            <li class="lvl1 parent megamenu"><a href="index.php">INICIO<i class="anm anm-angle-down-l"></i></a>
                                
                            </li>
                            <li class="lvl1 parent megamenu"><a href="catalogo.php">CATALOGO <i class="anm anm-angle-down-l"></i></a>
                            	
                            </li>
                        <li class="lvl1 parent megamenu"><a href="about.php">SOBRE NOSOTROS <i class="anm anm-angle-down-l"></i></a>
                        	
                        </li>
                        <li class="lvl1 parent dropdown"><a href="catalogo.php">CONTACTO <i class="anm anm-angle-down-l"></i></a>
                          
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
		<div class="closemobileMenu"><i class="icon anm anm-times-l pull-right"></i> Close Menu</div>
        <ul id="MobileNav" class="mobile-nav">
        	<li class="lvl1 parent megamenu"><a href="index.php">INICIO </a>
          
        </li>
        	<li class="lvl1 parent megamenu"><a href="catalogo.php">CATALOGO </a>
          
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
    	<!--Collection Banner-->
    	<div class="collection-header">
			<div class="collection-hero">
        		<div class="collection-hero__image"><img class="blur-up lazyload" data-src="assets/images/cat-women2.jpg" src="assets/images/cat-women2.jpg" alt="Women" title="Women" /></div>
        		<div class="collection-hero__title-wrapper"><h1 class="collection-hero__title page-width">CATALOGO</h1></div>
      		</div>
		</div>
        <!--End Collection Banner-->
        
        <div class="container">
        	<div class="row">
            	<!--Sidebar-->
            	<div class="col-12 col-sm-12 col-md-3 col-lg-3 sidebar filterbar">
                	<div class="closeFilter d-block d-md-none d-lg-none"><i class="icon icon anm anm-times-l"></i></div>
                	<div class="sidebar_tags">
                    	<!--Categories-->
                    	<div class="sidebar_widget categories filter-widget">
                            <div class="widget-title"><h2>CATEGORIA</h2></div>
                            <div class="widget-content">
                                <ul class="sidebar_categories">
                                    <li class="level1 "><a href="#;" class="site-nav">PERFUMES</a>
                                    	
                                    </li>
                                    <li class="level1 "><a href="#;" class="site-nav">CREMAS</a>
                                    	
                                    </li>
                                    <li class="lvl-1"><a href="#;" class="site-nav">LOCIONES</a></li>
                                    <li class="lvl-1"><a href="#;" class="site-nav">DESODORANTES</a></li>
                                   
                                </ul>
                            </div>
                        </div>
                        <!--Categories-->
                   
                  
             
                        <!--End Color Swatches-->
                       
                       
                      
                    
                    </div>
                </div>
                <!--End Sidebar-->
                <!--Main Content-->
                <div class="col-12 col-sm-12 col-md-9 col-lg-9 main-col">
                	
                    <hr>
                	<div class="productList">
                   
                        <div class="grid-products grid--view-items">
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="#">
                                            <!-- image -->
                                            <img class="blur-up lazyload" data-src="assets/images/product-images/product-image1.jpg"  alt="image" title="product">
                                            
                                        </a>
                                        
                                    </div>
                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="#">SOIN HYDRATANT 2-EN-1 VISAGE ET BARBE</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            
                                            <span class="price">48 €</span>
                                        </div>
                                     
                                     
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="#">
                                            <!-- image -->
                                            <img class=" blur-up lazyload" data-src="assets/images/product-images/product-image2.jpg" alt="image" title="product">
                                            <!-- End image -->
                                            <
                                        </a>
                              
                                    </div>
                                    <!-- end product image -->

                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="#">CRÈME DE RASAGE</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price">52 €</span>
                                        </div>
                                        <!-- End product price -->
                                      
                                        <!-- Variant -->
                                      
                                        <!-- End Variant -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="#">
                                            <!-- image -->
                                            <img class=" blur-up lazyload" data-src="assets/images/product-images/product-image3.jpg"  alt="image" title="product">
                                            <!-- End image -->
                                           
                                        </a>
                                        <!-- end product image -->

                                
                                    </div>
                                    <!-- end product image -->

                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="#">PARFUM TWIST AND SPRAY
114 €</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price">114 €</span>
                                        </div>
                                 
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="#">
                                            <!-- image -->
                                            <img class=" blur-up lazyload" data-src="assets/images/product-images/product-image8.jpg" alt="image" title="product" />
                                            <!-- End image -->
                                           
                                           
                                        </a>
                                        <!-- end product image -->

                                        <!-- Start product button -->
                                       
                                        
                                    </div>
                                    <!-- end product image -->

                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="#"> LOCIÓN PARA DESPUÉS DEL AFEITADO</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            
                                            <span class="price">60 €</span>
                                        </div>
                                        <!-- End product price -->
                                        
                                        
                                       
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="#">
                                            <!-- image -->
                                            <img class=" blur-up lazyload" data-src="assets/images/product-images/product-image5.jpg"  alt="image" title="product" />
                                            <!-- End image -->
                                            
                                            
                                        </a>
                                        <!-- end product image -->

                                     
                                    </div>
                                    <!-- end product image -->

                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="#">EAU DE TOILETTE VAPORIZADOR</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price">99 €</span>
                                        </div>
                                        <!-- End product price -->
                                        
                                        
                                      
                                        <!-- End Variant -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="#">
                                            <!-- image -->
                                            <img class=" blur-up lazyload" data-src="assets/images/product-images/product-image17.jpg"  alt="image" title="product" />
                                            <!-- End image -->
                                          
                                            <div class="product-labels"><span class="lbl on-sale">Sale</span></div>
                                            <!-- End product label -->
                                        </a>
                                        <!-- end product image -->

                                        <!-- Start product button -->
                                      
                                        
                                    </div>
                                    <!-- end product image -->

                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="#">EAU DE PARFUM VAPORIZADOR DE VIAJE RECARGABLE 3 X 20ML RECARGA</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price">64,95 €</span>
                                        </div>
                                        <!-- End product price -->
                                        
                                        
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="#">
                                            <!-- image -->
                                            <img class=" blur-up lazyload" data-src="assets/images/product-images/product-image18.jpg"  alt="image" title="product">
                                            <!-- End image -->
                                           
                                        </a>
                                        <!-- end product image -->

                                        <!-- Start product button -->
                                        
                                    </div>
                                    <!-- end product image -->

                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="#">EAU DE PARFUM VAPORIZADOR DE VIAJE RECARGABLE 3 X 20ML</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price">74,95 €</span>
                                        </div>
                                        <!-- End product price -->
                                        
                                        
                                        
                                        <!-- End Variant -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="#">
                                            <!-- image -->
                                            <img class=" blur-up lazyload" data-src="assets/images/product-images/product-image9.jpg"  alt="image" title="product" >
                                            <!-- End image -->
                                            
                                        </a>
                                        <!-- end product image -->

                                        
                                        
                                    </div>
                                    <!-- end product image -->

                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="#"> EAU DE PARFUM TWIST AND SPRAY</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price">105 €</span>
                                        </div>
                                        <!-- End product price -->
                                        
                                       
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="#">
                                            <!-- image --> 
                                            <img class=" blur-up lazyload" data-src="assets/images/product-images/product-image15.jpg" alt="image" title="product" />
                                            <!-- End image -->
                                            
                                            <!-- product label -->
                                            <div class="product-labels"><span class="lbl pr-label3">Popular</span></div>
                                            <!-- End product label -->
                                        </a>
                                        <!-- end product image -->

                                        <!-- Start product button -->
                                       
                                      
                                    </div>
                                    <!-- end product image -->

                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="#">2-IN-1 MOISTURISER FOR FACE AND BEARD</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price">51 €</span>
                                        </div>
                                        <!-- End product price -->
                                        
                                       
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="#">
                                            <!-- image -->
                                            <img class=" blur-up lazyload" data-src="assets/images/product-images/product-image7.jpg" alt="image" title="product" />
                                            <!-- End image -->
                                           
                                        </a>
                                        <!-- end product image -->

                                        <!-- Start product button -->
                                      
                                    </div>
                                    <!-- end product image -->

                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="#">DEODORANT STICK</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price">37 €</span>
                                        </div>
                                        <!-- End product price -->
                                        
                                       
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="#">
                                            <!-- image -->
                                            <img class=" blur-up lazyload" data-src="assets/images/product-images/product-image10.jpg" alt="image" title="product" />
                                            <!-- End image -->
                                            
                                        </a>
                                        <!-- end product image -->

                                        <!-- Start product button -->
                                       
                                       
                                    </div>
                                    <!-- end product image -->

                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="#">BLEU DE CHANEL 60ML EXCLUSIVO</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price">200 €</span>
                                        </div>
                                        <!-- End product price -->
                                        
                                       
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="#">
                                            <!-- image -->
                                            <img class=" blur-up lazyload" data-src="assets/images/product-images/product-image12.jpg"  alt="image" title="product" />
                                            <!-- End image -->
                                           
                                        </a>
                                        <!-- end product image -->

                                        <!-- Start product button -->
                                      
                                       
                                        <!-- end product button -->
                                    </div>
                                    <!-- end product image -->

                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="#">SHAVING CREAM</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price">57 €</span>
                                        </div>
                                        <!-- End product price -->
                                        
                                      
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="#">
                                            <!-- image -->
                                            <img class=" blur-up lazyload" data-src="assets/images/product-images/product-image13.jpg" alt="image" title="product" />
                                            <!-- End image -->
                                          
                                        </a>
                                        <!-- end product image -->

                                        <!-- Start product button -->
                                       
                                      
                                    </div>
                                    <!-- end product image -->

                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="#">PARFUM SPRAY</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price">142 €</span>
                                        </div>
                                        <!-- End product price -->
                                        
                                      
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="#">
                                            <!-- image -->
                                            <img class=" blur-up lazyload" data-src="assets/images/product-images/product-image15.jpg"  alt="image" title="product" />
                                            <!-- End image -->
                                           
                                        </a>
                                        <!-- end product image -->

                                        <!-- Start product button -->
                                     
                                    </div>
                                    <!-- end product image -->

                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="#">SHOWER GEL</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price">40 €</span>
                                        </div>
                                        <!-- End product price -->
                                        
                                    
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="#">
                                            <!-- image -->
                                            <img class=" blur-up lazyload" data-src="assets/images/product-images/product-image19.jpg"  alt="image" title="product" />
                                            <!-- End image -->
                                           
                                        </a>
                                        <!-- end product image -->

                                        <!-- Start product button -->
                                      
                                        
                                    </div>
                                    <!-- end product image -->

                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="#">BLEU EAU DE PARFUM BY CHANEL</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price">250 €</span>
                                        </div>
                                        <!-- End product price -->
                                        
                                        
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 item grid-view-item--sold-out">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="#">
                                            <!-- image -->
                                            <img class="  blur-up lazyload" data-src="assets/images/product-images/product-image1.jpg"  alt="image" title="product" />
                                            <!-- End image -->
                                          
                                          
                                        </a>
                                        <!-- end product image -->

                                        <!-- Start product button -->
                                    
                                      
                                    </div>
                                    <!-- end product image -->

                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="#">DEODORANT SPRAY</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price">37 €</span>
                                        </div>
                                        <!-- End product price -->
                                        
                                       
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="#">
                                            <!-- image -->
                                            <img class=" blur-up lazyload" data-src="assets/images/product-images/product-image17.jpg"  alt="image" title="product" />
                                            <!-- End image -->
                                            
                                        </a>
                                        <!-- end product image -->

                                        <!-- Start product button -->
                                      
                                    </div>
                                    <!-- end product image -->

                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="#">CHANEL EAU DE TOILETTE</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price">80 €</span>
                                        </div>
                                        <!-- End product price -->
                                        
                                     
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="#">
                                            <!-- image -->
                                            <img class=" blur-up lazyload" data-src="assets/images/product-images/product-image5.jpg"  alt="image" title="product" />
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->

                                        <!-- Start product button -->
                                       
                                    </div>
                                    <!-- end product image -->

                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="#">EAU DE TOILETTE SPRAY</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price">104 €</span>
                                        </div>
                                        <!-- End product price -->
                                        
                                  
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="#">
                                            <!-- image -->
                                            <img class=" blur-up lazyload" data-src="assets/images/product-images/product-image19.jpg" alt="image" title="product" />
                                            <!-- End image -->
                                          
                                        </a>
                                        <!-- end product image -->

                                        <!-- Start product button -->
                                        
                                       
                                    </div>
                                    <!-- end product image -->

                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="#">LOCIÓN BLEU DE CHANEL TOILETTE</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price">90 €</span>
                                        </div>
                                        <!-- End product price -->
                                        
                                    
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="#">
                                            <!-- image -->
                                            <img class=" blur-up lazyload" data-src="assets/images/product-images/product-image10.jpg" alt="image" title="product" />
                                            <!-- End image -->
                                            
                                        </a>
                                        <!-- end product image -->

                                        <!-- Start product button -->
                                       
                                        <!-- end product button -->
                                    </div>
                                    <!-- end product image -->

                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="#">EAU DE PARFUM TWIST AND SPRAY</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price">120 €</span>
                                        </div>
                                        <!-- End product price -->
                                        
                                        
                                    </div>
                                    <!-- End product details -->
                                </div>  
                            </div>
                        </div>
                    </div>
                    <hr class="clear">
                    <div class="pagination">
                      <ul>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li class="next"><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
                      </ul>
                    </div>
                </div>
                <!--End Main Content-->
            </div>
        </div>
        
    </div>
    <!--End Body Content-->

<?php
include_once("footer.php")
?>