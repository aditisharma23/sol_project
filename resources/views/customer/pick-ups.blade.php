@extends('layouts.customer')

@section('content')
	<div class="dashboard-wrapper">
  	 <div class="dashboard-ecommerce">
      <div class="container-fluid dashboard-content ">
         <!-- ============================================================== -->
         <!-- pageheader  -->
         <!-- ============================================================== -->
         <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
               <div class="page-header">
                  <h2 class="pageheader-title">Pick-ups</h2>
                  <div class="page-breadcrumb">
                     <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Sol Recycling</a></li>
                           <li class="breadcrumb-item active" aria-current="page">Pick-ups</li>
                        </ol>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
         <div class="ecommerce-widget">
            <div class="pills-regular">
               <ul class="nav nav-pills mb-1" id="pills-tab" role="tablist">
                  <li class="nav-item">
                     <a class="nav-link active pickups" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="home" aria-selected="true">Upcoming</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="profile" aria-selected="false">Completed</a>
                  </li>
               </ul>
               <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                     <router-view name="pickupsWidgets"></router-view>
                  </div>
                  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                     <router-view name="pickupsWidgets"></router-view>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   </div>
    
@endsection
@section('scripts')
<script type="text/javascript">
	$('.nav-link').removeClass('active');
	$('.pickups').addClass('active');
</script>
@endsection