<?= $this->extend('layouts/master'); ?>
<?= $this->section('content'); ?>

<!-- Start Hero Area -->
<div class="hero-area">
    <div class="swiper hero-slide">
        <div class="swiper-wrapper">
            <div class="swiper-slide bg-1">
                <div class="container">
                    <div class="hero-content">
                        <h1>Our team of professionals is here to assist you</h1>
                        <p>Our strength is your well-being</p>
                        <div class="hero-btn">
                            <a href="<?= route_to('about') ?>" class="default-btn">Learn more</a>
                            <a href="<?= route_to('contact') ?>" class="default-btn active">Contact us</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide bg-2">
                <div class="container">
                    <div class="hero-content width-two">
                        <h1>We are committed to providing the highest quality care</h1>
                        <p>We want to heal the patient with services</p>
                        <div class="hero-btn">
                            <a href="<?= route_to('about') ?>" class="default-btn">Learn more</a>
                            <a href="<?= route_to('contact') ?>" class="default-btn active">Contact us</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide bg-3">
                <div class="container">
                    <div class="hero-content width-three">
                        <h1>We are passionate about providing the best possible care</h1>
                        <p>Need your expertise we are ready</p>
                        <div class="hero-btn">
                            <a href="<?= route_to('about') ?>" class="default-btn">Learn more</a>
                            <a href="<?= route_to('contact') ?>" class="default-btn active">Contact us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pagination-btn">
        <div class="swiper-pagination"></div>
    </div>

    <ul class="socila-link">
        <li>
            <a href="https://www.facebook.com/" target="_blank">
                <img src="/assets/images/svg-icon/facebook.svg" alt="Image">
            </a>
        </li>
        <li>
            <a href="https://www.twitter.com/" target="_blank">
                <img src="/assets/images/svg-icon/twitter.svg" alt="Image">
            </a>
        </li>
        <li>
            <a href="https://www.linkedin.com/" target="_blank">
                <img src="/assets/images/svg-icon/linkedin.svg" alt="Image">
            </a>
        </li>
    </ul>
</div>
<!-- End Hero Area -->

<!-- Start Futcher Area -->
<div class="futcher-area pt-100 pb-70">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-2 col-sm-4 col-md-4 wow animate__animated animate__fadeInUp delay-0-2s">
                <div class="single-futcher">
                    <div class="icon-one d-flex justify-content-between">
                        <i class="fa-solid fa-hands-helping opacity0"></i>
                        <i class="fa-solid fa-hands-helping opacity1"></i>
                    </div>
                    <h3>Consult Online</h3>
                </div>
            </div>

            <div class="col-lg-2 col-sm-4 col-md-4 wow animate__animated animate__fadeInUp delay-0-4s">
                <div class="single-futcher">
                    <div class="icon-one d-flex justify-content-between">
                        <i class="fa-solid fa-user-injured opacity0"></i>
                        <i class="fa-solid fa-user-injured opacity1"></i>
                    </div>
                    <h3>Patients & Visitors</h3>
                </div>
            </div>

            <div class="col-lg-2 col-sm-4 col-md-4 wow animate__animated animate__fadeInUp delay-0-6s">
                <div class="single-futcher">
                    <div class="icon-one d-flex justify-content-between">
                        <i class="fa-solid fa-pills opacity0"></i>
                        <i class="fa-solid fa-pills opacity1"></i>
                    </div>
                    <h3>Buy Medicine</h3>
                </div>
            </div>

            <div class="col-lg-2 col-sm-4 col-md-4 wow animate__animated animate__fadeInUp delay-0-8s">
                <div class="single-futcher">
                    <div class="icon-one d-flex justify-content-between">
                        <i class="fa-solid fa-credit-card opacity0"></i>
                        <i class="fa-solid fa-credit-card opacity1"></i>
                    </div>
                    <h3 class="play">Pay a Bill</h3>
                </div>
            </div>

            <div class="col-lg-2 col-sm-4 col-md-4 wow animate__animated animate__fadeInUp delay-0-1s">
                <div class="single-futcher">
                    <div class="icon-one d-flex justify-content-between">
                        <i class="fa-solid fa-search opacity0"></i>
                        <i class="fa-solid fa-search opacity1"></i>
                    </div>
                    <h3>Find a Doctors</h3>
                </div>
            </div>

            <div class="col-lg-2 col-sm-4 col-md-4 wow animate__animated animate__fadeInUp delay-0-3s">
                <div class="single-futcher">
                    <div class="icon-one d-flex justify-content-between">
                        <i class="fa-solid fa-hospital opacity0"></i>
                        <i class="fa-solid fa-hospital opacity1"></i>
                    </div>
                    <h3>Find a Hospital</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Futcher Area -->

<?= $this->include('components/who_we_are_area'); ?>

<!-- Start Our Department Area -->
<div class="our-department-area bg-color-f8f9fa pt-100 pb-70">
    <div class="container">
        <div class="section-title wow animate__animated animate__fadeInUp delay-0-1s">
            <span class="top-title">OUR DEPARTMENT</span>
            <h2>Our hospital has all kinds of departments, so you can get all kinds of treatment</h2>
        </div>

        <div class="row justify-content-center">
            <div class="col-xl-3 col-md-6 wow animate__animated animate__fadeInUp delay-0-2s">
                <div class="single-our-department">
                    <img src="/assets/images/department/department-1.jpg" alt="Dental Department">

                    <div class="department-content one">
                        <h3>
                            <a href="department-dental.html">
                                Dental
                            </a>
                        </h3>

                        <p>Good oral hygiene and regular dental care are important, whatever your age. Providing quality dental care for a lifetime of healthy smile. Dental care you trust, your smile begins here!</p>
                    </div>

                    <div class="department-content hover">
                        <div class="icon">
                            <i class="fa-solid fa-tooth"></i>
                        </div>
                        <h3>
                            <a href="department-dental.html">
                                Dental
                            </a>
                        </h3>
                        <p>Good oral hygiene and regular dental care are important, whatever your age. Providing quality dental care for a lifetime of healthy smile. Dental care you trust, your smile begins here!</p>
                        <a href="department-dental.html" class="read-more">
                            Read More
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 wow animate__animated animate__fadeInUp delay-0-4s">
                <div class="single-our-department">
                    <img src="/assets/images/department/department-2.jpg" alt="Orthopedics Department">

                    <div class="department-content one">
                        <h3>
                            <a href="department-orthopedics.html">
                                Orthopedics
                            </a>
                        </h3>

                        <p>Moving you towards a pain-free life, orthopedic care for a better tomorrow. Bend, twist, turn with ease—solution to your joint pains. Stay active, stay healthy with orthopedic care. Your path to a stronger and healthier life. Orthopedics for a lifetime of mobility.</p>
                    </div>

                    <div class="department-content hover">
                        <div class="icon">
                            <i class="fa-solid fa-bone"></i>
                        </div>
                        <h3>
                            <a href="department-orthopedics.html">
                                Orthopedics
                            </a>
                        </h3>
                        <p>Moving you towards a pain-free life, orthopedic care for a better tomorrow. Bend, twist, turn with ease—solution to your joint pains. Stay active, stay healthy with orthopedic care. Your path to a stronger and healthier life. Orthopedics for a lifetime of mobility.</p>
                        <a href="department-orthopedics.html" class="read-more">
                            Read More
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 wow animate__animated animate__fadeInUp delay-0-6s">
                <div class="single-our-department">
                    <img src="/assets/images/department/department-3.jpg" alt="Cardiology Department">

                    <div class="department-content one">
                        <h3>
                            <a href="department-cardiology.html">
                                Cardiology
                            </a>
                        </h3>

                        <p>Healthy habits are your heart's desire. You must be the change you wish to see in the world. The only thing we have to fear is fear itself. One beautiful heart is better than a thousand beautiful faces.</p>
                    </div>

                    <div class="department-content hover">
                        <div class="icon">
                            <i class="fa-solid fa-heartbeat"></i>
                        </div>
                        <h3>
                            <a href="department-cardiology.html">
                                Cardiology
                            </a>
                        </h3>
                        <p>Healthy habits are your heart's desire. You must be the change you wish to see in the world. The only thing we have to fear is fear itself. One beautiful heart is better than a thousand beautiful faces.</p>
                        <a href="department-cardiology.html" class="read-more">
                            Read More
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 wow animate__animated animate__fadeInUp delay-0-8s">
                <div class="single-our-department">
                    <img src="/assets/images/department/department-4.jpg" alt="Neurology Department">

                    <div class="department-content one">
                        <h3>
                            <a href="department-neurology.html">
                                Neurology
                            </a>
                        </h3>

                        <p>Depend on us for life, don't limit your challenges, embrace your health. Enhancing life every day, a new discovery. The brain is the organ of destiny; it holds within its humming mechanism secrets that will determine the future of the human race.</p>
                    </div>

                    <div class="department-content hover">
                        <div class="icon">
                            <i class="fa-solid fa-brain"></i>
                        </div>
                        <h3>
                            <a href="department-neurology.html">
                                Neurology
                            </a>
                        </h3>
                        <p>Depend on us for life, don't limit your challenges, embrace your health. Enhancing life every day, a new discovery. The brain is the organ of destiny; it holds within its humming mechanism secrets that will determine the future of the human race.</p>
                        <a href="department-neurology.html" class="read-more">
                            Read More
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Our Department Area -->

<!-- Start Working Process Area -->
<div class="working-process-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center wow animate__animated animate__fadeInUp delay-0-1s">
            <span class="top-title">OUR PROCESS</span>
            <h2>How We Provide Exceptional Care</h2>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-working-process wow animate__animated animate__fadeInUp delay-0-2s">
                    <div class="icon">
                        <i class="fa-solid fa-calendar-day"></i>
                    </div>
                    <h3>Schedule Your Appointment</h3>
                    <p>Experience a seamless appointment scheduling process, ensuring you receive timely and efficient care tailored to your needs. Our team is dedicated to making your visit as convenient and comfortable as possible.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-working-process wow animate__animated animate__fadeInUp delay-0-4s">
                    <div class="icon">
                        <i class="fa-solid fa-stethoscope"></i>
                    </div>
                    <h3>Consult with Our Specialists</h3>
                    <p>Engage with our expert medical professionals for comprehensive consultations. We provide personalized medical advice and treatment plans, focusing on your well-being and health outcomes.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-working-process wow animate__animated animate__fadeInUp delay-0-6s">
                    <div class="icon">
                        <i class="fa-solid fa-hospital"></i>
                    </div>
                    <h3>Receive Expert Treatment</h3>
                    <p>Benefit from our advanced medical treatments and care. Our state-of-the-art facilities and dedicated healthcare professionals ensure that you receive the highest standard of care throughout your treatment journey.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Working Process Area -->


<?= $this->endSection(); ?>