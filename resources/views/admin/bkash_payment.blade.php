@extends('admin_layout')
@section('admin_content')
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="{{url('/dashboard')}}">Home</a>
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">BKash Payment Details</a></li>
    </ul>

    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon user"></i><span class="break"></span>BKash Payments</h2>
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
                        <th>Payment Id</th>
                        <th>BKash Number</th>
                        <th>BKash Transaction Id</th>
                        <th>Reference</th>
                        <th>Payment Status</th>
                        <th>Actions</th>

                    </tr>
                    </thead>
                    @foreach($bkash_payment_info as $v_bkash)
                        <tbody>

                        <tr>
                            <td>{{$v_bkash->payment_id}}</td>
                            <td class="center">{{$v_bkash->bkash_number}}</td>
                            <td class="center">{{$v_bkash->bkash_transaction_id}}</td>
                            <td class="center">{{$v_bkash->reference}}</td>
                            <td class="center">@if($v_bkash->payment_status=='success')
                                    <p  class="text-success" >success</p>
                                @else
                                    <p class="text-warning" >pending</p>
                                @endif
                            </td>

                            <td class="center">
                                @if($v_bkash->payment_status=='pending')
                                    <a class="btn btn-danger" href="#">
                                        <i class="halflings-icon white thumbs-down"></i>
                                    </a>
                                @else
                                    <a class="btn btn-info" href="#">
                                        <i class="halflings-icon white thumbs-up"></i>
                                    </a>
                                @endif

                            </td>
                        </tr>

                        </tbody>
                    @endforeach
                </table>
            </div>
        </div><!--/span-->

    </div><!--/row-->
@endsection