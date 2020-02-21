/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import '@fortawesome/fontawesome-free/css/all.min.css';
import { BootstrapVue } from 'bootstrap-vue';
window.Vue = require('vue');

Vue.use(BootstrapVue);
import 'bootstrap-vue/dist/bootstrap-vue.css';

Vue.component('dashboard', require('./components/dashboard.vue').default);
Vue.component('events-list', require('./components/events/events-list.vue').default);
Vue.component('event-card', require('./components/events/event-card.vue').default);
Vue.component(
  'event-container',
  require('./components/events/event-container.vue').default
);

Vue.component('avatar', require('./components/avatar/avatar.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

new Vue({
  el: '#app'
});
