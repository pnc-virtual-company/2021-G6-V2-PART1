<template>
  <div>
    <category-form></category-form>
    <category-card
    v-for="item of items"
        :key="item.id"
        :item="item"
        @deleteItem="removeItem"
      ></category-card>
  </div>
  
</template>
<script>
import CategoryCard from './components/Pages/Category/CategoryCard.vue';
import axios from "axios";
const url = "http://127.0.0.1:3000/api/books";
export default {
  components: { CategoryCard },
  data() {
    return {
      items: [
        {message: 'Hello world1', id:1},
        {message: 'Hello world2', id:2},
        {message: 'Hello world3',id:3},
        {message: 'Hello world4',id:4},

      ]
    };
  }, 
  methods: {
    getBooks() {
      axios.get(url).then(response => {
        this.books = response.data;
        console.log(this.books);
      });
    },
    
    removeItem : function(id){
        for (let item of this.items) {
          let index = this.items.indexOf(item);
          if(item.id === id){
            this.items.splice(index, 1);
          }
        }
    }
  },


};
</script>

<style >
</style>