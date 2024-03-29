<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Http\Requests;
use Session;
use Cart;
session_start();
use Illuminate\Support\Facades\Redirect;

class CheckoutController extends Controller
{
    public function login_check()
    {
       return view('pages.login');

    }
    public function customer_registration(Request $request)
    {
        $customer_name=$request->customer_name;
        $data=array();
        $data['customer_name']=$request->customer_name;
        $data['customer_email']=$request->customer_email;
        $data['customer_address']=$request->customer_address;
        $data['password']=md5($request->password);
        $data['mobile_number']=$request->mobile_number;
        $customer_id=DB::table('customer')
            ->insertGetId($data);

        Session::put('customer_id',$customer_id);
        Session::put('customer_name',$customer_name);

            return Redirect::to('/checkout');



    }
    public function four(){
        return view('404');
    }

    public function checkout()
    {
        
       return view('pages.checkout');
    }

    public function save_shipping_details(Request $request)
    {
       $data=array();
       $data['shipping_email']=$request->shipping_email;
       $data['shipping_first_name']=$request->shipping_first_name;
       $data['shipping_last_name']=$request->shipping_last_name;
       $data['shipping_address']=$request->shipping_address;
       $data['shipping_mobile_number']=$request->shipping_mobile_number;
       $data['shipping_city']=$request->shipping_city;

       $shipping_id=DB::table('shipping')
                    ->insertGetId($data);

       Session::put('shipping_id',$shipping_id);
       return Redirect::to('/payment');


    }

    public function customer_login(Request $request)
    {
       $customer_email=$request->customer_email;
       $password=md5($request->password);
        $result=DB::table('customer')
                ->where('customer_email',$customer_email)
                ->where('password',$password)
                ->first();
          if($result)
          {
              Session::put('customer_id',$result->customer_id);
              Session::put('customer_name',$result->customer_name);
              return Redirect::to('/checkout');
          }
          else{
              return Redirect::to('/login-check');
          }

    }

    public function customer_logout()
    {
        Session::flush();
        return Redirect::to('/');
    }

    public function bikash_payment(Request $request){

        $data=array();
        $data['bkash_number']=$request->bkash_number;
        $data['bkash_transaction_id']=$request->bkash_transaction_id;
        $data['reference']=$request->reference;

        $bikash_payment_id=DB::table('payment_bikash')
            ->insertGetId($data);
        Session::flush();
        return Redirect::to('/');

    }



    public function payment()
    {

        return view('pages.payment');
    }
   /// Order ...................................................................................................
    public function order_place(Request $request)
    {
       $payment_gateway=$request->payment_gateway;
       $pdata=array();
       $pdata['payment_method']=$payment_gateway;
       $pdata['payment_status']='pending';
       $payment_Id= DB::table('payment')
           ->insertGetId($pdata);

       $odata=array();
       $odata['customer_id']=Session::get('customer_id');
       $odata['shipping_id']=Session::get('shipping_id');
       $odata['payment_id']= $payment_Id;
       $odata['order_total']=Cart::total();
       $odata['order_status']='pending';

        $order_Id= DB::table('order')
            ->insertGetId($odata);

        $contents=Cart::content();
        $oddata=array();
        foreach ($contents as $v_content)
        {
            $oddata['order_id']= $order_Id;
            $oddata['item_id']= $v_content->id;
            $oddata['item_name']= $v_content->name;
            $oddata['item_price']= $v_content->price;
            $oddata['item_sales_quantity']= $v_content->qty;

            DB::table('order_details')
                ->insert($oddata);

        }
        if($payment_gateway=='handcash')
        {
            Cart::destroy();
            return view('pages.handcash');

        }
        elseif($payment_gateway=='cart')
        {
           echo "cart";
        }
        elseif($payment_gateway=='bkash')
        {
            Cart::destroy();
            return view('pages.bkash');
        }
        else
            {
             echo "Not Selected";
            }

    }


    public function manage_order()
    {
        $all_order_info = DB::table('order')
            ->join('customer','order.customer_id','=','customer.customer_id')
            ->select('order.*','customer.customer_name')
            ->get();
        $manage_order = view('admin.manage_order')
            ->with('all_order_info',$all_order_info);
        return view('admin_layout')
            ->with('admin.manage_order',$manage_order);
    }

    /// Order Bakend .........................................
    public function view_order($order_id)
    {
        $order_by_id = DB::table('order')
            ->join('customer','order.customer_id','=','customer.customer_id')
            ->join('order_details','order.order_id','=','order_details.order_id')
            ->join('shipping','order.shipping_id','=','shipping.shipping_id')
            ->select('order.*',
                'customer.*',
                'order_details.*','shipping.*')
            ->get();
        $view_order = view('admin.view_order')
            ->with('order_by_id',$order_by_id);
        return view('admin_layout')
            ->with('admin.view_order',$view_order);
    }
    /// Add review
    public function add_review(Request $request){

        $data=array();
        $data['item_id']=$request->item_id;
        $data['person_name']=$request->person_name;
        $data['person_email']=$request->person_email;
        $data['review_content']=$request->review_content;
        $data['created_at']=date("Y-m-d H:i:s");
        $data['updated_at']=date("Y-m-d H:i:s");
        DB::table('reviews')
            ->insert($data);
        return back();
      }

      /// payment_dashboard
    public function payment_dashboard(){
        $all_payment_info = DB::table('order')
            ->join('customer','order.customer_id','=','customer.customer_id')
            ->join('payment','order.payment_id','=','payment.payment_id')
            ->select('order.*','customer.customer_name','payment.*')
            ->get();
        $manage_payment = view('admin.payment')
            ->with('all_payment_info',$all_payment_info);
        return view('admin_layout')
            ->with('admin.payment',$manage_payment);

    }
    /// bkash payment show in dashboard
    public function bkash_payment_dashborad(){
        $bkash_payment_info = DB::table('payment')
            ->join('payment_bikash','payment.payment_id','=','payment_bikash.payment_id')
            ->select('payment_bikash.*','payment.*')
            ->get();
        $manage_bkash = view('admin.bkash_payment')
            ->with('bkash_payment_info',$bkash_payment_info);
        return view('admin_layout')
            ->with('admin.bkash_payment',$manage_bkash);

    }



}
