
			<footer class="page_footer ds ms s-py-90 s-py-xl-90 c-gutter-100">
				<div class="container">
					<div class="row">
						<div class="col-xl-4 col-lg-3 text-center text-lg-left animate" data-animation="fadeInUp">
							<div class="widget widget_text">
								<?php the_custom_logo(); ?>
								<p><?php echo of_get_option('f-about-text');?></p>
							</div>
							<div class="divider-60 divider-lg-0"></div>
						</div>

						<div class="col-xl-4 col-lg-5 text-center text-lg-left animate" data-animation="fadeInUp">
							<div class="widget widget_nav_menu">
								<h3>Userful Link</h3>

								<?php wp_nav_menu( array( 'menu_class' => 'menu', 'menu_id' => '', 'container'   => '' , 'theme_location' => 'footer' ) ); ?>
								<!-- <ul class="menu">
									<li class="menu-item">
										<a href="about-us.php">About Us</a>
									</li>
									<li class="menu-item">
										<a href="services.php">Services</a>
									</li>
									<li class="menu-item">
										<a href="#">ROV survey</a>
									</li>
									<li class="menu-item">
										<a href="gallery.php">Gallery</a>
									</li>
									<li class="menu-item">
										<a href="blogs.php">Blog/News</a>
									</li>
									 
									<li class="menu-item">
										<a href="modern-slavery-statement.php">Modern Slavery Statement</a>
									</li>
									<li class="menu-item">
										<a href="#">Contact Us</a>
									</li>
									
									
								</ul> -->
							</div>
							<div class="divider-60 divider-lg-0"></div>
						</div>

						<div class="col-xl-4 col-lg-4 text-center text-lg-left animate" data-animation="fadeInUp">
							<div class="widget widget_flickr">
								<h3 class="widget-title">Connect Us</h3>								
									<div class="media side-icon-box">
										<div class="icon-styled color-main fs-14">
											<i class="fa fa-map-marker"></i>
										</div>
										<p class="media-body"><?php echo of_get_option('address');?></p>
										
									</div>
									<div class="media side-icon-box">
										<div class="icon-styled color-main fs-14">
											<i class="fa fa-phone"></i>
										</div>
										<p class="media-body"><?php echo of_get_option('phone-number');?></p>
									</div>
									<div class="media side-icon-box">
										<div class="icon-styled color-main fs-14">
											<i class="fa fa-envelope"></i>
										</div>
										<p class="media-body">
											<a href="mailto:<?php echo of_get_option('email');?>"><span class="__cf_email__"><?php echo of_get_option('email');?></span></a>
										</p>
									</div>
								<p class="social-icons">
									<a href="<?php echo of_get_option('facebook');?>" target="_black" class="fa bg-icon rounded-icon fa-facebook" title="facebook"></a>
									<a href="<?php echo of_get_option('twitter');?>" target="_black" class="fa bg-icon rounded-icon fa-twitter" title="twitter"></a>
									<a href="<?php echo of_get_option('instagram');?>" target="_black" class="fa bg-icon rounded-icon fa-instagram" title="instagram"></a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</footer>

			<section class="page_copyright ls s-py-25">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-md-12 text-center">
							<p>&copy; Copyright <span class="copyright_year"><?php echo of_get_option('copyright');?></span> All Rights Reserved</p>
						</div>
					</div>
				</div>
			</section>


		</div><!-- eof #box_wrapper -->
	</div><!-- eof #canvas -->
	<script src="<?php bloginfo('template_url'); ?>/js/compressed.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
	<?php wp_footer(); ?>
	<!--script src="<?php bloginfo('template_url'); ?>/js/switcher.js"></script-->
</body>
</html>