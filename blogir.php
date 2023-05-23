<?php get_header();
//Template Name: Blog Page
?>
   <div class="banner-inner">
        <img src="<?php bloginfo('template_url'); ?>/img/blog.jpg" class="img-cover" alt="Slider">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-md-4 align-self-center">
                    <div class="banner-title">
                        <h1>Blog Post</h1>
                        <p>Mauris et elit et ante porttitor tincidunt. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="content-full about-bg">
        <section class="section py-5 bg-skayblue">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <h2 class="blog-hadding">Our Latest Blogs</h2>
                    </div>
                    <div class="col-lg-9 col-md-8">
                        <div class="row justify-content-center">
                 <?php //$cpt_query = query_posts('post_type=post&posts_per_page=5&order=desc');
                 $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                    $args = array('post_type' => 'post', 'posts_per_page' => 5, 'paged' => $paged);
                    $loop = new WP_Query( $args );
?>
					<?php if($loop->have_posts()): while ( $loop->have_posts() ) : $loop->the_post();?>
						<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );?>
                            <div class="col-lg-4 col-md-6 col-sm-6  mb-1">
                                <div class="card blog-card">
                                    <div class="card-body p-0">
                                        <a href="<?php the_permalink(); ?>" class="product-img">
                                            <img class="img-cover" src="<?php echo $image[0]; ?>" alt="Bologna">
                                            <div class="date-overlyar">
                                                <i class="fa fa-calendar"></i> <?php echo get_the_date(); ?>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="card-body pt-3">
                                        <div class="mb-3 text-muted d-flex justify-content-between bg-transparent border-top-0">
                                            <div class="views"><span><i class="fa fa-user"></i></span><?php echo get_the_author();?></div>
                                            
                                        </div>
                                        <a href="<?php the_permalink(); ?>" class="card-title mb-2"><?php the_title(); ?></a>
                                        <div class="card-text mb-4">
                                        <?php the_excerpt(); ?>
                                        </div>
                                        <a href="<?php the_permalink(); ?>" class="btn btn-blog">Read More</a>
                                    </div>
                                </div>
                            </div>
                            
                <?php endwhile; endif;?>
                            
                <?php wp_pagenavi( array( 'query' => $loop ) ); ?>
                        
                           
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4  mb-1">

                        <div class="card-search">
                           
                                     <h4>Popular Post</h4>
                                    
                                
                               
                                    <?php
                                    $popularpost = new WP_Query( array( 'posts_per_page' =>10, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) );

 

 

                                    ?>
                                    <ul class="recent-blog">
                                        <?php while ( $popularpost->have_posts() ) : $popularpost->the_post(); ?>
                                        <li>
                                            <a href="<?php the_permalink();?>" class="recent-post" title="">
                                                <div class="recent-icon">
                                                    <img src="<?php bloginfo('template_url'); ?>/img/blog12.jpg" class="img-cover" alt="">
                                                </div>
                                                <div class="recent-content">
                                                    <h5><i class="fa fa-calendar"></i> <?php echo get_the_date(); ?></h5>
                                                    <p><?php the_title();?></p>
                                                </div>
                                            </a>
                                        </li>
                                        <?php endwhile; wp_reset_query(); ?>
                                       

                                    </ul>
                               
                        </div>

                        <div class="card-search">
                            <h4 class="mt-3">Newsletter</h4>
                            <p class="mb-3">Stay Updated on all that's new add noteworthy</p>
                            <form class="subscribe1">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter Your Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Enter Your Email">
                                </div>
                                <div class="form-group ">
                                    <button type="submit" class="btn btn-block btn-theme1">Subscribe Now</button>
                                </div>
                            </form>
                        </div>
                        <!--<div class="card-search">-->
                        <!--    <h4 class="mt-3">Join to us</h4>-->
                        <!--    <ul class="social1 mb-2">-->
                        <!--        <li><a href="" class="link google-plus"><span class="fa fa-linkedin"></span></a></li>-->
                        <!--        <li><a href="" class="link twitter"><span class="fa fa-twitter"></span></a></li>-->
                        <!--        <li><a href="" class="link facebook"><span class="fa fa-facebook"></span></a></li>-->
                        <!--        <li><a href="" class="link google-plus"><span class="fa fa-instagram"></span></a></li>-->
                        <!--    </ul>-->
                        <!--</div>-->
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php  get_footer(); ?>