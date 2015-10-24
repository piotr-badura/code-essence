<?php
    $this->Html->addCrumb('oferta', array('admin' => false, 'controller' => 'services', 'action' => 'index'));
?>

<?php
    echo $this->element
    (
        '/layout/breadcrumbs',
        array
        (
            'title' => 'oferta',
            'subtitle' => 'zobacz co mogę Tobie zaproponować'
        )
    );
?>


<!-- FEATURES 4 -->
<div class="page-section fes4-cont">
    <div class="container">
        <div class="row">
            
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="fes4-box wow fadeIn">
                    <h2 class="section-title"> <?php echo strtoupper('narzedzia') ?> <br /> <span class="bold"> <?php echo strtoupper('pracy') ?> </span></h2>
                </div>
            </div>            
            
            <?php
                $techs = array
                (
                    array
                    (                            
                        'title' => 'HTML5',
                        'title-sub' => 'zgodność ze standardami',
                        'icon' => 'icon-basic-settings',
                        'img' => 'html5.jpg',
                        'description' => 'HTML 5 to najnowszy standard prezentowania stron internetowych, udostępnia funkcje płótna i multimediów'
                    ),
                    array
                    (
                        'title' => 'CSS3',
                        'title-sub' => 'nieograniczony potencjał',
                        'icon' => 'icon-basic-settings',
                        'img' => 'css3.jpg',
                        'description' => 'Interesujące przejścia i animacje, transformacje 2D / 3D, oraz efekty na tekście upiększą i dodadzą uroku każdej witrynie'
                    ),
                    array
                    (                            
                        'title' => 'jQuery',
                        'title-sub' => 'dynamiczna zawartość',
                        'icon' => 'icon-basic-settings',
                        'img' => 'jquery.jpg',
                        'description' => 'jQuery generuje zawartość bez potrzeby odświeżania stron, jest świetnym narzędziem do animacji i manipulacji elementami'
                    ),
                    array
                    (                            
                        'title' => 'PHP',
                        'title-sub' => 'efektywność',
                        'icon' => 'icon-basic-settings',
                        'img' => 'php.jpg',
                        'description' => 'Język programowania po stronie serwera - charakteryzuje go szybkość, bezpieczeństwo i funkcjonalność bez limitu'
                    ),
                    array
                    (                            
                        'title' => 'MySQL',
                        'title-sub' => 'przetwarzanie danych',
                        'icon' => 'icon-basic-settings',
                        'img' => 'mysql.jpg',
                        'description' => 'Baza danych świetna zarówno dla małych jak i większych rozwiązań - mySQL operuje danymi bardzo efektywnie'
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
                            <img src="/images/pages/services/technology/<?php echo $tech['img'] ?>" alt="<?php echo $tech['title'] ?>" />
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

<div class="port-view-more-cont">
  <p class="port-view-more-dark port-view-no-more-dark"> OFERTA </p>
</div>

<?php
    $services = array
    (
        array
        (                            
            'title-header' => 'witryny',
            'title' => 'internetowe',
            'image' => 'websites.jpg',
            'href' => 'websites',
            'description' => 'Oprogramowanie internetowe zazwyczaj z prostą funkcjonalnością, celujące głównie w dobrą prezentację, oraz pozyskiwanie popularności. Potrzebujesz bloga, na którym chciałbyś się podzielić ze światem swoim doświadczeniem i przeżyciami ? A może interesuje Cie jedynie promocja i pozyskanie nowych klientów ? Z przyjemnością pomogę Ci zbudować takie miejsce w globalnej sieci, które dobrze zaprezentuje Twój wizerunek'
        ),
        array
        (
            'title-header' => 'oprogramowanie',
            'title' => 'e-commerce',
            'image' => 'ecommerce.jpg',
            'href' => 'ecommerce',
            'description' => 'W przeciągu swojego długoletniego doświadczenia realizowałem wiele projektów, które przynosiły niemałe zyski właścicielom. Sklepy internetowe, oraz programy partnerskie wymagają większego nakładu pracy, ale w istocie bardzo szybko się zwracają. Kluczem tutaj jest dobre wypozycjonowanie w wyszukiwarkach, bezpieczeństwo, a także strefa klienta przyjazna w użytkowaniu - w moim portfolio znajdziesz próbkę możliwośći'
        ),
        array
        (
            'title-header' => 'systemy',
            'title' => 'zarządzania treścią',
            'image' => 'cms.jpg',
            'href' => 'cms',
            'description' => 'Zaawansowane oprogramowanie do zarządzania firmami to propozycja najbardziej kompleksowa - bezkres możliwości, oraz wszystkie usługi zgromadzone w jednym miejscu ułatwiają pracę i oszczędzają czas. CMS to obsługa finansów, kadr, procesu produkcji i bazy kontrahentów, administracja witrynami, zarządzanie treścią i multimediami, generowanie faktur, statystyk, diagramów i rokowań, mailing. Dzięki integracjom z popularnymi serwisami jest swoistym kombajnem '
        ),
        array
        (
            'title-header' => 'obsługa',
            'title' => 'hostingu',
            'image' => 'server.jpg',
            'href' => 'hosting',
            'description' => 'Oferta zawiera konfigurację i utrzymanie serwerów, oraz domen, na których znajduje się oprogramowanie, monitorowanie usług których termin zbliża się ku wygaśnięciu i podejmowanie stosownych decyzji po wcześniejszych konsultacjach. Zakres oferty obejmuje również zarządzanie skrzynkami pocztowymi, tworzenie nowych, oraz usuwanie już nieużywanych, a także eksport i archiwizację danych zgromadzonych na serwerach'
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

                            <div class="col-md-6 <?php echo $classpos ?> hidden-sm hidden-xs">
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
                        'description' => 'Integracja systemów PayU, Przelewy24, PayPal, Stripe, Authorize, Sofort',
                        'icon' => 'icon-ecommerce-dollar'
                    ),
                    array
                    (
                        'title' => 'narzedzia google',
                        'description' => 'Usługi google na wyciągnięcie ręki - google maps, google calendar, google analytics',
                        'icon' => 'icon-basic-geolocalize-01'
                    ),
                    array
                    (
                        'title' => 'spolecznosc',
                        'description' => 'Łączenie strony ze światem - facebook, twitter, google plus, linkedin',
                        'icon' => 'icon-basic-share'
                    ),
                    array
                    (
                        'title' => 'mailing',
                        'description' => 'Budowanie baz subskrybentów, oraz rozsyłanie im wiadomości poprzez api mailchimp',
                        'icon' => 'icon-basic-mail'
                    ),                    
                    array
                    (
                        'title' => 'serwisy wysylkowe',
                        'description' => 'Planowanie wysyłki i przeliczanie kosztów transportu przewoźników ups i fedex',
                        'icon' => 'icon-ecommerce-bag'
                    ),
                    array
                    (
                        'title' => 'migracje',
                        'description' => 'Wordpress / joomla - bezpieczna i efektywna migracja danych, oraz strony',
                        'icon' => 'icon-arrows-drag-right-dashed'
                    ),
                    array
                    (
                        'title' => 'pluginy',
                        'description' => 'Dodatki wzbogające witrynę - gotowe do użycia widgety i pluginy wykonane w jQuery',
                        'icon' => 'icon-basic-link'
                    ),                    
                    array
                    (
                        'title' => 'api',
                        'description' => 'Skrypty, które pozwalają udostępnić w bezpieczny sposób określone dane innemu podmiotowi',
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

<div class="port-view-more-cont">
  <p class="port-view-more-dark port-view-no-more-dark"> PROCES W KROKACH </p>
</div>

<!-- WORK PROCESS 1 -->
<div class="page-section">
    <div class="container fes4-cont pt-80">
        
        <div class="row">

            <?php
                /*
            <div class="col-md-3">
                <div class="mb-50">
                    <h2 class="section-title"> PROCES W <span class="bold"> KROKACH </span></h2>
                </div>
                <?php // <p class="mb-50"> grafik przentujący cały proces od kontaktu do zamknięcia projektu </p> ?>
            </div>
                */
            ?>
            
            <div class="col-md-12">

                <div id="cd-timeline" class="custom-timeline">
                    <div class="cd-timeline-start">
                        <div class="cd-timeline-start-caption"> KONTAKT </div>
                    </div>
                    
                    <?php
                        $timesteps = array
                        (
                            array
                            (
                                'icon' => 'icon_mobile',
                                'title' => 'rozmowa',
                                'description' => 'Możesz ze mną skontaktować się telefonicznie, bądź mailowo - przyjmę Cie w moim biurze, bądź jeżeli preferujesz, temat Twojej usługi omówimy w kawiarni. Na tym etapie chciałbym zorientować się jakie dokładnie są Twoje potrzeby, do której grupy odbiorców planujesz dotrzeć, oraz porozmawiać na temat wyglądu witryny'
                            ),
                            array
                            (
                                'icon' => ' icon_currency',
                                'title' => 'wycena',
                                'description' => 'Po ustaleniu wszystkich detali, zaproponuję wycenę usługi, oraz termin jej wykonania'
                            ),
                            array
                            (
                                'icon' => 'icon_desktop',
                                'title' => 'design',
                                'description' => 'Mając na uwadze Twoje preferencje wizualne, przedstawię kilka propozycji w formie zdjęć, bądź linków. Jeżeli któraś Ci się spodoba, możesz do niej dołączyć swoje spostrzeżenia, oraz poprawki jakie powinny zostać naniesione'
                            ),
                            array
                            (
                                'icon' => 'icon_loading',
                                'title' => 'implementacja',
                                'description' => 'To najbardziej czasochłonny proces, który jest silnikiem, lub sercem Twojej witryny. Na tym etapie chciałbym utrzymywać regularny kontakt w celu weryfikacji postępów prac, oraz rozwiewania ewentualnie pojawiających się wątpliwości czy pytań'
                            ),
                            array
                            (
                                'icon' => 'icon_tool',
                                'title' => 'poprawki',
                                'description' => 'Czasami zdarza się, że jesteśmy zadowoleni z gotowego projektu, ale pragniemy jeszcze zmienić drobne detale i niuanse, które wcześniej nam nie przeszkadzały. W tym kroku śmiało możesz je wymieniać'
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
                            <div class="cd-timeline-start-caption" style="padding: 0"> <i class="fa fa-smile-o" style="font-size: 40px"></i> </div>
                        </div>
                </div>

            </div>
        </div>
        
    </div>
</div>

<?php
    /*

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
                    array
                    (
                        'title' => 'statystyki',
                        'description' => 'pełna obserwacja informacji dzięki statystykom - wykresy słupkowe, kołowe i dynamiczne',
                        'icon' => 'icon-ecommerce-graph3'
                    ),
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
    */
?>

<div class="port-view-more-cont">
    <a class="port-view-more-dark" href="/contact"> <?php echo strtoupper('napisz do mnie'); ?> </a>
</div>