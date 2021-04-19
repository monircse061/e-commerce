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
            <a href="#">Update New Item</a>
        </li>
    </ul>

    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Update New Item</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                </div>

            </div>


            <div class="box-content">
                <form class="form-horizontal" action="{{url('/update-new-item',$all_newitem_info->new_item_id)}}" method="post">
                    {{@csrf_field()}}
                    <fieldset>

                        <div class="control-group">
                            <label class="control-label" for="date01">New Item Name</label>
                            <div class="controls">
                                <input type="text" class="text-info" name="new_item_name"  value="{{$all_newitem_info->new_item_name}}">
                            </div>
                        </div>





                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Save New Item</button>
                            <button type="reset" class="btn">Cancel</button>

                        </div>

                    </fieldset>
                </form>

            </div>
        </div><!--/span-->

    </div><!--/row-->
@endsection