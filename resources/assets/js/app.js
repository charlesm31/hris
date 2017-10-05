
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('Homepage', require('./components/Homepage.vue'));
Vue.component('Navbar', require('./components/Navbar.vue'));
// Vue.component('Navlinks', require('./components/Navlinks.vue'));
// Vue.component('Errors', require('./components/Errors.vue'));
Vue.component('Dashboard', require('./components/Dashboard.vue'));
Vue.component('Employees', require('./components/Employees.vue'));
Vue.component('Profile', require('./components/Profile.vue'));

const app = new Vue({
    el: '#app'
});
