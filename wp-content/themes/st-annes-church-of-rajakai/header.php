<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rajakai
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'st-annes-church-of-rajakai' ); ?></a>
<!-- Main Header-->
    <header class="main-header">
    	<!-- Header Top -->
    	<div class="header-top">
        	<div class="auto-container clearfix">
            	<!-- Top Left -->
            	<div class="top-left">
                	<ul class="clearfix">
                    	<li><span class="icon fa flaticon-old-typical-phone"></span> <a href="#">+920-637-8294</a></li>
                        <li><span class="icon fa fa-envelope"></span> <a href="mailto:something@gmail.com">something@gmail.com</a></li>
                    </ul>
                </div>
                
                <!-- Top Right -->
                <div class="top-right">
                	<ul class="clearfix">
                    	<li><a href="#">Career</a></li>                              
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="contact.html">Help &amp; Support</a></li>
                        <li><a href="faq-1.html">FAQ</a></li>
                    </ul>
                </div>
                
            </div>
        </div><!-- Header Top End -->
        
        <!--Header-Lower-->
        <div class="header-lower">
        	<div class="auto-container">
            	<div class="outer clearfix">
                	<!--Logo -->
                    <div class="logo-outer">
                    	<div class="logo"><a href="index.html"><img src="images/logo.png" alt=""></a></div>
                    </div>
                    
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->    	
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                        </div>

                        <?php
                        	wp_nav_menu(
                        		array(
                        			'theme_location' => 'primary',
                        			'container' => 'nav',
                        			'container_class' => 'navbar-collapse collapse',
                        			'menu_class'	=> 'nav navbar-collapse navbar-right	'
                        		)
                        	);
                        ?>
                        
           
                    </nav><!-- Main Menu End-->
                    
                </div>
            </div>
        </div>
    
    </header>
    <!--End Main Header -->
    
	<div id="content" class="site-content">
