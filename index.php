<?php get_header();
//Template Name: Home
?>
<section class="page_slider slider-1">
	<div class="flexslider">
		<ul class="slides">
		<?php query_posts('post_type=slider_post&order=asc&posts_per_page=-1');?>
        <?php if( have_posts() ): $i=1; while ( have_posts() ) : the_post(); ?>
        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );?>

			<li class="ds cover-image text-center text-lg-left">
				<!-- <img src="<?php bloginfo('template_url'); ?>/images/slide01.jpg" alt="img"> -->
				<img src="<?php echo $image[0];?>" alt="slider<?php echo $i; ?>">
			</li>

			<?php  $i++; endwhile; else :endif;wp_reset_query(); ?>
			
		</ul>
	</div> <!-- eof flexslider -->
</section>




			<!-- Section About -->
			<section id="about" class="ls ms section-about s-py-90 s-py-xl-160 text-center text-md-left">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<p class="text-center text-md-left color-darkgrey mb-1">
								<span class="line-left">About Us</span>
							</p>
							<h3 class="text-center text-md-left mt-0 mb-2 special-heading color-darkgrey">
								<span><?php echo get_field('about_hadding'); ?></span>
							</h3>
							<p class="text-center text-md-left color-darkgrey fs-20 fw-500">
								<span><?php echo get_field('about_sub_hadding'); ?></span>
							</p>
							<div class="divider-40 divider-xl-50"></div>
							<div class="border-left-custom">
							<?php echo get_field('about_description'); ?>
							</div>
							<div class="divider-40 divider-xl-50"></div>
							<div class="several-buttons">
								<a href="#" class="btn btn-maincolor btn-medium">Book a Lesson</a>
								<a href="#" class="btn btn-outline-maincolor btn-medium">Learn More</a>
							</div>
							<div class="divider-60 divider-lg-0"></div>
						</div>
						<div class="col-lg-6 mr--100-xl-with-scale">
							<div class="post_format-post-format-video">
								<div class="embed-responsive embed-responsive-3by2">
									<a href="<?php echo get_field('youtube_link'); ?>" class="embed-placeholder">
										<img src="<?php bloginfo('template_url'); ?>/images/bg-video.jpg" alt="img">
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- Section Counter -->
			<section id="features" class="ls section-counter s-overlay mobile-overlay s-py-90 s-py-xl-160 c-gutter-40" >
				<div class="container">
					<div class="row">
						<div class="col-lg-7">
							<p class="text-center text-md-left color-darkgrey mb-1">
								<span class="line-left">Advantages</span>
							</p>
							<h3 class="text-center text-md-left mt-0 mb-2 special-heading color-darkgrey">
								<span><?php the_field('advantages_hadding'); ?></span>
							</h3>
							<p class="text-center text-md-left color-darkgrey fs-20 fw-500">
								<span><?php the_field('advantages_sub_title'); ?></span>
							</p>
							<div class="divider-60 divider-xl-90"></div>
							<div class="row">
								<?php if(have_rows('counter')):
								 	while(have_rows('counter')): the_row();?>
										<div class="col-md-4">
											<div class="icon-box text-center text-md-left">
												<div class="icon-styled color-darkgrey fs-50">
													<i class="ico <?php the_sub_field('counter_icon'); ?>"></i>
												</div>
												<h3 class="special-heading text-uppercase counter-wrap color-main mt-2 mb-3">
													<span class="counter" data-from="0" data-to="<?php the_sub_field('counter_number'); ?>" data-speed="1500">0</span>
												</h3>
												<p><?php the_sub_field('counter_description'); ?></p>
											</div>
											<div class="divider-30 divider-lg-0"></div>
										</div>
								<?php endwhile; endif; ?>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- Section Services -->
			<section id="services" class="ls ms s-py-90 s-py-xl-160">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12 col-xl-12 section-special small-section">
							<div>
								<div class="content-center">
									<p class="text-center text-lg-center color-darkgrey mb-1">
										<span class="line-left">We are the best in this services</span>
									</p>
									<h3 class="text-center text-lg-center mt-0 mb-2 special-heading color-darkgrey">
										<span>Our Services</span>
									</h3>
									
									<div class="divider-35"></div>
									<!--div class="owl-custom-nav hidden-below-lg">
										<a href="#" class="owl-prev"><i class="fa fa-chevron-left"></i></a>
										<a href="#" class="owl-next"><i class="fa fa-chevron-right"></i></a>
									</div-->
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-xl-12">
							<div class="quote-carousel owl-carousel" data-margin="50" data-responsive-xl="4" data-responsive-ml="3" data-responsive-lg="3" data-responsive-md="2" data-responsive-sm="2" data-responsive-xs="1" data-dots="false" data-loop="true" data-autoplay="true">
							<?php 
							query_posts('post_type=services_post&posts_per_page=10&order=desc');?>
						<?php if(have_posts()): while(have_posts()): the_post();?>
							<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );?>
							
							
								<div class="vertical-item service-layout-1 ls">
									<div class="item-media">
										<img src="<?php echo $image[0]; ?>" alt="img">
										<div class="media-links">
											<a class="abs-link" title="" href="<?php the_permalink(); ?>"></a>
										</div>
									</div>
									<div class="item-content">
										<div class="item-content-wrap">
											<span class="cat-links">
												<span class="screen-reader-text">Categories</span>
												<a href="<?php the_permalink(); ?>" rel="category tag">
													Services
												</a>
											</span>
											<h5 class="mt-1">
												<a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
											</h5>
										</div>
										<!--a href="#" class="btn-booking">Booking a Lesson</a-->
									</div>
								</div>
								<?php $i++; endwhile; endif; wp_reset_query(); ?>
							</div>
						</div>
					</div>
				</div>
			</section>
			
			<section class="Section Gallery mt-40">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12">
							<p class="text-center color-darkgrey mb-1">
								<span class="line-left">Gallery</span>
							</p>
							<h3 class="text-center mt-0 mb-2 special-heading color-darkgrey">
								<span>Our Photos &amp; Videos</span>
							</h3>
							<p class="text-center color-darkgrey fs-20 fw-500">
								<span>We want our clients to feel awesome<br> and unique. </span>
							</p>

							<div class="divider-40 divider-xl-60"></div>
						</div>
					</div>
					<div class="row isotope-wrapper masonry-layout c-gutter-5 c-mb-5" >
					<?php 
							query_posts('post_type=gallery_post&posts_per_page=6&order=desc');?>
						<?php if(have_posts()): while(have_posts()): the_post();?>
							<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );?>
					
					<div class="col-xl-4 col-sm-6" style="position: absolute; left: 0%; top: 0px;">
							<div class="vertical-item item-gallery content-absolute ds">
								<div class="item-media">
									<img src="<?php echo $image[0]; ?>" alt="img">
								</div>
								<div class="item-content dark-bg">
									<h5>
										<a href="#"><?php the_title() ?></a>
									</h5>
								</div>
							</div>
						</div>
						<?php $i++; endwhile; endif; wp_reset_query(); ?>
					</div>
				</div>
			</section>

			<!-- Section Gallery >
			<section id="gallery" class="ls ds s-pt-90 s-pb-80 s-pt-xl-160 s-pb-xl-150 c-gutter-10">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="content-center">
								<div class="divider-lg-25 divider-xl-50"></div>
								<p class="text-center text-md-left color-main mb-1">
									<span class="line-left">Gallery</span>
								</p>
								<h3 class="text-center text-md-left mt-0 mb-2 special-heading color-darkgrey">
									<span>Our Photos & Videos</span>
								</h3>
								<p class="text-center text-md-left color-darkgrey fs-20 fw-500">
									<span>We want our clients to feel awesome <br>and unique. </span>
								</p>
								<div class="divider-40 divider-lg-25 divider-xl-50"></div>
								<div class="post_format-post-format-video">
									<div class="embed-responsive embed-responsive-3by2">
										<a href="https://www.youtube.com/embed/mcixldqDIEQ" class="embed-placeholder">
											<img src="<?php bloginfo('template_url'); ?>/images/bg-video.jpg" alt="img">
										</a>
									</div>
								</div>
								<div class="divider-10 divider-lg-0"></div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="row isotope-wrapper  c-mb-10">
								<div class="col-lg-12">
									<div class="vertical-item item-gallery content-absolute ds">
										<div class="item-media">
											<img src="<?php bloginfo('template_url'); ?>/images/gallery/27.jpg" alt="img">
										</div>
										<div class="item-content dark-bg">
											<h5> 
												<a href="gallery-single.html">Consetetur sadipscing elitr, sed diam nonumy</a>
											</h5>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="vertical-item item-gallery content-absolute ds">
										<div class="item-media">
											<img src="<?php bloginfo('template_url'); ?>/images/gallery/17.jpg" alt="img">
										</div>
										<div class="item-content dark-bg">
											<h5>
												<a href="gallery-single.html">Consetetur sadipscing</a>
											</h5>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="vertical-item item-gallery content-absolute ds">
										<div class="item-media">
											<img src="<?php bloginfo('template_url'); ?>/images/gallery/28.jpg" alt="img">
										</div>
										<div class="item-content dark-bg">
											<h5>
												<a href="gallery-single.html">Consetetur sadipscing</a>
											</h5>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section-->

			<!-- Section Price >
			<section id="price" class="ls s-pb-90 s-pt-85 s-pb-xl-160 s-pt-xl-155">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<p class="text-center color-darkgrey mb-1">
								<span class="line-left">Pricing</span>
							</p>
							<h3 class="text-center mt-0 mb-2 special-heading color-darkgrey">
								<span>Kite School Programs</span>
							</h3>
							<p class="text-center color-darkgrey fs-20 fw-500">
								<span>We want our clients to feel awesome<br> and unique.</span>
							</p>
							<div class="divider-60 divider-xl-60"></div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="pricing-plan price-layout-1">
								<div class="price-bg s-overlay cs">
									<div class="price-wrap">
										<span class="plan-sign">$</span>
										<span class="plan-price">45</span>
									</div>
									<div class="plan-name">
										<h3>
											Private
										</h3>
									</div>
								</div>
								<div class="pricing-body hero-bg">
									<div class="plan-features text-center">
										<ul class="list-bordered">
											<li class="enabled">Transfers to kalpitiya lagoon</li>
											<li class="enabled">Course with IKO instructors</li>
											<li class="disabled">3 nights accommodation</li>
											<li class="disabled">IKO card-certificate</li>
										</ul>
									</div>
									<div class="plan-button">
										<a href="contact2.html" class="btn btn-maincolor">Book a Lesson</a>
									</div>
								</div>
							</div>
							<div class="divider-60 divider-lg-0"></div>
						</div>

						<div class="col-lg-4 col-md-6">
							<div class="pricing-plan plan-featured price-layout-1 s-overlay cs">
								<div class="price-bg">
									<div class="price-wrap">
										<span class="plan-sign">$</span>
										<span class="plan-price">52</span>
									</div>
									<div class="plan-name">
										<h3>
											Semi Private
										</h3>
									</div>
								</div>
								<div class="pricing-body">
									<div class="plan-features text-center">
										<ul class="list-bordered">
											<li class="enabled">Transfers to kalpitiya lagoon</li>
											<li class="enabled">Course with IKO instructors</li>
											<li class="disabled">3 nights accommodation</li>
											<li class="disabled">IKO card-certificate</li>
										</ul>
									</div>
									<div class="plan-button">
										<a href="contact2.html" class="btn btn-maincolor">Book a Lesson</a>
									</div>
								</div>
							</div>
							<div class="divider-60 divider-lg-0"></div>
						</div>

						<div class="col-lg-4 col-md-6 mx-sm-auto">
							<div class="pricing-plan price-layout-1">
								<div class="price-bg s-overlay cs">
									<div class="price-wrap">
										<span class="plan-sign">$</span>
										<span class="plan-price">73</span>
									</div>
									<div class="plan-name">
										<h3>
											Group
										</h3>
									</div>
								</div>
								<div class="pricing-body hero-bg">
									<div class="plan-features text-center">
										<ul class="list-bordered">
											<li class="enabled">Transfers to kalpitiya lagoon</li>
											<li class="enabled">Course with IKO instructors</li>
											<li class="disabled">3 nights accommodation</li>
											<li class="disabled">IKO card-certificate</li>
										</ul>
									</div>
									<div class="plan-button">
										<a href="contact2.html" class="btn btn-maincolor">Book a Lesson</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- Section Shop >
			<section id="shop" class="ls ms s-pt-90 s-pb-60 s-pt-xl-160 s-pb-xl-130">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-xl-4 text-center text-md-left">
							<div class="divider-0 divider-lg-200 divider-xl-150"></div>
							<p class="text-center text-md-left color-darkgrey mb-1">
								<span class="line-left">Shop</span>
							</p>
							<h3 class="text-center text-md-left mt-0 mb-2 special-heading color-darkgrey">
								<span>Looking For New <br>Equipment?</span>
							</h3>
							<p class="text-center text-md-left color-darkgrey fs-20 fw-500">
								<span>We want our clients to feel <br>awesome and unique. </span>
							</p>
							<div class="divider-30 divider-xl-40"></div>
							<a href="shop-left.html" class="btn btn-maincolor">View all</a>
							<div class="divider-60 divider-lg-0"></div>
						</div>
						<div class="col-lg-6 col-xl-8">
							<ul class="owl-carousel products" data-responsive-lg="2" data-responsive-md="1" data-responsive-sm="2" data-responsive-xs="1" data-nav="false" data-margin="0" data-loop="true" data-autoplay="true">
								<li class="product">
									<div class="product-inner">
										<a href="shop-product-left.html">
											<img src="<?php bloginfo('template_url'); ?>/images/shop/34.jpg" alt="img">
										</a>

										<div class="product-wrap">
											<h2 class="woocommerce-loop-product__title">
												<a href="shop-product-left.html">Kitesurfing Kite Enduro</a>
											</h2>
											<div class="star-rating">
												<span style="width:80%">Rated <strong class="rating">4.00</strong> out of 5</span>
											</div>
											<div class="price-wrap">
												<span class="price">
													<span>
														<span>$</span>250
													</span> – <span class="woocommerce-Price-amount amount">
														<span>$</span>1350
													</span>
												</span>
												<a rel="nofollow" href="shop-cart.html" class="button product_type_simple add_to_cart_button">Add to
													cart</a>
											</div>
										</div>
									</div>
								</li>
								<li class="product">
									<div class="product-inner">
										<a href="shop-product-left.html">
											<img src="<?php bloginfo('template_url'); ?>/images/shop/35.jpg" alt="img">
										</a>

										<div class="product-wrap">
											<h2 class="woocommerce-loop-product__title">
												<a href="shop-product-left.html">Kitesurfing Kite Enduro</a>
											</h2>
											<div class="star-rating">
												<span style="width:80%">Rated <strong class="rating">4.00</strong> out of 5</span>
											</div>
											<div class="price-wrap">
												<span class="price">
													<span>
														<span>$</span>30.00
													</span> – <span class="woocommerce-Price-amount amount">
														<span>$</span>35.00
													</span>
												</span>
												<a rel="nofollow" href="shop-cart.html" class="button product_type_simple add_to_cart_button">Add to
													cart</a>
											</div>
										</div>
									</div>
								</li>
								<li class="product">
									<div class="product-inner">
										<a href="shop-product-left.html">
											<img src="<?php bloginfo('template_url'); ?>/images/shop/36.jpg" alt="img">
										</a>

										<div class="product-wrap">
											<h2 class="woocommerce-loop-product__title">
												<a href="shop-product-left.html">Kitesurfing Kite Enduro</a>
											</h2>
											<div class="star-rating">
												<span style="width:80%">Rated <strong class="rating">4.00</strong> out of 5</span>
											</div>
											<div class="price-wrap">
												<span class="price">
													<span>
														<span>$</span>30.00
													</span> – <span class="woocommerce-Price-amount amount">
														<span>$</span>35.00
													</span>
												</span>
												<a rel="nofollow" href="shop-cart.html" class="button product_type_simple add_to_cart_button">Add to
													cart</a>
											</div>
										</div>
									</div>
								</li>
								<li class="product">
									<div class="product-inner">
										<a href="shop-product-left.html">
											<img src="<?php bloginfo('template_url'); ?>/images/shop/37.jpg" alt="img">
										</a>

										<div class="product-wrap">
											<h2 class="woocommerce-loop-product__title">
												<a href="shop-product-left.html">Kitesurfing Kite Enduro</a>
											</h2>
											<div class="star-rating">
												<span style="width:80%">Rated <strong class="rating">4.00</strong> out of 5</span>
											</div>
											<div class="price-wrap">
												<span class="price">
													<span>
														<span>$</span>30.00
													</span> – <span class="woocommerce-Price-amount amount">
														<span>$</span>35.00
													</span>
												</span>
												<a rel="nofollow" href="shop-cart.html" class="button product_type_simple add_to_cart_button">Add to
													cart</a>
											</div>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</section> -->

			<!-- Section Testimonials -->
			<section id="testimonials" class="ls s-pb-90 s-pt-85 s-pb-xl-160 s-pt-xl-155">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<p class="text-center color-darkgrey mb-1">
								<span class="line-left">Testimonials</span>
							</p>
							<h3 class="text-center mt-0 mb-2 special-heading color-darkgrey">
								<span>What People Say</span>
							</h3>
							<p class="text-center color-darkgrey fs-20 fw-500">
								<span>We want our clients to feel awesome<br> and unique. </span>
							</p>

							<div class="divider-40 divider-xl-60"></div>

							<div class="quote-carousel owl-carousel" data-margin="0" data-responsive-lg="4" data-responsive-md="2" data-responsive-sm="2" data-responsive-xs="1" data-dots="false" data-loop="true" data-autoplay="true">
							<?php query_posts('post_type=Testimonials_post&order=asc&posts_per_page=-1');?>
								<?php if( have_posts() ): $i=1; while ( have_posts() ) : the_post(); ?>
								<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );?>
							<div class="quote-item quote-layout-1 vertical-item cover-image position-relative">
									<div class="quote-wrap text-center hero-bg position-relative">
										<img src="<?php bloginfo('template_url'); ?>/images/transparent-square.png" alt="img">
										<div class="quote-content ">
											<h6><?php the_title();?></h6>
											<?php the_content();?>
											<p class="social-icons">
												<a href="<?php the_field('facebook_link');?>" class="fa bg-icon rounded-icon fa-facebook" title="facebook"></a>
												<a href="<?php the_field('twitter_link');?>" class="fa bg-icon rounded-icon fa-twitter" title="twitter"></a>
												<a href="<?php the_field('linkedin_link');?>" class="fa bg-icon rounded-icon fa-linkedin" title="linkedin"></a>
											</p>
										</div>
									</div>
									<div class="quote-image position-relative">
										<img src="<?php echo $image[0];?>" alt="img">
										<div class="media-links">
											<a class="abs-link" title="" href="#"></a>
										</div>
									</div>
								</div>
								<?php  $i++; endwhile; else :endif;wp_reset_query(); ?>
							
							
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- Section Mailchimp -->
			<section id="mail" class="section-mailchimp s-py-90 s-py-xl-100 s-overlay ds ms s-parallax">
				<div class="container">
					<div class="row">
						<div class="col-lg-7">
							<h3 class="special-heading text-center text-lg-left mb-2">
								<span>Request a Callback</span>
							</h3>
							<p class="text-center text-center text-lg-left fw-500 text-white fs-20">
								<span>For all divers, being able to connect with others in their communities and with the ocean brings added benefits</span>
							</p>

							<div class="fw-divider-space divider-30 divider-xl-50"></div>
							
							<div class="col-lg-12 animate animated scaleAppear" data-animation="scaleAppear">
								<div class="contact-form c-mb-10 c-gutter-10" method="post" action="#">

								<?php echo apply_shortcodes('[contact-form-7 id="148" title="Request a Callback"]' ); ?>
									<!-- <div class="row mt-20 mt-xl-40">
										<div class="col-sm-12">
											<div class="form-group text-center">
												<button type="submit" id="contact_form_submit" name="contact_submit" class="btn btn-maincolor btn-medium">Send Message
												</button>
											</div>
										</div>
									</div> -->
</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<?php  get_footer(); ?>