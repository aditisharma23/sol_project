<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use App\User;
use Mail;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function index()
    {
        return User::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return User::findOrFail($id);
    }

    public function open()
    {
        echo '1111111'; die; 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request)
    {
         $user = $request->all();
         $user['uuid'] = Str::uuid()->toString();
         if($request->input('email'))
         {
                $condition = [['email','=',$user['email']]];
                $check = \App\Common::getfirst('users',$condition);
                if(isset($check) && (!empty($check)))
                {
                    $data['msg']='Email is already exists';
                    $data['status'] = 0;
                    $data['udata'] = 'null';
                  return json_encode($data);
                }

                 $user['password'] = Hash::make($request->input('password'));
                if ($request->hasFile('resume')) {
                  $user['resume'] = time().'.'.$request->resume->getClientOriginalExtension();
                  $request->resume->storeAs('resume', $user['resume']);
                }
                $company = User::create($user);
          }else if($request->hasFile('image') && $request->input('path'))
          {
                 $company['image'] = time().'.'.$request->image->getClientOriginalExtension();
                  $request->image->storeAs($request->input('path'), $company['image']);
                  $company = json_encode($company);
          }
        return $company;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       return User::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /* x-www-form-urlencoded used for update and PUT methode used */
    public function update(Request $request, $id)
    {       
         $user = $request->all();
         $user['uuid'] = Str::uuid()->toString();
        $condition = [['email','=',$user['email']],['id','!=',$id]];
        $check = \App\Common::getfirst('users',$condition);
        if(isset($check) && (!empty($check)))
        {
            $data['msg']='Email is already exists';
            $data['status'] = 0;
            $data['udata'] = 'null';
          return json_encode($data);
        }
        $company = User::findOrFail($id);
        $company->update($user);
        return $company;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $company = User::findOrFail($id);
        $company->delete();
        return 'deleted';
    }


    public function login(Request $request)
    {
        $credentials = $request->all();
        $condition = [['email','=',$credentials['email']]];
        $check = \App\Common::getfirst('users',$condition);
        if(isset($check) && (!empty($check)))
        {
            $pwd = $credentials['password'];
            if(Hash::check($pwd,$check->password))
            {
                if(!empty($check))
                {
                 $data['msg'] = 'Login successfully!!';
                 $data['status'] = 1;
                 $data['udata'] = $check;
                }
                else{
                 $data['msg']='';
                 $data['status'] = 0;
                 $data['udata'] = 'null';
                }
            }
            else{
                    $data['msg'] = 'Invalid email or password!!';
                    $data['status'] = 0;
                    $data['udata'] = 'null';
            }
        }
        else{
        $data['msg']='Invalid email or password!!';
        $data['status'] = 0;
        $data['udata'] = 'null';
        }
        return json_encode($data);
    }

    public function updatepassword(Request $request,$id)
    {
        $user = $request->all();
      if($request->input('opassword') && $request->input('confirm') && $request->input('password'))
        {
            if($user['confirm'] != $user['password'])
            {
                $data['msg'] = "Confirm password doesn't match";
                $data['status'] = 2;
                $data['data'] = 'null';
            }
            $check = \App\Common::getfirst('users',array('id'=>$id));
            if(!empty($check))
            {
                $pwd = Hash::check($user['opassword'], $check->password);
                    if($pwd==1)
                    {
                        $user['password'] = Hash::make($user['password']);
                             $company = User::findOrFail($id);
                             $company->update($user);
                            $data['msg'] = 'Password changed successfully!!';
                            $data['status'] = 1;
                            $data['data'] = $company;
                    }else{
                            $data['msg'] = 'Invalid old password!!';
                            $data['status'] = 2;
                            $data['data'] = 'null';
                    }
                }else
                {
                    $data['msg']='Request data not found';
                    $data['status'] = 0;
                    $data['data'] = 'null';
                }
        }else if($request->input('opassword') || $request->input('confirm') || $request->input('password'))
        {
                $data['msg'] = 'Invalid old password!!';
                $data['status'] = 2;
                $data['data'] = 'null';
        }
      return json_encode($data);
    }

    public function getcheck(Request $request)
    {
        $credentials = $request->all();
        $condition = [['email','=',$credentials['email']]];
        $check = \App\Common::getfirst('users',$condition);
        if(isset($check) && (!empty($check)))
        {
            $data['msg'] = 'exists';
            $data['status'] = 1;
        }else
        {
            $data['msg'] = 'not exists';
            $data['status'] = 0;
        }
        return json_encode($data);
    }

    
}
