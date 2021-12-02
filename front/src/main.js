import { createApp } from 'vue'
import App from './App.vue'
import CategoryForm from './components/Pages/Category/CategoryForm.vue';
import CategoryCard from './components/Pages/Category/CategoryCard.vue';

const app = createApp(App)
app.component('category-form', CategoryForm);
app.component('category-card', CategoryCard);
app.mount('#app')

