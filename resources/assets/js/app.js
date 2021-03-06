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

// Bulma responsive navbar
document.addEventListener('DOMContentLoaded', function () {
    // Get all "navbar-burger" elements
    var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
    // Check if there are any navbar burgers
    if ($navbarBurgers.length > 0) {
        // Add a click event on each of them
        $navbarBurgers.forEach(function ($el) {
            $el.addEventListener('click', function () {
                // Get the target from the "data-target" attribute
                var target = $el.dataset.target;
                var $target = document.getElementById(target);
                // Toggle the class on both the "navbar-burger" and the "navbar-menu"
                $el.classList.toggle('is-active');
                $target.classList.toggle('is-active');
            });
        });
    }
});