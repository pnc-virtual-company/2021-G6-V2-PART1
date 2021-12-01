import { createApp } from 'vue'
import App from './App.vue'
import CategoryForm from './components/Pages/Category/CategoryForm.vue';

const app = createApp(App)

app.component('category-form', CategoryForm);

app.mount('#app')

