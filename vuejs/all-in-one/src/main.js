import { createApp } from 'vue'
import Toast from 'vue-toastification'
import App from './App.vue'

import router from './router'
import './assets/style.css'

const app=createApp(App);
app.use(router);
app.use(Toast);
app.mount('#app')
