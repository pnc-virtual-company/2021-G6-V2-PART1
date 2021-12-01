<template>
  <section>
    <!-- <h1 class="text-center p-4 font-weight-light">My Events Registration</h1> -->
    <div class="contain-body">
        <div class="form-field">

        <form @submit.prevent="userInfo" id="form-signup">
            <div class="form-group inser-img">
                <img src="../../assets/avatar.png" alt="" width="100" height="100" class="rounded">
                <input type="file" name="" id="image" class="d-none">
                <label for="image" class="fa fa-plus-circle btn btn-outline-danger img-icon" id='btn-img'></label>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                     <p class="text-danger " v-if="errors_info_signup.firtnameError"> {{errors_info_signup.firtnameError[0]}}</p>
                    <input
                    type="text"
                    class="form-control"
                    placeholder="First name" required
                    v-model="signup_form.first_name"/>
                </div>
                <div class="form-group col-md-6">
                    <p class="text-danger " v-if="errors_info_signup.lastnameError"> {{errors_info_signup.lastnameError[0]}}</p>
                    <input
                    type="text"
                    class="form-control"
                    placeholder="Last name" required
                    v-model="signup_form.last_name"
                    />
                </div>
            </div>
            <div class="form-group">
                <p class="text-danger " v-if="errors_info_signup.emailError"> {{errors_info_signup.emailError[0]}}</p>
                <input
                    type="email"
                    class="form-control"
                    placeholder="Email" required
                    v-model="signup_form.email"
                />

            </div>
            <div class="form-group">
                <p class="text-danger " v-if="errors_info_signup.passwordError"> {{errors_info_signup.passwordError[0]}}</p>
                <input
                    type="password"
                    class="form-control"
                    placeholder="Password" required
                    v-model="signup_form.password"
                />
            </div>
            <div class="form-group">
                <p class="text-danger" v-if="errors_info_signup.confirmError"> {{errors_info_signup.confirmError[0]}}</p>
                <input
                    type="password"
                    class="form-control"
                    placeholder="Comfirm Password" required
                    v-model="signup_form.comfirm_password"
                />
            </div>
            
            <button type="submit" class="btn form-control" id='bnt-submit'>Register now</button>
        </form>
    </div>
    <p class="text-center mt-3 text-black">Have an account? <router-link to="/signin"> Sign in</router-link></p>
    </div>
    
  
  </section>
</template>

<script>

export default {
  emits: ['register'],

  inject: ['errors_info_signup'],

  data() {
      return {
        signup_form: {
            first_name: '',
            last_name: '',
            email: '',
            password: '',
            comfirm_password: '',
        },

        // error: null,
      }
  },
  methods: {
    userInfo() { 
        this.$emit('register', this.signup_form);
    }
  },
};
</script>

<style>
.contain-body {
    background: url('../../assets/lastImg.jpg');
    background-size: cover;
    background-position: center center;  
    width: auto;
    height: 90vh;
   
    
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
#bnt-submit{
    background: #020269;
    color: white;
}

.img-icon {
    margin-left: 40px;
    font-size: 20px;
}

</style>