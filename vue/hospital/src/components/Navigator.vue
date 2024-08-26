<template>
   <!-- Start Navbar Area -->

   <div class="navbar-area">
      <div class="mobile-responsive-nav">
          <div class="container">
              <div class="mobile-responsive-menu">
                  <div class="logo">
                      <a href="/">
                          <img src="@/assets/images/logo.png" class="main-logo" alt="logo">
                          <img src="@/assets/images/white-logo.png" class="white-logo" alt="logo">
                      </a>
                  </div>
              </div>
          </div>
      </div>

      <div class="desktop-nav">
          <div class="container">
              <nav class="navbar navbar-expand-md navbar-light">
                  <a class="navbar-brand" href="/">
                      <img src="@/assets/images/logo.png" class="main-logo" alt="logo">
                      <img src="@/assets/images/white-logo.png" class="white-logo" alt="logo">
                  </a>

                  <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                      <ul class="navbar-nav m-auto">
                          <li class="nav-item">
                                <router-link to="/" class="nav-link border-style">Home</router-link>
                          </li>
                          <li class="nav-item">
                            <router-link to="/about" class="nav-link border-style">About</router-link>
                          </li>

                          <li class="nav-item">
                            <router-link to="/contact" class="nav-link border-style">Contact</router-link>
                          </li>
                      </ul>


                  </div>
              </nav>
          </div>
      </div>
  </div>
  <!-- End Navbar Area -->
</template>
<script>
import { RouterLink } from 'vue-router';
export default {

}
</script>

<style>

</style>