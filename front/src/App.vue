<template>
  <section>
    <router-view></router-view>
  </section>
</template>

<script>
export default {
  data() {
    return {
      menuList: [
        {title: "Home", url: "/home"},
        {title: "My Event", url: "/my-event"},
        {title: "Find Event", url: "/find-event"},
        {title: "Category", url: "/category"},
      ],
    }
  },
  provide() {
    return {
      menuList: this.menuList,
    }
  },
  methods: {
    
  },
}
</script>

<style>


</style>


