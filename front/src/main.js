import { createApp } from "vue";
import { createRouter, createWebHistory } from "vue-router";
import App from "./App.vue";
import EventNav from './components/Navigation/EventNav.vue'

const router = createRouter({
  history: createWebHistory(),
  routes: [
    { path: '/', component: EventNav},
    
  ],
});

const app = createApp(App);
app.use(router);
app.mount("#app");
