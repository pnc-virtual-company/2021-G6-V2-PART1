import { createApp } from 'vue'
import App from './App.vue'
import MyEventCard from './components/myevent/MyEventCard';
const app = createApp(App);
app.component('my-event-card', MyEventCard);
app.mount('#app');
