<?php
    $class = 'footer2-black';
    $logo = 'ce-logo-w-simple.png';
    
    if (isset($version))
    {
        if ($version == 'white')
        {
            $class = '';
            $logo = 'ce-logo-b-simple.png';
        }
    }
?>

<!-- FOOTER 2 -->
<footer id="footer2" class="page-section pt-80 pb-50 <?php echo $class ?>">
    <div class="container">
        <div class="row">
            
            <div class="col-md-6 col-sm-6 widget">
                
                <div class="">
                    
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            
                            <div class="footer-2-text-cont">
                                <a href="/">
                                    <img class="logo-footer" src="/images/logo/<?php echo $logo ?>" alt="logo">
                                </a>
                            </div>
                            
                            <div class="footer-2-text-cont">
                                <a class="a-text bold" href="mailto:<?php echo $umyconfig['company.mail']; ?>"> <?php echo $umyconfig['company.mail']; ?> </a>
                            </div>
                            
                        </div>
                        
                        <div class="col-md-6 col-sm-6">
                            
                            <div class="footer-2-text-cont" style="margin-top: 16px">
                                <address>
                                    <?php echo $umyconfig['address.street']; ?> <br />
                                    <?php echo $umyconfig['address.zip']; ?>, <?php echo $umyconfig['address.city']; ?>
                                </address>
                            </div>
                            
                            <div class="footer-2-text-cont bold">
                                <?php echo $umyconfig['company.phone']; ?>
                            </div>
                            
                        </div>
                    </div>
                </div>
                
                <div class="footer-2-text-cont">
                    <p>
                        <?php echo __('footer.about.text') ?>
                    </p>
                </div>
                
            </div>
            
            <div class="col-md-3 col-sm-3 widget">
                <h4> <?php echo __('footer.header.blog') ?> </h4>

                <div id="post-list-footer">
                    <div class="post-prev-title">
                        <h3><a class="a-text" href="/"> <?php echo __('footer.blog.last') ?> </a></h3>
                    </div>

                    <div class="post-prev-info">
                        <?php echo __('footer.blog.last.date') ?>
                    </div>
                </div>    

            </div>
            
            <div class="col-md-3 col-sm-3 widget">
                <h4> <?php echo __('footer.header.realizations') ?> </h4>
                <ul id="footer-images" class="popup-gallery clearfix mb-30">
                    
                    <?php
                        for ($i = 0; $i < 6; $i++)
                        {
                    ?>
                    <li>
                        <a class="lightbox" rel="colorbox" href="/images/img/job/01/normal.png" title="">
                            <img src="/images/img/job/01/thumb.png" alt="">
                        </a>
                    </li>
                    <?php
                        }
                    ?>
                </ul>
            </div>            
            
        </div>  

        <div class="footer-2-copy-cont clearfix">
            <!-- Social Links -->
            <div class="footer-2-soc-a right">
                <a href="/" title="<?php echo __('footer.social.facebook') ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                <a href="/" title="<?php echo __('footer.social.twitter') ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                <?php
                    /*
                <a href="/" title="Behance" target="_blank"><i class="fa fa-behance"></i></a>
                <a href="/" title="LinkedIn+" target="_blank"><i class="fa fa-linkedin"></i></a>
                <a href="/" title="Dribbble" target="_blank"><i class="fa fa-dribbble"></i></a>
                     */
                ?>
            </div>
            
            <!-- Copyright -->
            <div class="left">
                <a class="footer-2-copy" href="/" target="_blank">&copy; <?php echo strtoupper($umyconfig['company.name']); ?> 2015 </a>
            </div>
        </div>
        
    </div>
</footer>