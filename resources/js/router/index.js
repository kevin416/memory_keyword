import { createRouter, createWebHistory } from 'vue-router'

import KeywordCard from "../components/keyword/KeywordCard";


const routes = [
    {
        path: '/keyword',
        name: 'keywords.index',
        component: KeywordCard
    },

]

export default createRouter({
    history: createWebHistory(),
    routes
})
