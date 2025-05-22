import './bootstrap';

import { createApp } from 'vue';
import { router } from './src/router';
import App from './src/App.vue';


import '../css/app.css'

const app=createApp(App)


app.use(router)
app.mount('#app')  