<?php
    $this->Html->addCrumb('blog', array('admin' => false, 'controller' => 'blog', 'action' => 'index'));
?>

<?php
    echo $this->element
    (
        '/layout/breadcrumbs',
        array
        (
            'title' => 'blog',
            'subtitle' => 'ciekawostki, artykuły, tutoriale'
        )
    );
?>

<!-- COTENT CONTAINER -->
<div class="container p-140-cont">
    <div class="row">

        <!-- SIDEBAR -->
        <div class="col-sm-4 col-md-3 ">

            <!-- SEARCH -->
            <div class="widget">
                <form class="form-search widget-search-form" action="/" method="get">
                    <input type="text" name="q" class="input-search-widget" placeholder="szukaj">
                    <button class="" type="button" title="start">
                        <span aria-hidden="true" class="icon_search"></span>
                    </button>
                </form>
            </div>

            <!-- WIDGET -->
            <div class="widget">

                <h5 class="widget-title"> Kategorie </h5>

                <div class="widget-body">
                    <ul class="clearlist widget-menu">
                        <li>
                            <a title=""> PHP </a>
                            <small> <span class="slash-divider">/</span> 0 </small>
                        </li>
                        <li>
                            <a title=""> jQuery </a>
                            <small> <span class="slash-divider">/</span> 0 </small>
                        </li>
                        <li>
                            <a title=""> Bazy danych </a>
                            <small><span class="slash-divider">/</span> 0 </small>
                        </li>
                        <li>
                            <a title=""> Inne </a><small>
                            <span class="slash-divider">/</span> 1 </small>
                        </li>
                    </ul>
                </div>

            </div>

            <?php
                /*            
            
            <!-- WIDGET -->
            <div class="widget">

                <h5 class="widget-title"> Popularne </h5>

                <div class="widget-body">
                    <ul class="clearlist widget-posts">
                        <li class="clearfix">
                            <a href="#">
                                <img src="images/blog/recent/1.jpg" alt="" class="widget-posts-img">
                            </a>
                            <div class="widget-posts-descr">
                                <a href="#" title="">TIME FOR MINIMALISM</a>
                                <div>21 Jule<span class="slash-divider">/</span> John Doe</div> 
                            </div>
                        </li>

                        <li class="clearfix">
                            <a href="#"><img src="images/blog/recent/2.jpg" alt="" class="widget-posts-img"></a>
                            <div class="widget-posts-descr">
                                <a href="#" title="">NEW TRENDS IN WEB</a>
                                <div>21 Jule<span class="slash-divider">/</span> John Doe</div> 
                            </div>
                        </li>
                    </ul>
                </div>

            </div>

                * 
                */
           ?>

            <!-- WIDGET -->
            <div class="widget">

                <h5 class="widget-title"> Tagi </h5>

                <div class="widget-body">
                    <div class="tags">
                        <a> Design </a>
                        <a> Programowanie </a>
                        <a> E-commerce </a>
                        <a> Reklama </a>
                        <a> Promocja </a>
                    </div>
                </div>

            </div>

            <!-- WIDGET -->
            <div class="widget">
                <h5 class="widget-title"> Witam na blogu </h5>

                <div class="widget-body">
                    <p> Regularnie umieszczane będą w tym miejscu artkuły ze świata programowania i nie tylko.. </p>
                </div>
            </div>

            <!-- WIDGET -->
            <div class="widget">

                <h5 class="widget-title"> Archiwum </h5>

                <div class="widget-body">
                    <ul class="clearlist widget-menu">
                        <li>
                            <a title=""> Lipiec 2015 </a>
                            <small><span class="slash-divider">/</span> 0 </small>
                        </li>
                    </ul>
                </div>

            </div>


        </div>

        <!-- CONTENT -->
        <div class="col-sm-8 col-md-offset-1 blog-main-posts">

            <!-- Post Item -->
            <div class="wow fadeIn pb-80">
                <div class="post-prev-img">
                    <a>
                        <?php //<img src="/images/blog/post-prev-1.jpg" alt="img"> ?>
                        <img src="/images/my-blog/new-website/new-website.jpg" alt="img" />
                    </a>
                </div>

                <div class="post-prev-title">
                  <h3>
                      <a href="#"> NOWA STRONA </a>
                  </h3>
                </div>

                <div class="post-prev-info">
                  LIPIEC 10<span class="slash-divider">/</span>
                  <?php // <a href="http://themeforest.net/user/abcgomel/portfolio?ref=abcgomel">JOHN DOE</a><span class="slash-divider">/</span> ?>
                  <a> INNE </a>, <a> PROGRAMOWANIE </a>
                </div>


                <div class="post-prev-text">
                    Gorąco witam na mojej stronie ! Nowa odsłona Code-Essence nareszcie ujrzała światło dzienne, z czego nie ukrywam czuję się dumny. Głęboko wierzę również, że niejeden miłośnik programowania znajdzie w tym miejscu coś interesującego.
                </div>

                <div class="post-prev-more-cont clearfix">
                    <div class="post-prev-more left">
                        <a class="blog-more"> <?php echo strtoupper('czytaj wiecej') ?> </a>
                    </div>
                    <div class="right">
                        <a class="post-prev-count">
                            <span aria-hidden="true" class="icon_comment_alt"></span>
                            <span class="icon-count">0</span>
                        </a>
                        <a class="post-prev-count">
                            <span aria-hidden="true" class="icon_heart_alt"></span>
                            <span class="icon-count">0</span>
                        </a>
                        
                        <?php
                            /*
                        
                        <a class="post-prev-count dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <span aria-hidden="true" class="social_share"></span>
                        </a>

                        <ul class="social-menu dropdown-menu dropdown-menu-right" role="menu">
                            <li>
                                <a>
                                    <span aria-hidden="true" class="social_facebook"></span>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <span aria-hidden="true" class="social_twitter"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span aria-hidden="true" class="social_dribbble"></span>
                                </a>
                            </li>
                        </ul>
                             * 
                             */
                        ?>
                    </div>
                </div>
            </div>

            <?php
               /* 
            
            <!-- PAGINATION -->
            <div class="mt-0">
                <nav class="blog-pag">
                    <ul class="pagination m-0">
                        <li>
                            <a href="#">
                                <i class="fa fa-angle-left"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                            <a href="#">
                                <i class="fa fa-angle-right"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            
                * 
                */
            ?>

        </div>

    </div>
</div>