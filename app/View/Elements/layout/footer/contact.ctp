<?php
    echo $this->element('/layout/contact');
?>

<!-- FOOTER 1 -->
<footer id="footer1" class="page-section text-center pt-100-b-80-cont">
    <div class="container">

        <!-- Social Links -->
        <div class="footer-soc-a">        
            <a href="/" title="<?php echo __('social.facebook'); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
            <a href="/" title="<?php echo __('social.twitter'); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
        </div>

        <!-- Copyright -->
        <div class="footer-copy">
            <a href="/" target="_blank">&copy; <?php echo $uconfig['company.name'] ?> 2015</a>
        </div>

    </div>
</footer>