import { createApp } from 'vue'
import App from './App.vue'
import MyEventView from './components/Pages/MyEvent/MyEventView.vue'



const app = createApp(App);
app.component('my-event-view', MyEventView)

app.mount('#app')
