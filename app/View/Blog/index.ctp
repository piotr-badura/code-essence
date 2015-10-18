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
            'subtitle' => 'ciekawostki'
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
                <form class="form-search widget-search-form" action="" method="get">
                    <input type="text" name="q" class="input-search-widget" placeholder="szukaj">
                    <button class="" type="submit" title="start">
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
                            <a href="#" title=""> PHP </a>
                            <small> <span class="slash-divider">/</span> 0 </small>
                        </li>
                        <li>
                            <a href="#" title=""> jQuery </a>
                            <small> <span class="slash-divider">/</span> 0 </small>
                        </li>
                        <li>
                            <a href="#" title=""> Bazy danych </a>
                            <small><span class="slash-divider">/</span> 0 </small>
                        </li>
                        <li>
                            <a href="#" title=""> Inne </a><small>
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
                        <a href="#"> Design </a>
                        <a href="#"> Programowanie </a>
                        <a href="#"> E-commerce </a>
                        <a href="#"> Reklama </a>
                        <a href="#"> Promocja </a>
                    </div>
                </div>

            </div>

            <!-- WIDGET -->
            <div class="widget">
                <h5 class="widget-title"> Witam na blogu </h5>

                <div class="widget-body">
                    <p> Regularnie będę starał się umieszczać w tym miejscu ciekawe informcaje ze świata programowania i nie tylko.. </p>
                </div>
            </div>

            <!-- WIDGET -->
            <div class="widget">

                <h5 class="widget-title"> Archiwum </h5>

                <div class="widget-body">
                    <ul class="clearlist widget-menu">
                        <li>
                            <a href="#" title=""> Lipiec 2015 </a>
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
                    <a href="#">
                        <img src="/images/blog/post-prev-1.jpg" alt="img">
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
                  <a href="#"> INNE </a>, <a href="#"> PROGRAMOWANIE </a>
                </div>


                <div class="post-prev-text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae, nostrum, cumque culpa provident aliquam commodi assumenda laudantium magnam illo nostrum. Donec nibh sapien, molestie quis elementum et, dim non atino ipsum. 
                </div>

                <div class="post-prev-more-cont clearfix">
                    <div class="post-prev-more left">
                        <a href="#" class="blog-more"> <?php echo strtoupper('czytaj wiecej') ?> </a>
                    </div>
                    <div class="right">
                        <a href="#" class="post-prev-count">
                            <span aria-hidden="true" class="icon_comment_alt"></span>
                            <span class="icon-count">0</span>
                        </a>
                        <a href="#" class="post-prev-count">
                            <span aria-hidden="true" class="icon_heart_alt"></span>
                            <span class="icon-count">0</span>
                        </a>
                        <a href="#" class="post-prev-count dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <span aria-hidden="true" class="social_share"></span>
                        </a>

                        <ul class="social-menu dropdown-menu dropdown-menu-right" role="menu">
                            <li>
                                <a href="#">
                                    <span aria-hidden="true" class="social_facebook"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span aria-hidden="true" class="social_twitter"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span aria-hidden="true" class="social_dribbble"></span>
                                </a>
                            </li>
                        </ul>
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