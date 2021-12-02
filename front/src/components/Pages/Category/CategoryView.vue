<template>
  <section>
    <!-- <event-nav> </event-nav> -->

    <div class="container p-4">
      <div
        v-if="isClick"
        class="alert alert-dismissible mb-3"
        :class="
          message === 'Create success!' ? 'alert-success' : 'alert-danger'
        "
      >
        <a href="#" class="close" data-dismiss="alert" aria-label="close"
          >&times;</a
        >
        <strong>{{ message }}</strong>
      </div>
      <category-form @categoryData="addCategory" class="mb-4 d-flex justify-content-end"> </category-form>
      <form class="form">
        <div class="input-group">
          
          <input
            type="text"
            class="form-control"
            placeholder="Category name"
            aria-label="Username"
            aria-describedby="basic-addon1"
            v-model="name"
          />
          <div class="input-group-prepend">
            <button class="fa fa-search btn btn-primary rounded-right" @click.prevent="searchName"></button>
          </div>
        </div>
      </form>
      
    </div>
    <category-card :categoryData="categories"> </category-card>
  </section>
</template>

<script>
import axios from "axios";
const API_URL = "http://localhost:8000/api";
export default {
  data() {
    return {
      categories: [],
      message: "",
      isClick: false,
      name: ''
    };
  },
  methods: {
    addCategory(name) {
      axios
        .post(API_URL + "/category", { name })
        .then((response) => {
          console.log(response.data);
          this.getCategory();
          this.message = "Create success!";
        })
        .catch((error) => {
          this.message = error.response.data.errors.name[0];
        });
      this.isClick = true;
    },
    getCategory() {
      axios.get(API_URL + "/category").then((response) => {
        this.categories = response.data;
      });
    },
    searchName() {
      if(this.name !== '') {
        axios.get(API_URL + "/category/search/" + this.name).then(res => {
        this.categories = res.data;
        })
      }else {
        this.getCategory();
      }
      
    }
  },
  mounted() {
    this.getCategory();
  },
};
</script>

<style>
*/ .has-search input {
  border-radius: 40px;
}
</style>
