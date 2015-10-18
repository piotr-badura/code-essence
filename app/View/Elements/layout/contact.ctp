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
                        <h3><span class="bold"> <?php echo strtoupper('adres'); ?> </span></h3>
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
                        <h3><span class="bold"> <?php echo strtoupper('e-mail'); ?> </span></h3>
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
                        <h3><span class="bold"> <?php echo strtoupper('telefon'); ?> </span></h3>
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
                        <h2 class="section-title"> 
                            <?php echo strtoupper('Napisz'); ?> <br />
                            <span class="bold"> <?php echo strtoupper('do mnie'); ?> </span>
                        </h2>
                    </div>
                    
                    <!-- CONTACT FORM -->
                    <div class="">
                        <form id="contact-form" action="/contact/send" method="POST">
                            
                            <div class="row">
                                <div class="col-md-12 mb-30">
                                    <input type="text" value="" data-msg-required="<?php echo strtoupper('imie jest wymagane'); ?>" maxlength="100" class="form-control" name="data[Contact][name]" id="contact-name" placeholder="<?php echo strtoupper('imie i nazwisko'); ?>" required>
                                </div>
                            </div>

                            <div class="row">    
                                <div class="col-md-12 mb-30">
                                    <input type="email" value="" data-msg-required="<?php echo strtoupper('e-mail jest wymagany'); ?>" data-msg-email="<?php echo strtoupper('niepoprawny format e-mail'); ?>" maxlength="100" class="form-control" name="data[Contact][email]" id="contact-email" placeholder="<?php echo strtoupper('e-mail'); ?>" required>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12 mb-40">
                                    <textarea maxlength="5000" data-msg-required="<?php echo strtoupper('tresc jest wymagana'); ?>" rows="3" class="form-control" name="data[Contact][message]" id="contact-message" placeholder="<?php echo strtoupper('tresc'); ?>" required></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 ">
                                    <input type="submit" value="<?php echo strtoupper('wyslij'); ?>" class="button medium gray" data-loading-text="<?php echo strtoupper('wysylanie w toku...'); ?>">
                                </div>
                            </div>

                        </form>	
                        
                        <div class="alert alert-success hidden" id="contactSuccess">
                            <strong><?php echo 'sukces'; ?>!</strong> <?php echo 'wiadomość poprawnie wysłana'; ?>
                        </div>

                        <div class="alert alert-danger hidden" id="contactError">
                            <strong><?php echo 'błąd'; ?>!</strong> <?php echo 'wiadomość nie została wysłana !'; ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>