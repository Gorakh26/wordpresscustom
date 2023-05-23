<?php 
//Template Name: Home
get_header(); ?>
    <!-- Start Banner Area -->
    <div class="main-banner-area-six">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="main-banner-content">
                                <span><?php the_field('banner_title'); ?></span>
                                <h1><?php the_field('banner_sub_title'); ?></h1>
                                <p><?php the_field('banner_content'); ?></p>
                                <div class="banner-btn">
                                    <a href="#" class="default-btn">Get Started</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="banner-image">
                                <img src="<?php the_field('banner_image'); ?>" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="default-shape">
            <div class="shape-1">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/shape/4.png" alt="image">
            </div>

            <div class="shape-2 rotateme">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/shape/5.svg" alt="image">
            </div>

            <div class="shape-3">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/shape/6.svg" alt="image">
            </div>

            <div class="shape-4">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/shape/7.png" alt="image">
            </div>

            <div class="shape-5">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/shape/8.png" alt="image">
            </div>
        </div>
    </div>
    <!-- End Banner Area -->

    <!-- Start More Features Area -->
    <section class="more-features-section pt-100 pb-70">
        <div class="container">
            <div class="row">
                <?php if(have_rows('service')):
								 	while(have_rows('service')): the_row();?>
                <div class="col-lg-3 col-md-6">
                    <div class="more-features-content <?php the_sub_field('service_bg_class'); ?>">
                        <div class="icon">
                            <i class="<?php the_sub_field('service_icon_class'); ?>"></i>
                        </div>
                        <h3><?php the_sub_field('service_title'); ?></h3>
                        <p><?php the_sub_field('service_content'); ?></p>
                    </div>
                </div>
<?php endwhile; endif; ?>

<div class="col-lg-3 col-md-6">
                    <div class="more-features-content ">
                        <div class="icon">
                            <i class="flaticon-report"></i>
                        </div>
                        <h3>SEO Consultancy</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="more-features-content bg-f0fffc">
                        <div class="icon">
                            <i class="flaticon-laptop"></i>
                        </div>
                        <h3>Social Media Marketting</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="more-features-content bg-fceee2">
                        <div class="icon">
                            <i class="flaticon-software"></i>
                        </div>
                        <h3>Competitor Analysis</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="more-features-content bg-fde2ee">
                        <div class="icon">
                            <i class="flaticon-project-management"></i>
                        </div>
                        <h3>Creative Idea</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End More Features Area -->

    <!-- Start Work Area -->
    <section class="work-section bg-f6f6fe ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="work-content">
                        <h3>Brainstorming, <span>Researching</span> Planning, Strategizing Work</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed dood tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas.</p>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="work-status">
                                    <h3>
                                        <span class="odometer" data-count="50">00</span>
                                        <span class="sign-icon">K</span>
                                    </h3>
                                    <h4>Completed Project</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur do eiusmod tempor incididunt ut labore et dolore.</p>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="work-status">
                                    <h3>
                                        <span class="odometer" data-count="98">00</span>
                                        <span class="sign-icon">%</span>
                                    </h3>
                                    <h4>Customer Satisfaction</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur do eiusmod tempor incididunt ut labore et dolore.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/work.png" alt="image">
                </div>
            </div>
        </div>
    </section>
    <!-- End work Area -->

    <!-- Start Digital Area -->
    <section class="digital-section ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="digital-image">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/digital.png" alt="image">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="digital-content">
                        <h3>Digital <span>Marketing</span></h3>
                        <div class="bar"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices Lorem Ipsum is simply dummy tex printing and typesetting industry. Lorem
                            Ipsum has been the industry</p>

                        <ul class="digital-list">
                            <li>
                                <i class="flaticon-check"></i> SEO Marketing
                            </li>

                            <li>
                                <i class="flaticon-check"></i> Email Marketing
                            </li>

                            <li>
                                <i class="flaticon-check"></i> Youtube Marketing
                            </li>

                            <li>
                                <i class="flaticon-check"></i> Social Marketing
                            </li>

                            <li>
                                <i class="flaticon-check"></i> Facebook Marketing
                            </li>

                            <li>
                                <i class="flaticon-check"></i> Page Ranking
                            </li>
                        </ul>

                        <div class="digital-btn">
                            <a href="#" class="default-btn">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Digital Area -->

    <!-- Start Services Area -->
    <section class="services-section pb-70">
        <div class="container">
            <div class="section-title">
                <h2>IT Agency Services</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidiunt labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                <div class="bar"></div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-services-two">
                        <div class="icon">
                            <i class="flaticon-it"></i>
                        </div>
                        <h3>IT Professionals</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore facilisis.</p>
                        <a href="single-services.html" class="read-btn">Read More</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-services-two bg-fc9ba7">
                        <div class="icon">
                            <i class="flaticon-setting"></i>
                        </div>
                        <h3>Web Development</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore facilisis.</p>
                        <a href="single-services.html" class="read-btn">Read More</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-services-two bg-2cdcf7">
                        <div class="icon">
                            <i class="flaticon-promotion"></i>
                        </div>
                        <h3>Digital Marketing</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore facilisis.</p>
                        <a href="single-services.html" class="read-btn">Read More</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-services-two bg-009af0">
                        <div class="icon">
                            <i class="flaticon-optimize"></i>
                        </div>
                        <h3>Software Engineers</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore facilisis.</p>
                        <a href="single-services.html" class="read-btn">Read More</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-services-two bg-f4d62c">
                        <div class="icon">
                            <i class="flaticon-cloud-computing"></i>
                        </div>
                        <h3>Data Analysis</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore facilisis.</p>
                        <a href="single-services.html" class="read-btn">Read More</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-services-two bg-1e2d75">
                        <div class="icon">
                            <i class="flaticon-laptop"></i>
                        </div>
                        <h3>SEO & Content</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore facilisis.</p>
                        <a href="single-services.html" class="read-btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="default-shape">
            <div class="shape-1">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/shape/4.png" alt="image">
            </div>

            <div class="shape-2 rotateme">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/shape/5.svg" alt="image">
            </div>

            <div class="shape-3">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/shape/6.svg" alt="image">
            </div>

            <div class="shape-4">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/shape/7.png" alt="image">
            </div>

            <div class="shape-5">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/shape/8.png" alt="image">
            </div>
        </div>
    </section>
    <!-- End Services Area -->

    <!-- Start Experience Area -->
    <section class="experience-section pb-100">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="experience-inner-area">
                        <div class="experience-content">
                            <h3>Digital <span>Experience</span></h3>
                            <div class="bar"></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra.</p>
                        </div>

                        <div class="experience-inner-content">
                            <div class="icon">
                                <i class="flaticon-check"></i>
                            </div>
                            <h3>No Coding Skills Required</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut dolore ipsum.</p>
                        </div>

                        <div class="experience-inner-content">
                            <div class="icon">
                                <i class="flaticon-check"></i>
                            </div>
                            <h3>Online Documentation</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut dolore ipsum.</p>
                        </div>

                        <div class="experience-inner-content">
                            <div class="icon">
                                <i class="flaticon-check"></i>
                            </div>
                            <h3>SEO Optimized</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut dolore ipsum.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="experience-image">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/experience.png" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Experience Area -->

    <!-- Start Projects Area -->
    <section class="projects-section pb-70">
        <div class="container-fluid">
            <div class="section-title">
                <h2>Projects</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidiunt labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                <div class="bar"></div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="single-projects">
                        <div class="projects-image">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/projects/1.jpg" alt="image">
                        </div>

                        <div class="projects-content">
                            <a href="single-projects.html">
                                <h3>App Update & Rebrand</h3>
                            </a>

                            <a href="single-projects.html">
                                <span>Research and startup</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="single-projects">
                        <div class="projects-image">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/projects/2.jpg" alt="image">
                        </div>

                        <div class="projects-content">
                            <a href="single-projects.html">
                                <h3>IT Consultancy</h3>
                            </a>

                            <a href="single-projects.html">
                                <span>Research and startup</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="single-projects">
                        <div class="projects-image">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/projects/3.jpg" alt="image">
                        </div>

                        <div class="projects-content">
                            <a href="single-projects.html">
                                <h3>Digital Marketing</h3>
                            </a>

                            <a href="single-projects.html">
                                <span>Research and startup</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="single-projects">
                        <div class="projects-image">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/projects/4.jpg" alt="image">
                        </div>

                        <div class="projects-content">
                            <a href="single-projects.html">
                                <h3>App Development</h3>
                            </a>

                            <a href="single-projects.html">
                                <span>Research and startup</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="single-projects">
                        <div class="projects-image">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/projects/5.jpg" alt="image">
                        </div>

                        <div class="projects-content">
                            <a href="single-projects.html">
                                <h3>IT Solutions</h3>
                            </a>

                            <a href="single-projects.html">
                                <span>Research and startup</span>
                            </a>
                        </div>
                    </div>

                    <div class="single-projects">
                        <div class="projects-image">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/projects/6.jpg" alt="image">
                        </div>

                        <div class="projects-content">
                            <a href="single-projects.html">
                                <h3>Data Management</h3>
                            </a>

                            <a href="single-projects.html">
                                <span>Research and startup</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="single-projects">
                        <div class="projects-image">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/projects/7.jpg" alt="image">
                        </div>

                        <div class="projects-content">
                            <a href="single-projects.html">
                                <h3>E-commerce Development</h3>
                            </a>

                            <a href="single-projects.html">
                                <span>Research and startup</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Projects Area -->

    <!-- Start Team Area -->
    <section class="team-section pb-70">
        <div class="container">
            <div class="section-title">
                <h2>Our Expert Team</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidiunt labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                <div class="bar"></div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-team">
                        <div class="image">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/team/1.jpg" alt="image">
                        </div>

                        <div class="content">
                            <h3>David Jon Korola</h3>
                            <span>Web Developer</span>

                            <ul class="social">
                                <li>
                                    <a href="#">
                                        <i class="flaticon-facebook"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="flaticon-twitter"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="flaticon-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-team">
                        <div class="image">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/team/2.jpg" alt="image">
                        </div>

                        <div class="content">
                            <h3>Alex Maxwel</h3>
                            <span>Software Engineer</span>

                            <ul class="social">
                                <li>
                                    <a href="#">
                                        <i class="flaticon-facebook"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="flaticon-twitter"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="flaticon-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-team">
                        <div class="image">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/team/3.jpg" alt="image">
                        </div>

                        <div class="content">
                            <h3>Louis Pasteur</h3>
                            <span>App Developer</span>

                            <ul class="social">
                                <li>
                                    <a href="#">
                                        <i class="flaticon-facebook"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="flaticon-twitter"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="flaticon-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Team Area -->

    <!-- Start Skills Area -->
    <section class="skills-section pb-100">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="skills-image">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/skills.jpg" alt="image">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="skills-area">
                        <div class="skills-content">
                            <h3>How to Generate <span>Creative</span> Ideas for your IT Business</h3>
                            <div class="bar"></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidiunt labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus do umsan lacus vel facilisis.Lorem Ipsum is simply dummy
                                text of the industry. Lorem Ipsum has been the industry's.</p>
                        </div>

                        <div class="skill-bar" data-percentage="75%">
                            <p class="progress-title-holder">
                                <span class="progress-title">Developement</span>
                                <span class="progress-number-wrapper">
                                        <span class="progress-number-mark">
                                            <span class="percent"></span>
                                <span class="down-arrow"></span>
                                </span>
                                </span>
                            </p>
                            <div class="progress-content-outter">
                                <div class="progress-content"></div>
                            </div>
                        </div>

                        <div class="skill-bar" data-percentage="45%">
                            <p class="progress-title-holder">
                                <span class="progress-title">Design</span>
                                <span class="progress-number-wrapper">
                                        <span class="progress-number-mark">
                                            <span class="percent"></span>
                                <span class="down-arrow"></span>
                                </span>
                                </span>
                            </p>
                            <div class="progress-content-outter">
                                <div class="progress-content"></div>
                            </div>
                        </div>

                        <div class="skill-bar" data-percentage="80%">
                            <p class="progress-title-holder">
                                <span class="progress-title">Marketing</span>
                                <span class="progress-number-wrapper">
                                        <span class="progress-number-mark">
                                            <span class="percent"></span>
                                <span class="down-arrow"></span>
                                </span>
                                </span>
                            </p>
                            <div class="progress-content-outter">
                                <div class="progress-content"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Skills Area -->

    <!-- Start Contact Area -->
    <section class="contact-section pb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="contact-text">
                        <h3>Have Any Questions About Us?</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed eiusmod tempor incididunt ut labore </p>
                    </div>

                    <div class="contact-form">
                        <form id="contactForm">
                            <div class="form-group">
                                <label>User Name</label>
                                <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="User Name">
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Your Email">
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group">
                                <label>Subject</label>
                                <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Your Subject">
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group">
                                <label>Message</label>
                                <textarea name="message" class="form-control" id="message" cols="30" rows="6" required data-error="Write your message" placeholder="Your Message"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="send-btn">
                                <button type="submit" class="default-btn">
                                        Send Message
                                    </button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="contact-image">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/contact.png" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Area -->

    <!-- Start Clients Area -->
    <section class="clients-section bg-background ptb-100">
        <div class="container">
            <div class="section-title">
                <h2>What Our Clients Says</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidiunt labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                <div class="bar"></div>
            </div>

            <div class="clients-slider owl-carousel owl-theme">
                <div class="clients-item">
                    <div class="icon">
                        <i class="flaticon-left-quotes-sign"></i>
                    </div>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem
                        Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley</p>

                    <div class="clients-content">
                        <h3>Moris Jacker</h3>
                        <span>Web Developer</span>
                    </div>
                </div>

                <div class="clients-item">
                    <div class="icon">
                        <i class="flaticon-left-quotes-sign"></i>
                    </div>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem
                        Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley</p>

                    <div class="clients-content">
                        <h3>Alex Maxwel</h3>
                        <span>Agent Management</span>
                    </div>
                </div>

                <div class="clients-item">
                    <div class="icon">
                        <i class="flaticon-left-quotes-sign"></i>
                    </div>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem
                        Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley</p>

                    <div class="clients-content">
                        <h3>Edmond Halley</h3>
                        <span>Web Designer</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Clients Area -->

    <!-- Start Blog Area -->
    <section class="blog-section pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>Our <span>Latest</span> News</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidiunt labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                <div class="bar"></div>
            </div>

            <div class="row">

            <?php query_posts('post_type=post &order=asc&posts_per_page=-2');?>
        <?php if( have_posts() ): $i=1; while ( have_posts() ) : the_post(); ?>
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

                <?php  $i++; endwhile; else :endif; wp_reset_query(); ?>

                

              
            </div>
        </div>
    </section>
    <!-- End Blog Area -->

 <?php get_footer(); ?>