@extends('layouts.customer')

@section('content')
    <!-- <router-view name="customerIndex"></router-view> -->
     <router-view name="customerIndex"></router-view>
     <router-view></router-view>

    
@endsection
@section('scripts')
<script type="text/javascript">
	$('.nav-link').removeClass('active');
	$('.home').addClass('active');
</script>
@endsection