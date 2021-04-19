@extends('admin_layout')
@section('admin_content')
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="{{url('/dashboard')}}">Home</a>
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">Order Details</a></li>
    </ul>

    <div class="row-fluid sortable">
        <div class="box span5">
            <div class="box-header" data-original-title>
                <h2><i class="fas fa-chalkboard-teacher" style="font-size:22px;color:orangered;"></i><span class="break"></span>Customer Details</h2>

            </div>
            <div class="box-content">

                <table class="table  table-bordered bootstrap-datatable ">
                    <thead>
                    <tr>
                        <th>Username</th>
                        <th>Mobile Number</th>
                    </tr>
                    </thead>
                        <tbody>
                        <tr>
                            @foreach($order_by_id as $v_order)
                                @endforeach
                            <td>{{$v_order->customer_name}}</td>
                            <td>{{$v_order->mobile_number}}</td>
                        </tr>
                        </tbody>
                </table>
            </div>
        </div><!--/span-->


        <div class="box span7">
            <div class="box-header" data-original-title>
                <h2><i class="fas fa-car-side" style="font-size:22px;color:deeppink;"></i><span class="break"></span>Shipping Details</h2>

            </div>
            <div class="box-content">

                <table class="table  table-bordered bootstrap-datatable ">
                    <thead>
                    <tr>
                        <th>Username</th>
                        <th>Address</th>
                        <th>Mobile Number</th>
                        <th>Email</th>
                    </tr>
                    </thead>
                    <tbody>

                    <tr>
                        @foreach($order_by_id as $v_order)
                        @endforeach
                        <td>{{$v_order->shipping_first_name}}</td>
                        <td>{{$v_order->shipping_address}}</td>
                        <td>{{$v_order->shipping_mobile_number}}</td>
                        <td>{{$v_order->shipping_email}}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div><!--/span-->

    </div><!--/row-->


    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="fas fa-box-open" style="font-size:23px;color:darkgreen;"></i><span class="break"></span>Order Details</h2>

            </div>
            <div class="box-content">

                <table class="table  table-bordered bootstrap-datatable ">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Item Number</th>
                        <th>Item Price</th>
                        <th>Item Sales Quantity</th>
                        <th>Item Sub Total</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($order_by_id as $v_order)
                    <tr>
                        <td>{{$v_order->order_id}}</td>
                        <td>{{$v_order->item_name}}</td>
                        <td>{{$v_order->item_price}}</td>
                        <td>{{$v_order->item_sales_quantity}}</td>
                        <td>{{$v_order->item_price*$v_order->item_sales_quantity}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan="4">Total with Vat: </td>
                        <td><strong>={{$v_order->order_total}} Tk</strong></td>
                    </tr>
                    </tfoot>

                </table>
            </div>
        </div><!--/span-->

    </div><!--/row-->

@endsection