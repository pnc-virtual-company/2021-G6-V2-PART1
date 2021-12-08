<template>
  <section>
    <h1 class="text-center p-4 font-weight-light">My Events Registration</h1>
    <div class="form-field">
        <form action="#" @submit.prevent="addUserInfo">
            <div class="form-group inser-img">
                <img src="../../assets/avatar.png" alt="" width="100" height="100" class="rounded">
                <input type="file" name="" id="image" class="d-none">
                <label for="image" class="fa fa-plus-circle btn btn-outline-info img-icon"></label>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input
                    type="text"
                    class="form-control"
                    placeholder="First name"
                    v-model="signup_form.first_name"
                    required
                    />
                    <small class="text-danger" v-if="error_message.first_name_error"> {{error_message.first_name_error[0]}} </small>
                </div>
               
                
                <div class="form-group col-md-6">
                    <input
                    type="text"
                    class="form-control"
                    placeholder="Last name"
                    v-model="signup_form.last_name"
                    required
                    />
                    <small class="text-danger" v-if="error_message.last_name_error"> {{error_message.last_name_error[0]}} </small>
                </div>
            </div>
            <div class="form-group">
              
                <input
                    type="email"
                    class="form-control"
                    placeholder="Email"
                    v-model="signup_form.email"
                    required
                />
                <div class="text-danger" v-if="error_message.email_error"> {{error_message.email_error[0]}} </div>
                
            </div>
            <div class="form-group">
                
                <input
                    type="password"
                    class="form-control"
                    placeholder="Password"
                    v-model="signup_form.password"
                    required
                />
                <div class="text-danger" v-if="error_message.password_error"> {{error_message.password_error[0]}} </div>
            </div>
            <div class="form-group">

                <input
                    type="password"
                    class="form-control"
                    placeholder="Comfirm Password"
                    v-model="signup_form.comfirm_password"
                    required
                />
                <div class="text-danger" v-if="error_message.confirm_password_error"> {{error_message.confirm_password_error[1]}} </div>
            </div>
            
            <button class="btn btn-primary form-control" >Register now</button>
        </form>
    </div>
    <p class="text-center mt-2">Have an account? <router-link to="/signin">Sign in</router-link></p>
  </section>
</template>

<script>
export default {
    emits: ['adduser'],
    inject: ['error_message'],
    data() {
        return {
            signup_form: {
                first_name: '',
                last_name: '',
                email: '',
                password: '',
                comfirm_password: ''
            },
            
        }
    },
    methods: {
        addUserInfo() {
            this.$emit('adduser', this.signup_form);
        },
        
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
</style>
