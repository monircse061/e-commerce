<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
session_start();
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function index(){
        return view('admin.admin_login');
    }
    public function show_dashboard(){
        return view('admin.dashboard');
    }
    public function dashboard(Request $request){
        $admin_email=$request->admin_email;
        $admin_password=$request->admin_password;
        $result=DB::table('admin')
            ->where('admin_email',$admin_email)
            ->where('admin_password',$admin_password)
            ->first();
        if($result){
            Session::put('admin_name',$result->admin_name);
            Session::put('admin_id',$result->admin_id);
            return Redirect::to('/dashboard');
        }
        else{
           Session::put('meassge', 'Email or Password Invalid');
           return Redirect::to('/admin');
        }



    }
}
