<?php

namespace App\Http\Controllers\Api\V1;

use App\Company;
use App\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function index()
    {
        // return Company::all();
        // $user = Auth::user();
        // print_r($user);
        // exit;
    }

    public function show($id)
    {
        return Customer::findOrFail($id);
        
    }

    public function update(Request $request, $id)
    {

        $company = Customer::findOrFail($id);
        $company->update($request->all());
        return $company;
    }

    public function store(Request $request)
    {
        $company = Customer::create($request->all());
        return $company;
    }

    public function destroy($id)
    {
        $company = Customer::findOrFail($id);
        $company->delete();
        return '';
    }
}
