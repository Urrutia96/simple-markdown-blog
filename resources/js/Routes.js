import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter);

import Home from './views/Home'
import Blog from './views/Blog'
import Publicar from './views/Publicar'

const routes = new VueRouter({
    routes: [
        {
            path: '/',
            name: 'home', 
            component: Home
        },
        {
            path: '/blog/:slug',
            name: 'blog',
            component: Blog
        },
        {
            path: '/publicar',
            name: 'publicar',
            component: Publicar
        }
    ],
    mode: 'history'
});

export default routes;