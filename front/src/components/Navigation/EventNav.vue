<template>
  <section>
    <nav class="navbar navbar-expand-lg navbar-light nav">
        <a class="navbar-brand text-white d-flex justify-content-center align-items-center" href="#">
            <img src="../../assets/avatar.png" width="40" height="40" class="d-inline-block align-top rounded rounded-circle mr-2" alt="">
            Username
        </a>
      <button
        class="navbar-toggler bg-white"
        type="button"
        data-toggle="collapse"
        data-target="#navbarTogglerDemo02"
        aria-controls="navbarTogglerDemo02"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav m-auto mt-2 mt-lg-0">
          <!-- <li class="nav-item active">
            <router-link to="/home" class="nav-link text-white menu-page">Home <span class="sr-only ">(current)</span></router-link>
          </li>
          <li class="nav-item">
            <router-link to="/my-event" class="nav-link text-white menu-page">My Events</router-link>
          </li>
          <li class="nav-item">
            <router-link to="/find-event" class="nav-link text-white menu-page">Find Events</router-link>
          </li>
          <li class="nav-item">
            <router-link to="/category" class="nav-link text-white menu-page">Category</router-link>
          </li> -->

          <li class="nav-item" v-for="(menu, index) of menuList" :key="index">
            <router-link :to="menu.url" class="nav-link text-white menu-page"> {{menu.title}} </router-link>
          </li>

        </ul>
        <form class="form-inline my-2 my-lg-0">
          <router-link to="/signin" class="btn btn-info my-2 my-sm-0">Sign Out</router-link>
        </form>
      </div>
    </nav>
  </section>
</template>

<script>
export default {
  inject: ['menuList']
};
</script>

<style>
body {
    background: none;
}
.nav {
    background: #005B70;
}
.menu-page {
    font-family: sans-serif;
    font-weight: 500;
    color: #FFFFFF;
}
.menu-page:hover {
    /* background: rgba(5, 60, 72, 0.88);
    border-radius: 5px; */
    text-decoration: 3px underline red;
}
.btn-signout {
    font-family: sans-serif;
    font-style: normal;
    font-weight: normal;
}
</style>
