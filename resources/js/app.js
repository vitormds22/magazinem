require('./bootstrap');

window.Vue = require('vue');

Vue.component('header-component', require('./components/HeaderComponent.vue').default);
Vue.component('form-component', require('./components/FormComponent.vue').default);
Vue.component('mailling', require('./components/MaillingComponent.vue').default);

const app = new Vue({
    el: '#app',
});