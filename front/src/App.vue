<template>
  <section>
   <router-view 
    @register="SignUp" 
    @signIn="SignIn"> 
  </router-view>
  </section>
</template>

<script>
import axios from "axios";
const url = 'http://127.0.0.1:8000/api/';

export default {
  data() {
    return {
      menuList: [
        {title: "Home", url: "/home"},
        {title: "My Event", url: "/my-event"},
        {title: "Find Event", url: "/find-event"},
        {title: "Category", url: "/category"},
      ],
      containUsers: [],
      errorSignUp: {
        firtnameError: null,
        lastnameError: null, 
        emailError: null, 
        passwordError: null, 
        confirmError: null,
      },
      errorSignin:{
        errors_login: null, 
      }
    }
  },
  provide() {
    return {
      menuList: this.menuList,
      errors_info_signup: this.errorSignUp,
      error_info_signin: this.errorSignin,
      
    }
  },
  methods: {
    getAppMode() {
      return process.env.VUE_APP_MODE;
    },

    // DISPLAY LIST OF USERS FROM DATABASE =================================================================================
    getUsers(){
      axios.get(url+'users').then(response=>{
        this.containUsers = response.data;
      });
       
    },

    // REGISTER USER ACCOUNT ==============================================================================================
    SignUp(info_user){

      const userInfo = {
        first_name: info_user.first_name,
        last_name: info_user.last_name,
        email: info_user.email,
        password:  info_user.password,
        password_confirmation: info_user.comfirm_password,
      };

      axios.post(url+'register', userInfo)
      .then((response) => {
        this.containUsers = response.data;
        console.log(this.containUsers);
      })
      .catch((error) => {
        this.errorSignUp.firtnameError = error.response.data.errors.first_name;
        this.errorSignUp.lastnameError = error.response.data.errors.last_name;
        this.errorSignUp.emailError = error.response.data.errors.email;
        this.errorSignUp.passwordError = error.response.data.errors.password;
        this.errorSignUp.confirmError = error.response.data.errors.password_confirmation;
      })
      
      // Replace the form input to empty string-------------------------------------------------------------
      info_user.first_name = '';
      info_user.last_name = '';
      info_user.email = '';
      info_user.password = '';
      info_user.comfirm_password = '';

    },

    // SIGN IN USER ACCOUNT===============================================================================================
    SignIn(loginInfo){
      const contain_login_info = {
        email: loginInfo.email,
        password: loginInfo.password,
      };

      axios.post(url+'login', contain_login_info)
      .then(response =>{
        if(response.data.message !== 'undefinde'){
          this.errorSignin.errors_login = response.data.message;
        }
         console.log(response.data);
        
      })
      // .catch((error) => {
      //   this.errorSignin.email_error = error.response.data.errors.email;
      //   this.errorSignin.password_error = error.response.data.errors.password;
      //   console.log(error.response.data.errors);
      // })

      loginInfo.email = "";
      loginInfo.password = "";

    }

  },
  mounted() {
    this.getUsers();
  }

}

</script>


<style>


</style>


