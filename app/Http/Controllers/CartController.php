<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Cart;
use Illuminate\Support\Facades\Redirect;

class CartController extends Controller
{
    public  function add_to_cart(Request $request){
        $qty=$request->qty;
        $item_id=$request->item_id;
         $item_info=DB::table('items')
                   ->where('item_id',$item_id)
                   ->first();
         $data =array();
         $data['qty']=$qty;
         $data['id']=$item_info->item_id;
         $data['name']=$item_info->item_name;
         $data['price']=$item_info->item_price;
         $data['options']['image']=$item_info->item_image;

         Cart::add($data);

         return Redirect::to('/show-cart');
    }

    public  function show_cart()
    {
        $all_published_category = DB::table('category')
            ->where('publication_status','on')
            ->get();
        $manage_published_category = view('pages.add_to_cart')
            ->with('all_published_category',$all_published_category);
        return view('lay_out')
            ->with('pages.add_to_cart',$manage_published_category);
    }

     public  function  delete_to_cart($rowId)
     {
              Cart::update($rowId,0);
              return Redirect::to('/show-cart');
     }

     public function update_cart(Request $request)
     {
            $qty= $request->qty;
            $rowId= $request->rowId;
         Cart::update($rowId,$qty);
         return Redirect::to('/show-cart');
     }


}
