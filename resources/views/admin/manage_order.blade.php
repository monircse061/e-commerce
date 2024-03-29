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
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon user"></i><span class="break"></span>Orders</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <p class="alert-danger">
                    <?php
                    $message=Session::get('message');
                    if($message){
                        echo $message;
                        Session::put('message',null);
                    }
                    ?>
                </p>
                <p class="alert-success">
                    <?php
                    $message=Session::get('messages');
                    if($message){
                        echo $message;
                        Session::put('messages',null);
                    }
                    ?>
                </p>

                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                    <thead>
                    <tr>
                        <th>Order Id</th>
                        <th>Customer Name</th>
                        <th>Order Total</th>
                        <th>Status</th>
                        <th>Actions</th>

                    </tr>
                    </thead>
                    @foreach($all_order_info as $v_order)
                        <tbody>

                        <tr>
                            <td>{{$v_order->order_id}}</td>
                            <td class="center">{{$v_order->customer_name}}</td>
                            <td class="center">{{$v_order->order_total}}</td>
                            <td class="center">@if($v_order->order_status=='success')
                                    <p  class="text-success" >success</p>
                                @else
                                    <p class="text-warning" >pending</p>
                                @endif
                            </td>



                            <td class="center">
                                @if($v_order->order_status=='pending')
                                    <a class="btn btn-danger" href="{{ url('/active-order/'.$v_order->order_id )}}">
                                        <i class="halflings-icon white thumbs-down"></i>
                                    </a>
                                @else
                                    <a class="btn btn-info" href="{{ url('/unactive-order/'.$v_order->order_id )}}">
                                        <i class="halflings-icon white thumbs-up"></i>
                                    </a>
                                @endif
                                <a class="btn btn-danger" href="{{url('/delete-order/'.$v_order->order_id)}}" id="delete">
                                    <i class="halflings-icon white trash"></i>
                                </a>
                            </td>
                        </tr>

                        </tbody>
                    @endforeach
                </table>
            </div>
        </div><!--/span-->

    </div><!--/row-->
@endsection