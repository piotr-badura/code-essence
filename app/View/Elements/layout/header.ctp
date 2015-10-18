<?php
    $current = $ucontroller . '-' . $uaction;
    
    $menus = array
    (
        __('navigation.home') => array
        (
            'controller' => 'home',
            'url' => '/',
            'submenu' => false
        ),
        __('navigation.services') => array
        (
            'controller' => 'services',
            'url' => '/services',
        ),
        /*
        __('navigation.projects') => array
        (
            'controller' => 'projects',
            'url' => '/projects',
        ),
         * 
         */
        __('navigation.portfolio') => array
        (
            'controller' => 'portfolio',
            'url' => '/portfolio',
        ),
        __('navigation.blog') => array
        (
            'controller' => 'blog',
            'url' => '/blog',
        ),
        __('navigation.contact') => array
        (
            'controller' => 'contact',
            'url' => '/contact',
        )
    );
    
    $logo = 'ce-logo-black';
    
    $class = 'header header-1';
    $logo = 'ce-logo-black';
    
    switch ($current)
    {
        case 'home-index':
        {
            $class = 'header header-1';
            $logo = 'ce-logo-black';
            break;
        }
        default:
        {
            $class = 'header header-1 no-transparent mobile-no-transparent affix-top';
            $logo = 'ce-logo-black';
            break;
        }
    }
?>

<!-- HEADER -->
<header id="nav" class="<?php echo $class ?>">
    <div class="header-wrapper">
        
        <div class="container-m-30 clearfix">
            <div class="logo-row">
                
                <!-- LOGO -->
                <div class="logo-container-2">
                    <div class="logo-2">
                        <a href="/" class="clearfix">
                            <img src="/images/logo/<?php echo $logo; ?>.png" class="logo-img" alt="logo" />
                        </a>
                    </div>
                </div>
                
                <!-- BUTTON -->
                <div class="menu-btn-respons-container">
                    <button type="button" class="navbar-toggle btn-navbar collapsed" data-toggle="collapse" data-target="#main-menu .navbar-collapse">
                        <span aria-hidden="true" class="icon_menu hamb-mob-icon"></span>
                    </button>
                </div>
                
            </div>
        </div>
        
        <!-- MAIN MENU CONTAINER -->
        <div class="main-menu-container">
            <div class="container-m-30 clearfix">
                
                <!-- MAIN MENU -->
                <div id="main-menu">
                    <div class="navbar navbar-default" role="navigation">
                        
                        <!-- MAIN MENU LIST -->
                        <nav class="collapse collapsing navbar-collapse right-1024">
                            <ul class="nav navbar-nav">
                                
                                <?php
                                    foreach ($menus as $key => $value)
                                    {
                                        $class = '';
                                        
                                        if ($value['controller'] == $ucontroller)
                                        {
                                            $class = 'current';
                                        }
                                ?>
                                
                                <!-- MENU ITEM -->
                                <li class="<?php echo $class ?>">
                                    <a href="<?php echo $value['url'] ?>">
                                        <div class="main-menu-title"> <?php echo strtoupper($key) ?> </div>
                                    </a>
                                </li>
                                
                                <?php
                                    }
                                ?>
                                
                                <?php
                                    $langs = array('pol' => '', 'eng' => '');
                                    $langs[$ulanguage] = 'flag-active';
                                ?>
                                
                                <!-- MENU ITEM -->
                                <li class="li-menu-flag">          
                                    <a href="/">
                                        <div class="main-menu-title"> 
                                            <span data-lang="pol" class="span-lang <?php echo $langs['pol'] ?>"> PL </span>
                                            <span> | </span>
                                            <span data-lang="eng" class="span-lang <?php echo $langs['eng'] ?>"> EN </span>
                                            <div class="clearfix"></div>                                                
                                        </div>
                                    </a>
                                </li> 
                                
                            </ul>
                        </nav>

                    </div>
                </div>
                <!-- END main-menu -->

            </div>
            <!-- END container-m-30 -->

        </div>
        <!-- END main-menu-container -->

        <?php
            /*                    

        <!-- SEARCH READ DOCUMENTATION -->
        <ul class="cd-header-buttons">
                <li><a class="cd-search-trigger" href="#cd-search"><span></span></a></li>
        </ul> <!-- cd-header-buttons -->

        <div id="cd-search" class="cd-search">
                <form class="form-search" id="searchForm" action="http://abcgomel.ru/haswell-1.5-demo/page-search-results.html" method="get">
                        <input type="text" value="" name="q" id="q" placeholder="Search...">
                </form>
        </div>
             */
        ?>

    </div>
    <!-- END header-wrapper -->
</header>