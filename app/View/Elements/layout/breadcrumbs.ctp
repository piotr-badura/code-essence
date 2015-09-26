<!-- PAGE TITLE SMALL DARK -->
<div class="page-title-cont page-title-small grey-dark-bg">
    <div class="relative container align-left">
        <div class="row">
            
            <div class="col-md-8">
                <h1 class="page-title"> <?php if (isset($title)) { echo $title; } ?> </h1>
                <div class="page-sub-title">
                    <?php if (isset($subtitle)) { echo $subtitle; } ?>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="breadcrumbs">
                    <?php
                        echo $this->Html->getCrumbs(' / ', 'Home');
                    ?>

                    <?php
                        /*
                    <a href="index-2.html">Home</a>
                    <span class="slash-divider">/</span>
                    <a href="#">PAGES & FEATURES</a>
                    <span class="slash-divider">/</span>
                    <span class="bread-current">PAGE TITLES</span>
                         */
                    ?>
                </div>
            </div>
            
        </div>
    </div>
</div>