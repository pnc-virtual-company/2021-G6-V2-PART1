<template>
    <section>
        <category-form ></category-form>
        <category-card
            v-for="category in categories"
            :key ="category.id"
            :category="category"
        >
        </category-card>
    </section>
</template>
<script>
import axios from "axios";
const API_URL = " http://localhost:8000/api"
export default {
  data(){
      return {
          categories: [],
      }
  },
  

  mounted() {
      axios.get(API_URL + "/category")
      .then((response) => {
          this.categories = response.data;
          
      });
  },
}
</script>
<style scoped>
    
</style>