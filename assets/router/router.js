import Home from '../components/test/Home.vue'
import {createRouter, createWebHistory} from 'vue-router'
import Main from "../components/test/Main";
import ProductsList from "../components/test/ProductsList";
import Product from "../components/test/Product";

export default createRouter({
    history: createWebHistory(),
    routes: [
        {
            name: 'main',
            path: '/',
            component: Main
        },
        {
            name: '123',
            path: '/cats',
            component: Product
        },
        {
            name: 'home',
            path: '/home',
            component: Home
        },
    ]
})