<?php
    $this->Html->addCrumb(__('static.blog.breadcrumb'), array('admin' => false, 'controller' => 'blog', 'action' => 'index'));
?>

<?php
    echo $this->element
    (
        '/layout/breadcrumbs',
        array
        (
            'title' => __('static.blog.breadcrumb.title'),
            'subtitle' => __('static.blog.breadcrumb.subtitle')
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
                <form class="form-search widget-search-form" action="http://abcgomel.ru/haswell-1.5-demo/page-search-results.html" method="get">
                    <input type="text" name="q" class="input-search-widget" placeholder="Search">
                    <button class="" type="submit" title="Start Search">
                        <span aria-hidden="true" class="icon_search"></span>
                    </button>
                </form>
            </div>

            <!-- WIDGET -->
            <div class="widget">

                <h5 class="widget-title">Categories</h5>

                <div class="widget-body">
                    <ul class="clearlist widget-menu">
                        <li>
                            <a href="#" title="">Branding</a><small><span class="slash-divider">/</span> 10</small>
                        </li>
                        <li>
                            <a href="#" title="">Development</a><small><span class="slash-divider">/</span> 21</small>
                        </li>
                        <li>
                            <a href="#" title="">Technology </a><small><span class="slash-divider">/</span> 11</small>
                        </li>
                        <li>
                            <a href="#" title="">Social Media</a><small><span class="slash-divider">/</span> 16</small>
                        </li>
                        <li>
                            <a href="#" title="">Entertainment </a><small><span class="slash-divider">/</span> 8</small>
                        </li>
                    </ul>
                </div>

            </div>

            <!-- WIDGET -->
            <div class="widget">

                <h5 class="widget-title">Recent posts</h5>

                <div class="widget-body">
                    <ul class="clearlist widget-posts">
                        <li class="clearfix">
                            <a href="#"><img src="images/blog/recent/1.jpg" alt="" class="widget-posts-img"></a>
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

            <!-- WIDGET -->
            <div class="widget">

                <h5 class="widget-title">Tags</h5>

                <div class="widget-body">
                    <div class="tags">
                        <a href="#">Design</a>
                        <a href="#">Development</a>
                        <a href="#">Minimal</a>
                        <a href="#">Branding</a>
                        <a href="#">Unique</a>
                        <a href="#">Clean</a>
                    </div>
                </div>

            </div>

            <!-- WIDGET -->
            <div class="widget">
                <h5 class="widget-title">Text Widget</h5>

                <div class="widget-body">
                    <p>Lorem ipsum dolor sit amet, cotur adcing elit. Recusandae, nostrum, cumque culpa provident aliquam commodi assumenda</p>
                </div>
            </div>

            <!-- WIDGET -->
            <div class="widget">

                <h5 class="widget-title">Archive</h5>

                <div class="widget-body">
                    <ul class="clearlist widget-menu">
                        <li>
                            <a href="#" title="">October 2015</a><small><span class="slash-divider">/</span> 10</small>
                        </li>
                        <li>
                            <a href="#" title="">July 2015</a><small><span class="slash-divider">/</span> 21</small>
                        </li>
                        <li>
                            <a href="#" title="">June 2015 </a><small><span class="slash-divider">/</span> 11</small>
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
                    <a href="blog-single-sidebar-right.html"><img src="images/blog/post-wide-1.jpg" alt="img"></a>
                </div>

                <div class="post-prev-title">
                  <h3><a href="blog-single-sidebar-right.html">TIME FOR MINIMALISM</a></h3>
                </div>

                <div class="post-prev-info">
                  JULE 10<span class="slash-divider">/</span><a href="http://themeforest.net/user/abcgomel/portfolio?ref=abcgomel">JOHN DOE</a><span class="slash-divider">/</span><a href="#">DESIGN</a>, <a href="#">DEVELOPMENT</a>
                </div>


                <div class="post-prev-text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae, nostrum, cumque culpa provident aliquam commodi assumenda laudantium magnam illo nostrum. Donec nibh sapien, molestie quis elementum et, dim non atino ipsum. 
                </div>

                <div class="post-prev-more-cont clearfix">
                    <div class="post-prev-more left">
                        <a href="blog-single-sidebar-right.html" class="blog-more">READ MORE</a>
                    </div>
                    <div class="right">
                        <a href="blog-single-sidebar-right.html#comments" class="post-prev-count">
                            <span aria-hidden="true" class="icon_comment_alt"></span>
                            <span class="icon-count">21</span>
                        </a>
                        <a href="http://themeforest.net/user/abcgomel/portfolio?ref=abcgomel" class="post-prev-count">
                            <span aria-hidden="true" class="icon_heart_alt"></span>
                            <span class="icon-count">53</span>
                        </a>
                        <a href="#" class="post-prev-count dropdown-toggle" data-toggle="dropdown" aria-expanded="false" >
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

            <!-- Post Item carousel -->
            <div class="wow fadeIn pb-80" >

                <!-- CAOUSEL  -->
                <div class="fullwidth-slider owl-carousel owl-dark-bg owl-pag-2 owl-arrows-bg post-prev-img">

                    <!-- ITEM -->		
                    <div class="item m-0">	
                        <div>
                            <img alt="about us" src="images/blog/post-wide-2.jpg">
                        </div>
                    </div>

                    <!-- ITEM -->		
                    <div class="item m-0">	
                        <div>
                            <img alt="about us" src="images/blog/post-wide-3.jpg">
                        </div>
                    </div>
                    
                </div>

                <div class="post-prev-title">
                    <h3>
                        <a href="blog-single-sidebar-right.html">POST WITH SLIDER GALLERY</a>
                    </h3>
                </div>

                <div class="post-prev-info">
                    DECEMBER 21<span class="slash-divider">/</span>
                    <a href="http://themeforest.net/user/abcgomel/portfolio?ref=abcgomel">JOHN DOE</a><span class="slash-divider">/</span><a href="#">DESIGN</a>, 
                    <a href="#">DEVELOPMENT</a>
                </div>

                <div class="post-prev-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae, nostrum, cumque culpa provident aliquam commodi assumenda laudantium magnam illo nostrum. 
                </div>

                <div class="post-prev-more-cont clearfix">
                    <div class="post-prev-more left">
                        <a href="blog-single-sidebar-right.html" class="blog-more">READ MORE</a>
                    </div>
                    <div class="right" >
                        <a href="blog-single-sidebar-right.html#comments" class="post-prev-count">
                            <span aria-hidden="true" class="icon_comment_alt"></span><span class="icon-count">21</span>
                        </a>
                        <a href="http://themeforest.net/user/abcgomel/portfolio?ref=abcgomel" class="post-prev-count">
                            <span aria-hidden="true" class="icon_heart_alt"></span>
                            <span class="icon-count">53</span>
                        </a>
                        <a href="#" class="post-prev-count dropdown-toggle" data-toggle="dropdown" aria-expanded="false" >
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

        </div>

    </div>
</div>