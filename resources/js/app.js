require('./bootstrap');

window.Vue = require('vue');

Vue.component('menu-component', require('./components/MenuComponent.vue').default);
Vue.component('header-component', require('./components/HeaderComponent.vue').default);
Vue.component('form-component', require('./components/FormComponent.vue').default);

const app = new Vue({
    el: '#app',
});

const form = new Vue({
    el: '#form'
});