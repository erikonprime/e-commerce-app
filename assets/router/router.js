import Home from '../components/Home.vue'
import {createRouter, createWebHistory} from 'vue-router'
import Cats from "../components/Cats";

export default createRouter({
    history: createWebHistory(),
    routes: [
        {
            name: 'home',
            path: '/home',
            component: Home
        },
        {
            name: '123',
            path: '/cats',
            component: Cats
        }
    ]
})