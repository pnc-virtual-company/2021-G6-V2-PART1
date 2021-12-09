<template>
  <section>
    <div class="container p-4">
      <div class="d-flex justify-content-between mb-3">
        <h2 class="text-info">My Events</h2>
        <base-dailog
          v-if="dialogDisplayed"
          :title="dialogTitle"
          :mode="dialogMode"
          @close="closeDialog"
        >
          <div class="event-form">
            <div class="form-row">
              <div class="form-group col-sm-12">
                <img
                    src=""
                    class="img-fluid"
                    alt=""
                />
                <label for="image">Image</label>
                <div class="d-flex">
                  <input id="image" type="file" class="form-control mr-3" />
                  <button class="btn btn-primary">Upload</button>
                </div>
              </div>
              <div class="form-group col-sm-12">
                <label for="category">Category</label>
                <input
                  list="categoryList"
                  class="form-control"
                  placeholder="Select category"
                  v-model="event_data.categoryName"
                />
                <datalist id="categoryList">
                  <option v-for="category of categories" :key="category.id" class="form-control"> {{category.name}} </option>
                </datalist>
              </div>
              <div class="form-group col-sm-12">
                <label for="title">Title</label>
                <input
                  type="text"
                  id="title"
                  class="form-control"
                  placeholder="Title"
                  v-model="event_data.title"
                />
              </div>
              <div class="form-group col-sm-6">
                <label for="startDate">Start date and time</label>
                <input
                  type="datetime-local"
                  id="startDate"
                  class="form-control"
                  v-model="event_data.start_date"
                />
              </div>
              <div class="form-group col-sm-6">
                <label for="endDate">End date and time</label>
                <input
                  type="datetime-local"
                  id="endDate"
                  class="form-control"
                  v-model="event_data.end_date"
                />
              </div>
              <div class="form-group col-sm-6">
                <label for="contry">Country</label>
                <input
                  list="countryList"
                  class="form-control"
                  placeholder="Select city"
                  v-model="event_data.country"
                />
                <datalist id="countryList">
                  <option v-for="name of countryName" :key="name" class="form-control">{{name}}</option>
                </datalist>
              </div>
              <div class="form-group col-sm-6">
                <label for="city">City</label>
                <input
                  list="cityList"
                  class="form-control"
                  placeholder="Select city"
                  v-model="event_data.city"
                />
                <datalist id="cityList">
                  <option v-for="city of countries[event_data.country]" :key="city" class="form-control">{{city}}</option>
                </datalist>
              </div>
              <div class="form-group col-sm-12">
                <label for="description">Description</label>
                <textarea
                  id="description"
                  class="form-control"
                  placeholder="Description"
                  v-model="event_data.description"
                ></textarea>
              </div>
            </div>
          </div>
          <template #action>
            <base-button class="right-man-button btn btn-info" type="submit">
              Create
            </base-button>
          </template>
        </base-dailog>

        <base-button
          class="right-man-button btn btn-info"
          type="submit"
          @click="showCreateMyEvent"
        >
          + Add Category
        </base-button>
      </div>

      <hr class="bg-dark pb-1">

      <my-event-search> </my-event-search>
      <my-event-card v-for="event of my_events" :key="event.id" :event="event" class="mt-3"> </my-event-card>
    </div>
  </section>
</template>

<script>
import axios from '../axios-http.js';
import MyEventCard from "../components/Pages/MyEvent/MyEventCard.vue";
import MyEventFormSearch from "../components/Pages/MyEvent/MyEventFormSearch.vue";
import BaseButton from "../components/UI/BaseButton.vue";
import BaseDialog from "../components/UI/BaseDialog.vue";

export default {
  components: {
    "my-event-card": MyEventCard,
    "my-event-search": MyEventFormSearch,
    "base-button": BaseButton,
    "base-dailog": BaseDialog,
  },
  data() {
    return {
      event_data: {
        categoryName: "",
        title: "",
        start_date: "",
        end_date: "",
        country: "",
        city: "",
        description: "",
      },
      my_events: [],
      message: "",
      myClass: "",
      myMessage: "",
      myEventAction: {},
      dialogMode: "create",
      dialogDisplayed: false,
      categories: [],
      countries: {},
      countryName: [],
    };
  },
  computed: {
    dialogTitle() {
      let message = "";
      if (this.dialogMode === "create") {
        message = "CREATE MY EVENT";
      } else if (this.dialogMode === "edit") {
        message = "EDIT MY EVENT";
      } else {
        message = "REMOVE THIS EVENT?";
      }
      return message;
    },
    dialogButton() {
      let message = "";
      if (this.dialogMode === "create") {
        message = "CREATE";
      } else if (this.dialogMode === "edit") {
        message = "UPDATE";
      } else {
        message = "REMOVE";
      }
      return message;
    },
    classButton() {
      let message = "";
      if (this.dialogMode === "create") {
        message = "btn btn-primary";
      } else if (this.dialogMode === "edit") {
        message = "btn btn-success";
      } else {
        message = "btn btn-danger";
      }
      return message;
    },
  },
  methods: {
    showCreateMyEvent() {
      this.dialogMode = "create";
      this.dialogDisplayed = true;
    },
    closeDialog() {
      this.dialogDisplayed = false;

      this.event_data.categoryName = "";
      this.event_data.title = "";
      this.event_data.start_date = "";
      this.event_data.end_date = "";
      this.event_data.city = "";
      this.event_data.description = "";
    },
  },
  mounted() {
    //   GET CATEGORY FROM BACKEND
    axios.get('/category')
    .then(res => {
        this.categories = res.data
    })
    // GET COUNTRY FROM BACKEND
    axios.get('/countries')
    .then(res => {
        this.countries = res.data
        for(let count in res.data) {
            this.countryName.push(count)
        }
    })
    // GET MY EVENTS
    axios.get('/myevent')
    .then(response => {
        this.my_events = response.data
    })
  },
};
</script>

<style scoped>

label {
  font-weight: bold;
  display: block;
  margin-bottom: 0.5rem;
}
.event-form {
  width: 100%;
  height: 45vh;
  padding: 20px;
  overflow-y: scroll;
}


h3 {
  margin: 0.5rem 0;
  font-size: 1rem;
}
</style>
