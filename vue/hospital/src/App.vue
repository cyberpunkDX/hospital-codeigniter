<template>
  <Header></Header>
    <RouterView></RouterView>
  <Footer></Footer>  
</template>

<script>
import Header from '@/components/Header.vue'
import Footer from './components/Footer.vue'
import { RouterView } from 'vue-router';
export default {
  components: {
    Header,
    Footer
  }
}
</script>

<style>

</style>