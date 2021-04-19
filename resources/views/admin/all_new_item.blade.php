@extends('admin_layout')
@section('admin_content')
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="index.html">Home</a>
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#"> New Items Tables</a></li>
    </ul>

    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon user"></i><span class="break"></span>New Items</h2>
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
                        <th>New Item Id</th>
                        <th>New Item Name</th>
                        <th>Status</th>
                        <th>Actions</th>

                    </tr>
                    </thead>
                    @foreach($all_newitem_info as $v_category)
                        <tbody>

                        <tr>
                            <td>{{$v_category->new_item_id}}</td>
                            <td class="center">{{$v_category->new_item_name}}</td>


                            <td class="center">
                                @if($v_category->publication_status=='on')
                                    <p  class="text-success" >Active</p>
                                @else
                                    <p class="text-warning" >UnActive</p>
                                @endif
                            </td>

                            <td class="center">
                                @if($v_category->publication_status=='on')
                                    <a class="btn btn-danger" href="{{ url('/unactive-new-item/'.$v_category->new_item_id )}}">
                                        <i class="halflings-icon white thumbs-down"></i>
                                    </a>
                                @else
                                    <a class="btn btn-info" href="{{ url('/active-new-item/'.$v_category->new_item_id )}}">
                                        <i class="halflings-icon white thumbs-up"></i>
                                    </a>
                                @endif
                                <a class="btn btn-danger" href="{{ url('/edit-new-item/'.$v_category->new_item_id )}}">
                                    <i class="halflings-icon white edit"></i>
                                </a>
                                <a class="btn btn-danger" href="{{url('/delete-new-item/'.$v_category->new_item_id)}}" id="delete">
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