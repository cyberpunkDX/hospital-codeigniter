import './assets/css/bootstrap.min.css'
import './assets/css/owl.theme.default.min.css'
import './assets/css/owl.carousel.min.css'
import './assets/css/swiper-bundle.min.css'
import './assets/css/flaticon.css'
import './assets/css/remixicon.css'
import './assets/css/meanmenu.min.css'
import './assets/css/odometer.min.css'
import './assets/css/animate.min.css'
import './assets/css/style.css'
import './assets/css/dark-mode.css'
import './assets/css/responsive.css'

// js
import './assets/js/jquery.min.js'
import './assets/js/bootstrap.bundle.min.js'
import './assets/js/meanmenu.min.js'
import './assets/js/owl.carousel.min.js'
import './assets/js/swiper-bundle.min.js'
import './assets/js/appear.min.js'
import './assets/js/odometer.min.js'
import './assets/js/form-validator.min.js'
import './assets/js/contact-form-script.js'
import './assets/js/ajaxchimp.min.js'


import { createApp } from 'vue'
import App from './App.vue'
import router from './router'

const app = createApp(App)

app.use(router)

app.mount('#app')
