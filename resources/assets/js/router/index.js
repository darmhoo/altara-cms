import Vue from 'vue';
import VueRouter from 'vue-router';
import Vue2Filters from 'vue2-filters';
import Catalogue from '../view/catalogue/Index.vue';


Vue.use(VueRouter);
Vue.use(Vue2Filters);

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/', component: Catalogue
        }

    ]
});

export default router;
