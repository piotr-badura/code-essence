<?php
    $this->Html->addCrumb(__('static.services.breadcrumb'), array('admin' => false, 'controller' => 'about', 'action' => 'index'));
?>

<?php
    echo $this->element
    (
        '/layout/breadcrumbs',
        array
        (
            'title' => __('static.services.breadcrumb.title'),
            'subtitle' => __('static.services.breadcrumb.subtitle')
        )
    );
?>


<!-- FEATURES 4 -->
<div class="page-section fes4-cont">
    <div class="container">
        <div class="row">
            
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="fes4-box wow fadeIn">
                    <h2 class="section-title"> Sprawdzona <span class="bold"> Technologia </span></h2>
                </div>
            </div>            
            
            <?php
                $techs = array
                (
                    array
                    (                            
                        'title' => 'development',
                        'title-sub' => 'lorem ipsum dolor',
                        'icon' => 'icon-basic-settings',
                        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam'
                    ),
                    array
                    (                            
                        'title' => 'development',
                        'title-sub' => 'lorem ipsum dolor',
                        'icon' => 'icon-basic-settings',
                        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam'
                    ),
                    array
                    (                            
                        'title' => 'development',
                        'title-sub' => 'lorem ipsum dolor',
                        'icon' => 'icon-basic-settings',
                        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam'
                    ),
                    array
                    (                            
                        'title' => 'development',
                        'title-sub' => 'lorem ipsum dolor',
                        'icon' => 'icon-basic-settings',
                        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam'
                    ),
                    array
                    (                            
                        'title' => 'development',
                        'title-sub' => 'lorem ipsum dolor',
                        'icon' => 'icon-basic-settings',
                        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam'
                    )                    
                )                
            ?>
            
            <?php
                $mili = 200;
                foreach ($techs as $tech)
                {
            ?>
            
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="fes4-box wow fadeIn" data-wow-delay="<?php echo $mili; ?>ms">
                    <div class="fes4-title-cont">
                        <div class="fes4-box-icon">
                            <div class="icon <?php echo $tech['icon'] ?>"></div>
                        </div>
                        <h3><span class="bold"><?php echo $tech['title'] ?></span></h3>
                        <p> <?php echo $tech['title-sub'] ?> </p>
                    </div>
                    <div>
                        <?php echo $tech['description'] ?>
                    </div>
                </div>
            </div>            
            
            <?php
                    $mili += 200;
                }
            ?>						
        </div>
    </div>
</div>

<hr class="mt-0 mb-0">

<?php
    $services = array
    (
        array
        (                            
            'title-header' => 'witryny',
            'title' => 'internetowe',
            'image' => 'websites.jpg',
            'href' => 'websites',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        ),
        array
        (
            'title-header' => 'oprogramowanie',
            'title' => 'e-commerce',
            'image' => 'ecommerce.jpg',
            'href' => 'ecommerce',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        ),
        array
        (
            'title-header' => 'systemy',
            'title' => 'zarządzania treścią',
            'image' => 'cms.jpg',
            'href' => 'cms',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        ),
        array
        (
            'title-header' => 'obsługa',
            'title' => 'hostingu',
            'image' => 'hosting.jpg',
            'href' => 'hosting',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        ),
        array
        (
            'title' => 'integracje',
            'image' => 'integrations.jpg',
            'href' => 'integrations',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        )
    )
?>

<div id="page-section-services">
    
    <?php
        $i = 0;
    
        foreach ($services as $service)
        {
            $i++;
            
            $class = 'left-50 fadeInRight';
            $classpos = 'right-50';
            if ($i % 2 > 0)
            {
                $class = 'fadeInLeft';
                $classpos = '';
            }
    ?>
    
    <!-- FEATURES <?php echo $i; ?> -->
    <div id="ces-<?php echo $service['href'] ?>" class="page-section">
            <div class="container-fluid">
                    <div class="row">

                            <div class="col-md-6 wow <?php echo $class ?> equal-height ">
                                    <div class="fes2-main-text-cont">
                                            <div class="title-fs-45">										
                                                    <?php
                                                        if (isset($service['title-header']))
                                                        {
                                                    ?>
                                                    <?php echo $service['title-header'] ?> <br />
                                                    <?php
                                                        }
                                                    ?>
                                                    <?php
                                                        if (isset($service['title']))
                                                        {
                                                    ?>
                                                    <span class="bold"> <?php echo $service['title'] ?> </span>
                                                    <?php
                                                        }
                                                    ?>
                                            </div>
                                            <div class="line-3-70"></div>
                                            <div class="fes2-text-cont">
                                                <?php echo $service['description'] ?>
                                            </div>
                                    </div>
                            </div>

                            <div class="col-md-6 <?php echo $classpos ?>">
                                    <div class="row">
                                            <div class="equal-height" style="background: url(/images/pages/services/<?php echo $service['image'] ?>) 50% 50% no-repeat; background-size: cover;"></div>
                                    </div>
                            </div>

                    </div>
            </div>
    </div>    
    
    <?php
        }
    ?>
    
</div>
                                
<!-- DIVIDER -->
<hr class="mt-0 mb-0">
      
<!-- FEATURES 8 -->
<div class="page-section fes4-cont">
    <div class="container">
        <div class="row">
           
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="fes8-box wow fadeIn">
                    <div class="fes8-title-cont" >
                          <div class="fes8-box-icon">
                                  <div class="icon icon-basic-smartphone"></div>
                          </div>
                          <h3>RETINA READY GRAPHICS</h3>
                    </div>
                    <div>
                       Maecenas luctus nisi in sem fermentum blat. In nec  elit solliudin, elementum. 
                    </div>
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="fes8-box wow fadeIn" data-wow-delay="200ms">
								  <div class="fes8-title-cont" >
								  	<div class="fes8-box-icon">
								  		<div class="icon icon-basic-mixer2"></div>
								  	</div>
								  	<h3>PARALLAX SUPPORT</h3>
								  </div>
								  <div>
								     Maecenas luctus nisi in sem fermentum blat. In nec  elit solliudin, elementum. 
								  </div>
								</div>
							</div>
              <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="fes8-box wow fadeIn" data-wow-delay="400ms">
								  <div class="fes8-title-cont" >
								  	<div class="fes8-box-icon">
								  		<div class="icon icon-basic-share"></div>
								  	</div>
								  	<h3>ENDLESS POSSIBILITIES</h3>
								  </div>
								  <div>
								     Seductio maesto nisi in sem fermentum blat. In nec elit solliudin, elementum.
								  </div>
								</div>
							</div>
              
						</div>
						<div class="row">
            
              <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="fes8-box wow fadeIn" data-wow-delay="600ms">
								  <div class="fes8-title-cont" >
								  	<div class="fes8-box-icon">
								  		<div class="icon icon-basic-paperplane"></div>
								  	</div>
								  	<h3>CLEAR DESIGN</h3>
								  </div>
								  <div>
								    Donec vel luctus nisi in sem fermentum blat. In nec elit solliudin, elementum.
								  </div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-4">
                <div class="fes8-box wow fadeIn" data-wow-delay="800ms" >
								  <div class="fes8-title-cont" >
								  	<div class="fes8-box-icon">
								  		<div class="icon icon-basic-chronometer"></div>
								  	</div>
								  	<h3>POWERFUL PERFORMANCE</h3>
								  </div>
								  <div>
								    Lorem luctus antena at nisi in sem blandit. In nec elit soltudin, elementum odio. 
								  </div>
								</div>
							</div>
              <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="fes8-box wow fadeIn" data-wow-delay="1000ms">
								  <div class="fes8-title-cont" >
								  	<div class="fes8-box-icon">
								  		<div class="icon icon-software-horizontal-align-center"></div>
								  	</div>
								  	<h3>FLEXIBLE WIDGETS</h3>
								  </div>
								  <div>
								    Fermentum nisi in sem fertum blat. In elit soldin, elemtum, arenam pur quam volut.
								  </div>
								</div>
							</div>              
						
            </div>
            
						<div class="row">
            
              <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="fes8-box wow fadeIn" data-wow-delay="600ms">
								  <div class="fes8-title-cont" >
								  	<div class="fes8-box-icon">
								  		<div class="icon icon-basic-laptop"></div>
								  	</div>
								  	<h3>RESPONSIVE LAYOUT</h3>
								  </div>
								  <div>
								    Donec vel luctus nisi in sem fermentum blat. In nec elit solliudin, elementum, dictum pur quam volutpat suscipit antena.
								  </div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-4">
                <div class="fes8-box wow fadeIn" data-wow-delay="800ms" >
								  <div class="fes8-title-cont" >
								  	<div class="fes8-box-icon">
								  		<div class="icon icon-music-play-button"></div>
								  	</div>
								  	<h3>HTML5 VIDEO</h3>
								  </div>
								  <div>
								    Lorem luctus antena at nisi in sem blandit. In nec elit soltudin, elementum odio et, dictum quam a volutpat elementum. 
								  </div>
								</div>
							</div>
              <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="fes8-box wow fadeIn" data-wow-delay="1000ms">
								  <div class="fes8-title-cont" >
								  	<div class="fes8-box-icon">
								  		<div class="icon icon-basic-info"></div>
								  	</div>
								  	<h3>WELL DOCUMENTED</h3>
								  </div>
								  <div>
								    Fermentum nisi in sem fertum blat. In elit soldin, elemtum, arenam pur quam volutpat suscipit dictum pur quam.
								  </div>
								</div>
							</div>              
						
            </div>
					</div>
				</div>                
                  
      
        
				<!-- WORK PROCESS 1 -->
				<div class="page-section work-proc-1-bg" >
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
                     
        <!-- FEATURES 10 -->
        <div id="about" class="page-section p-110-cont">
					<div class="container">

            <div class="row">
              <!-- TESTIMONIALS -->
              <div class="col-md-4 pt-30 pb-40">
									<div class="skillbar clearfix " data-percent="90%">
										<div class="skillbar-title"><span>DESIGN</span></div>
										<div class="skillbar-bar"></div>
										<div class="skill-bar-percent">90%</div>
									</div> <!-- End Skill Bar -->

									<div class="skillbar clearfix " data-percent="85%">
										<div class="skillbar-title"><span>DEVELOPMENT</span></div>
										<div class="skillbar-bar"></div>
										<div class="skill-bar-percent">85%</div>
									</div> <!-- End Skill Bar -->

									<div class="skillbar clearfix " data-percent="70%">
										<div class="skillbar-title"><span>BRANDING</span></div>
										<div class="skillbar-bar" ></div>
										<div class="skill-bar-percent">70%</div>
									</div> <!-- End Skill Bar -->
							</div>
              
              <!-- FEATURES -->
							<div class="col-md-8 col-lg-7 col-lg-offset-1 ">
                    
                <div class="row">
                    
                  <div class="col-md-6 col-sm-6 pb-10">
                    <div class="fes5-box wow fadeIn" >
                      <h3>FULLY RESPONSIVE</h3>
                      <p>Sed ut perspiciatis unde omnis iste nat eror acus  antium que</p>
                    </div>
                  </div>
                      
                  <div class="col-md-6 col-sm-6 pb-10">
                    <div class="fes5-box wow fadeIn" data-wow-delay="200ms">
                      <h3>RETINA READY</h3>
                      <p>Sed ut perspiciatis unde omnis iste nat eror acus  antium que</p>
                    </div>
                  </div>
                      
                </div>
                    
                <div class="row">
                    
                  <div class="col-md-6 col-sm-6 pb-10">
                    <div class="fes5-box wow fadeIn" data-wow-delay="400ms">
                      <h3>UNIQUE DESIGN</h3>
                      <p>Sed ut perspiciatis unde omnis iste nat eror acus  antium que</p>
                    </div>
                  </div>
                      
                  <div class="col-md-6 col-sm-6 pb-10">
                    <div class="fes5-box wow fadeIn"  data-wow-delay="600ms">
                      <h3>EASY TO CUSTOMIZE</h3>
                      <p>Sed ut perspiciatis unde omnis iste nat eror acus  antium que</p>
                    </div>
                  </div>
                  
                </div>                    
                    
							</div>
              
						</div>
					</div>
				</div>                                        