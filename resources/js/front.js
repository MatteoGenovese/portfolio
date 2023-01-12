import Vue from 'vue';
import VueRouter from 'vue-router';

window.Vue = require('vue');

window.axios = require('axios');
// window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

Vue.use(VueRouter);

import App from './views/App.vue';
import router from './router.js';

const app = new Vue({
    el: '#root',
    render: h => h(App),
    router
});