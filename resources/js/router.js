import Vue from "vue"
import VueRouter from "vue-router"
import Home from "./pages/home/Home.vue"
import About from "./pages/about/about.vue"
import Login from "./pages/Login/Login.vue"
import Detail from "./pages/home/details/ministry.vue"

Vue.use(VueRouter);


const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home,
        },
        {
            path: '/login',
            name: 'login',
            component: Login
        },
        {
            path: '/detail/:id',
            name: 'Detail',
            component: Detail,
            props: true
        }

    ]
})

export default router;