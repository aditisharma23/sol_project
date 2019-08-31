
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
      <h3>Company Information</h3>
      <div class="form-group">
         <label for="CompanyName">Company Name<span class="required">*</span></label>
         <input type="text" id="CompanyName" v-model="$v.form.cname.$model" class="form-control">
         <!--ADD PASSWORD STRENGTH METER-->
         <p v-if="errors" class="error">
              <span v-if="!$v.form.cname.required">Please enter a valid company name.</span>
            </p>
      </div>
      <div class="form-group">
         <label for="Address">Address<span class="required">*</span></label>
        <input type="text" id="Address" v-model="$v.form.address.$model" placeholder="" class="form-control">
        <p v-if="errors" class="error">
              <span v-if="!$v.form.address.required">Please provide a valid address.</span>
            </p>
        
      </div>
      <div class="form-group">
        <label for="City">City<span class="required">*</span></label>
        <input type="text" id="City" placeholder="" v-model="$v.form.city.$model" class="form-control">
        <p v-if="errors" class="error">
              <span v-if="!$v.form.city.required">Please provide a valid city.</span>
            </p>
        
      </div>
      <div class="form-group">
         <label for="Province">Province<span class="required">*</span></label>
        <select class="custom-select d-block w-100" id="Province" v-model="$v.form.state.$model">
           <option value="">Choose...</option>
           <option>Ontario</option>
           <option>Quebec</option>
           <option>British Columbia</option>
           <option>Alberta</option>
           <option>Manitoba</option>
           <option>Saskatchewan</option>
           <option>Nova Scotia</option>
           <option>New Brunswick</option>
           <option>Newfoundland and Labrador</option>
           <option>Prince Edward Island</option>
           <option>Northwest Territories</option>
           <option>Nunavut</option>
           <option>Yukon</option>
        </select>
        <p v-if="errors" class="error">
              <span v-if="!$v.form.state.required">Please choose a valid province. </span>
            </p>
      </div>
      <div class="form-group">
        <label for="PostalCode">Postal Code<span class="required">*</span></label>
        <input type="text" id="PostalCode" placeholder="" v-model="$v.form.pcode.$model" class="form-control">
        <p v-if="errors" class="error">
              <span v-if="!$v.form.state.required">Please provide a valid postal code.</span>
            </p>
        
      </div>
      <div class="form-group">
         <label for="phone-mask-company">Company Phone <small class="text-muted">(999) 999-9999</small><span class="required">*</span></label>
            <input type="text" class="form-control phone-inputmask" v-model="$v.form.cphone.$model" id="phone-mask-company" im-insert="true">
            <p v-if="errors" class="error">
              <span v-if="!$v.form.cphone.required">Please provide a valid phone number.</span>
            </p>
            
        </div>
        <div class="form-group">
            <label for="companywebsite">Company Website<span class="required">*</span></label>
            <input type="text" id="companywebsite" placeholder="" v-model="$v.form.website.$model" class="form-control">
            <p v-if="errors" class="error">
              <span v-if="!$v.form.website.required">Please provide a valid website.</span>
            </p>
            
      </div>
      <hr>
      <h3>Service Details</h3>
        <div class="form-group">
            <label for="equipment">What type of equipment do you have?<span class="required">*</span></label>
            <input type="text" id="equipment" v-model="$v.form.equipment.$model" placeholder="" class="form-control">
            <p v-if="errors" class="error">
              <span v-if="!$v.form.equipment.required">Please provide a list of your equipment.</span>
            </p>
        </div>
        <div class="form-group">
            <label for="citieslist"> What cities can you service in Ontario?<span class="required">*</span></label>
            <input type="text" id="citieslist" v-model="$v.form.ccity.$model" placeholder="" class="form-control">
            <p v-if="errors" class="error">
              <span v-if="!$v.form.ccity.required">Please provide valid cities.</span>
            </p>
        </div>
        <div class="form-group">
            <label for="binsservice"> What type of bins can you service?<span class="required">*</span></label><br>
            <label class="custom-control custom-checkbox custom-control-inline">
            <input type="checkbox" class="custom-control-input" v-model="form.bins" value="1" ><span class="custom-control-label">Cart</span>
            </label>
             <label class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" value="2" v-model="form.bins"><span class="custom-control-label"  >Front Load</span>
            </label>
             <label class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" value="3" v-model="form.bins"><span class="custom-control-label"  >Open Top</span>
            </label>
            <!--p v-if="errors" class="error">
              <span v-if="!$v.form.bins.required">Please select which bins you can service.</span>
            </p-->
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
    name: "HaulerIndex",
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
                    cname: '',
                    address: '',
                    city: '',
                    state: '',
                    pcode: '',
                    cphone: '',
                    website: '',
                    equipment: '',
                    ccity: '',
                    bins: '',
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
    cname: {
      required
    },
    address: {
      required
    },
    city: {
      required
    },
    state: {
      required
    },
    pcode: {
      required
    },
    cphone: {
      required
    },
    website: {
      required
    },
    equipment: {
      required
    },
    ccity: {
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
                axios.post('/api/v1/hauler', newHauler)
                    .then(function (resp) {
                        app.$router.push({path: '/'});
                    })
                    .catch(function (resp) {
                        console.log(resp);
                        alert("Could not create hauler account");
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
