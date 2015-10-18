<?php
    echo $this->element('/layout/slider-revolution');
?>

<!-- FEATURES 7 -->
<div id="about-section" class="page-section clearfix">
    <div id="about-left" class="fes7-img-cont col-md-6 hidden-sm" style="background: url(/images/work-proc-bg.jpg) fixed #2c2c2c;">
        <div class="fes7-img" style="background-image: url(/images/pages/home/mirror.png)"></div>
    </div>

    <div id="about" class="container">
        <div class="row">
            <div class="about-container col-md-6 col-md-offset-6 fes7-text-cont p-80-cont">
                <h1><span class="font-light"> Witam na mojej stronie </span></h1>
                
                <p class="mb-20"> Code-Essence to działalność jednoosobowa założona w 2015 roku. Kocham to co robię, zawsze staram się patrzeć oczami drugiej osoby, a każde nowe wyzwanie jest dla mnie motywacją i utwierdza mnie w przekonaniu, że nie istnieją rzeczy niemożliwe. </p>
                <p class="mb-30"> <span class="fosnt-light"> Czym zajmuje się Code-Essence ? </span> </p>
        
                <?php
                    $services = array
                    (
                        array
                        (                            
                            'title' => 'Witryny internetowe',
                            'href' => 'websites',
                            'icon' => 'icon-basic-display',
                            'description' => 'Wizytówki i portfolia, które dobrze zaprezentują i wypozycjonują Ciebie, bądź Twoją firmę w sieci'
                        ),
                        array
                        (
                            'title' => 'Oprogramowanie e-commerce',
                            'href' => 'ecommerce',
                            'icon' => 'icon-ecommerce-dollar',
                            'description' => 'W pełni obudowane sklepy internetowe oferujące sprzedaż on-line z dowolnie podpiętym systemem płatniczym'
                        ),                        
                        array
                        (
                            'title' => 'Systemy CMS',
                            'href' => 'cms',
                            'icon' => 'icon-basic-gear',
                            'description' => 'Zaawansowane oprogramowanie do zarządzania treścią stron, wszystko na miarę dopasowane do Twoich potrzeb'
                        ),
                        array
                        (
                            'title' => 'Obsługa hostingu',
                            'href' => 'hosting',
                            'icon' => 'icon-basic-server',
                            'description' => 'Na Twoje życzenie Code-Essence zajmie się obsługą serwerów, domen, czy skrzynek pocztowych'
                        ),
                        array
                        (
                            'title' => 'Integracje',
                            'href' => 'integrations',
                            'icon' => 'icon-basic-share',
                            'description' => 'Oferuję również integracje z portalami społecznościowymi, narzędziami google, jak i pisanie api, widgetów'
                        )
                    )
                ?>

                <?php
                    $i = 1;
                    foreach ($services as $service)
                    {
                ?>
        
                <div class="row">

                    <div class="col-md-12 col-sm-12">
                        <div class="fes7-box wow fadeIn" >
                            <div class="fes7-box-icon">
                                <div class="icon <?php echo $service['icon'] ?>"></div>
                            </div>
                            <h3> <?php echo $service['title'] ?> </h3>
                            <p> <span class="hidden-md"> <?php echo $service['description'] ?>... </span> <a href="<?php echo $this->Html->url(array('admin' => false, 'controller' => 'services', 'action' => 'index', '#' => 'ces-' . $service['href'])) ?>"> czytaj więcej... </a> </p>
                        </div>
                    </div>

                </div>
        
                <?php
                    $i++;
                    }
                ?>

            </div>
        </div><!--end of row-->
    
    </div>
</div>

<?php
    $whyus = array
    (
        array
        (
            'title' => 'technologia',
            'icon' => 'fa-code',
            'description' => 'Code-Essence korzysta z najbardziej stabilnych rozwiązań - PHP / jQuery / MySQL i nie tylko'
        ),
        array
        (
            'title' => 'ładny design',
            'icon' => 'fa-paint-brush',
            'description' => 'Odwiedzający Twoją witrynę odczują niebywałą przyjemność podczas przebywania na niej'
        ),        
        array
        (
            'title' => 'google seo',
            'icon' => 'fa-google',
            'description' => 'Gwarantuję usługę, która zostanie dobrze wypozycjonowana przez wyszukiwarkę google'
        ),
        array
        (
            'title' => 'responsywność',
            'icon' => 'fa-mobile',
            'description' => 'Witryny będą poprawnie wyświetlane we wszystkich urządzeniach mobilnych'
        ),
        array
        (
            'title' => 'optymalizacja',
            'icon' => 'fa-bolt',
            'description' => 'Stawiam na szybkość - użytkownicy nawet ze słabym łączem odczytają stronę w mgnieniu oka'
        ),
        array
        (
            'title' => 'kompatybilność',
            'icon' => 'fa-bars',
            'description' => 'Twoja witryna poprawnie zadziała pod każdą dostępną przeglądarką'
        ),
        array
        (
            'title' => 'bezpieczeństwo',
            'icon' => 'fa-lock',
            'description' => 'Możesz spać spokojnie, zadbam o to, aby nikt się nie wkradł do systemu'
        ),
        array
        (
            'title' => 'integracja',
            'icon' => 'fa-arrows-h',
            'description' => 'Oferuję pełną integrację z najprzeróżniejszymi serwisami'
        )                
    )
?>

<!-- FEATURES 5 -->
<div id="why-us" class="page-section p-80-cont why-us-section">
    <div class="container">
        <h1>
            <span class="font-light"> Dlaczego Code-Essence </span> 
            <?php /* <span class="fa fa-question-circle"></span> */ ?> 
        </h1>
                
        <div class="row">
                    
        <?php
            foreach ($whyus as $entry)
            {
        ?>                    
                    
            <div class="col-md-4 col-sm-4 pb-10">
                <div class="fes5-box wow fadeIn" >
                    <h3> 
                        <span class="fa <?php echo $entry['icon'] ?>"></span> 
                        <?php echo $entry['title'] ?> 
                    </h3>

                    <?php
                        /*
                        <a class="button small very-small gray-light hover-dark" href=""> więcej... </a>
                        <div class="clearfix"></div>
                        */
                    ?>
                    
                    <p> <?php echo $entry['description'] ?> </p>
                </div>
            </div>
            
        <?php
            }
        ?>

        
        </div>                    
    </div>
</div>

<!-- CALL TO ACTION  -->
<div class="port-view-more-cont">
  <a class="port-view-more-dark" href="<?php echo $this->Html->url(array('admin' => false, 'controller' => 'contact', 'action' => 'index')) ?>"> NAPISZ DO MNIE </a>
</div>

<?php
    /*
<div class="page-section touch-contact-bg">
    <div class="container">
        <div class="touch-contact-text-cont clearfix">
            <span class=""> Napisz </span>
            <span class="">
                <a href="/contact">
                    <span class="icon icon-basic-paperplane"></span>
                </a>
            </span>
            <span class=""> do mnie </span>
        </div>
    </div>
</div>
     * 
     */
?>

<?php
    /*
<!-- CLIENTS 1 & TESTIMONIALS 1 -->
<div id="recomendations" class="page-section p-80-cont">
    <div class="container">
        <div class="row">
            <!-- CLIENTS 1 -->
            <div class="col-md-7">
                <div class="row client-row border-bot">
                    <div class="col-xs-6 col-sm-3 text-center">
                        <img alt="client" src="/images/logo/ce-logo-gap.png">
                    </div>
                </div>
                
                <div class="row client-row">

                </div>
            </div>

            <!-- TESTIMONIALS 1 -->
            <div class="col-md-5">
                <blockquote class="quote mb-0 m-p-0">
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    <footer> John Doe, IT Systems </footer>
                </blockquote>
            </div>
            
        </div>
    </div>
</div>

*/
?>

<?php
/*
<!-- OUR CLIENTS 2 -->	
<div class="container" >
    <div class="row" >

        <div class="col-md-12" >
            <div id="owl-clients" class="owl-carousel our-clients-cont">
                <div class="item">
                    <img src="/images/logo/ce-logo-b-simple.png" alt="" />
                </div>
            </div>
        </div>
        
    </div>
</div>
*/
?>