<template>
  <section>
    <h1 class="text-center p-4 font-weight-light">My Events Sign In</h1>
    <div class="form-field">
        <form action="#" @submit.prevent="addMyLogin">
            <div class="form-group text-style">
                <hr>
                <p class="btn-text">Sign In Here</p>
                <hr>
            </div>
            <div class="alert alert-danger" v-if="messageErrorLogin"> Invalid password or email, Please try again! </div>
            <div class="form-group">
                <input
                    type="email"
                    class="form-control"
                    placeholder="Email"
                    v-model="form_info.email"
                    required
                />
            </div>
            <div class="form-group">
                <input
                    type="password"
                    class="form-control"
                    placeholder="Password"
                    v-model="form_info.password"
                    required
                />
            </div>
            
            <button type="submit" class="btn btn-primary form-control">Login</button>
        </form>
        
    </div>
    <p class="text-center mt-2">Don't have an account yet? <router-link to="/register">Register</router-link></p>
  </section>
</template>

<script>
export default {
    emits: ['login'],
    props: ['messageErrorLogin'],
    data() {
        return {
            form_info: {
                email: '',
                password: ''
            }
        }
    },
    methods: {
        addMyLogin() {
            this.$emit('login', this.form_info)
        }
    },
};
</script>

<style scoped>
body {
    background: url('../../assets/bg-form.gif');
    background-size: cover;
    background-position: center center;
}
.form-field {
  width: 40%;
  margin: auto;
  border-radius: 10px;
  padding: 20px;
  box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
}
.img-icon {
    margin-left: 40px;
    font-size: 20px;
}
hr {
    font-weight: bolder;
    width: 25%;
    background: black;
    border: 1px solid black;
}
.text-style {
    display: flex;
    justify-content: space-between;
    margin-top: 20px;
}

.btn-text {
    border: none;
    background: rgba(255, 255, 255, 0.81);
    border-radius: 10px;
    font-family: Arial, Helvetica, sans-serif;
    padding: 7px;
    display: flex;
    align-items: center;
}
</style>
