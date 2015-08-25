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
    <link rel="stylesheet" href="/css/custom.css">
	
    <!-- ANIMATE -->
    <link rel='stylesheet' href="/css/animate.min.css">        
    
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
        <div class="grey-bg"> 
            <!-- Grey BG  -->
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
            
				<!-- HEADER 1  -->
				<header id="nav" class="header header-1">
          
				  <div class="header-wrapper">
            <div class="container-m-30 clearfix">
              <div class="logo-row">
              
                <!-- LOGO --> 
                <div class="logo-container-2">
                  <div class="logo-2">
                    <a href="index-2.html" class="clearfix">
                      <img src="images/logo/ce-logo-black.png" class="logo-img" alt="logo">
                    </a>
                  </div>
                </div>

              </div>
            </div>
					
				  </div>
				  <!-- END header-wrapper -->
				  
				</header>
            
        <!-- COTENT CONTAINER -->
        <div class="under-constr-bg">
          <div class="container maintenance-container">
            <div class="row">
              <div class="col-md-12 text-center coming-soon-main-text-container">
                <h1 class="text-center">WE'RE COMING SOON</h1>
                <h3 class="mb-80" >We are working very hard on the new version of our site. It will bring a lot of new features. Stay tuned!</h3>
              </div>
            </div>
            <div class="row mb-40">
              <!-- CLOCK -->	
              <div id="clock" class="clearfix text-center"></div>
            </div>
          </div>
        </div>
                   
        <?php
            echo $this->element('/layout/newsletter');
            echo $this->element('/layout/footer/default', array('version' => 'white'));
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
    
    <!-- COUNTDOWN -->
		<script src="js/jquery.countdown.min.js"></script>
    <script>
      	//COUNTDOWN -----------------------------------------------------------------------------
				$('#clock').countdown('2015/09/10').on('update.countdown', function(event) {
				   var $this = $(this).html(event.strftime(''
					 + '<div class="col-xs-12 col-sm-6 col-md-3"><div class="countdown-item-container"><span class="countdown-amount">%D</span><span class="countdown-period">day%!D</span></div></div>'
					 + '<div class="col-xs-12 col-sm-6 col-md-3"><div class="countdown-item-container"><span class="countdown-amount">%H</span><span class="countdown-period">hour%!H</span></div></div>'
					 + '<div class="col-xs-12 col-sm-6 col-md-3"><div class="countdown-item-container"><span class="countdown-amount">%M</span><span class="countdown-period">minute%!M</span></div></div>'
					 + '<div class="col-xs-12 col-sm-6 col-md-3"><div class="countdown-item-container"><span class="countdown-amount">%S</span><span class="countdown-period">second%!S</span></div></div>'));
				 });
    </script>    
    
    <!-- JS end -->
	
</body>

</html>