  <!-- Start Navbar Area -->

  <div class="navbar-area">
      <div class="mobile-responsive-nav">
          <div class="container">
              <div class="mobile-responsive-menu">
                  <div class="logo">
                      <a href="/">
                          <img src="/assets/images/logo.png" class="main-logo" alt="logo">
                          <img src="/assets/images/white-logo.png" class="white-logo" alt="logo">
                      </a>
                  </div>
              </div>
          </div>
      </div>

      <div class="desktop-nav">
          <div class="container">
              <nav class="navbar navbar-expand-md navbar-light">
                  <a class="navbar-brand" href="/">
                      <img src="/assets/images/logo.png" class="main-logo" alt="logo">
                      <img src="/assets/images/white-logo.png" class="white-logo" alt="logo">
                  </a>

                  <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                      <ul class="navbar-nav m-auto">
                          <li class="nav-item">
                              <a href="<?= site_url('/') ?>" class="nav-link border-style <?= (uri_string() == '') ? 'active' : '' ?>">Home</a>
                          </li>
                          <li class="nav-item">
                              <a href="<?= route_to('about') ?>" class="nav-link border-style <?= (uri_string() == 'page/about') ? 'active' : '' ?>">About Us</a>
                          </li>

                          <li class="nav-item">
                              <a href="<?= route_to('contact') ?>" class="nav-link border-style <?= (uri_string() == 'page/contact') ? 'active' : '' ?>">Contact Us</a>
                          </li>
                      </ul>


                  </div>
              </nav>
          </div>
      </div>
  </div>
  <!-- End Navbar Area -->