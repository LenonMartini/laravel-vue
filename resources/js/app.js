require('./bootstrap');

window.Vue = require('vue');



Vue.component('example-component', require('./components/ExampleComponent'));


const app = new Vue({
    el:'#app'
});