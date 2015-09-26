<?php
    $this->Html->script('/js/jquery.validate.min.js', false);
    $this->Html->script('/js/contact-form-validation.min.js', false);
?>

<!-- CONTACT INFO SECTION 1 -->
<div class="page-section p-110-cont">
    <div class="container">
        <div class="row">

            <div class="col-md-4 col-sm-6">
                <div class="cis-cont">
                    <div class="cis-icon">
                        <div class="icon icon-basic-map"></div>
                    </div>
                    
                    <div class="cis-text">
                        <h3><span class="bold"> <?php echo strtoupper(__('static.contact.address.header')); ?> </span></h3>
                        <p> <?php echo $umyconfig['address.street'] ?>, <?php echo $umyconfig['address.city'] ?> </p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 col-sm-6">
                <div class="cis-cont">
                    <div class="cis-icon">
                        <div class="icon icon-basic-mail"></div>
                    </div>
                    
                    <div class="cis-text">
                        <h3><span class="bold"> <?php echo strtoupper(__('static.contact.email.header')); ?> </span></h3>
                        <p><a href="mailto:<?php echo $umyconfig['company.mail'] ?>"> <?php echo $umyconfig['company.mail'] ?> </a></p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 col-sm-6">
                <div class="cis-cont">
                    <div class="cis-icon">
                        <div class="icon icon-basic-smartphone"></div>
                    </div>
                    
                    <div class="cis-text">
                        <h3><span class="bold"> <?php echo strtoupper(__('static.contact.phone.header')); ?> </span></h3>
                        <p> <?php echo $umyconfig['company.phone'] ?> </p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

<!-- GOOGLE MAP & CONTACT FORM -->
<div class="page-section gray-bg">
    <div class="container-fluid">
        <div class="row">
            
            <div class="col-md-6">
                <div class="row">
                    <div data-address="<?php echo $umyconfig['address.city'] ?>, <?php echo $umyconfig['address.street'] ?>, <?php echo $umyconfig['address.country'] ?>" id="google-map"></div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="contact-form-cont">
                    <!-- TITLE -->
                    <div class="mb-40">
                        <h2 class="section-title"> <?php echo strtoupper(__('static.contact.form.h.1')); ?> <span class="bold"> <?php echo strtoupper(__('static.contact.form.h.2')); ?> </span></h2>
                    </div>
                    
                    <!-- CONTACT FORM -->
                    <div class="">
                        <form id="contact-form" action="/contact/send" method="POST">
                            
                            <div class="row">
                                <div class="col-md-12 mb-30">
                                    <input type="text" value="" data-msg-required="<?php echo strtoupper(__('static.contact.form.required.name')); ?>" maxlength="100" class="form-control" name="data[Contact][name]" id="contact-name" placeholder="<?php echo strtoupper(__('static.contact.form.input.name')); ?>" required>
                                </div>
                            </div>

                            <div class="row">    
                                <div class="col-md-12 mb-30">
                                    <input type="email" value="" data-msg-required="<?php echo strtoupper(__('static.contact.form.required.email')); ?>" data-msg-email="<?php echo strtoupper(__('static.contact.form.valid.email')); ?>" maxlength="100" class="form-control" name="data[Contact][email]" id="contact-email" placeholder="<?php echo strtoupper(__('static.contact.form.input.email')); ?>" required>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12 mb-40">
                                    <textarea maxlength="5000" data-msg-required="<?php echo strtoupper(__('static.contact.form.required.message')); ?>" rows="3" class="form-control" name="data[Contact][message]" id="contact-message" placeholder="<?php echo strtoupper(__('static.contact.form.input.message')); ?>" required></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 ">
                                    <input type="submit" value="<?php echo strtoupper(__('static.contact.form.submit')); ?>" class="button medium gray" data-loading-text="<?php echo strtoupper(__('static.contact.form.loading')); ?>">
                                </div>
                            </div>

                        </form>	
                        
                        <div class="alert alert-success hidden" id="contactSuccess">
                            <strong><?php echo __('static.contact.form.success'); ?>!</strong> <?php echo __('static.contact.form.success.text'); ?>
                        </div>

                        <div class="alert alert-danger hidden" id="contactError">
                            <strong><?php echo __('static.contact.form.error'); ?>!</strong> <?php echo __('static.contact.form.error.text'); ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>