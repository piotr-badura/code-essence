<?php
    $this->Html->addCrumb(__('static.portfolio.breadcrumb'), array('admin' => false, 'controller' => 'portfolio', 'action' => 'index'));
?>

<?php
    echo $this->element
    (
        '/layout/breadcrumbs',
        array
        (
            'title' => __('static.portfolio.breadcrumb.title'),
            'subtitle' => __('static.portfolio.breadcrumb.subtitle')
        )
    );
?>

<!-- MAIN CONTENT -->
<div class="p-140-cont">

    <!-- CONTAINER -->
    <div class="container">
        <div class="row mb-80">

            <!-- SIDEBAR -->
            <div class="col-sm-4 col-md-3">
                <h2 class="section-title-3 mb-30">DEVELOPMENT</h2>
                <div class="mb-50">
                    <p>Etiam sit amet fringilla lacus. Pellen into suscipit ante at ullamcorper pulvinar neque porttitor. Integer lectus. Praesent sed nisi eleifend.</p>
                </div>

            </div>

            <!-- CONTENT -->
            <div class="col-sm-8 col-md-offset-1 ">
                <div class="row">

                    <!-- ITEM -->
                    <div class="col-md-6 plr-0 lightbox-item">
                        <a href="portfolio-single1.html">
                            <div class="port-img-overlay">
                                <img class="port-main-img" src="images/portfolio/projects-5.jpg" alt="img">
                            </div>
                            <div class="port-overlay-cont">
                                <div class="port-btn-cont">
                                    <div aria-hidden="true" class="icon_link"></div>
                                </div>
                            </div>
                        </a>  
                    </div>

                    <!-- ITEM -->
                    <div class="col-md-6 plr-0 lightbox-item">
                        <a href="portfolio-single1.html" >
                            <div class="port-img-overlay">
                                <img class="port-main-img" src="images/portfolio/projects-1.jpg" alt="img">
                            </div>
                            <div class="port-overlay-cont">
                                <div class="port-btn-cont">
                                    <div aria-hidden="true" class="icon_link"></div>
                                </div>
                            </div>
                        </a>  
                    </div>

                </div>
            </div>

        </div>
    </div>

    <!-- DIVIDER -->
    <hr class="mt-0 mb-80">

    <!-- CONTAINER -->
    <div class="container"> 
        <div class="row mb-80">

            <!-- SIDEBAR -->
            <div class="col-sm-4 col-md-3">
                <h2 class="section-title-3 mb-30">BRANDING</h2>
                <div class="mb-50">
                    <p>Etiam sit amet fringilla lacus. Pellen into suscipit ante at ullamcorper pulvinar neque porttitor. Integer lectus. Praesent sed nisi eleifend.</p>
                </div>
            </div>

            <!-- CONTENT -->
            <div class="col-sm-8 col-md-offset-1 ">
                <div class="row">

                    <!-- ITEM -->
                    <div class="col-md-6 plr-0 lightbox-item">
                        <a href="portfolio-single1.html" >
                            <div class="port-img-overlay">
                                <img class="port-main-img" src="images/portfolio/projects-3.jpg" alt="img">
                            </div>
                            <div class="port-overlay-cont">
                                <div class="port-btn-cont">
                                    <div aria-hidden="true" class="icon_link"></div>
                                </div>
                            </div>
                        </a>  
                    </div>

                </div>
            </div>

        </div>
    </div>

</div>