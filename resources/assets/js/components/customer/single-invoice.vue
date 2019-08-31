<template>
	<div class="dashboard-wrapper">
		<div class="dashboard-ecommerce">
		   <div class="container-fluid dashboard-content ">
		      <!-- ============================================================== -->
		      <!-- pageheader  -->
		      <!-- ============================================================== -->
		      <div class="row">
		         <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
		            <div class="page-header">
		               <h2 class="pageheader-title">Invoice for 1655 Finfar Crt Unit 2B, Mississauga ON</h2>
		               <div class="page-breadcrumb">
		                  <nav aria-label="breadcrumb">
		                     <ol class="breadcrumb">
		                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Sol Recycling</a></li>
		                        <li class="breadcrumb-item active" aria-current="page">Invoice for ID # 45555</li>
		                     </ol>
		                  </nav>
		               </div>
		            </div>
		         </div>
		      </div>
		      <div class="download"><a href="" class="btn btn-sm btn-primary pull-right"><i class="fas fa-download"></i> Download Invoice</a></div>
		      <div class="row">
		         <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
		            <div class="card">
		               <div class="card-header p-4">
		                <img :src="`${publicPath}/images/sol-recycling-logo.png`">
		                  <div class="float-right">
		                     <h3 class="mb-0">Invoice #1</h3>
		                     Date: 3 Dec, 2020
		                  </div>
		               </div>
		               <div class="card-body">
		                  <div class="row mb-4">
		                     <div class="col-sm-6">
		                        <h5 class="mb-3">From:</h5>
		                        <h3 class="text-dark mb-1">Sol Recycling</h3>
		                        <div>5033 Maingate Dr.</div>
		                        <div>Mississauga, ON L4W 1G4</div>
		                        <div>Email: info@solrecycling.com</div>
		                        <div>Phone: (905) 602-0993</div>
		                     </div>
		                     <div class="col-sm-6">
		                        <h5 class="mb-3">To:</h5>
		                        <h3 class="text-dark mb-1">Company Name - ohn Abraham </h3>
		                        <div>478 Street Address</div>
		                        <div>City, ON L3F 3F2</div>
		                        <div>Email: info@companyemail.com</div>
		                        <div>Phone: (905) 444-4444</div>
		                     </div>
		                  </div>
		                  <div class="table-responsive-sm">
		                     <table class="table table-striped">
		                        <thead>
		                           <tr>
		                              <th class="center">#</th>
		                              <th>Item</th>
		                              <th>Description</th>
		                              <th class="right">Fixed Cost</th>
		                              <th class="center">Monthly</th>
		                              <th class="right">Total</th>
		                           </tr>
		                        </thead>
		                        <tbody>
		                           <tr>
		                              <td class="center">1</td>
		                              <td class="left strong">Cart - 1655 Finfar Crt, Mississauga</td>
		                              <td class="left">64 Gallon | Recycling | Weekly Pickups | Start Date: May 22, 2019</td>
		                              <td class="right">$100.00</td>
		                              <td class="center">$30</td>
		                              <td class="right">$130.00</td>
		                           </tr>
		                           
		                        </tbody>
		                     </table>
		                  </div>
		                  <div class="row">
		                     <div class="col-lg-4 col-sm-5">
		                     </div>
		                     <div class="col-lg-4 col-sm-5 ml-auto">
		                        <table class="table table-clear">
		                           <tbody>
		                              <tr>
		                                 <td class="left">
		                                    <strong class="text-dark">Subtotal</strong>
		                                 </td>
		                                 <td class="right">$130.00</td>
		                              </tr>
		                              <tr>
		                                 <td class="left">
		                                    <strong class="text-dark">Discount (10%)</strong>
		                                 </td>
		                                 <td class="right">$13</td>
		                              </tr>
		                              <tr>
		                                 <td class="left">
		                                    <strong class="text-dark">HST (13%)</strong>
		                                 </td>
		                                 <td class="right">$15.21</td>
		                              </tr>
		                              <tr>
		                                 <td class="left">
		                                    <strong class="text-dark">Total</strong>
		                                 </td>
		                                 <td class="right">
		                                    <strong class="text-dark">$132.20</strong>
		                                 </td>
		                              </tr>
		                              <tr>
		                              <td class="left">
		                                    <strong class="text-dark">Payment Complete: STRIPE # 355355</strong>
		                                 </td>
		                                 <td class="right">
		                                    <strong class="text-dark">$132.20</strong>
		                                 </td>
		                              </tr>
		                              <tr>
		                              <td class="left">
		                                    <strong class="text-dark">Balance</strong>
		                                 </td>
		                                 <td class="right">
		                                    <strong class="text-dark">$0.00</strong>
		                                 </td>
		                              </tr>
		                           </tbody>
		                        </table>
		                     </div>
		                  </div>
		               </div>
		               <div class="card-footer bg-white">
		                  <p class="mb-0">All Invoices will be charged to the credit card on file.</p>
		               </div>
		            </div>
		         </div>
		      </div>
		   </div>
		</div>
</div>
</template>
<script>
    export default {
        mounted() {
            let app = this;           
        },
       data () {
		  return {
		    publicPath: axios.defaults.baseURL
		  }
		}
    }
</script>