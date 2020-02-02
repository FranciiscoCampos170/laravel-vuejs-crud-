require('./bootstrap');


window.Vue = require('vue');
window.axios = require('axios');


Vue.component('Users', require('./components/Users.vue').default);



const app = new Vue({
    el: '#app'
});
