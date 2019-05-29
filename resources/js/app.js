import Vue from 'vue'
import VueRouter from 'vue-router'


Vue.use(VueRouter)

import App from './views/App.vue'
//import Employee from './views/Employee.vue'
import Home from './views/Home.vue'
//import UsersIndex from './views/UsersIndex.vue';


const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/spa/public/home',
            name: 'home',
            component: Home,
        },
        // {
        //     path: '/NewProject/public/add_employee',
        //     name: 'employee',
        //     component: Employee,
        // },
        // {
        //     path: '/NewProject/public/api/users',
        //     name: 'user',
        //     component: UsersIndex,
        // },
    ],
});

const app = new Vue({
    el: '#app',
    components: {
     App,
     Home
      },
    router,

});