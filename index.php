<!DOCTYPE html>
<html>
    <head>
        <title> code-essence.pl </title>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />                
        
        <link href='http://fonts.googleapis.com/css?family=Vollkorn:400italic,700italic,400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
        
        <link href='//fonts.googleapis.com/css?family=Alegreya+Sans:100,300,400,500,700,100italic,300italic,400italic,500italic,700italic' rel='stylesheet' type='text/css'>       
        
        <link href='http://fonts.googleapis.com/css?family=Signika:400,300,600,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
        
        <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="/bootstrap/css/bootstrap-theme.min.css" />        
        
        <script src="/js/jquery.min.js"></script>
        <script src="/bootstrap/js/bootstrap.min.js"></script>        
        
        <link rel="stylesheet" href="/css/pseudo.css" />
        <link rel="stylesheet" href="/css/styles.css" />
        <link rel="stylesheet" href="/css/carousel.css" />                        
        
        <script src="/js/script.js"></script>
    </head>
    
    <body>              
        
        <div id="header" class="container-fluid">
                     
            <div id="header-background"></div>
            
            <div class="container">
                <div class="row">                    
                    <div class="col-lg-3">
                        <?php 
                            // <img id="header-logo" src="/img/default.png" class="img-responsive" />
                        ?>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-10">
                            <div id="header-top">
                                <img id="header-logo" src="/img/b-default.jpg" class="img-responsive" />
                                <h1 class="hidden-sm hidden-md"> CE </h1> 
                                <h1 id="hl-large" class="visible-sm visible-md" style=""> CODE-ESSENCE </h1> 
                                
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="visible-xs col-xs-2">
                            <div class="pull-right">
                                <span id="header-button" class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 hidden-xs">
                        <div class="row">

                            <div class="col-lg-12 ta-center">
                                
                                <ul id="header-menu">

                                    <li class="hb">
                                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                        <div class="short-r">
                                            <div class="short">
                                                <h5> about us </h5>
                                            </div>
                                        </div>
                                        <div class="title">
                                            <h4> who </h4>
                                            <p> we are </p>
                                        </div>
                                    </li>

                                    <li class="hb">
                                        <span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
                                        <div class="short-r">
                                            <div class="short">
                                                <h5> portfolio </h5>
                                            </div>
                                        </div>                                    
                                        <div class="title">
                                            <h4> websites </h4>
                                            <p> collection </p>
                                        </div>
                                    </li>                                

                                    <li class="hb">
                                        <span class="glyphicon glyphicon-blackboard" aria-hidden="true"></span>
                                        <div class="short-r">
                                            <div class="short">
                                                <h5> workshop </h5>
                                            </div>
                                        </div>                                    
                                        <div class="title">
                                            <h4> interesting </h4>
                                            <p> projects </p>
                                        </div>
                                    </li>                                

                                    <li class="hb">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        <div class="short-r">
                                            <div class="short">
                                                <h5> blog </h5>
                                            </div>
                                        </div>
                                        <div class="title">
                                            <h4> be on </h4>
                                            <p> time </p>
                                        </div>
                                    </li>
                                    
                                    <li class="hb">
                                        <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
                                        <div class="short-r">
                                            <div class="short">
                                                <h5> contact </h5>
                                            </div>
                                        </div>
                                        <div class="title">
                                            <h4> lets </h4>
                                            <p> call </p>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                            
                        </div>                                                
                    </div>
                </div>
                
                <div class="row visible-xs">
                    <div col-lg-12>
                        <ul id="header-xs">
                            <li>
                                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                <h4> about us </h4>
                                <div class="clearfix"></div>
                            </li>                                 
                            <li>
                                <span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
                                <h4> portfolio </h4>
                                <div class="clearfix"></div>
                            </li>                 
                            <li>
                                <span class="glyphicon glyphicon-blackboard" aria-hidden="true"></span>
                                <h4> workshop </h4>
                                <div class="clearfix"></div>
                            </li>                
                            <li>
                                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                <h4> blog </h4>
                                <div class="clearfix"></div>
                            </li> 

                            <li>
                                <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
                                <h4> contact </h4>
                                <div class="clearfix"></div>
                            </li>
                        </ul>                  
                    </div>
                </div>
                
            </div>
        </div>       
        
        <div id="slider-header" class="container-fluid">
            <div class="container">
                <h1> our work 
                
                <ol class="ce-carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>                    
                    <?php
                        for ($i = 1; $i < 3; $i++)
                        {
                    ?>
                    <li data-target="#myCarousel" data-slide-to="<?php echo $i ?>" class=""></li>
                    <?php
                        }
                    ?>
                </ol>                
                    
                </h1>                
            </div>
        </div>

        <div id="slider" class="container-fluid">

            <div class="row">
                <div id="ce-carousel" class="carousel slide" data-ride="carousel">
                    
                    <div class="carousel-inner" role="listbox">

                    <?php
                        for ($i = 1; $i < 4; $i++)
                        {
                            $class = '';
                            
                            if ($i == 1)
                            {
                                $class = 'active';
                            }
                    ?>                        
                        
                        <div class="item <?php echo $class ?>">
                            <div class="p-relative">
                                
                                <div class="container">
                                    <div class="row p-relative">
                                        <div class="col-lg-6 p-relative">
                                            <img class="first-slide img-responsive" src="/img/slider-1.jpg">
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="p-relative" style="height: 100%">
                                                
                                                <div class="carousel-content">
                                                    <div class="carousel-caption">
                                                        <h3> responsywny design <?php echo $i ?> </h3>
                                                        <h4> dopasuj stronę pod każde urządzenie </h4>
                                                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam </p>
                                                    </div>

                                                    <div class="carousel-bottom">
                                                        <p> sprawdź jak wygląda strona w rzeczywistości </p>
                                                        <a class="btn btn-lg btn-primary" href="#" role="button"> więcej </a>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php
                            }
                        ?>
                    </div>
                </div>

            </div>
        </div>
        
        <div id="welcome-header" class="container-fluid">
            <div class="container">
                <h1> Welcome </h1>
            </div>
        </div>
        
        <div id="welcome" class="container">
            <div class="row">
                <div class="col-lg-offset-2 col-md-offset-2 col-lg-2 col-md-2 col-sm-4 hidden-xs col-xs-4">
                    <img src="/img/default.jpg" class="fb-img img-responsive">
                </div>
                <div class="col-lg-6 col-md-6">                    
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>                    
                </div>
            </div>
        </div>        
        
        <?php
            /*
        <div id="bread-menu" class="container-fluid">
            <div id="bread-background"></div>
            <div class="container">
            
                <ul>
                    <li class="bb-arrow">

                        <div class="bb-item bb-breadcumb">
                            <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
                            <h4> clients </h4>                                            
                        </div>

                    </li>    

                    <li class="">

                    </li>

                </ul>

                <div class="clearfix"> </div>
            
            </div>
        </div>        
             */
        ?>
        <div id="content" class="container-fluid">

        </div>
        
        <div id="footer" class="container-fluid">
            <div id="footer-background"></div>
            <div id="footer-background-bottom"></div>
            <div class="container">
                <div id="footer-row" class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="">
                            <ul>
                                <li class="fb">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5 class="fb-title"> <span class="glyphicon glyphicon-user" aria-hidden="true"></span> who we are </h5>
                                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam </p>
                                        </div>

                                        <div class="clearfix"></div>
                                    </div>
                                </li>                                
                                
                                <li class="fb">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5 class="fb-title"> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> clients </h5>
                                            
                                            <div class="row">
                                                <div class="col-lg-3 col-sm-3 col-xs-3">
                                                    <img src="/img/default.jpg" class="fb-img img-responsive"> 
                                                </div>
                                                <div class="col-lg-3 col-sm-3 col-xs-3">
                                                    <img src="/img/default.jpg" class="fb-img img-responsive"> 
                                                </div>
                                                <div class="col-lg-3 col-sm-3 col-xs-3">
                                                    <img src="/img/default.jpg" class="fb-img img-responsive"> 
                                                </div>
                                            </div>                                            
                                        </div>

                                        <div class="clearfix"></div>
                                    </div>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                                                                       
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="">
                            <ul>
                                <li class="fb">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5 class="fb-title"> <span class="glyphicon glyphicon-blackboard" aria-hidden="true"></span> workshop </h5>
                                            <ol>
                                                <li> 
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-4">
                                                            <img src="/img/default.jpg" class="fb-img img-responsive"> 
                                                        </div>
                                                        <div class="col-lg-9">                                                        
                                                            <h5 class="fb-item-title"> lorem ipsum </h5>
                                                            <p class="fb-item-desc"> Lorem ipsum dolor sit amet, consectetur adipiscing </p>
                                                        </div>                                                    
                                                    </div>                                                
                                                </li>
                                            </ol>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </li>
                                <li class="fb">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5 class="fb-title"> <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> blog </h5>
                                            <ol>
                                                <li>
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-4">
                                                            <img src="/img/default.jpg" class="fb-img img-responsive"> 
                                                        </div>
                                                        <div class="col-lg-9">
                                                            <h5 class="fb-item-title"> lorem ipsum </h5>
                                                            <p class="fb-item-desc"> Lorem ipsum dolor sit amet, consectetur adipiscing </p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ol>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </li>                                
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="">
                            <ul>
                                <li class="fb">
                                    <div class="row">
                                        <div class="col-lg-12 col-sm-12">
                                            <h5 class="fb-title"> <span class="glyphicon glyphicon-home" aria-hidden="true"></span> Address </h5>
                                            <ol>
                                                <li> Pionierów 1d / 17 </li>
                                                <li> 47-220 Kędzierzyn-Koźle </li>
                                                <li> Polska </li>
                                            </ol>
                                        </div>

                                        <div class="clearfix"></div>
                                    </div>
                                </li>
                                <li class="fb">
                                    <div class="row">
                                        <div class="col-lg-12 col-sm-12">
                                            <h5 class="fb-title"> <span class="glyphicon glyphicon-comment" aria-hidden="true"></span> contact </h5>
                                            <ol>
                                                <li> <span class="glyphicon glyphicon-phone" aria-hidden="true"></span> 515-483-657 </li>
                                                <li> <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> piotr@code-essence.pl </li>
                                            </ol>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="copyright" class="container">
            <p> <span class="bold"> all rights reserved </span> - code-essence 2015 </p>
        </div>        
        
    </body>

</html>