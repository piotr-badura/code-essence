<?php
    $this->Html->addCrumb('usługi', array('admin' => false, 'controller' => 'about', 'action' => 'index'));
?>

<?php
    echo $this->element
    (
        '/layout/breadcrumbs',
        array
        (
            'title' => 'usługi',
            'subtitle' => 'sprawdź co oferuję'
        )
    );
?>


<!-- FEATURES 4 -->
<div class="page-section fes4-cont">
    <div class="container">
        <div class="row">
            
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="fes4-box wow fadeIn">
                    <h2 class="section-title"> <?php echo strtoupper('z jakich narzedzi') ?> <span class="bold"> <?php echo strtoupper('korzystam') ?> ? </span></h2>
                </div>
            </div>            
            
            <?php
                $techs = array
                (
                    array
                    (                            
                        'title' => 'HTML5',
                        'title-sub' => 'czyste źródło',
                        'icon' => 'icon-basic-settings',
                        'img' => 'html5.jpg',
                        'description' => 'HTML 5 to najnowszy standard tworzenia stron internetowych, możesz być pewny, że Twoja witryna będzie na czasie'
                    ),
                    array
                    (                            
                        'title' => 'CSS3',
                        'title-sub' => 'piękne animacje',
                        'icon' => 'icon-basic-settings',
                        'img' => 'css3.jpg',
                        'description' => 'CSS 3 - nieograniczone możliwości, odpowiednie pozycjonowanie elementów, animacje, przejścia, które nadadzą uroku każdej stronie'
                    ),
                    array
                    (                            
                        'title' => 'jQuery',
                        'title-sub' => 'dynamiczna treść',
                        'icon' => 'icon-basic-settings',
                        'img' => 'jquery.jpg',
                        'description' => 'Dynamiczne generowanie zawartości - bez odświeżania witryny, świetne narzędzie do tworzenia animacji i wzbogacenia funkcjonalności'
                    ),
                    array
                    (                            
                        'title' => 'PHP',
                        'title-sub' => 'bezpieczeństwo',
                        'icon' => 'icon-basic-settings',
                        'img' => 'php.jpg',
                        'description' => 'Sprawdzony i bezpieczny język programowania po stronie serwera - przetworzy i wyświetli informacje w błyskawicznym tempie'
                    ),
                    array
                    (                            
                        'title' => 'MySQL',
                        'title-sub' => 'szybkie przetwarzanie',
                        'icon' => 'icon-basic-settings',
                        'img' => 'mysql.jpg',
                        'description' => 'Baza danych dobra zarówno do małych jak i większych rozwiązań - idealne i sprawdzone rozwiązanie dla każdego'
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
                            <img src="/images/pages/tech/<?php echo $tech['img'] ?>" />
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

<div class="container pb-80">
    <h2 class="section-title"> 
        <?php echo strtoupper('zobacz') ?> 
        <span class="bold"> <?php echo strtoupper('co oferuje') ?> </span>
    </h2>
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
        /*
        array
        (
            'title' => 'integracje',
            'image' => 'integrations.jpg',
            'href' => 'integrations',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        )
        */
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
            <div class="container">
                    <div class="row">

                            <div class="col-md-6 wow <?php echo $class ?> equal-height ">
                                    <div class="fes2-main-text-cont">
                                            <div class="title-fs-32">										
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

                            <div class="col-md-6 <?php echo $classpos ?> hidden-sm">
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
<hr class="mt-100 mb-0">
      
<!-- FEATURES 8 -->
<div class="page-section fes4-cont">
    <div class="container">
        <div class="row">
           
            <?php
                $integrations = array
                (
                    array
                    (
                        'title' => 'systemy platnicze',
                        'description' => 'integracja systemów PayU, Przelewy24, PayPal, Stripe, Authorize, Sofort',
                        'icon' => 'icon-ecommerce-dollar'
                    ),
                    array
                    (
                        'title' => 'narzedzia google',
                        'description' => 'połączenie usług google z Twoją witryną - google maps, google calendar, google analytics, oraz inne',
                        'icon' => 'icon-basic-geolocalize-01'
                    ),
                    array
                    (
                        'title' => 'social',
                        'description' => 'chciałbyć uspołecznić Twoją stronę ? oferuję integrację z facebook, twitter, google plus, linkedin',
                        'icon' => 'icon-basic-share'
                    ),
                    array
                    (
                        'title' => 'serwisy wysylkowe',
                        'description' => 'wdrażanie usług przewoźniczych, ups i fedex, przeliczanie kosztów, planowanie wysyłki',
                        'icon' => 'icon-ecommerce-bag'
                    ),
                    array
                    (
                        'title' => 'migracje',
                        'description' => 'jeżeli wordpress nie spełania już dłużej Twoich oczekiwać - mogę wykonać migrację',
                        'icon' => 'icon-arrows-drag-right-dashed'
                    ),
                    array
                    (
                        'title' => 'api',
                        'description' => 'dzięki api, możesz udostępnić swoje dane w bezpieczny sposób innej firmie',
                        'icon' => 'icon-basic-info'
                    ),                    
                );
            ?>

            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="fes8-box wow fadeIn">
                    <h2 class="section-title"> <span class="bold"> <?php echo strtoupper('integracje') ?> </span> </h2>
                </div>
            </div>
            
            <?php
                $i = 0;
                foreach ($integrations as $integration)
                {
                    $delay = $i * 200;
            ?>
            
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="fes8-box wow fadeIn" data-wow-delay="<?php echo $delay ?>ms">
                    <div class="fes8-title-cont">
                          <div class="fes8-box-icon">
                                  <div class="icon <?php echo $integration['icon'] ?>"></div>
                          </div>
                        <h3> <?php echo strtoupper($integration['title']) ?> </h3>
                    </div>
                    <div>
                       <?php echo $integration['description'] ?>
                    </div>
                </div>
            </div>
            
            <?php
                    $i++;
                }
            ?>                      
						
        </div>
    </div>
</div>

<!-- WORK PROCESS 1 -->
<div class="page-section work-proc-1-bg">
    <div class="container fes4-cont">
        
        <div class="row">

            <div class="col-md-3">
                <div class="mb-50">
                    <h2 class="section-title"> PROCES W <span class="bold"> KROKACH </span></h2>
                </div>
                <?php // <p class="mb-50"> grafik przentujący cały proces od kontaktu do zamknięcia projektu </p> ?>
            </div>
            
            <div class="col-md-9">

                <div id="cd-timeline">
                    <div class="cd-timeline-start">
                        <div class="cd-timeline-start-caption"> START </div>
                    </div>
                    
                    <?php
                        $timesteps = array
                        (
                            array
                            (
                                'icon' => 'icon_mobile',
                                'title' => 'kontakt',
                                'description' => 'Napisz do mnie, bądź zadzwoń - porozmawiajmy o Twojej witrynie, usłudze jakiej potrzebujesz i odbiorcach do których chciałbyś ją skierować, ustalmy co dokładnie ma się zawierać na stronie i jak ogólnikowo miałaby ona wyglądać'
                            ),
                            array
                            (
                                'icon' => ' icon_currency',
                                'title' => 'wycena',
                                'description' => 'Po ustaleniu szczegółów, zaproponuję wycenę usługi, oraz termin jej wykonania'
                            ),
                            array
                            (
                                'icon' => 'icon_desktop',
                                'title' => 'design',
                                'description' => 'Przestawię kilka propozycji graficznych, Ty wybierzesz najlepszą z nich, dodatkowe wskazówki również będą mile widziane'
                            ),
                            array
                            (
                                'icon' => 'icon_loading',
                                'title' => 'implementacja',
                                'description' => 'Tutaj zabieram się za pracę, bądźmy w kontakcie, aby na bieżąco weryfikować postęp prac, oraz rozwiewać ewentualne wątpliwości'
                            ),
                            array
                            (
                                'icon' => 'icon_tool',
                                'title' => 'poprawki',
                                'description' => 'Daj znać, jeżeli istnieje coś, co chciałbyś jeszcze zmodyfikować na stronie'
                            )
                        );
                        
                        $i = 1;
                        foreach ($timesteps as $timestep)
                        {
                    ?>
                    
                    <div class="cd-timeline-block">
                        <div class="cd-timeline-img cd-picture">
                            <span aria-hidden="true" class="<?php echo $timestep['icon'] ?>"></span>
                        </div>
                        
                        <div class="cd-timeline-content">
                            <h2> <?php echo strtoupper($timestep['title']) ?> </h2>
                            <p> <?php echo $timestep['description'] ?> </p>
                            <span class="cd-date hidden-sm hidden-xs">
                                <span class="cd-date-number"><?php echo $i; ?></span>
                            </span>
                        </div>
                    </div>
                    
                    <?php
                            $i++;
                        }
                    ?>

        <div class="cd-timeline-start cd-final">
                <div class="cd-timeline-start-caption"> KONIEC </div>
        </div>
</div>

            </div>
        </div>
        
    </div>
</div>

<!-- FEATURES 8 -->
<div class="page-section fes4-cont">
    <div class="container">
        <div class="row">
           
            <?php
                $additionals = array
                (
                    array
                    (
                        'title' => 'wielojezycznosc',
                        'description' => 'obsługa wielu języków - rozbudowa strony o kolejne, intuicyjne dodawanie tłumaczeń',
                        'icon' => 'icon-basic-flag1'
                    ),
                    /*
                    array
                    (
                        'title' => 'systemy platnicze',
                        'description' => 'integracja systemów PayU, Przelewy24, PayPal, Stripe, Authorize, Sofort',
                        'icon' => 'icon-ecommerce-dollar'
                    ),
                     * 
                     */
                    array
                    (
                        'title' => 'statystyki',
                        'description' => 'pełna obserwacja informacji dzięki statystykom - wykresy słupkowe, kołowe i dynamiczne',
                        'icon' => 'icon-ecommerce-graph3'
                    ),
                    /*
                    array
                    (
                        'title' => 'analiza',
                        'description' => 'narzędzia do analizy przepływu danych i poprawy SEO na witynie m.in google analytics',
                        'icon' => 'icon-music-shuffle-button'
                    ),
                    array
                    (
                        'title' => 'serwisy wysylkowe',
                        'description' => 'integracja usług przewoźniczych, UPS i FedEx, przeliczanie kosztów, planowanie wysyłki',
                        'icon' => 'icon-basic-compass'
                    )
                     * 
                     */
                );
            ?>

            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="fes8-box wow fadeIn">
                    <h2 class="section-title"> <span class="bold"> <?php echo strtoupper('dodatkowo') ?> </span> </h2>
                </div>
            </div>
            
            <?php
                $i = 0;
                foreach ($additionals as $additional)
                {
                    $delay = $i * 200;
            ?>
            
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="fes8-box wow fadeIn" data-wow-delay="<?php echo $delay ?>ms">
                    <div class="fes8-title-cont">
                          <div class="fes8-box-icon">
                                  <div class="icon <?php echo $additional['icon'] ?>"></div>
                          </div>
                        <h3> <?php echo strtoupper($additional['title']) ?> </h3>
                    </div>
                    <div>
                       <?php echo $additional['description'] ?>
                    </div>
                </div>
            </div>
            
            <?php
                    $i++;
                }
            ?>                      
						
        </div>
    </div>
</div>

<div class="port-view-more-cont">
    <a class="port-view-more-dark" href="/contact"> <?php echo strtoupper('napisz do mnie'); ?> </a>
</div>