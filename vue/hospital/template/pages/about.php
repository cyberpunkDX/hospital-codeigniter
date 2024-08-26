<?= $this->extend('layouts/master'); ?>
<?= $this->section('content'); ?>
<!-- Start Page Banner Area -->
<div class="page-banner-area bg-1 pt-100">
    <div class="container">
        <div class="page-banner-content">
            <h2>About Us</h2>
            <ul>
                <li>
                    <a href="/"><i class="fas fa-home"></i> Home</a>
                </li>
                <li>
                    <span>About Us</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Banner Area -->

<?= $this->include('components/who_we_are_area'); ?>

<!-- Start Our Mison Area -->
<div class="our-mison-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 pe-0">
                <div class="single-mison bg-color">
                    <h3>Our Vision</h3>
                    <p>Our vision is to provide the best possible care to our patients. We strive to be the top choice for all healthcare needs, offering a wide range of services and expertise.</p>
                </div>
            </div>
            <div class="col-lg-6 ps-0">
                <div class="single-mison">
                    <h3>Our Mission</h3>
                    <p>Our mission is to heal the patient, not just the body. We believe in providing comprehensive care that focuses on the whole person, not just the symptoms. We are committed to keeping up with the latest medical advancements to ensure our patients receive the best possible treatment.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Our Mison Area -->

<?= $this->include('components/solution_area'); ?>

<?= $this->include('components/choose_us_area'); ?>

<?= $this->include('components/our_team_area'); ?>

<?= $this->include('components/client_area'); ?>

<?= $this->include('components/urgent_area'); ?>

<?= $this->include('components/knock_us_area'); ?>


<?= $this->include('components/dark_mode_area'); ?>

<?= $this->endSection(); ?>