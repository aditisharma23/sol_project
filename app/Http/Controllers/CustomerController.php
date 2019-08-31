<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
   public function index()
   {    	
        return view('customer.index');
    }
    public function profilesetting(){
    	return view('customer.profilesetting');
    }
    public function services(){
    	return view('customer.services');
    }
    public function feedback(){
        return view('customer.feedback');
    }
    public function pickups(){
        return view('customer.pick-ups');
    }
    public function invoices(){
        return view('customer.invoices');
    }

}
