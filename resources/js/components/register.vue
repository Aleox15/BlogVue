<template>
     <div class="modal fade" id="register-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Register</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="login-form">
            <form action="/examples/actions/confirmation.php" method="post">
                <h2 class="text-center">Create New Account</h2>       
                <div class="form-group">
                    <input type="text" class="form-control" v-model="firstname" placeholder="firstname" >
                    <div v-show="firstNameError" class="text-danger">
                        ... Firstname is too short
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" v-model="lastname" placeholder="lastname" >
                     <div v-show="lastNameError" class="text-danger">
                        ... Lastname is too short
                    </div>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" v-model="email" placeholder="email" >
                     <div v-show="emailError" class="text-danger">
                        ... the email is not valid
                    </div>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" v-model="password" placeholder="Password" >
                     <div v-show="passwordError" class="text-danger">
                        ... Password is too short
                    </div>
                </div>
                <div class="form-group">
                    <button :disabled="!isValidForm" @click="submitRegister" type="submit" class="btn btn-primary btn-block">Create Account</button>
                </div>
                <div class="clearfix">
                    <a href="#" class="pull-right">Forgot Password?</a>
                </div>        
            </form>
            <p class="text-center">having account ? 
              <strong class="switch-tologin-modal" ><a href="#">Login</a></strong>
            </p>
          </div>
        </div>
      </div>
    </div>
 </div>
</template>

<script>
export default {
    data(){
        return{
            firstname:'',
            lastname:'',
            email:'',
            password:'',
        }
    },
    computed: {
        firstNameError(){
            return this.firstname.length>0 && this.firstname.length<4
        },
        lastNameError(){
            return this.lastname.length>0 && this.lastname.length<4
        },
        emailError(){
            return !(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/).test(this.email) && this.email.length>0;
        },
        passwordError(){
            return this.password.length>0 && this.password.length<7
        },
        isValidForm(){
            return this.firstname.length>4 && this.lastname.length>4 && 
            (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/).test(this.email)
            && this.password.length > 7
        }
    },
    methods:{
        submitRegister(){
            console.log('register');
        }
    }
    
}
</script>