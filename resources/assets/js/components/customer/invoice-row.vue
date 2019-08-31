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
                       <h2 class="pageheader-title">Invoices</h2>
                       <div class="page-breadcrumb">
                          <nav aria-label="breadcrumb">
                             <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Sol Recycling</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Invoices</li>
                             </ol>
                          </nav>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="ecommerce-widget">
                 <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    </div>
                 </div>
                 <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                       <div class="card">
                          <div class="card-header">
                             &nbsp;
                             <div class="pull-right">
                                <button type="button" class="btn btn-sm btn-secondary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Filter By Month/YY
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="FilterCategory">
                                   <!--ADD CALENDAR FILTER HERE-->
                                   
                                </div>
                             </div>
                          </div>
                          <div class="card-body p-0">
                            <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-light">
                                            <tr class="border-0">
                                                <th class="border-0">Status</th>
                                                <th class="border-0">Date</th>
                                                <th class="border-0">Number</th>
                                                <th class="border-0">Address</th>
                                                <th class="border-0">Amount</th>
                                                <th class="border-0">Actions</th>
                                             </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><label class="ml-1 btn btn-sm btn-primary">Paid</label></td>
                                                <td>01/01/2019 </td>
                                                <td>IN 403244</td>
                                                <td>1655 Finfar Crt Unit 2B, Mississauga - ID # 549543</td>
                                                <td>$80.00</td>
                                                <td><a href="" class="icon-circle-small icon-box-md text-success bg-success-light"><i class="fas fa-download"></i></a> 
                                               <router-link :to="{name: 'singleInvoice'}" class="icon-circle-small icon-box-md text-secondary bg-secondary-light"><i class="fas fa-lg fa-eye"></i></router-link>
                                                    
                                               </td>
                                            </tr>
                                            <tr>
                                                <td><label class="ml-1 btn btn-sm btn-danger">Draft</label></td>
                                                <td>01/01/2019 </td>
                                                <td>IN 403244</td>
                                                <td>1655 Finfar Crt Unit 2B, Mississauga - ID # 549543</td>
                                                <td>$80.00</td>
                                                <td><a href="" class="icon-circle-small icon-box-md text-success bg-success-light"><i class="fas fa-download"></i></a><router-link :to="{name: 'singleInvoice'}" class="icon-circle-small icon-box-md text-secondary bg-secondary-light"><i class="fas fa-lg fa-eye"></i></router-link></td>

                                            </tr>
                                            <tr>
                                                <td><label class="ml-1 btn btn-sm btn-success">Overdue</label></td>
                                                <td>01/01/2019 </td>
                                                <td>IN 403244</td>
                                                <td>1655 Finfar Crt Unit 2B, Mississauga - ID # 549543</td>
                                                <td>$80.00</td>
                                                <td><a href="" class="icon-circle-small icon-box-md text-success bg-success-light"><i class="fas fa-download"></i></a> <router-link :to="{name: 'singleInvoice'}" class="icon-circle-small icon-box-md text-secondary bg-secondary-light"><i class="fas fa-lg fa-eye"></i></router-link> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>                             
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
</div>

</template>
