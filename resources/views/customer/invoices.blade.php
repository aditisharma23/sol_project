@extends('layouts.customer')

@section('content')

<router-view name="invoiceRow"></router-view>
<router-view></router-view>
     

    
@endsection
@section('scripts')
<script type="text/javascript">
	$('.nav-link').removeClass('active');
	$('.invoices').addClass('active');
</script>
@endsection