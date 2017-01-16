<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<div id="wrap">

		<!-- Preloader -->
		<div id="preloader">
			<div id="status">&nbsp;</div>
		</div>

		<header id="wrapper">

			<div class="container clearfix">

			<h1 id="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>

			<!-- start navi -->
			<div id="nav-button"> <span class="nav-bar"></span> <span class="nav-bar"></span> <span class="nav-bar"></span> </div>
			<div id="options" class="clearfix">
			<ul id="main-menu">
			<li><a href="index.html" class="current">Home</a>
			<ul class="other">
			<li><a href="index2.html">Full Opacity</a></li>
			</ul></li>
			<li><a href="#" class="dead-link">Portfolio</a>
			<ul class="other">
			<li><a href="slideshow.html">Slideshow</a></li>
			<li><a href="masonry.html">Masonry Grid</a></li>
			<li><a href="slider.html">Slider</a></li>
			<li><a href="classic.html">Classic</a></li>
			</ul>
			</li>
			<li><a href="about.html">About</a></li>
			<li><a href="blog.html">Blog</a></li>
			<li><a href="contact.html">Contact</a></li>
			</ul>
			<ul id="homepage" class="option-set clearfix" data-option-key="filter">
			<li><a href="#filter=.home" class="selected">All</a>
			<li><a href="#filter=.germany">Germany</a></li>
			<li><a href="#filter=.africa">Africa</a></li>
			<li><a href="#filter=.norway">Norway</a></li>
			<li><a href="#filter=.poland">Poland</a></li>
			</ul>
			</div>
			<!-- end nav -->

			</div>
			
		</header>
		<!-- end header -->

		<div id="content">
