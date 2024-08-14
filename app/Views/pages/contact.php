<?= $this->extend('layouts/master'); ?>
<?= $this->section('content'); ?>


<!-- Start Page Banner Area -->
<div class="page-banner-area bg-23 pt-100">
    <div class="container">
        <div class="page-banner-content">
            <h2>Contact Us</h2>
            <ul>
                <li>
                    <a href="index.html">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        Home
                    </a>
                </li>
                <li>
                    <span>Contact Us</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Banner Area -->

<!-- Start Map Area -->
<div class="map-area pt-100">
    <div class="container">
        <div class="map-content">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d36553983.44087083!2d-96!3d56!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4b0d03d337cc6ad9%3A0x9968b72aa2438fa5!2sCanada!5e0!3m2!1sen!2sbd!4v1654284541266!5m2!1sen!2sbd"></iframe>
        </div>
    </div>
</div>
<!-- End Map Area -->

<!-- Start Contact Informetion Area -->
<div class="contact-informetion-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="left-informetion">
                    <h2>Contact Information</h2>
                    <ul>
                        <li>
                            <span>ADDRESS:</span>
                            <?= APP_ADDRESS; ?>
                        </li>
                        <li>
                            <span>EMAIL US:</span>
                            <a href="mailto:<?= APP_EMAIL; ?>"> <?= APP_EMAIL; ?> </a>
                        </li>
                        <li>
                            <span>PHONE:</span>
                            <a href="tell<?= APP_PHONE; ?>">echo<?= APP_PHONE; ?></a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="right-informetion">
                    <h2>Opening Hours</h2>

                    <ul>
                        <li>
                            Saturday– Thursday
                            <span><?= APP_WORKING_HOURS; ?></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Contact Informetion Area -->

<!-- Start Contact Area -->
<div class="contact-area pb-100">
    <div class="container">
        <div class="contact-form">
            <h3>Send message</h3>

            <form id="contactForm">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>NAME</label>
                            <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Edgar">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>EMAIL</label>
                            <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="<?= APP_EMAIL ?>">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>PHONE</label>
                            <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="***********">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>SUBJECT</label>
                            <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="write subject here...">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>YOUR MESSAGE</label>
                            <textarea name="message" class="form-control" id="message" cols="30" rows="6" required data-error="Write your message" placeholder="write message here...."></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-check">
                            <div class="form-group">
                                <div class="form-check">
                                    <input
                                        name="gridCheck"
                                        value="I agree to the terms and privacy policy."
                                        class="form-check-input"
                                        type="checkbox"
                                        id="gridCheck"
                                        required>

                                    <label class="form-check-label" for="gridCheck">
                                        Accept <a href="terms-conditions.html">terms and conditions</a> and <a href="privacy-policy.html">privacy policy.</a>
                                    </label>
                                    <div class="help-block with-errors gridCheck-error"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 text-center">
                        <button type="submit" class="default-btn active">
                            Send message
                        </button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Contact Area -->
<?= $this->include('components/knock_us_area'); ?>


<?= $this->include('components/dark_mode_area'); ?>


<?= $this->endSection(); ?>