require('./bootstrap');


import { createApp } from "vue";
import router from './router'
import KeywordCard from "./components/keyword/KeywordCard";
import CreateKeyword from "./components/keyword/CreateKeyword";

createApp({
    components: {
        KeywordCard,
        CreateKeyword
    }
}).use(router).mount('#app')

