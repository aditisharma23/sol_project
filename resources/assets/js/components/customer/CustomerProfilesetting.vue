<template>
<div class="card-body p-rem-b">
  <form v-on:submit.prevent="saveForm()">
                              <div class="form-group row">
                                 <label for="firstName" class="col-12 col-sm-3 col-form-label text-sm-right">First Name<span class="required">*</span></label>
                                 <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text" v-model="customer.name" required="" id="firstName" placeholder="First Name" class="form-control">
                                    <div class="invalid-feedback">
                                       Please provide a first name.
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="lastName" class="col-12 col-sm-3 col-form-label text-sm-right">Last Name<span class="required">*</span></label>
                                 <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text" required="" v-model="customer.lname" id="lastName" placeholder="Last Name" class="form-control">
                                    <div class="invalid-feedback">
                                       Please provide a last name.
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="BusinessName" class="col-12 col-sm-3 col-form-label text-sm-right">Business Name</label>
                                 <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text" v-model="customer.business_name" id="BusinessName" placeholder="" class="form-control">
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="TypeofAccount" class="col-12 col-sm-3 col-form-label text-sm-right">Type of Account<span class="required">*</span></label>
                                 <div class="col-12 col-sm-8 col-lg-6">
                                    <select v-model="customer.type_of_account" class="custom-select d-block w-100" id="TypeofAccount" required="">
                                       <option value="">Choose...</option>
                                       <option>Business</option>
                                       <option>Residential</option>
                                    </select>
                                    <div class="invalid-feedback">
                                       Please choose type of account. 
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="EmailAddress" class="col-12 col-sm-3 col-form-label text-sm-right">Email<span class="required">*</span></label>
                                 <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="email" required="" id="EmailAddress"  class="form-control" v-model="customer.email">
                                    <div class="invalid-feedback">
                                       Please provide a valid email.
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="phone-mask" class="col-12 col-sm-3 col-form-label text-sm-right">Phone Number <small class="text-muted">(999) 999-9999</small><span class="required">*</span></label>
                                 <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text" v-model="customer.phone" class="form-control phone-inputmask" id="phone-mask" im-insert="true">
                                    <div class="invalid-feedback">
                                       Please provide a valid phone number.
                                    </div>
                                 </div>
                              </div>
                              <hr class="mb-4">
                              <h3>Billing Address</h3>
                              <div class="form-group row">
                                 <label for="Address" class="col-12 col-sm-3 col-form-label text-sm-right">Address<span class="required">*</span></label>
                                 <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text" required="" v-model="customer.baddress" id="Address" placeholder="" class="form-control">
                                    <div class="invalid-feedback">
                                       Please provide a valid address.
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="City" class="col-12 col-sm-3 col-form-label text-sm-right">City<span class="required">*</span></label>
                                 <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text" required="" v-model="customer.bcity" id="City" placeholder="" class="form-control">
                                    <div class="invalid-feedback">
                                       Please provide a valid city.
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="Province" class="col-12 col-sm-3 col-form-label text-sm-right">Province<span class="required">*</span></label>
                                 <div class="col-12 col-sm-8 col-lg-6">
                                    <select class="custom-select d-block w-100" id="Province" v-model="customer.bprovince" required="">
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
                                    <div class="invalid-feedback">
                                       Please choose a valid province. 
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="PostalCode" class="col-12 col-sm-3 col-form-label text-sm-right">Postal Code<span class="required">*</span></label>
                                 <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text" required="" id="PostalCode" placeholder="" class="form-control" v-model="customer.bpostal_code">
                                    <div class="invalid-feedback">
                                       Please provide a valid postal code.
                                    </div>
                                 </div>
                              </div>
                              <hr class="mb-4">
                              <h3>Update Profile Image</h3>
                              <img src="assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle">
                              <hr class="mb-4">
                              <h3>Notifications</h3>
                              <div class="form-group row">
                                 <label for="City" class="col-12 col-sm-3 col-form-label text-sm-right">Email Notifications</label>
                                 <div class="col-12 col-sm-8 col-lg-6">
                                    <div class="switch-button switch-button-sm">
                                       <input type="checkbox" checked="" name="switch13" id="switch13"><span>
                                       <label for="switch13"></label></span>
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="City" class="col-12 col-sm-3 col-form-label text-sm-right">SMS Notifications</label>
                                 <div class="col-12 col-sm-8 col-lg-6">
                                    <div class="switch-button switch-button-sm">
                                       <input type="checkbox" checked="" name="switch13" id="switch13"><span>
                                       <label for="switch13"></label></span>
                                    </div>
                                 </div>
                              </div>
                              <div class="form group row">
                                 <label class="col-12 col-sm-3 col-form-label text-sm-right">&nbsp;</label>
                                 <div class="col-12 col-sm-8 col-lg-6">
                                    <button class="btn btn-primary" type="submit">Update Profile</button>
                                 </div>
                              </div>
                        </form>
        </div>
</template>

<script>
    export default {
        mounted() {
            let app = this;
            let id = this.$userId;
            app.customerId = id;
            axios.get('/api/v1/customer/' + id)
                .then(function (resp) {
                    app.customer = resp.data;
                    //console.log(resp);
                })
                .catch(function () {
                    alert("Could not load your company")
                });
        },
        data: function () {
            return {
                customerId: null,
                customer: {
                    name: '',
                    lname: '',
                    business_name: '',
                    type_of_account: '',
                    phone: '',
                    badress: '',
                    bcity: '',
                    bprovince: '',
                    bpostal_code: '',
                }
            }
        },
        methods: {
            saveForm() {
                var app = this;
                var newCustomer = app.customer;
                axios.patch('/api/v1/customer/' + app.customerId, newCustomer)
                    .then(function (resp) {
                        app.$router.push({ name: "CustomerIndex"})



                    })
                    .catch(function (resp) {
                        console.log(resp);
                        alert("Could not create your company");
                    });
            }
        }
    }
</script>
