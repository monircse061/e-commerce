@extends('admin_layout')
@section('admin_content')
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="index.html">Home</a>
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">Tables</a></li>
    </ul>

    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
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
                        <th>Item Id</th>
                        <th>Item Name</th>
                        <th>Item Image </th>
                        <th>Item Price </th>
                        <th>Category Name</th>
                        <th>Item Description</th>
                        <th>Status</th>
                        <th>Actions</th>

                    </tr>
                    </thead>
                    @foreach($all_items_info as $v_category)
                        <tbody>

                        <tr>
                            <td>{{$v_category->item_id}}</td>
                            <td class="center">{{$v_category->item_name}}</td>
                            <td> <img src="{{$v_category->item_image}}" style="height: 80px;width: 80px"> </td>
                            <td class="center">{{$v_category->item_price}}</td>
                            <td class="center">{{$v_category->category_name}}</td>
                            <td class="center">{{$v_category->item_short_description}}</td>

                            <td class="center">
                                @if($v_category->publication_status=='on')
                                    <p  class="text-success" >Active</p>
                                @else
                                    <p class="text-warning" >UnActive</p>
                                @endif
                            </td>

                            <td class="center">
                                @if($v_category->publication_status == 'on')
                                    <a class="btn btn-danger" href="{{ url('/unactive-item/'.$v_category->item_id )}}">
                                        <i class="halflings-icon white thumbs-down"></i>
                                    </a>
                                @else
                                    <a class="btn btn-info" href="{{ url('/active-item/'.$v_category->item_id )}}">
                                        <i class="halflings-icon white thumbs-up"></i>
                                    </a>
                                @endif
                                <a class="btn btn-danger" href="{{ url('/edit-item/'.$v_category->item_id )}}">
                                    <i class="halflings-icon white edit"></i>
                                </a>
                                <a class="btn btn-danger" href="{{url('/delete-item/'.$v_category->item_id)}}" id="delete">
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