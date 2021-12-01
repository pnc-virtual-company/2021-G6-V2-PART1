<template>
  <section>
      <div class="contain-body">
          <div class="form-field ">
        <form @submit.prevent="loginInfo">
            <div class="form-group text-style">
                <hr class="new4">
                <p class="btn-text text-light" id='nav-card'>Sign In Here</p>
                <hr class="new4">
            </div>
            <p class="text-danger" v-if="error_info_signin.errors_login">{{error_info_signin.errors_login}}</p>
            <div class="form-group">
                <input 
                    type="email"
                    class="form-control "
                    placeholder="Email"
                    v-model="signin_form.email"
                    required
                />
            </div>
            <div class="form-group">
                <input
                    type="password"
                    class="form-control"
                    placeholder="Password"
                    v-model="signin_form.password"
                    required
                />
            </div>
            
            <button type="submit" class="btn form-control text-light" id='btn-submit' >Login</button>
        </form>
        
    </div>
    <p class="text-center mt-3 text-black">Don't have an account yet? <router-link to="/register">Register</router-link></p>
      </div>
    
  </section>
</template>

<script>
export default {
    emits: ['signIn'],
    inject: ['error_info_signin'],

    data() {
      return {
        signin_form: {
            email: '',
            password: '',
        },
        // error: null,
      }
    },
    methods: {
        loginInfo() { 
            this.$emit('signIn', this.signin_form);
        }
    },
};
</script>

<style scoped>
.contain-body {
    background: url('../../assets/lastImg.jpg');
    background-size: cover;
    background-position: center center;  
    width: auto;
    height: 100vh;
    padding-top: 100px;
    
}
.form-field {
  width: 35%;
  margin: auto;
  box-shadow: 0px 2px 16px 11px rgba(30, 48, 54, 0.67);
  background: #e7eef0;
  border-radius: 10px;
  padding: 20px;
  opacity: 0.8;
  position: center center;
 
}
#nav-card{
    background: #020269;
}
#btn-submit{
     background: #020269;
}
.img-icon {
    margin-left: 40px;
    font-size: 20px;
}
hr {
    font-weight: bolder;
    width: 25%;
    background: white;
    border: 1px solid white;
}
.text-style {
    display: flex;
    justify-content: space-between;
    margin-top: 20px;
}
#title{
  color:  #efeff3;
  

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
hr.new4 {
  border: 2px solid  #020269 ;
}
</style>



