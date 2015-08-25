<!DOCTYPE html>
<html>

<head>
    <title> <?= $this->fetch('title') ?> </title>
    	        
    <?= $this->Html->charset() ?>
    
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="robots" content="index, follow" > 
    <meta name="keywords" content="HTML5 Template" > 
    <meta name="description" content="Code essence" > 

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <?= $this->fetch('meta') ?>
    
    <!-- FAVICONS -->
    <?= $this->Html->meta('icon') ?>
    <?php
        // <link rel="shortcut icon" href="/images/favicon/favicon.png">
    ?>
    <link rel="apple-touch-icon" href="/images/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/images/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/images/favicon/apple-touch-icon-114x114.png">
		
    <!-- CSS -->
    <!-- REVOSLIDER CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="/rs-plugin/css/settings.min.css" media="screen" />

    <!--  BOOTSTRAP -->
    <link rel="stylesheet" href="/css/bootstrap.min.css"> 
	
    <!--  GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700%7COpen+Sans:400,300,700' rel='stylesheet' type='text/css'>
    
    <!-- ICONS ELEGANT FONT & FONT AWESOME & LINEA ICONS  -->
    <link rel="stylesheet" href="/css/icons-fonts.css">
    
    <!--  CSS THEME -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="css/custom.css">
	
    <!-- ANIMATE -->
    <link rel='stylesheet' href="css/animate.min.css">        
    
    <!-- IE Warning CSS -->
    <!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="/css/ie-warning.css" ><![endif]-->
    <!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="/css/ie8-fix.css" ><![endif]-->
    
    <?= $this->fetch('css') ?>
    
    <!-- CSS end -->

    <!-- JS -->
		
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="/js/html5shiv.js"></script>
    <script src="/js/respond.min.js"></script>
    <![endif]-->
    
    <!-- Modernizr -->
    <!-- <script src="/js/modernizr.js"></script> -->
</head>

<body>
	
    <!-- LOADER -->	
    <div id="loader-overflow">
        <div id="loader3"> JS </div>
    </div>

    <div id="wrap" class="boxed ">
        <div class="grey-bg"> <!-- Grey BG  -->
            <!--[if lte IE 8]>
                <div id="ie-container">
                        <div id="ie-cont-close">
                                <a href='#' onclick='javascript&#058;this.parentNode.parentNode.style.display="none"; return false;'><img src='images/ie-warn/ie-warning-close.jpg' style='border: none;' alt='Close'></a>
                        </div>
                        <div id="ie-cont-content" >
                                <div id="ie-cont-warning">
                                        <img src='images/ie-warn/ie-warning.jpg' alt='Warning!'>
                                </div>
                                <div id="ie-cont-text" >
                                        <div id="ie-text-bold">
                                                You are using an outdated browser
                                        </div>
                                        <div id="ie-text">
                                                For a better experience using this site, please upgrade to a modern web browser.
                                        </div>
                                </div>
                                <div id="ie-cont-brows" >
                                        <a href='http://www.firefox.com' target='_blank'><img src='/images/ie-warn/ie-warning-firefox.jpg' alt='Download Firefox'></a>
                                        <a href='http://www.opera.com/download/' target='_blank'><img src='/images/ie-warn/ie-warning-opera.jpg' alt='Download Opera'></a>
                                        <a href='http://www.apple.com/safari/download/' target='_blank'><img src='images/ie-warn/ie-warning-safari.jpg' alt='Download Safari'></a>
                                        <a href='http://www.google.com/chrome' target='_blank'><img src='images/ie-warn/ie-warning-chrome.jpg' alt='Download Google Chrome'></a>
                                </div>
                        </div>
                </div>
            <![endif]-->
            
            <?php
                echo $this->element('/layout/header');
            ?>
            
            <?php echo $this->fetch('content'); ?>
            
            <?php
                /*
				
				<!-- FEATURES 1 -->
				<div id="about" class="page-section">
					<div class="container fes1-cont">
						<div class="row">
            
							<div class="col-md-4 fes1-img-cont wow fadeInUp mb-20">
								<img src="images/phone-with-arrow.png" alt="img" >
							</div>
              
							<div class="col-md-8">
              
                <div class="row">
                  <div class="col-md-12">
                    <div class="fes1-main-title-cont wow fadeInDown">
                      <div class="title-fs-60">
                        WE ARE<br>
                        <span class="bold">CREATIVE</span>
                      </div>
                      <div class="line-3-100"></div>
                    </div>
                  </div>
								</div>
                    
                <div class="row">
                    
                  <div class="col-md-6 col-sm-6">
                    <div class="fes1-box wow fadeIn" >
                      <div class="fes1-box-icon">
                        <div class="icon icon-basic-mixer2"></div>
                      </div>
                      <h3>FULLY RESPONSIVE</h3>
                      <p>Sed ut perspiciatis unde omnis iste nat eror acus  antium que</p>
                    </div>
                  </div>
                      
                  <div class="col-md-6 col-sm-6">
                    <div class="fes1-box wow fadeIn" data-wow-delay="200ms">
                      <div class="fes1-box-icon">
                        <div class="icon icon-basic-lightbulb"></div>
                      </div>
                      <h3>RETINA READY</h3>
                      <p>Sed ut perspiciatis unde omnis iste nat eror acus  antium que</p>
                    </div>
                  </div>
                      
                </div>
                    
                <div class="row">
                    
                  <div class="col-md-6 col-sm-6">
                    <div class="fes1-box wow fadeIn" data-wow-delay="400ms">
                      <div class="fes1-box-icon">
                        <div class="icon icon-basic-helm"></div>
                      </div>
                      <h3>UNIQUE DESIGN</h3>
                      <p>Sed ut perspiciatis unde omnis iste nat eror acus  antium que</p>
                    </div>
                  </div>
                      
                  <div class="col-md-6 col-sm-6">
                    <div class="fes1-box wow fadeIn"  data-wow-delay="600ms">
                      <div class="fes1-box-icon">
                        <div class="icon icon-basic-settings"></div>
                      </div>
                      <h3>EASY TO CUSTOMIZE</h3>
                      <p>Sed ut perspiciatis unde omnis iste nat eror acus  antium que</p>
                    </div>
                  </div>
                  
                </div>                    
                    
							</div>
						
            </div>
					</div>
				</div>
  
				<!-- DIVIDER -->
				<hr class="mt-0 mb-0">			

				<!-- FEATURES 2 -->
				<div class="page-section">
					<div class="container-fluid">
						<div class="row">
            
							<div class="col-md-6 wow fadeInLeft equal-height ">
								<div class="fes2-main-text-cont">
									<div class="title-fs-45">
										MORE THAN<br>
										<span class="bold">RESPONSIVE</span>
									</div>
									<div class="line-3-70"></div>
									<div class="fes2-text-cont">Sed ut perspiciatis unde omnis iste nat eror acus  antium que. Asperiores, ea velit enim labore doloribus.</div>
								</div>
							</div>
              
							<div class="col-md-6">
								<div class="row">
									<div class="fes2-img equal-height"></div>
								</div>
							</div>
              
						</div>
					</div>
				</div>

				<!-- FEATURES 3 -->
				<div class="page-section">
					<div class="container-fluid">
						<div class="row">
							
							<div class="col-md-6 left-50 wow fadeInRight equal-height">
									<div class="fes2-main-text-cont">
										<div class="title-fs-45">
											POWERFUL<br>
											<span class="bold">PERFORMANCE</span>
										</div>
										<div class="line-3-100"></div>
										<div class="fes2-text-cont">Sed ut perspiciatis unde omnis iste nat eror acus  antium que. Asperiores, ea velit enim labore doloribus.</div>
									</div>
							</div>
              
              <div class="col-md-6 right-50">
								<div class="row">
									<div class="fes3-img equal-height" ></div>
								</div>
							</div>
              
						</div>
					</div>
				</div>

				<!-- DIVIDER -->
				<hr class="mt-0 mb-0">	

				<!-- FEATURES 4 -->
				<div class="page-section fes4-cont">
					<div class="container">
            <div class="row">
            
              <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="fes4-box wow fadeIn">
								  <h2 class="section-title">OUR <span class="bold">SERVICES</span></h2>
								</div>
							</div>            
							<div class="col-xs-12 col-sm-4 col-md-4">
                <div class="fes4-box wow fadeIn" data-wow-delay="200ms">
								  <div class="fes4-title-cont" >
								  	<div class="fes4-box-icon">
								  		<div class="icon icon-basic-settings"></div>
								  	</div>
								  	<h3><span class="bold">DEVELOPMENT</span></h3>
								  	<p>LOREM IPSUM DOLOR</p>
								  </div>
								  <div>
								     Maecenas luctus nisi in sem fermentum blat. In nec  elit solliudin, elementum, dictum pur quam volutpat suscipit antena. 
								  </div>
								</div>
							</div>
              <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="fes4-box wow fadeIn" data-wow-delay="400ms">
								  <div class="fes4-title-cont" >
								  	<div class="fes4-box-icon">
								  		<div class="icon icon-basic-share"></div>
								  	</div>
								  	<h3><span class="bold">PRODUCTION</span></h3>
								  	<p>LOREM IPSUM DOLOR</p>
								  </div>
								  <div>
								     Seductio maesto nisi in sem fermentum blat. In nec elit solliudin, elementum, dictum pur quam volutpat suscipit antena.
								  </div>
								</div>
							</div>
              
						</div>
						<div class="row">
            
              <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="fes4-box wow fadeIn" data-wow-delay="600ms">
								  <div class="fes4-title-cont" >
								  	<div class="fes4-box-icon">
								  		<div class="icon icon-basic-target"></div>
								  	</div>
								  	<h3><span class="bold">BRANDING</span></h3>
								  	<p>LOREM IPSUM DOLOR</p>
								  </div>
								  <div>
								    Donec vel luctus nisi in sem fermentum blat. In nec elit solliudin, elementum, dictum pur quam volutpat suscipit antena.
								  </div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-4">
                <div class="fes4-box wow fadeIn" data-wow-delay="800ms" >
								  <div class="fes4-title-cont" >
								  	<div class="fes4-box-icon">
								  		<div class="icon icon-basic-globe"></div>
								  	</div>
								  	<h3><span class="bold">WEB DESIGN</span></h3>
								  	<p>LOREM IPSUM DOLOR</p>
								  </div>
								  <div>
								    Lorem luctus antena at nisi in sem blandit. In nec elit soltudin, elementum odio et, dictum quam a volutpat elementum. 
								  </div>
								</div>
							</div>
              <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="fes4-box wow fadeIn" data-wow-delay="1000ms">
								  <div class="fes4-title-cont" >
								  	<div class="fes4-box-icon">
								  		<div class="icon icon-basic-picture"></div>
								  	</div>
								  	<h3><span class="bold">PHOTOGRAPHY</span></h3>
								  	<p>LOREM IPSUM DOLOR</p>
								  </div>
								  <div>
								    Fermentum nisi in sem fertum blat. In elit soldin, elemtum, arenam pur quam volutpat suscipit dictum pur quam.
								  </div>
								</div>
							</div>              
						
            </div>
					</div>
				</div>
         
        <!-- PORTFOLIO SECTION 2 -->
        <div class="page-section">
          <div class="relative">
          
            <!-- ITEMS GRID -->
            <ul class="port-grid port-grid-3 port-grid-gut clearfix" id="items-grid">
              
              <!-- Item 1 -->
              <li class="port-item mix">
                <a href="portfolio-single1.html">
                  <div class="port-img-overlay"><img class="port-main-img" src="images/portfolio/projects-5.jpg" alt="img" ></div>
                </a>
                <div class="port-overlay-cont">

                    <div class="port-title-cont">
                      <h3><a href="portfolio-single1.html">MINIMALISM BOOKS</a></h3>
                      <span><a href="#">ui elements</a><span class="slash-divider">/</span><a href="#">media</a></span>
                    </div>
                    <div class="port-btn-cont">
                      <a href="images/portfolio/projects-2-big.jpg" class="lightbox mr-20" ><div aria-hidden="true" class="icon_search"></div></a>
                      <a href="portfolio-single1.html"><div aria-hidden="true" class="icon_link"></div></a>
                    </div>

                </div>
              </li>

              <!-- Item 2 -->
              <li class="port-item mix">
                <a href="portfolio-single1.html">
                  <div class="port-img-overlay">
                    <img class="port-main-img" src="images/portfolio/projects-3.jpg" alt="img" >
                  </div>
                </a>
                <div class="port-overlay-cont">

                    <div class="port-title-cont">
                      <h3><a href="portfolio-single1.html">CALENDAR</a></h3>
                      <span><a href="#">photography</a><span class="slash-divider">/</span><a href="#">media</a></span>
                    </div>
                    <div class="port-btn-cont">
                      <a href="images/portfolio/projects-2-big.jpg" class="lightbox mr-20" ><div aria-hidden="true" class="icon_search"></div></a>
                      <a href="portfolio-single1.html"><div aria-hidden="true" class="icon_link"></div></a>
                    </div>

                </div>
              </li>
              
              <!-- Item 3 -->
              <li class="port-item mix">
                <a href="portfolio-single1.html">
                  <div class="port-img-overlay">
                    <img class="port-main-img" src="images/portfolio/projects-1.jpg" alt="img" >
                  </div>
                </a>
                <div class="port-overlay-cont">

                    <div class="port-title-cont">
                      <h3><a href="portfolio-single1.html">EYES OF THE CAR</a></h3>
                      <span><a href="#">branding</a><span class="slash-divider">/</span><a href="#">marketing</a></span>
                    </div>
                    <div class="port-btn-cont">
                      <a href="images/portfolio/projects-2-big.jpg" class="lightbox mr-20" ><div aria-hidden="true" class="icon_search"></div></a>
                      <a href="portfolio-single1.html"><div aria-hidden="true" class="icon_link"></div></a>
                    </div>

                </div>
              </li>
              
              <!-- Item 4 -->
              <li class="port-item mix">
                <a href="portfolio-single1.html">
                  <div class="port-img-overlay">
                    <img class="port-main-img" src="images/portfolio/projects-6.jpg" alt="img" >
                  </div>
                </a>
                <div class="port-overlay-cont">

                    <div class="port-title-cont">
                      <h3><a href="portfolio-single1.html">NOW IS NOW</a></h3>
                      <span><a href="#">design</a><span class="slash-divider">/</span><a href="#">photography</a></span>
                    </div>
                    <div class="port-btn-cont">
                      <a href="images/portfolio/projects-2-big.jpg" class="lightbox mr-20" ><div aria-hidden="true" class="icon_search"></div></a>
                      <a href="portfolio-single1.html"><div aria-hidden="true" class="icon_link"></div></a>
                    </div>

                </div>
              </li>
              
              <!-- Item 5 -->
              <li class="port-item mix">
                <a href="portfolio-single1.html">
                  <div class="port-img-overlay">
                    <img class="port-main-img" src="images/portfolio/projects-7.jpg" alt="img" >
                  </div>
                </a>
                <div class="port-overlay-cont">

                    <div class="port-title-cont">
                      <h3><a href="portfolio-single1.html">EYES OF THE CAR</a></h3>
                      <span><a href="#">ui elements</a><span class="slash-divider">/</span><a href="#">media</a></span>
                    </div>
                    <div class="port-btn-cont">
                      <a href="images/portfolio/projects-2-big.jpg" class="lightbox mr-20" ><div aria-hidden="true" class="icon_search"></div></a>
                      <a href="portfolio-single1.html"><div aria-hidden="true" class="icon_link"></div></a>
                    </div>

                </div>
              </li>
              
              <!-- Item 6 -->
              <li class="port-item mix">
                <a href="portfolio-single1.html">
                  <div class="port-img-overlay">
                    <img class="port-main-img" src="images/portfolio/projects-4.jpg" alt="img" >
                  </div>
                </a>
                <div class="port-overlay-cont">

                    <div class="port-title-cont">
                      <h3><a href="portfolio-single1.html">LOVE</a></h3>
                      <span><a href="#">branding</a><span class="slash-divider">/</span><a href="#">media</a></span>
                    </div>
                    <div class="port-btn-cont">
                      <a href="images/portfolio/projects-2-big.jpg" class="lightbox mr-20" ><div aria-hidden="true" class="icon_search"></div></a>
                      <a href="portfolio-single1.html"><div aria-hidden="true" class="icon_link"></div></a>
                    </div>

                </div>
              </li>
             
            </ul>
          
          </div>
        </div>
        
        <!-- VIEW MORE PROJECTS  -->
        <div class="port-view-more-cont">
          <a class="port-view-more" href="portfolio-4-col-masonry.html">VIEW MORE PROJECTS</a>
        </div>
        <!-- END PORTFOLIO SECTION 1 -->

				<!-- DIVIDER -->
				<hr class="mt-0 mb-0">	
        
        <!-- CLIENTS 1 & TESTIMONIALS 1 -->
        <div class="page-section p-110-cont">
					<div class="container">
            <div class="row">
            
              <div class="col-md-12">
                <div class="mb-50">
								  <h2 class="section-title">OUR <span class="bold">CLIENTS</span></h2>
								</div>
							</div>
              
						</div>
            <div class="row">
              <!-- CLIENTS 1 -->
              <div class="col-md-7">
                <div class="row client-row border-bot">

                    <div class="col-xs-6 col-sm-3 text-center">
                      <img alt="client" src="images/clients/1.png">
                    </div>
                  
                    <div class="col-xs-6 col-sm-3 text-center">
                      <img alt="client" src="images/clients/2.png">
                    </div>
                  
                    <div class="col-xs-6 col-sm-3 text-center">
                      <img alt="client" src="images/clients/3.png">
                    </div>
                  
                    <div class="col-xs-6 col-sm-3 text-center">
                      <img alt="client" src="images/clients/4.png">
                    </div>

                </div>
                
                <div class="row client-row">

                    <div class="col-xs-6 col-sm-3 text-center">
                      <img alt="client" src="images/clients/5.png">
                    </div>
                  
                    <div class="col-xs-6 col-sm-3 text-center">
                      <img alt="client" src="images/clients/6.png">
                    </div>
                  
                    <div class="col-xs-6 col-sm-3 text-center">
                      <img alt="client" src="images/clients/7.png">
                    </div>
                  
                    <div class="col-xs-6 col-sm-3 text-center">
                      <img alt="client" src="images/clients/8.png">
                    </div>

                </div>
                
							</div>
              <!-- TESTIMONIALS 1 -->
              <div class="col-md-5">
                <blockquote class="quote mb-0 pl-50-min-1169">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, maiores esse temporibus accusantium quas soluta quis sed rerum.</p>
                  <footer>John Doe, Google Inc.</footer>
                 </blockquote>
							</div>
              
						</div>
					</div>
				</div>
        
				<!-- WORK PROCESS 1 -->
				<div class="page-section " >
				<div class="work-proc-1-bg" >
					<div class="container fes4-cont">
						<div class="row">
							
							<div class="col-md-4 ">
								<div class="mb-50">
								  <h2 class="section-title">WORK <span class="bold">PROCESS</span></h2>
								</div>
                <p class="mb-50 " >Sed ut perspiciatis unde omnis iste nat eror acus  antium que</p>
							</div>
							<div class="col-md-7 col-lg-offset-1">
                <div class="row">
                
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="fes4-box">
                      <div class="fes4-title-cont" >
                        <div class="fes4-box-icon">
                          <div class="icon icon-basic-lightbulb"></div>
                        </div>
                        <h3><span class="bold">PLANING</span></h3>
                        <p>LOREM IPSUM DOLOR</p>
                      </div>

                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="fes4-box" >
                      <div class="fes4-title-cont" >
                        <div class="fes4-box-icon">
                          <div class="icon icon-basic-gear"></div>
                        </div>
                        <h3><span class="bold">DEVELOPMENT</span></h3>
                        <p>LOREM IPSUM DOLOR</p>
                      </div>
                    </div>
                  </div>

                </div>
                
                <div class="row">
                
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="fes4-box" >
                      <div class="fes4-title-cont" >
                        <div class="fes4-box-icon">
                          <div class="icon icon-basic-laptop"></div>
                        </div>
                        <h3><span class="bold">DESIGNING</span></h3>
                        <p>LOREM IPSUM DOLOR</p>
                      </div>

                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="fes4-box" >
                      <div class="fes4-title-cont" >
                        <div class="fes4-box-icon">
                          <div class="icon icon-basic-paperplane"></div>
                        </div>
                        <h3><span class="bold">LAUNCH</span></h3>
                        <p>LOREM IPSUM DOLOR</p>
                      </div>
                    </div>
                  </div>

                </div>

							</div>
						</div>
					</div>
				</div>        
				</div>        

				<!-- ABOUT US 2 -->
				<div class="page-section about-us-2-cont pt-100-cont">
					<div class="container">
          
            <div class="row">
              <div class="col-md-12">
                <div class="mb-40">
								  <h2 class="section-title">OUR <span class="bold">TEAM</span></h2>
								</div>
							</div>
						</div>
            
            <div class="row">
              <div class="col-md-12 text-center wow fadeInUp" data-wow-duration="1s">
                <img src="images/team/team-all.jpg" alt="img">
              </div>
            </div>
            
					</div>
        </div>
        <!-- VIEW MORE PROJECTS  -->
        <div class="port-view-more-cont">
          <a class="port-view-more-inv" href="about-us.html">VIEW ALL TEAM</a>
        </div>        
        
        <!-- COUNTERS 1 -->
        <div id="counter-1" class="page-section p-80-cont">
          <div class="container">
        
            <div  class="row text-center">
                            
              <!-- Item -->
              <div class="col-xs-6 col-sm-3">
                <div class="count-number">
                  75
                </div>
                <div class="count-descr">
                  <span class="count-title">AWARDS WINNING</span>
                </div>
              </div>
              
              <!-- Item -->
              <div class="col-xs-6 col-sm-3">
                <div class="count-number">
                 450
                </div>
                <div class="count-descr">
                  <span class="count-title">HAPPY CLIENTS</span>
                </div>
              </div>
              
              <!-- Item -->
              <div class="col-xs-6 col-sm-3">
                <div class="count-number">
                  151
                </div>
                <div class="count-descr">
                  <span class="count-title">PROJECTS DONE</span>
                </div>
              </div>
              
              <!-- Item -->
              <div class="col-xs-6 col-sm-3">
                <div class="count-number">
                 768
                </div>
                <div class="count-descr">
                  <span class="count-title">HOURS OF CODE</span>
                </div>
              </div>  
              
            </div>
          </div>
        </div>

				<!-- DIVIDER -->
				<hr class="mt-0 mb-0">	
        
				<!-- ADS 1 -->
				<div class="page-section">
					<div class="container">
						<div class="row">
							
							<div class="col-md-6 left-50">
									<div class="fes2-main-text-cont">
										<div class="title-fs-45">
											OPTIMIZED FOR<br>
											<span class="bold">MOBILE</span>
										</div>
										<div class="line-3-100"></div>
										<div class="fes2-text-cont">Sed ut perspiciatis unde omnis iste nat eror acus  antium que. Asperiores, ea velit enim labore doloribus.</div>
                    <div class="mt-30">
                      <a class="button medium thin hover-dark" href="http://themeforest.net/user/abcgomel/portfolio?ref=abcgomel">BUY NOW</a>
                    </div>
									</div>
							</div>
              
              <div class="col-md-6 right-50 wow fadeInLeft">
							
									<div class="ads-img-cont" >
                    <img src="images/ads-phone.jpg" alt="img">
                  </div>
				
							</div>
              
						</div>
					</div>
				</div> 

				<!-- DIVIDER -->
				<hr class="mt-0 mb-0">	        
        
				<!-- ADS 2 -->
				<div class="page-section">
					<div class="container">
						<div class="row">
							
							<div class="col-md-6  ">
									<div class="fes2-main-text-cont">
										<div class="title-fs-45">
											POWERFUL<br>
											<span class="bold">OPTIONS</span>
										</div>
										<div class="line-3-100"></div>
										<div class="fes2-text-cont">Sed ut perspiciatis unde omnis iste nat eror acus  antium que. Asperiores, ea velit enim labore doloribus.</div>
                    <div class="mt-30">
                      <a class="button medium thin hover-dark" href="http://themeforest.net/user/abcgomel/portfolio?ref=abcgomel">BUY NOW</a>
                    </div>
									</div>
							</div>
              
              <div class="col-md-6 wow fadeInRight">
								
									<div class="ads-img-cont" >
                    <img src="images/ads-noute.jpg" alt="img">
                  </div>
							
							</div>
              
						</div>
					</div>
				</div>        
        
        <!-- VIDEO ADS 1 -->
				<div class="page-section video-ads-bg" >
					<div class="container">
            <div class="video-ads-text-cont clearfix">
              <span class="video-ads-text">BE CREATIVE</span>
              <span class="video-ads-a">
                <a class="popup-youtube" href="https://www.youtube.com/watch?v=0gv7OC9L2s8">
                  <span class="icon icon-music-play-button"></span>
                </a>
              </span>
              <span class="video-ads-text">WITH HASWELL</span>
            </div>
					</div>
				</div>
        
        <!-- BLOG 1 -->
        <div class="page-section pt-110-b-30-cont">
          <div class="container">
                
            <div class="mb-50">
              <h2 class="section-title pr-0">LATEST <span class="bold">NEWS</span><a href="blog-right-sidebar.html" class="section-more right">OUR BLOG</a>
                  </h2>
            </div>
            
            <div class="row">
              
              <!-- Post Item 1 -->
              <div class="col-sm-6 col-md-4 col-lg-4 wow fadeIn pb-70" >
                  
                <div class="post-prev-img">
                  <a href="blog-single-sidebar-right.html"><img src="images/blog/post-prev-1.jpg" alt="img"></a>
                </div>
                  
                <div class="post-prev-title">
                  <h3><a href="blog-single-sidebar-right.html">TIME FOR MINIMALISM</a></h3>
                </div>
                  
                <div class="post-prev-info">
                  JULE 10<span class="slash-divider">/</span><a href="http://themeforest.net/user/abcgomel/portfolio?ref=abcgomel">JOHN DOE</a>
                </div>
                  
                <div class="post-prev-text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae, nostrum, cumque culpa provident aliquam commodi assumenda laudantium magnam illo nostrum. 
                </div>
                  
                <div class="post-prev-more-cont clearfix">
                  <div class="post-prev-more left">
                    <a href="blog-single-sidebar-right.html" class="blog-more">READ MORE</a>
                  </div>
                  <div class="right" >
                    <a href="blog-single-sidebar-right.html#comments" class="post-prev-count"><span aria-hidden="true" class="icon_comment_alt"></span><span class="icon-count">21</span></a>
                    <a href="http://themeforest.net/user/abcgomel/portfolio?ref=abcgomel" class="post-prev-count"><span aria-hidden="true" class="icon_heart_alt"></span><span class="icon-count">53</span></a>
                    <a href="#" class="post-prev-count dropdown-toggle" data-toggle="dropdown" aria-expanded="false" >
                      <span aria-hidden="true" class="social_share"></span>
                    </a>
                    <ul class="social-menu dropdown-menu dropdown-menu-right" role="menu">
                      <li><a href="#"><span aria-hidden="true" class="social_facebook"></span></a>
                      </li>
                      <li><a href="#"><span aria-hidden="true" class="social_twitter"></span></a></li>
                      <li><a href="#"><span aria-hidden="true" class="social_dribbble"></span></a></li>
                    </ul>
                  </div>
                </div>
              
              </div>
              
              <!-- Post Item 2 -->
              <div class="col-sm-6 col-md-4 col-lg-4 wow fadeIn pb-70" data-wow-delay="200ms" >
                  
                <div class="post-prev-img">
                  <a href="blog-single-sidebar-right.html"><img src="images/blog/post-prev-2.jpg" alt="img"></a>
                </div>
                  
                <div class="post-prev-title">
                  <h3><a href="blog-single-sidebar-right.html">NEW TRENDS IN WEB DESIGN</a></h3>
                </div>
                  
                <div class="post-prev-info">
                  MAY 11<span class="slash-divider">/</span><a href="http://themeforest.net/user/abcgomel/portfolio?ref=abcgomel">JOHN DOE</a>
                </div>
                  
                <div class="post-prev-text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae, nostrum, cumque culpa provident aliquam commodi assumenda laudantium magnam illo nostrum. 
                </div>
                  
                <div class="post-prev-more-cont clearfix">
                  <div class="post-prev-more left">
                    <a href="blog-single-sidebar-right.html" class="blog-more">READ MORE</a>
                  </div>
                  <div class="right" >
                    <a href="blog-single-sidebar-right.html#comments" class="post-prev-count"><span aria-hidden="true" class="icon_comment_alt"></span><span class="icon-count">21</span></a>
                    <a href="http://themeforest.net/user/abcgomel/portfolio?ref=abcgomel" class="post-prev-count"><span aria-hidden="true" class="icon_heart_alt"></span><span class="icon-count">53</span></a>
                    <a href="#" class="post-prev-count dropdown-toggle" data-toggle="dropdown" aria-expanded="false" >
                      <span aria-hidden="true" class="social_share"></span>
                    </a>
                    <ul class="social-menu dropdown-menu dropdown-menu-right" role="menu">
                      <li><a href="#"><span aria-hidden="true" class="social_facebook"></span></a>
                      </li>
                      <li><a href="#"><span aria-hidden="true" class="social_twitter"></span></a></li>
                      <li><a href="#"><span aria-hidden="true" class="social_dribbble"></span></a></li>
                    </ul>
                  </div>
                </div>
              
              </div>
              
              <!-- Post Item 3 -->
              <div class="col-sm-6 col-md-4 col-lg-4 wow fadeIn pb-70" data-wow-delay="400ms" >
                  
                <div class="post-prev-img">
                  <a href="blog-single-sidebar-right.html"><img src="images/blog/post-prev-3.jpg" alt="img"></a>
                </div>
                  
                <div class="post-prev-title">
                  <h3><a href="blog-single-sidebar-right.html">THE SOUND OF LIFE</a></h3>
                </div>
                  
                <div class="post-prev-info">
                  DECEMBER 21<span class="slash-divider">/</span><a href="http://themeforest.net/user/abcgomel/portfolio?ref=abcgomel">JOHN DOE</a>
                </div>
                  
                <div class="post-prev-text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae, nostrum, cumque culpa provident aliquam commodi assumenda laudantium magnam illo nostrum. 
                </div>
                  
                <div class="post-prev-more-cont clearfix">
                  <div class="post-prev-more left">
                    <a href="blog-single-sidebar-right.html" class="blog-more">READ MORE</a>
                  </div>
                  <div class="right" >
                    <a href="blog-single-sidebar-right.html#comments" class="post-prev-count"><span aria-hidden="true" class="icon_comment_alt"></span><span class="icon-count">21</span></a>
                    <a href="http://themeforest.net/user/abcgomel/portfolio?ref=abcgomel" class="post-prev-count"><span aria-hidden="true" class="icon_heart_alt"></span><span class="icon-count">53</span></a>
                    <a href="#" class="post-prev-count dropdown-toggle" data-toggle="dropdown" aria-expanded="false" >
                      <span aria-hidden="true" class="social_share"></span>
                    </a>
                    <ul class="social-menu dropdown-menu dropdown-menu-right" role="menu">
                      <li><a href="#"><span aria-hidden="true" class="social_facebook"></span></a>
                      </li>
                      <li><a href="#"><span aria-hidden="true" class="social_twitter"></span></a></li>
                      <li><a href="#"><span aria-hidden="true" class="social_dribbble"></span></a></li>
                    </ul>
                  </div>
                </div>
              
              </div>
              
            </div>
            
          </div>
        </div>
        
            */
        ?>
        
        <?php
            echo $this->element('/layout/newsletter');
            echo $this->element('/layout/footer/default');
        ?>
        
        <!-- BACK TO TOP -->
        <p id="back-top">
            <a href="#top" title="Back to Top">
                <span class="icon icon-arrows-up"></span>
            </a>
        </p>
        
    </div><!-- End BG -->	
    </div><!-- End wrap -->
    
    <!-- JS begin -->
    
    <?php
        echo $this->element('/layout/js-section/main');
    ?>
   
    <?= $this->fetch('script') ?>
    
    <!-- JS end -->
	
</body>

</html>