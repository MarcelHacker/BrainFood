import Vue from 'vue';
import Router from 'vue-router';
import Home from '@/pages/home.vue';
import Registration from '@/pages/registration.vue';

Vue.use(Router);

export default new Router({
    routes: [
        {
            path: '/',
            name: 'Home',
            component: Home,
        },
        {
            path: '/registration',
            name: 'registration',
            component: Registration,
        },
    ],
});
