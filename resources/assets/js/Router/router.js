import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import Login from '../components/login/login'
import Logout from '../components/login/logout'
import Signup from '../components/login/signup'
import Forum from '../components/forum/Forum'
const routes = [
    { path: '/login', component: Login },
    { path: '/signup', component: Signup },
    { path: '/forum', component: Forum, name:'forum' },
    { path: '/logout', component: Logout },

]


// 3. Create the router instance and pass the `routes` option
// You can pass in additional options here, but let's
// keep it simple for now.
const router = new VueRouter({
    routes, // short for `routes: routes`
    hashbang: false,
    mode: 'history',
})

export default router