import Vue from 'vue'
import router from "./router.js"
import loader from "vue-ui-preloader";
require('./bootstrap');

Vue.use(loader)
window.Vue = Vue;



Vue.component('App', require('./App.vue').default);

const app = new Vue({
    router,
    loader : loader,
    el: '#app',
});
