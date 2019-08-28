import Vue from 'vue';
import App from './App.vue';
import router from './router';
import '../external/assets/css/bootstrap.min.css';
import '../external/assets/css/now-ui-kit.min.css';

const app = new Vue({
    el: '#root',
    template: `<app></app>`,
    components: { App },
    router

});
