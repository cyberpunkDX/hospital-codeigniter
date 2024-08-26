<template>
<div class="top-header-area bg-color-091c47">
      <div class="container">
          <div class="row align-items-center">
              <div class="col-lg-8">
                  <ul class="header-left-content">
                      <li>
                          <span>Phone:</span>
                          <a href="tel:{{ phone }}">{{ phone }}</a>
                      </li>
                      <li>
                          <span>Email:</span>
                          <a href="mailto:{{ email }}"><span>{{ email }}</span></a>
                      </li>
                      <li>
                          <span>Mon-Sat:</span>
                          8-9
                      </li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
  <Navigator></Navigator>
</template>

<script>
import Navigator from './Navigator.vue';
export default {
    data(){
        return{
        email: "example@domain.com",
        phone: "8986726573",
        }
    },
    components: {
        Navigator
    }

}
</script>

<style></style>