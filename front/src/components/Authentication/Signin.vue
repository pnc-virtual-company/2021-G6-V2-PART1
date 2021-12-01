<template>
  <section>
    <div class="form-field ">
        <form @submit.prevent="loginInfo">
            <div class="form-group text-style">
                <hr>
                <p class="btn-text text-light" id='nav-card'>Sign In Here</p>
                <hr>
            </div>
            <small class="text-danger m-5" v-if="error_info_signin.errors_login">{{error_info_signin.errors_login}}</small>
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
    <p class="text-center mt-2 text-light">Don't have an account yet? <router-link to="/register">Register</router-link></p>
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

<style>
body {
    background: url('../../assets/bg-form.gif');
    background-size: cover;
    background-position: center center;
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
  margin-top: 90px;
}
#nav-card{
    background: #04048b;
}
#btn-submit{
     background: #04048b;
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
</style>

<script>

</script>

<style scoped>
body{
  background-image: url('../../assets/bg-form.gif');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  text-align: center;
  padding: 50px;
  cursor: pointer;
  font-family:'Times New Roman', Times, serif;
}

.title{
    color:#04048b;
}
.form-signin{
  background: linear-gradient(90deg,#108ca3 0%, #194f7a 80%);
  box-shadow: -1px 4px 29px 10px rgba(25, 32, 36, 0.75);
  opacity: 0.8;
  width: 40%;
  height: auto;
  text-align: center;
  margin: auto;
  box-sizing: border-box;
  padding-left: 30px;
  padding-right: 40px;
  border-radius: 10px;
  padding-bottom: 50px;
}

.contain-input{
    margin-top:20px;
    box-sizing: border-box;
}

.input-name{
    display: flex;
    justify-content: space-between;
}

#firstname{
    padding: 10px;
    width: 100%;
    margin: 5px;
    outline: none;
    border: none;
    border-radius: 5px;
}

#lastname{
    padding: 10px;
    width: 100%;
    margin-bottom: 5px;
    margin-top: 5px;
    outline: none;
    border: none;
    border-radius: 5px;
}

#pwd{
    padding: 10px;
    margin:5px;
    width: 95%;
    margin-top: 10px;
    outline: none;
    border: none;
    border-radius: 5px;
}

.signin{
    margin-top: 10px;
    padding: 10px;
    width: 100%;
    margin-left: 5px;
    background:rgb(10, 87, 202);
    color:white;
    border-radius: 5px;
    border: none;
    cursor: pointer;
}

.contain-sigup{
    font-weight: bold;
    font-size: 20px;
}
span{
    color:rgb(70, 6, 247)
}
</style>
