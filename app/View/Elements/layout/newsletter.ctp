<!-- NEWSLETTER -->
<div class="page-section nl-cont">
    <div class="container">
        <div class="relative" >
            <div id="mc_embed_signup" class="nl-form-container clearfix">
                <form action="/newsletters/subscribe" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="newsletterform validate" target="_blank" novalidate />
                    <input type="email" value="" name="data[Newsletter][email]" class="email nl-email-input" id="mce-EMAIL" placeholder="<?php echo 'wprowadź e-mail'; ?>" required />
                    
                    <div style="position: absolute; left: -5000px">
                        <input type="text" name="" tabindex="-1" value="">
                    </div>
                    <input type="submit" value="<?php echo 'newsletter'; ?>" name="subscribe" id="mc-embedded-subscribe" class="button medium gray" />
                </form>
                
                <div id="notification_container"></div>
            </div>
        </div>
    </div>
</div>