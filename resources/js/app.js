import Vue from 'vue'
import router from "./router.js"
require('./bootstrap');

window.Vue = Vue;

Vue.component('App', require('./App.vue').default);

const app = new Vue({
    router,
    el: '#app',
});
