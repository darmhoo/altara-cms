import Vue from 'vue'
import VueRouter from 'vue-router'
import LandingPage from '../views/LandingPage.vue'
import Login from '../views/Login.vue'
import Register from '../views/Register.vue'
import Catalog from '../views/Catalog.vue'

Vue.use(VueRouter)

const router = new VueRouter({
    mode: 'history',
    routes: [
        { path: '/', component: LandingPage },
        { path: '/login', component: Login },
        { path: '/register', component: Register },
        { path: '/catalog', component: Catalog }
    ]
})

export default router