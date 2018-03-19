require('./bootstrap');

import Vue from 'vue'
import Buefy from 'buefy'

Vue.use(Buefy)

Vue.component('favorite', require('./components/Favorite.vue'));
Vue.component('snackbar', require('./components/Snackbar.vue'));
Vue.component('forma', require('./components/Form.vue'));


const app = new Vue({
    el: '#app'
});
