<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
session_start();
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function index(){
        $all_published_items= DB::table('items')
            ->join('category','items.category_id','=','category.category_id')
            ->select('items.*','category.category_name')
            ->where('items.publication_status','on')
            ->limit(9)
            ->get();
        $manage_items = view('pages.home_content')
            ->with('all_published_items',$all_published_items);
        return view('layout')
            ->with('pages.home_content',$manage_items);
        //return view('pages.home_content');
    }
    public function show_product_by_category($category_id){
        $product_by_category= DB::table('items')
            /*->join('category','items.category_id','=','category.category_id')
            ->select('items.*','category.category_name')*/
            ->where('items.category_id',$category_id)
            ->where('items.publication_status','on')
            ->limit(9)
            ->get();
        $manage_product_by_category = view('pages.category_by_product')
            ->with('product_by_category',$product_by_category);
        return view('layout')
            ->with('pages.category_by_product',$manage_product_by_category);

    }

    public function items_details_by_id($item_id){

        $product_by_details= DB::table('items')
            ->where('item_id',$item_id)
            ->where('publication_status','on')
             ->first();

        $manage_product_by_details= view('pages.item_details')
            ->with('product_by_details',$product_by_details);
        return view('lay_out')
            ->with('pages.item_details',$manage_product_by_details);

    }


    public function search(Request $request){
        $searchData= $request->searchData;

        //start query for search
        $data = DB::table('items')
             ->join('category','items.category_id','=','category.category_id')
            ->where('items.item_name', 'like', '%' . $searchData . '%')
            ->get();
        $manage_product_by_category = view('pages.category_by_product')
            ->with('product_by_category',$data);
        return view('layout',[
            'data' => $data, 'catByUser' => $searchData
        ])
            ->with('pages.category_by_product',$manage_product_by_category);

    }


}
