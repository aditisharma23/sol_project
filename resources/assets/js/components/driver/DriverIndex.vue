
<template>

              
          
              

      <form v-on:submit.prevent="saveForm()">
      
        <div class="form-group">
         <label for="firstName" class="">First Name<span class="required">*</span></label>
            <input type="text" id="firstName" v-model="$v.form.fname.$model" placeholder="" class="form-control">
            <p v-if="errors" class="error">
              <span v-if="!$v.form.fname.required">Please provide a first name.</span>
            </p>
        </div>
        <div class="form-group">
         <label for="lastName" class="">Last Name<span class="required">*</span></label>
            <input type="text" id="lastName" v-model="$v.form.lname.$model" placeholder="" class="form-control">
            <p v-if="errors" class="error">
              <span v-if="!$v.form.lname.required">Please provide a last name.</span>
            </p>
        </div>
        <div class="form-group">
         <label for="phone-mask">Phone Number <small class="text-muted">(999) 999-9999</small><span class="required">*</span></label>
            <input type="text" class="form-control phone-inputmask" id="phone-mask" im-insert="true" v-model="$v.form.phone.$model">
            <p v-if="errors" class="error">
              <span v-if="!$v.form.phone.required">Please provide a valid phone number.</span>
            </p>
        </div>
        <div class="form-group">
            <label for="EmailAddress">Email<span class="required">*</span></label>
            <input type="email" id="EmailAddress" v-model="$v.form.email.$model" placeholder="test@test.com" class="form-control">
            <p v-if="errors" class="error">
              <span v-if="!$v.form.email.required">Please provide a valid email.</span>
              <span v-if="!$v.form.email.email">Please provide a valid email.</span>
            </p>
      </div>
      <div class="form-group">
         <label for="NewPassword">Password<span class="required">*</span></label>
         <input type="password" id="NewPassword" v-model="$v.form.pass.$model" class="form-control">
         <!--ADD PASSWORD STRENGTH METER-->
         <p v-if="errors" class="error">
          <span v-if="!$v.form.pass.required">this field is required.</span>
          <span
            v-if="!$v.form.pass.strongPassword"
          >Strong passwords need to have a letter, a number, a special character, and be more than 8 characters long.</span>
        </p>
      </div>
      <div class="form-group">
         <label for="Newpasswordconfirm">Repeat Password<span class="required">*</span></label>
         <input type="password" id="Newpasswordconfirm" data-parsley-equalto="#NewPassword" placeholder="" v-model="$v.form.cpass.$model" class="form-control">
         <p v-if="errors" class="error">
          <span v-if="!$v.form.cpass.required">this field is required.</span>
          <span v-if="!$v.form.cpass.sameAsPassword">The passwords do not match.</span>
        </p>
      </div>
      <hr>
      
      <h3>Service Details</h3>
      <div class="form-group">
          <label for="yearsofservice">Years of Service in Industry<span class="required">*</span></label>
          <input type="text" id="yearsofservice" placeholder="" class="form-control" v-model="$v.form.yearsofservice.$model">
          <p v-if="errors" class="error">
              <span v-if="!$v.form.yearsofservice.required">Please provide enter years of service.</span>
            </p>
          
      </div>
      <div class="form-group">
          <label for="resume">Upload Resume <small class="text-muted">(DOC / PDF/ RTF) format </small><span class="required">*</span></label>
          <input type="file" id="resume" placeholder="" class="form-control"  v-on:change="$v.form.resume.$model">
          <p v-if="errors" class="error">
              <span v-if="!$v.form.resume.required">Please upload a resume.</span>
            </p>
          
      </div>
        
        
        <div class="form-group">
            <label for="binsservice"> When are you available to provide service?<span class="required">*</span></label><br/>
        <label class="custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" class="custom-control-input" v-model="form.available"><span class="custom-control-label">Monday</span>
                </label>
                 <label class="custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" class="custom-control-input" v-model="form.available"><span class="custom-control-label">Tuesday</span>
                </label>
                 <label class="custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" class="custom-control-input" v-model="form.available"><span class="custom-control-label">Wednesday</span>
                </label>
                  <label class="custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" class="custom-control-input" v-model="form.available"><span class="custom-control-label">Thursday</span>
                </label>
                 <label class="custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" class="custom-control-input" v-model="form.available"><span class="custom-control-label">Friday</span>
                </label>
                <!--p v-if="errors" class="error">
              <span v-if="!$v.form.available.required">Please select days of service.</span>
            </p-->
        </div>
         <div class="form-group">
            <label class="custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox" @change="$v.form.term.$touch()" v-model="$v.form.term.$model"><span class="custom-control-label">By creating an account, you agree to the <a href="#">terms and conditions</a></span>
            </label>
            <p v-if="errors" class="error">
              <span v-if="!$v.form.term.required">Please accept term & conditions.</span>
            </p>
            
        </div>
        <div class="form-group pt-2">
            <button @click="$v.$touch()" class="btn btn-block btn-primary" type="submit">Sign Up Now</button>
        </div>
    </form>
            
    

    
</template>

<script>
import { required, email, minLength, sameAs } from "vuelidate/lib/validators";
    export default {
    name: "DriverIndex",
        data: function () {
            return {
      errors: false,
      empty: true,
                form: {
                    fname: '',
                    lname: '',
                    phone: '',
                    email: '',
                    pass: '',
                    cpass: '',
                    yearsofservice: '',
                    resume: '',
                    available: '',
                    term: '',
                }
            }
        },
        validations: {
        form:{
            fname: {
      required
    },
    lname: {
      required
    },
    phone: {
      required
    },
    email: {
      required,
      email
    },
    pass: {
        required,
        strongPassword(pass) {
          return (
            /[a-z]/.test(pass) && //checks for a-z
            /[0-9]/.test(pass) && //checks for 0-9
            /\W|_/.test(pass) && //checks for special char
            pass.length >= 8
          );
        }
      },
      cpass: {
        required,
        sameAsPassword: sameAs("pass")
      },
    yearsofservice: {
      required
    },
    resume: {
      required
    },
    term: {
        sameAs: sameAs( () => true )
      }
        }
  },
        methods: {
            saveForm() {
            this.empty = !this.$v.form.$anyDirty;
      this.errors = this.$v.form.$anyError;
      if (this.errors === false && this.empty === false) {
                var app = this;
                var newHauler = app.form;
                axios.post('/api/v1/driver', newHauler)
                    .then(function (resp) {
                        app.$router.push({path: '/'});
                    })
                    .catch(function (resp) {
                        console.log(resp);
                        alert("Could not create driver account");
                    });
                }
            }
        }
    }
</script>
<style>

.error {
  color: red;
}
</style>
