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
	                  <h2 class="pageheader-title">Feedback Form</h2>
	                  <div class="page-breadcrumb">
	                     <nav aria-label="breadcrumb">
	                        <ol class="breadcrumb">
	                           <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Sol Recycling</a></li>
	                           <li class="breadcrumb-item active" aria-current="page">Feedback</li>
	                        </ol>
	                     </nav>
	                  </div>
	               </div>
	            </div>
	         </div>
	         <div class="ecommerce-widget">
	            <div class="card">
	               <h5 class="card-header">Have feedback about on your experience with Sol Recycling or want to get more information? Fill this form out.</h5>
	               <div class="card-body p-rem-b">
	                   <router-view name="appFeedbackform"></router-view>
	                   <router-view></router-view>
	               </div>
	            </div>
	         </div>
	     </div>
	   </div>
   

    
@endsection
@section('scripts')
<script type="text/javascript">
	$('.nav-link').removeClass('active');
	$('.feedback').addClass('active');
</script>
@endsection