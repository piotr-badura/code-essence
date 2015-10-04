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

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-68399287-1', 'auto');
      ga('send', 'pageview');

    </script>    
    
    <!-- LOADER -->	
    <div id="loader-overflow">
        <div id="loader3"> JS </div>
    </div>

    <div id="wrap" class="boxed ">
        <div class="grey-bg"> 
            <!-- Grey BG  -->                                   
            
            <?php
                echo $this->element('/layout/ie-issue');
            ?>
                        
            <?php
                echo $this->element('/layout/header');
            ?>
            
            <?php 
                echo $this->fetch('content'); 
            ?>
                    
        <?php
            echo $this->element('/layout/newsletter');
            
            $version = 'black';
            
            if ($ucontroller !== 'home')
            {
                $version = 'white';
            }
            
            echo $this->element('/layout/footer/default', array('version' => $version));
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