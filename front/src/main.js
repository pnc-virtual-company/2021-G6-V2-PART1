import { createApp } from 'vue'
import App from './App.vue'
import { createRouter, createWebHistory } from "vue-router";
import Signup from './components/Authentication/Signup.vue'
import Signin from './components/Authentication/Signin.vue'

const router = createRouter({
    history: createWebHistory(),
    routes: [
      {path: "/", component: Signin},
      {path: "/register", component: Signup},
      {path: "/signin", component: Signin},
    ],
});

const app = createApp(App);

app.use(router)

app.mount('#app');
