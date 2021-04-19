@extends('admin_layout')
@section('admin_content')
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="index.html">Home</a>
            <i class="icon-angle-right"></i>
        </li>
        <li>
            <i class="icon-edit"></i>
            <a href="#">Add New Item</a>
        </li>
    </ul>

    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Add New Item</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                </div>

            </div>


            <div class="box-content">
                <form class="form-horizontal" action="{{url('/save-new-item')}}" method="post">
                    {{@csrf_field()}}
                    <fieldset>

                        <div class="control-group">
                            <label class="control-label" for="date01">New Item Name</label>
                            <div class="controls">
                                <input type="text" class="text-info" name="new_item_name"  required>
                            </div>
                        </div>


                        <div class="control-group" >
                            <label class="control-label" for="date01" >Publication Status</label>
                            <div class="controls">
                                <input type="checkbox" name="publication_status" required="">
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Add New Item</button>
                            <button type="reset" class="btn">Cancel</button>
                            <p class="alert-success">
                                <?php
                                $message=Session::get('message');
                                if($message){
                                    echo $message;
                                    Session::put('message',null);
                                }
                                else{

                                }
                                ?>
                            </p>
                        </div>

                    </fieldset>
                </form>

            </div>
        </div><!--/span-->

    </div><!--/row-->
@endsection