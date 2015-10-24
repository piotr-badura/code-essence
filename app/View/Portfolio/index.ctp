<?php
    $this->Html->addCrumb('Portfolio', array('admin' => false, 'controller' => 'portfolio', 'action' => 'index'));
?>

<?php
    echo $this->element
    (
        '/layout/breadcrumbs',
        array
        (
            'title' => 'portfolio',
            'subtitle' => 'zbiór moich prac'
        )
    );
?>

<?php
    $portfolios = array
    (
        'websites' => array
        (
            'title' => 'witryny internetowe',
            'description' => 'Prezentacje firm, portfolia, blogi',
            'items' => array
            (
                array
                (
                    'img' => 'home-up.jpg'
                ),                
                array
                (
                    'img' => 'new-website.jpg'
                ),
                array
                (
                    'img' => 'my-portfolio.png'
                ),                
                array
                (
                    'img' => 'tanie-budowanie.jpg'
                )
            )
        ),
        'ecommerce' => array
        (
            'title' => 'oprogramowanie e-commerce',
            'description' => 'slepy internetowe i programy partnerskie',
            'items' => array
            (
                array
                (
                    'img' => 'funvit-program.png'
                )
            )
        )        
    );
?>

<!-- MAIN CONTENT -->
<div class="p-140-cont">

    <?php
        $i = 0;
        foreach ($portfolios as $portfolio)
        {
    ?>

    <!-- CONTAINER -->
    <div class="container">
        <div class="row mb-80">    
    
            <!-- SIDEBAR -->
            <div class="col-sm-4 col-md-3">
                <h2 class="section-title-3 mb-30"> <?php echo strtoupper($portfolio['title']) ?> </h2>
                <div class="mb-50">
                    <p> <?php echo $portfolio['description'] ?> </p>
                </div>
            </div>
            
            <!-- CONTENT -->
            <div class="col-sm-8 col-md-offset-1">
                <div class="row">
                    
                    <?php                        
                        foreach ($portfolio['items'] as $item)
                        {                            
                    ?>                    
                    
                    <!-- ITEM -->
                    <div class="col-md-6 plr-0 lightbox-item">
                        <a>
                            <div class="port-img-overlay">
                                <img class="port-main-img" src="/images/my-portfolio/thumbs/<?php echo $item['img'] ?>" alt="img">
                            </div>
                            <div class="port-overlay-cont">
                                <div class="port-btn-cont">
                                    <div aria-hidden="true" class="icon_link"></div>
                                </div>
                            </div>
                        </a>  
                    </div>

                    <?php
                        }
                    ?>                    

                </div>
            </div>            
            
        </div>
    </div>

        <?php 
            if (count($portfolio['items']) > $i)
            {
        ?>
    
        <!-- DIVIDER -->
        <hr class="mt-0 mb-80">    
    
    <?php
            }
            $i++;
        }
    ?>   

</div>

<div class="port-view-more-cont">
    <a class="port-view-more-dark" href="/contact"> <?php echo strtoupper('napisz do mnie'); ?> </a>
</div>