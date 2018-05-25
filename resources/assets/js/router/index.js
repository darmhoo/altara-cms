import Vue from 'vue'
import VueRouter from 'vue-router'
import LandingPage from '../views/LandingPage.vue'
import ExampleComponent from '../components/ExampleComponent.vue'

Vue.use(VueRouter)

const router = new VueRouter({
    mode: 'history',
    routes: [
        { path: '/', component: LandingPage },
        { path: '/example', component: ExampleComponent }
    ]
})

export default router