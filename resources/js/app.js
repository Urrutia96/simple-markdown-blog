/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import routes from './Routes'
import Layout from './views/Layout'


const app = new Vue({
    el: '#app',
    router: routes,
    components: {
        Layout
    }
});
