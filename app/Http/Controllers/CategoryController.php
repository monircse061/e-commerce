<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
//use App\Http\Requests;
use Session;
session_start();
use Illuminate\Support\Facades\Redirect;
class CategoryController extends Controller
{
    /// SHOW CATEGORY PAGE........................
    public function index(){
        return view('admin.add_category');
    }
    /// UNACTIVE CATEGORY........................
    public function unactive_category($category_id){
        DB::table('category')
            ->where('category_id',$category_id)
            ->update(['publication_status'=>0]);
        Session::put('message','Category UnActive Sucessfully !!');
        return Redirect::to('/all-category');
    }
    /// ACTIVE CATEGORY........................
    public function active_category($category_id){
        DB::table('category')
            ->where('category_id',$category_id)
            ->update(['publication_status'=>'on']);
        Session::put('messages','Category Active Sucessfully !!');
        return Redirect::to('/all-category');
    }
    /// ALL CATEGORY........................
    public function all_category(){
        $all_category_info = DB::table('category')->get();
        $manage_category = view('admin.all_category')
            ->with('all_category_info',$all_category_info);
        return view('admin_layout')
            ->with('admin.all_category',$manage_category);

    }
    /// SAVE CATEGORY........................
    public function save_category(Request $request){
        $data =array();
        $data['category_name']=$request->category_name;
        $data['image']=$request->image;
        $data['category_description']=$request->category_description;
        $data['publication_status']=$request->publication_status;
        DB::table('category')->insert($data);
        Session::put('message','Category Added Sucessfully !!');
         return Redirect::to('/add-category');
    }
    /// EDIT CATEGORY........................
    public function edit_category($category_id){
        $category_edit_info = DB::table('category')
            ->where('category_id',$category_id)
            ->first();
        $manage_edit_category = view('admin.edit_category')
            ->with('category_edit_info',$category_edit_info);
        return view('admin_layout')
            ->with('admin.edit_category',$manage_edit_category);
    }
    /// UPDATE CATEGORY........................
    public function update_category(Request $request,$category_id){
        $data=array();
        $data['category_name']=$request->category_name;
        $data['category_description']=$request->category_description;
        $data['image']=$request->image;

        DB::table('category')
            ->where('category_id',$category_id)
            ->update($data);
        Session::put('messages','Category Updated Successfully !!');
        return Redirect::to('/all-category');
    }
    /// DELETE CATEGORY........................
    public function delete_category($category_id){
        DB::table('category')
            ->where('category_id',$category_id)
            ->delete();
        Session::put('message','Category Deleted Successfully !!');
        return Redirect::to('/all-category');
    }


}
