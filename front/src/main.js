import { createApp } from 'vue'
import App from './App.vue'
import MyEventView from './components/Pages/MyEvent/MyEventView.vue'


import CategoryForm from './components/Pages/Category/CategoryForm.vue';
import CategoryView from './components/Pages/Category/CategoryView.vue';
import CategoryCard from './components/Pages/Category/CategoryCard.vue';

import MyEventCard from './components/Pages/myevent/MyEventCard';

const app = createApp(App);

app.component('my-event-view', MyEventView)

app.component('category-form', CategoryForm);
app.component('category-view', CategoryView);
app.component('category-card', CategoryCard);



app.component('my-event-card', MyEventCard);
app.mount('#app');
