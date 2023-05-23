<?php 
//Template Name: Blogs
get_header(); ?>
        <!-- Start Page Title Area -->
        <div class="page-title-area item-bg-1">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-title-content">
                            <h2>Blog</h2>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li>Blog One</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start Blog Area -->
        <section class="blog-section pt-100 pb-100">
            <div class="container">
                <div class="section-title">
                    <h2>Our <span>Latest</span> News</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidiunt labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                    <div class="bar"></div>
                </div>

                <div class="row">
                <?php 
                 $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                    $args = array('post_type' => 'post', 'posts_per_page' => 6, 'paged' => $paged);
                    $loop = new WP_Query( $args );
?>
					<?php if($loop->have_posts()): while ( $loop->have_posts() ) : $loop->the_post();?>
						<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );?>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="image">
                            <a href="single-blog.html">
                                <img src="<?php echo $image[0];?>" alt="image">
                            </a>
                        </div>

                        <div class="content">
                            <span><?php echo get_the_date(); ?></span>
                            <h3>
                                <a href="single-blog.html">
                                        <?php  the_title(); ?>
                                    </a>
                            </h3>
                            <p><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>

                <?php endwhile; endif;?>
                            
                            

                 


                   


                    <div class="col-lg-12 col-md-12">
                        <div class="pagination-area">
                        <?php wp_pagenavi( array( 'query' => $loop ) ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Blog Area -->
        <?php get_footer(); ?>