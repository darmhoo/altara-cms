import Vue from 'vue'
import VueRouter from 'vue-router'
import LandingPage from '../views/LandingPage.vue'
import Login from '../views/Auth/Login.vue'
import Register from '../views/Auth/Register.vue'
import Catalog from '../views/Catalog/Index.vue'
import Category from '../views/Catalog/Category.vue'
import Create from '../views/Catalog/Create.vue'
import NotFound from '../views/NotFound.vue'

Vue.use(VueRouter)
const router = new VueRouter({
    mode: 'history',
    routes: [
        { path: '/', component: Catalog, meta: { mode: 'catalog' } },
        { path: '/login', component: Login, meta: { mode: 'login' } },
        { path: '/register', component: Register, meta: { mode: 'register' } },
        { path: '/catalog', component: Catalog, meta: { mode: 'catalog' } },
        { path: '/product/category/:id', component: Category, meta: { mode: 'catalog' }  },
        { path: '/product/create', component: Create, meta: { mode: 'catalog' }  },
        { path: '/not-found', component: NotFound },
        { path: '*', component: NotFound },
    ]
})

export default router