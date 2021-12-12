<template>
  <section>
    <form class="form row">
      <div class="form-group col-sm-12 d-flex mr-4">
        <div class="w-100 pr-4">
          <label for="name" class="text-center">Search Event Title</label>
          <div class="input-group form-group">
            <input
              type="text"
              class="form-control"
              placeholder="Search here..."
              aria-describedby="basic-addon1"
              v-model="searchByText"
              @keyup.prevent="addSearchEvent"
            />
  
            <div class="input-group-prepend">
              <button
                class="btn btn-primary rounded-right fa fa-remove"
                id="basic-addon1"
                @click.prevent="clearText"
              ></button>
            </div>
          </div>
        </div>

        <div class="w-100 pl-4">
          <div class="form-group col-sm-6">
            <label for="city">Search City</label>
            <input
              list="cityList"
              class="form-control"
              placeholder="Select city"
              v-model="city"
              @change="addSearchEvent"
            />
            <datalist id="cityList">
              <option v-for="city of cities" :key="city" class="form-control">
                {{ city }}
              </option>
            </datalist>
          </div>
        </div>
      </div>
    </form>
  </section>
</template>
<script>
export default {
  emits: ["addSearchEvent"],
  props: ["cities"],

  data() {
    return {
      searchByText: "",
      city: "",
    };
  },
  methods: {
    addSearchEvent() {
      this.$emit("addSearchEvent", this.searchByText, this.city);
    },

    clearText() {
      this.searchByText = "";
      this.addSearchEvent();
    },
  },

  mounted() {
  
  },
};
</script>

<style scoped>
label {
  font-weight: bold;
  display: block;
  margin-bottom: 0.5rem;
}
</style>