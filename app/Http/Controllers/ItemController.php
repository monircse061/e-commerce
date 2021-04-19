<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
session_start();
use Illuminate\Support\Facades\Redirect;

class ItemController extends Controller
{
    public function index(){
        return view('admin.add_item');
    }
    /// SAVE ITEM........................
    public function save_item(Request $request){
        $data =array();
        $data['item_name']=$request->item_name;
        $data['category_id']=$request->category_id;


        $data['item_short_description']=$request->item_short_description;
        $data['item_long_description']=nl2br($request->item_long_description);
        $data['item_price']=$request->item_price;
        $data['publication_status']=$request->publication_status;

        $image=$request->file('item_image');
        if($image){
            $image_name=str_random(20);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if($success){
                $data['item_image']=$image_url;
                DB::table('items')->insert($data);
                Session::put('message','Item Added Sucessfully !!');
                return Redirect::to('/add-item');
            }
        }
        $data['item_image']='';
        DB::table('items')->insert($data);
        Session::put('message','Item Added Sucessfully without image !!');
        return Redirect::to('/add-item');
    }
    /// ALL ITEMS........................
    public function all_item(){
        $all_items_info = DB::table('items')
            ->join('category','items.category_id','=','category.category_id')
            ->select('items.*','category.category_name')
            ->get();
        $manage_items = view('admin.all_item')
            ->with('all_items_info',$all_items_info);
        return view('admin_layout')
            ->with('admin.all_item',$manage_items);

    }
    /// UNACTIVE ITEMS........................
    public function unactive_item($item_id){

        DB::table('items')
            ->where('item_id',$item_id)
            ->update(['publication_status'=>0]);
        Session::put('message','Category UnActive Sucessfully !!');
        return Redirect::to('/all-item');
    }
    /// ACTIVE ITEMS........................
    public function active_item($item_id){

        DB::table('items')
            ->where('item_id',$item_id)
            ->update(['publication_status'=>'on']);
        Session::put('messages','Category Active Sucessfully !!');
        return Redirect::to('/all-item');
    }
    /// DELETE ITEMS........................
    public function delete_item($item_id){
        DB::table('items')
            ->where('item_id',$item_id)
            ->delete();
        Session::put('message','Category Deleted Successfully !!');
        return Redirect::to('/all-item');
    }
    /// EDIT ITEMS........................
    public function edit_item($item_id){
        $item_edit_info = DB::table('items')
            ->where('item_id',$item_id)
            ->join('category','items.category_id','=','category.category_id')
            ->first();
        $manage_item = view('admin.edit_item')
            ->with('item_edit_info',$item_edit_info);
        return view('admin_layout')
            ->with('admin.edit_item',$manage_item);
    }

    /// UPDATE ITEMS........................
    public function update_item(Request $quest,$item_id)
    {


        $data =array();
        $data['item_name']=$quest->item_name;



        $data['item_short_description']=$quest->item_short_description;
        $data['item_long_description']=$quest->item_long_description;

        $data['item_price']=$quest->item_price;

        DB::table('items')
            ->where('item_id',$item_id)
            ->update($data);
        Session::put('messages','Item Updated Successfully !!');
        return Redirect::to('/all-item');

        /*$image=$quest->file('item_image');
        if($image){
            $image_name=str_random(20);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if($success){
                $data['item_image']=$image_url;

            }
            else
            {
                echo"not working";
            }
        }*/



    }
    /// Active_Order
    public function active_order($order_id){

        DB::table('order')
            ->where('order_id',$order_id)
            ->update(['order_status'=>'success']);
        Session::put('messages','Order Successfully Done !!');
        return Redirect::to('/manage-order');
    }
    /// Unactive_Order

    public function unactive_order($order_id){

        DB::table('order')
            ->where('order_id',$order_id)
            ->update(['order_status'=>'pending']);
        Session::put('message','Order UnActive Sucessfully !!');
        return Redirect::to('/manage-order');
    }
    /// DELETE ORDER
    public function delete_order($order_id){

            DB::table('order')
                ->where('order_id',$order_id)
                ->delete();
            Session::put('message','Order Deleted Successfully !!');
            return Redirect::to('/manage-order');
    }

    /// Active_payment
    public function active_payment($payment_id){

        DB::table('payment')
            ->where('payment_id',$payment_id)
            ->update(['payment_status'=>'success']);
        Session::put('messages','Payment Successfully Done !!');
        return Redirect::to('/payment_dashboard');
    }

    /// Unactive_Order
    public function unactive_payment($payment_id){

        DB::table('payment')
            ->where('payment_id',$payment_id)
            ->update(['payment_status'=>'pending']);
        Session::put('message','Payment UnActive Sucessfully !!');
        return Redirect::to('/payment_dashboard');
    }



}
