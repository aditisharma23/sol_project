<template>
 <div class="dashboard-wrapper">
   <div class="dashboard-ecommerce">
      <div class="container-fluid dashboard-content ">
        
         <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
               <div class="page-header">
                  <h2 class="pageheader-title">Welcome to Sol Recycling </h2>
                  <div class="page-breadcrumb">
                     <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                           <li class="breadcrumb-item active" aria-current="page">Sol Recycling</li>
                        </ol>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
       
         <div class="ecommerce-widget">
            <div class="row">
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="card">
                     <h5 class="card-header">Pending Pickups</h5>
                     <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                           <app-pickup></app-pickup>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                           <app-pickup></app-pickup>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                           <app-pickup></app-pickup>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="card">
                     <h5 class="card-header">Services</h5>
                       <app-serviceswidget></app-serviceswidget>
                     <div class="card-footer text-center">
                        <a href="#" class="btn-primary-link">View All Services</a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
              
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                  <div class="card">
                     <h5 class="card-header">Recent Transactions</h5>
                     <div class="card-body">
                        <div class="info-section">
                           <div class="border-1">
                              <p><strong>$50.00</strong> payment processed for <strong>ID# 35355 - Open Top</strong></p>
                              <p class="small"><span class="yellow"><i class="fa fa-clock"></i></span> April 8, 2019, 9am-12pm</p>
                           </div>
                        </div>
                     </div>
                     <div class="card-body">
                        <div class="info-section">
                           <div class="border-1">
                              <p><strong>$50.00</strong> payment processed for <strong>ID# 35355 - Open Top</strong></p>
                              <p class="small"><span class="yellow"><i class="fa fa-clock"></i></span> April 8, 2019, 9am-12pm</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
              
               <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                  <div class="card">
                     <h5 class="card-header">Feedback Form</h5>
                     <div class="card-body p-rem-b">
                     <app-feedback></app-feedback>
                     </div>
                  </div>
               </div>
              
            </div>
           
           
         </div>
    
      </div>
   </div>
   </div>
   
</template>


<script>
import AppFeedback from './AppFeedbackform';
import AppPickup from './AppPickup-overview-template';
import AppServiceswidget from './AppServices-widgets';
    export default {
       name: 'CustomerIndex',
        components: {
          AppFeedback,
          AppPickup,
          AppServiceswidget,
        },
        data: function () {
            return {
                companies: []
            }
        },
        mounted() {
            var app = this;
            console.log(app);
            axios.get('/api/v1/companies')
                .then(function (resp) {
                    app.companies = resp.data;
                })
                .catch(function (resp) {
                    console.log(resp);
                    alert("Could not load companies");
                });
        },
        methods: {
            deleteEntry(id, index) {
                if (confirm("Do you really want to delete it?")) {
                    var app = this;
                    axios.delete('/api/v1/companies/' + id)
                        .then(function (resp) {
                            app.companies.splice(index, 1);
                        })
                        .catch(function (resp) {
                            alert("Could not delete company");
                        });
                }
            }
        }
    }
</script>
