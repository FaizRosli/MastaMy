<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <title>PRO Card - Material Resume / CV / vCard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="PRO Card - Material Resume / CV / vCard Template" />
    <meta name="keywords" content="vcard, resposnive, retina, resume, jquery, css3, bootstrap, Material CV, portfolio" />
    <meta name="author" content="lmtheme" />
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/normalize.css" type="text/css">
    <link rel="stylesheet" href="css/animate.css" type="text/css">
    <link rel="stylesheet" href="css/transition-animations.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/main.css" type="text/css">

    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/modernizr.custom.js"></script>

    <script src='https://www.google.com/recaptcha/api.js'></script>
  </head>

  <body class="material-template">
    <!-- Loading animation -->
    <div class="preloader">
      <div class="preloader-animation">
        <div class="preloader-spinner">
        </div>
      </div>
    </div>
    <!-- /Loading animation -->

    <div id="page" class="page">
      <!-- Header -->
      <header id="site_header" class="header mobile-menu-hide">
        <div class="header-content">
          <div class="site-title-block mobile-hidden">
            <div class="site-title">Alex <span>Smith</span></div>
          </div>

          <!-- Navigation -->
          <div class="site-nav">
            <!-- Main menu -->
            <ul id="nav" class="site-main-menu">
              <li>
                <a class="pt-trigger" href="#home" data-animation="62">Home</a><!-- href value = data-id without # of .pt-page. -->
              </li>
              <li>
                <a class="pt-trigger" href="#resume" data-animation="62">Resume</a>
              </li>
              <li>
                <a class="pt-trigger" href="#services" data-animation="62">Services</a>
              </li>
              <li>
                <a class="pt-trigger" href="#portfolio" data-animation="62">Portfolio</a>
              </li>
              <li>
                <a class="pt-trigger" href="#contact" data-animation="62">Contact</a>
              </li>
            </ul>
            <!-- /Main menu -->
          </div>
          <!-- Navigation -->
        </div>
      </header>
      <!-- /Header -->

      <!-- Mobile Header -->
      <div class="mobile-header mobile-visible">
        <div class="mobile-logo-container">
          <div class="mobile-site-title">Alex Smith</div>
        </div>

        <a class="menu-toggle mobile-visible">
          <i class="fa fa-bars"></i>
        </a>
      </div>
      <!-- /Mobile Header -->

      <!-- Main Content -->
      <div id="main" class="site-main">
        <!-- Page changer wrapper -->
        <div class="pt-wrapper">
          <!-- Subpages -->
          <div class="subpages">

            <!-- Home Subpage -->
            <section class="pt-page" data-id="home">
              <div class="section-inner start-page-content">
                <div class="page-header">
                  <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-4">
                      <div class="photo">
                        <img src="images/photo.png" alt="">
                      </div>
                    </div>

                    <div class="col-sm-8 col-md-8 col-lg-8">
                      <div class="title-block">
                        <h1>Alex Smith</h1>
                        <div class="owl-carousel text-rotation">                                    
                          <div class="item">
                            <div class="sp-subtitle">Web Designer</div>
                          </div>
                          <div class="item">
                            <div class="sp-subtitle">Frontend-developer</div>
                          </div>
                        </div>
                      </div>

                      <div class="social-links">
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="page-content">
                  <div class="row">

                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="about-me">
                        <div class="block-title">
                          <h3>About <span>Me</span></h3>
                        </div>
                        <p>Hello! I’m Alex Smith. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fermentum ullamcorper sem, at placerat dolor volutpat ac. Duis nulla enim, condimentum nec ultricies.</p>
                      </div>
                      <div class="download-resume">
                        <a href="" class="btn btn-secondary">Download Resume</a>
                      </div>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <ul class="info-list">
                        <li><span class="title">Age</span><span class="value">29</span></li>
                        <li><span class="title">Residence</span><span class="value">USA</span></li>
                        <li><span class="title">Address</span><span class="value">Los Angeles, USA</span></li>
                        <li><span class="title">e-mail</span><span class="value"><a href="mailto:email@example.com">email@example.com</a></span></li>
                        <li><span class="title">Phone</span><span class="value">+0123 123 456 789</span></li>
                        <li><span class="title">Freelance</span><span class="value available">Available</span></li>
                      </ul>
                    </div>

                  </div>
                </div>
              </div>
            </section>
            <!-- End of Home Subpage -->

            <!-- Resume Subpage -->
            <section class="pt-page" data-id="resume">
              <div class="section-inner custom-page-content">
                <div class="page-header color-1">
                  <h2>Resume</h2>
                </div>
                <div class="page-content">

                  <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="block">
                        <div class="block-title">
                          <h3>Education</h3>
                        </div>

                        <div class="timeline">
                          <!-- Education 1 -->
                          <div class="timeline-item">
                            <h4 class="item-title">Specialization Course</h4>
                            <span class="item-period">2010</span>
                            <span class="item-small">Apple Inc.</span>
                            <p class="item-description">Mauris magna sapien, pharetra consectetur fringilla vitae, interdum sed tortor.</p>
                          </div>
                          <!-- / Education 1 -->

                          <!-- Education 2 -->
                          <div class="timeline-item">
                            <h4 class="item-title">Specialization Course</h4>
                            <span class="item-period">2010</span>
                            <span class="item-small">Apple Inc.</span>
                            <p class="item-description">Mauris magna sapien, pharetra consectetur fringilla vitae, interdum sed tortor.</p>
                          </div>
                          <!-- / Education 2 -->

                          <!-- Education 3 -->
                          <div class="timeline-item">
                            <h4 class="item-title">Specialization Course</h4>
                            <span class="item-period">2010</span>
                            <span class="item-small">Apple Inc.</span>
                            <p class="item-description">Mauris magna sapien, pharetra consectetur fringilla vitae, interdum sed tortor.</p>
                          </div>
                          <!-- / Education 3 -->
                        </div>
                      </div>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="block">
                        <div class="block-title">
                          <h3>Experience</h3>
                        </div>

                        <div class="timeline">
                          <!-- Experience 1 -->
                          <div class="timeline-item">
                            <h4 class="item-title">Frontend-developer</h4>
                            <span class="item-period">Dec 2012 - Current</span>
                            <span class="item-small">Web Agency</span>
                            <p class="item-description">Mauris magna sapien, pharetra consectetur fringilla vitae, interdum sed tortor.</p>
                          </div>
                          <!-- / Experience 1 -->

                          <!-- Experience 2 -->
                          <div class="timeline-item">
                            <h4 class="item-title">Web Designer</h4>
                            <span class="item-period">Dec 2011 - Nov 2012</span>
                            <span class="item-small">Apple Inc.</span>
                            <p class="item-description">Mauris magna sapien, pharetra consectetur fringilla vitae, interdum sed tortor.</p>
                          </div>
                          <!-- / Experience 2 -->

                          <!-- Experience 3 -->
                          <div class="timeline-item">
                            <h4 class="item-title">Graphic Designer</h4>
                            <span class="item-period">Jan 2010 - Dec 2011</span>
                            <span class="item-small">Apple Inc.</span>
                            <p class="item-description">Mauris magna sapien, pharetra consectetur fringilla vitae, interdum sed tortor.</p>
                          </div>
                          <!-- / Experience 3 -->
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="block">
                        <div class="block-title">
                          <h3>Design <span>Skills</span></h3>
                        </div>

                        <div class="skills-info">
                          <h4>Web Design</h4>                               
                          <div class="skill-container">
                            <div class="skill-percentage skill-1"></div>
                          </div>

                          <h4>Graphic Design</h4>
                          <div class="skill-container">
                            <div class="skill-percentage skill-2"></div>
                          </div>

                          <h4>Print Design</h4>
                          <div class="skill-container">
                            <div class="skill-percentage skill-3"></div>
                          </div> 
                        </div>

                      </div>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="block">
                        <div class="block-title">
                          <h3>Coding <span>Skills</span></h3>
                        </div>

                        <div class="skills-info">
                          <h4>HTML5</h4>                               
                          <div class="skill-container">
                            <div class="skill-percentage skill-4"></div>
                          </div>

                          <h4>CSS3/LESS/SASS</h4>
                          <div class="skill-container">
                            <div class="skill-percentage skill-5"></div>
                          </div>

                          <h4>jQuery</h4>
                          <div class="skill-container">
                            <div class="skill-percentage skill-6"></div>
                          </div> 
                        </div>
                        
                      </div>
                    </div>
                  </div>

                  <!-- Download Resume Button -->
                  <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                      <div class="block">
                        <div class="center download-resume">
                          <a href="#" class="btn btn-secondary">Download Resume</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End of Download Resume Button -->

                </div>
              </div>
            </section>
            <!-- End of Resume Subpage -->


            <!-- Services Subpage -->
            <section class="pt-page" data-id="services">
              <div class="section-inner custom-page-content">
                <div class="page-header color-1">
                  <h2>Services</h2>
                </div>
                <div class="page-content">
                  <!-- My Services -->
                  <div class="row">
                    <div class="col-sm-12 col-md-12">
                      <div class="block-title">
                        <h3>My <span>Services</span></h3>
                      </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                      <div class="service-block"> 
                        <div class="service-info">
                          <!--<i class="service-icon fa fa-shopping-cart"></i>-->
                          <div class="service-image">
                            <img src="images/service/web_design_icon.png" alt="Responsive Design" class="mCS_img_loaded">
                          </div>
                          <h4>Web Design</h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                        </div>
                      </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                      <div class="service-block"> 
                        <div class="service-info">
                          <div class="service-image">
                            <img src="images/service/photography_icon.png" alt="Photography" class="mCS_img_loaded">
                          </div>
                          <h4>Photography</h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                        </div>
                      </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                      <div class="service-block"> 
                        <div class="service-info">
                          <div class="service-image">
                            <img src="images/service/creativity_icon.png" alt="Creativity" class="mCS_img_loaded">
                          </div>
                          <h4>Management</h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                        </div>
                      </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                      <div class="service-block"> 
                        <div class="service-info">
                          <div class="service-image">
                            <img src="images/service/advetising_icon.png" alt="Advetising" class="mCS_img_loaded">
                          </div>
                          <h4>Advetising</h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End of My Services -->

                  <!-- Clients -->
                  <div class="row">
                    <div class="col-sm-12 col-md-12">
                      <div class="block-title">
                        <h3>Clients</h3>
                      </div>

                      <div class="col-sm-4 col-md-2 subpage-block">
                        <div class="client-block">
                          <a href="#" target="_blank"><img src="images/clients/client_1.png" alt="image" class="mCS_img_loaded"></a>
                        </div>
                      </div>

                      <div class="col-sm-4 col-md-2 subpage-block">
                        <div class="client-block">
                          <a href="#" target="_blank"><img src="images/clients/client_2.png" alt="image" class="mCS_img_loaded"></a>
                        </div>
                      </div>

                      <div class="col-sm-4 col-md-2 subpage-block">
                        <div class="client-block">
                          <a href="#" target="_blank"><img src="images/clients/client_3.png" alt="image" class="mCS_img_loaded"></a>
                        </div>
                      </div>

                      <div class="col-sm-4 col-md-2 subpage-block">
                        <div class="client-block">
                          <a href="#" target="_blank"><img src="images/clients/client_4.png" alt="image" class="mCS_img_loaded"></a>
                        </div>
                      </div>

                      <div class="col-sm-4 col-md-2 subpage-block">
                        <div class="client-block">
                          <a href="#" target="_blank"><img src="images/clients/client_5.png" alt="image" class="mCS_img_loaded"></a>
                        </div>
                      </div>

                      <div class="col-sm-4 col-md-2 subpage-block">
                        <div class="client-block">
                          <a href="#" target="_blank"><img src="images/clients/client_6.png" alt="image" class="mCS_img_loaded"></a>
                        </div>
                      </div>

                    </div>
                  </div>
                  <!-- End of Clients -->

                  <!-- Testimonials -->
                  <div class="row">
                    <div class="col-sm-12 col-md-12">
                      <div class="block-title">
                        <h3>Testimonials</h3>
                      </div>


                      <div class="testimonials owl-carousel block">
                        <!-- Testimonial 1 -->
                        <div class="testimonial-item">
                          <!-- Testimonial Author -->
                          <div class="testimonial-credits">
                            <!-- Picture -->
                            <div class="testimonial-picture">
                              <img src="images/testimonials/testimonial_photo_1.jpg" alt="">
                            </div>              
                            <!-- /Picture -->
                            <!-- Testimonial author information -->
                            <div class="testimonial-author-info">
                              <p class="testimonial-author">Maria Richardson</p>
                              <p class="testimonial-firm">Lindsley's Lumber</p>
                            </div>
                          </div>
                          <!-- /Testimonial author information -->
                          <!-- Testimonial Content -->
                          <div class="testimonial-content">
                            <div class="testimonial-text">
                              <p>"Phasellus eu nunc tincidunt, ultricies elit vitae, pretium eros. Sed sed ipsum sed massa."</p>
                            </div>
                          </div>            
                          <!-- /Testimonial Content -->                
                        </div>
                        <!-- End of Testimonial 1 -->

                        <!-- Testimonial 2 -->
                        <div class="testimonial-item">
                          <!-- Testimonial Author -->
                          <div class="testimonial-credits">
                            <!-- Picture -->
                            <div class="testimonial-picture">
                              <img src="images/testimonials/testimonial_photo_2.jpg" alt="">
                            </div>              
                            <!-- /Picture -->
                            <!-- Testimonial author information -->
                            <div class="testimonial-author-info">
                              <p class="testimonial-author">John Doe</p>
                              <p class="testimonial-firm">Apple Inc.</p>
                            </div>
                          </div>
                          <!-- /Testimonial author information -->
                          <!-- Testimonial Content -->
                          <div class="testimonial-content">
                            <div class="testimonial-text">
                              <p>"Vivamus porta dapibus tristique. Suspendisse et arcu eget nisi convallis eleifend nec ac lorem.</p>
                            </div>
                          </div>            
                          <!-- /Testimonial Content -->                
                        </div>
                        <!-- End of Testimonial 2 -->

                        <!-- Testimonial 3 -->
                        <div class="testimonial-item">
                          <!-- Testimonial Author -->
                          <div class="testimonial-credits">
                            <!-- Picture -->
                            <div class="testimonial-picture">
                              <img src="images/testimonials/testimonial_photo_3.jpg" alt="">
                            </div>              
                            <!-- /Picture -->
                            <!-- Testimonial author information -->
                            <div class="testimonial-author-info">
                              <p class="testimonial-author">George McQueen</p>
                              <p class="testimonial-firm">Harmony House</p>
                            </div>
                          </div>
                          <!-- /Testimonial author information -->
                          <!-- Testimonial Content -->
                          <div class="testimonial-content">
                            <div class="testimonial-text">
                              <p>"Aliquam congue auctor lectus sed fermentum. Nulla ultricies tellus quis sapien lacinia egestas."</p>
                            </div>
                          </div>            
                          <!-- /Testimonial Content -->                
                        </div>
                        <!-- End of Testimonial 3 -->
                      </div>
                    </div>
                  </div>
                  <!-- End of Tesimonials -->

                  <!-- Pricing -->
                  <div class="row">
                    <div class="col-sm-12 col-md-12">
                      <div class="block-title">
                        <h3>Pricing</h3>
                      </div>

                      <div class="lm-pricing row clearfix">
                        <div class="lm-package-wrap col-md-4 default-col">
                          <div class="lm-package">
                            <div class="lm-heading-row">
                              <span>Plan 1</span>
                            </div>
                            <div class="lm-pricing-row">
                              <span>$64</span>
                              <small>per month</small>
                            </div>

                            <div class="lm-button-row">
                              <a href="#" target="_self" class="btn btn-primary">Free Trial</a>
                            </div>
                            <div class="lm-default-row">
                              Lorem ipsum dolor
                            </div>
                            <div class="lm-default-row">
                              Pellentesque scelerisque
                            </div>
                            <div class="lm-default-row">
                              Morbi eu sagittis
                            </div>
                            <div class="lm-default-row">
                            </div>
                          </div>
                        </div>

                        <div class="lm-package-wrap col-md-4 highlight-col ">
                          <div class="lm-package">
                            <div class="lm-heading-row">
                              <span>Plan 2</span>
                            </div>
                            <div class="lm-pricing-row">
                              <span>$128</span>
                              <small>per month</small>
                            </div>
                            
                            <div class="lm-button-row">
                              <a href="#" target="_self" class="btn btn-primary">Free Trial</a>
                            </div>
                            <div class="lm-default-row">
                              Lorem ipsum dolor
                            </div>
                            <div class="lm-default-row">
                              Pellentesque scelerisque
                            </div>
                            <div class="lm-default-row">
                              Morbi eu sagittis
                            </div>
                            <div class="lm-default-row">
                              Donec non diam
                            </div>
                            <div class="lm-default-row">
                            </div>
                          </div>
                        </div>

                        <div class="lm-package-wrap col-md-4 default-col ">
                          <div class="lm-package">
                            <div class="lm-heading-row">
                              <span>Plan 3</span>
                            </div>
                            
                            <div class="lm-pricing-row">
                              <span>$256</span>
                              <small>per month</small>
                            </div>

                            <div class="lm-button-row">
                              <a href="#" target="_self" class="btn btn-primary">Free Trial</a>
                            </div>

                            <div class="lm-default-row">
                              Lorem ipsum dolor
                            </div>
                            <div class="lm-default-row">
                              Pellentesque scelerisque
                            </div>
                            <div class="lm-default-row">
                              Morbi eu sagittis
                            </div>
                            <div class="lm-default-row">
                              Donec non diam
                            </div>
                            <div class="lm-default-row">
                              Aenean nec libero
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End of Pricing -->
                </div>
              </div>
            </section>
            <!-- End of Services Subpage -->


            <!-- Portfolio Subpage -->
            <section class="pt-page" data-id="portfolio">
              <div class="section-inner custom-page-content">
                <div class="page-header color-1">
                  <h2>Portfolio</h2>
                </div>
                <div class="page-content">

                  <!-- Portfolio Content -->
                  <div class="portfolio-content">
                                
                    <!-- Portfolio filter -->
                    <ul id="portfolio_filters" class="portfolio-filters">
                      <li class="active">
                        <a class="filter btn btn-sm btn-link active" data-group="all">All</a>
                      </li>
                      <li>
                        <a class="filter btn btn-sm btn-link" data-group="media">Media</a>
                      </li>
                      <li>
                        <a class="filter btn btn-sm btn-link" data-group="illustration">Illustration</a>
                      </li>
                      <li>
                        <a class="filter btn btn-sm btn-link" data-group="video">Video</a>
                      </li>
                    </ul>
                    <!-- End of Portfolio filter -->

                    <!-- Portfolio Grid -->
                    <div id="portfolio_grid" class="portfolio-grid portfolio-masonry masonry-grid-3">

                      <!-- Portfolio Item 1 -->
                      <figure class="item" data-groups='["all", "media"]'>
                        <a class="ajax-page-load" href="portfolio-1.html">
                          <img src="images/portfolio/1.jpg" alt="">
                          <div>
                            <h5 class="name">Project Name</h5>
                            <small>Media</small>
                            <i class="fa fa-file-text-o"></i>
                          </div>
                        </a>
                      </figure>
                      <!-- /Portfolio Item 1 -->

                      <!-- Portfolio Item 2 -->
                      <figure class="item" data-groups='["all", "video"]'>
                        <a href="https://player.vimeo.com/video/97102654?autoplay=1" title="Praesent Dolor Ex" class="lightbox mfp-iframe">
                          <img src="images/portfolio/2.jpg" alt="">
                          <div>
                            <h5 class="name">Project Name</h5>
                            <small>Video</small>
                            <i class="fa fa-video-camera"></i>
                          </div>
                        </a>
                      </figure>
                      <!-- /Portfolio Item 2 -->

                      <!-- Portfolio Item 3 -->
                      <figure class="item" data-groups='["all","illustration"]'>
                        <a href="images/portfolio/full/3.jpg" class="lightbox" title="Duis Eu Eros Viverra">
                          <img src="images/portfolio/3.jpg" alt="">
                          <div>
                            <h5 class="name">Project Name</h5>
                            <small>Illustration</small>
                            <i class="fa fa-image"></i>
                          </div>
                        </a>
                      </figure>
                      <!-- /Portfolio Item 3 -->

                      <!-- Portfolio Item 4 -->
                      <figure class="item" data-groups='["all", "media"]'>
                        <a class="ajax-page-load" href="portfolio-2.html">
                          <img src="images/portfolio/4.jpg" alt="">
                          <div>
                            <h5 class="name">Project Name</h5>
                            <small>Media</small>
                            <i class="fa fa-file-text-o"></i>
                          </div>
                        </a>
                      </figure>
                      <!-- /Portfolio Item 4 -->

                      <!-- Portfolio Item 5 -->
                      <figure class="item" data-groups='["all", "illustration"]'>
                        <a href="images/portfolio/full/5.jpg" class="lightbox" title="Aliquam Condimentum Magna Rhoncus">
                          <img src="images/portfolio/5.jpg" alt="">
                          <div>
                            <h5 class="name">Project Name</h5>
                            <small>Illustration</small>
                            <i class="fa fa-image"></i>
                          </div>
                        </a>
                      </figure>
                      <!-- /Portfolio Item 5 -->

                      <!-- Portfolio Item 6 -->
                      <figure class="item" data-groups='["all", "media"]'>
                        <a class="ajax-page-load" href="portfolio-3.html">
                          <img src="images/portfolio/6.jpg" alt="">
                          <div>
                            <h5 class="name">Project Name</h5>
                            <small>Media</small>
                            <i class="fa fa-file-text-o"></i>
                          </div>
                        </a>
                      </figure>
                      <!-- /Portfolio Item 6 -->

                      <!-- Portfolio Item 7 -->
                      <figure class="item" data-groups='["all", "video"]'>
                        <a href="https://player.vimeo.com/video/97102654?autoplay=1" title="Nulla Facilisi" class="lightbox mfp-iframe">
                          <img src="images/portfolio/7.jpg" alt="">
                          <div>
                            <h5 class="name">Project Name</h5>
                            <small>Video</small>
                            <i class="fa fa-video-camera"></i>
                          </div>
                        </a>
                      </figure>
                      <!-- /Portfolio Item 7 -->

                      <!-- Portfolio Item 8 -->
                      <figure class="item" data-groups='["all",  "media"]'>
                        <a class="ajax-page-load" href="portfolio-4.html">
                          <img src="images/portfolio/8.jpg" alt="">
                          <div>
                            <h5 class="name">Project Name</h5>
                            <small>Media</small>
                            <i class="fa fa-file-text-o"></i>
                          </div>
                        </a>
                      </figure>
                      <!-- /Portfolio Item 8 -->

                      <!-- Portfolio Item 9 -->
                      <figure class="item" data-groups='["all","illustration"]'>
                        <a href="images/portfolio/full/9.jpg" class="lightbox" title="Mauris Neque Dolor">
                          <img src="images/portfolio/9.jpg" alt="">
                          <div>
                            <h5 class="name">Project Name</h5>
                            <small>Illustration</small>
                            <i class="fa fa-image"></i>
                          </div>
                        </a>
                      </figure>
                      <!-- /Portfolio Item 9 -->

                      <!-- Portfolio Item 10 -->
                      <figure class="item" data-groups='["all", "video"]'>
                        <a href="https://player.vimeo.com/video/97102654?autoplay=1" title="Donec Lectus Arcu" class="lightbox mfp-iframe">
                          <img src="images/portfolio/10.jpg" alt="">
                          <div>
                            <h5 class="name">Project Name</h5>
                            <small>Video</small>
                            <i class="fa fa-video-camera"></i>
                          </div>
                        </a>
                      </figure>
                      <!-- /Portfolio Item 10 -->

                      <!-- Portfolio Item 11 -->
                      <figure class="item" data-groups='["all","illustration"]'>
                        <a href="images/portfolio/full/11.jpg" class="lightbox" title="Duis Eu Eros Viverra">
                          <img src="images/portfolio/11.jpg" alt="">
                          <div>
                            <h5 class="name">Project Name</h5>
                            <small>Illustration</small>
                            <i class="fa fa-image"></i>
                          </div>
                        </a>
                      </figure>
                      <!-- /Portfolio Item 11 -->

                      <!-- Portfolio Item 12 -->
                      <figure class="item" data-groups='["all","media"]'>
                        <a class="ajax-page-load" href="portfolio-5.html">
                          <img src="images/portfolio/12.jpg" alt="">
                          <div>
                            <h5 class="name">Project Name</h5>
                            <small>Media</small>
                            <i class="fa fa-file-text-o"></i>
                          </div>
                        </a>
                      </figure>
                      <!-- /Portfolio Item 12 -->
                    </div>
                    <!-- /Portfolio Grid -->

                  </div>
                  <!-- /Portfolio Content -->
                </div>
              </div>
            </section>
            <!-- /Portfolio Subpage -->

            <!-- Contact Subpage -->
            <section class="pt-page" data-id="contact">
              <div class="section-inner custom-page-content">
                <div class="page-header color-1">
                  <h2>Contact</h2>
                </div>
                <div class="page-content">

                  <div class="row">
                    <div class="col-sm-6 col-md-6">
                      <div class="block-title">
                        <h3>Get in <span>Touch</span></h3>
                      </div>
                      <!-- Google Map -->
                      <div id="map" class="map"></div>
                      <!-- End of Google Map -->

                      <div class="contact-info-block">
                        <div class="ci-icon">
                          <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="ci-text">
                          <h5>Los Angeles, USA</h5>
                        </div>
                      </div>
                      <div class="contact-info-block">
                        <div class="ci-icon">
                          <i class="fa fa-envelope"></i>
                        </div>
                        <div class="ci-text">
                          <h5>alexsmith@example.com</h5>
                        </div>
                      </div>
                      <div class="contact-info-block">
                        <div class="ci-icon">
                          <i class="fa fa-phone"></i>
                        </div>
                        <div class="ci-text">
                          <h5>+123 654 78900</h5>
                        </div>
                      </div>
                      <div class="contact-info-block">
                        <div class="ci-icon">
                          <i class="fa fa-check"></i>
                        </div>
                        <div class="ci-text">
                          <h5>Freelance Available</h5>
                        </div>
                      </div>
                    </div>

                    <div class="col-sm-6 col-md-6">
                      <div class="block-title">
                        <h3>Contact <span>Form</span></h3>
                      </div>
                      <form id="contact-form" method="post" action="contact_form/contact_form.php">

                        <div class="messages"></div>

                        <div class="controls">
                          <div class="form-group form-group-with-icon">
                            <i class="fa fa-user"></i>
                            <label>Full Name</label>
                            <input id="form_name" type="text" name="name" class="form-control" placeholder required="required" data-error="Name is required.">
                            <div class="form-control-border"></div>
                            <div class="help-block with-errors"></div>
                          </div>

                          <div class="form-group form-group-with-icon">
                            <i class="fa fa-envelope"></i>
                            <label>Email Address</label>
                            <input id="form_email" type="email" name="email" class="form-control" placeholder required="required" data-error="Valid email is required.">
                            <div class="form-control-border"></div>
                            <div class="help-block with-errors"></div>
                          </div>

                          <div class="form-group form-group-with-icon">
                            <i class="fa fa-comment"></i>
                            <label>Message for Me</label>
                            <textarea id="form_message" name="message" class="form-control" placeholder rows="4" required="required" data-error="Please, leave me a message."></textarea>
                            <div class="form-control-border"></div>
                            <div class="help-block with-errors"></div>
                          </div>

                          <div class="g-recaptcha" data-sitekey="6LdqmCAUAAAAAMMNEZvn6g4W5e0or2sZmAVpxVqI"></div>

                          <input type="submit" class="button btn-send" value="Send message">
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!-- End Contact Subpage -->

          </div>
        </div>
        <!-- /Page changer wrapper -->
      </div>
      <!-- /Main Content -->
    </div>
    <footer>
      <div class="copyrights">© All Rights Reserved by MastaPay. Designed and Developed by
                <a href="https://masta.tech">MastaTech</a>.</div>
    </footer>

    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/pages-switcher.js"></script>
    <script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
    <script type="text/javascript" src="js/validator.js"></script>
    <script type="text/javascript" src="js/jquery.shuffle.min.js"></script>
    <script type="text/javascript" src="js/masonry.pkgd.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/jquery.hoverdir.js"></script>
    <!--<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR-API-KEY"></script>-->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
    <script type="text/javascript" src="js/jquery.googlemap.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
  </body>
</html>
