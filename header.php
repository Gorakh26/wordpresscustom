<!DOCTYPE html>
<html class="no-js">
<head>
	<!-- <title>Commercial Diving Company - PDS</title> -->
	<meta charset="utf-8">
	<title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
	
	
	<!-- <meta name="description" content=""> -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animations.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/icomoon.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.css" class="color-switcher-link">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/shop.css" class="color-switcher-link">
	<script src="<?php bloginfo('template_url'); ?>/<?php bloginfo('template_url'); ?>/js/vendor/modernizr-2.6.2.min.js"></script>
</head>

<body>
	

	<!-- search modal -->
	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<div class="widget widget_search">
			<form method="get" class="searchform search-form" action="#">
				<div class="form-group">
					<input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
				</div>
				<button type="submit" class="btn">Search</button>
			</form>
		</div>
	</div>

	<!-- Unyson messages modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls p-normal">
		</div>
	</div><!-- eof .modal -->

	<div class="modal fade popupLogin" id="popupLogin" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content ds ms overflow-visible s-overlay s-mobile-overlay">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<div class="modal-body">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<h4 class="color-main mb-3">Log in</h4>
								<form class="form-registration c-mb-20 c-gutter-20" action="https://html.modernwebtemplates.com/">
									<div class="row mb-4">
										<div class="col-sm-12">
											<div class="form-group">
												<input type="text" name="name" class="form-control" required placeholder="login" aria-required="true">
											</div>
										</div>
										<div class="col-sm-12">
											<div class="form-group">
												<input type="password" name="password" class="form-control" placeholder="password" aria-required="true" required>
											</div>
										</div>
									</div>
									<a class="registerRedirect " data-dismiss="modal" data-target="#popupRegistr" data-toggle="modal" href="#">Not a member? Register!</a>
									<button type="submit" class="btn btn-maincolor mt-30 d-block">Sign In</button>
								</form>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade popupRegistr" id="popupRegistr" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content ds ms overflow-visible s-overlay s-mobile-overlay">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<div class="modal-body">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<h4 class="color-main mb-4">Registration</h4>
								<form class="form-registration c-mb-20 c-gutter-20" method="post" action="https://html.modernwebtemplates.com/">
									<div class="row">
										<div class="col-12">
											<div class="form-group">
												<input type="text" name="name" class="form-control" required placeholder="login" aria-required="true">
											</div>
										</div>
										<div class="col-12">
											<div class="form-group">
												<input type="password" name="password" class="form-control" placeholder="password" aria-required="true" required>
											</div>
										</div>
										<div class="col-12">
											<div class="form-group">
												<input type="email" name="email" class="form-control" placeholder="email" required aria-required="true">
											</div>
										</div>
										<div class="col-12">
											<div class="form-group">
												<input type="password" name="confirmPassword" class="form-control" placeholder="password" required aria-required="true">
											</div>
										</div>
										<div class="col-12">
											<div class="form-group">
												<input type="checkbox" id="agreed" name="agreed" value="agreed" required aria-required="true"><label for="agreed">I agree to the rules</label>
											</div>
										</div>
									</div>
									<button type="submit" class="btn btn-maincolor mt-30 d-block">Registration</button>
								</form>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">

			<!-- template sections -->


			<div class="header_absolute ds cover-background ">
				<!-- header with three Bootstrap columns - left for logo, center for navigation and right for includes-->
				<header class="page_header ds ms s-overlay">
					<div class="container-fluid">
						<div class="row align-items-center">
							<div class="col-xl-2 col-lg-3 col-11">
								<!-- <a href="index.php" class="logo">
									<img src="<?php // bloginfo('template_url'); ?>/images/logo.jpg" alt="img">
								</a> -->
								<?php the_custom_logo(); ?>
							</div> 
							<div class="col-xl-10 col-lg-9 col-1">
								<!-- main nav start -->
								<nav class="top-nav">
									<?php wp_nav_menu( array( 'menu_class' => 'nav sf-menu', 'menu_id' => '', 'container'   => '' , 'theme_location' => 'header' ) ); ?>

									<!-- <ul class="nav sf-menu">
										<li class="active">
											<a href="index.php">Home</a>
										</li>
										<li>
											<a href="about-us.php">About Us</a>
											<ul>
												<li><a href="#acd">Accreditation</a></li>
											</ul>
										</li>
										<li><a href="services.php">Services</a></li>
										<li><a href="rov-survey.php">ROV survey</a></li>
										<li><a href="gallery.php">Gallery</a></li>
										<li><a href="blogs.php">Blog/News</a></li>
										<li>
											<a href="javascript:void();">Policies</a>
											<ul>
												<li>
													<a href="modern-slavery-statement.php">Modern Slavery Statement</a>
												</li>
											</ul>
										</li>
										<li><a href="contact-us.php">Contact Us</a></li>
									</ul> -->


								</nav>


								

								<!-- eof main nav -->
							</div>
							<!--div class="col-xl-2 col-lg-3 text-right d-none d-lg-block">
								<a class="fs-20 links-maincolor-hover" href="tel:+88003532455"><mark>8 800</mark> 353-24-55</a>
							</div-->
						</div>
					</div>
					<!-- header toggler -->
					<span class="toggle_menu"><span></span></span>
				</header>

			</div>