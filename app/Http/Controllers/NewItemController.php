<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
//use App\Http\Requests;
use Session;
session_start();
use Illuminate\Support\Facades\Redirect;

class NewItemController extends Controller
{
    public function index(){
        return view('admin.add_new_item');
    }
    /// SAVE NEW ITEMS........................
    public function save_new_item(Request $request){


            $data =array();
            $data['new_item_name']=$request->new_item_name;
            $data['publication_status']=$request->publication_status;
            DB::table('new_item')->insert($data);
            Session::put('message','Category Added Sucessfully !!');
            return Redirect::to('/add-new-item');
    }
    /// ALL NEW ITEMS........................
    public function all_new_item(){
        $all_newitem_info = DB::table('new_item')->get();
        $manage_new_item = view('admin.all_new_item')
            ->with('all_newitem_info',$all_newitem_info);
        return view('admin_layout')
            ->with('admin.all_new_item',$manage_new_item);
        //return view('admin.all_category');
    }
    /// UNACTIVE NEW ITEMS........................
    public function unactive_new_item($new_item_id){
        DB::table('new_item')
            ->where('new_item_id',$new_item_id)
            ->update(['publication_status'=>0]);
        Session::put('message','New item UnActive Sucessfully !!');
        return Redirect::to('/all-new-item');
    }
    /// ACTIVE NEW ITEMS........................
    public function active_new_item($new_item_id){
        DB::table('new_item')
            ->where('new_item_id',$new_item_id)
            ->update(['publication_status'=>'on']);
        Session::put('messages','New item Active Sucessfully !!');
        return Redirect::to('/all-new-item');
    }

    /// EDIT NEW ITEMS........................
    public function edit_new_item($new_item_id){
        $new_item_edit_info = DB::table('new_item')
            ->where('new_item_id',$new_item_id)
            ->first();
        $manage_edit_category = view('admin.edit_new_item')
            ->with('all_newitem_info',$new_item_edit_info);
        return view('admin_layout')
            ->with('admin.edit_new_item',$manage_edit_category);
    }
    /// UPDATE NEW ITEMS........................
    public function update_new_item(Request $request,$new_item_id){
        $data=array();
        $data['new_item_name']=$request->new_item_name;


        DB::table('new_item')
            ->where('new_item_id',$new_item_id)
            ->update($data);
        Session::put('messages','New Item Updated Successfully !!');
        return Redirect::to('/all-new-item');
    }
    /// DELETE NEW ITEMS........................
    public function delete_new_item($new_item_id){
        DB::table('new_item')
            ->where('new_item_id',$new_item_id)
            ->delete();
        Session::put('message','New Item Deleted Successfully !!');
        return Redirect::to('/all-new-item');
    }
}
