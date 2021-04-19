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
            <a href="#">Update Item</a>
        </li>
    </ul>

    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Update Item</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                </div>

            </div>


            <div class="box-content">
                <form class="form-horizontal" action="{{url('/update-item',$item_edit_info->item_id)}}" method="post">
                    {{@csrf_field()}}
                    <fieldset>

                        <div class="control-group">
                            <label class="control-label" for="date01">Item Name</label>
                            <div class="controls">
                                <input type="text" class="text-info" name="item_name"  value="{{$item_edit_info->item_name}}">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="selectError3">Select Category</label>
                            <div class="controls">
                                <select id="selectError3" name="category_id">
                                    <option>{{$item_edit_info->category_name}}</option>
                                    <?php
                                    $all_item=DB::table('category')
                                        ->where('publication_status','on')
                                        ->get();
                                    foreach ($all_item as $v_item){?>
                                    <option value="{{$v_item->category_id}}">{{$v_item->category_name}}</option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="fileInput">Image</label>
                            <div class="controls">
                                <td> <img src="{{$item_edit_info->item_image}}" style="height: 80px;width: 80px"> </td>
                                <input class="input-file uniform_on" name="item_image" id="fileInput" type="file"  required>
                            </div>
                        </div>


                        <div class="form-group" >
                            <label for="textarea2" >Item's short description</label>

                            <textarea   style="height: 100px;width: 600px" name="item_short_description" class="form-group"   >
                                  {{$item_edit_info->item_short_description}}
                            </textarea>

                        </div>


                       {{-- <div class="control-group hidden-phone" >
                            <label class="control-label" for="textarea2" >Item Short description</label>
                            <div class="controls">
                                <textarea class="cleditor"  name="item_short_description" rows="3"  >
                                    {{$item_edit_info->item_short_description}}
                                </textarea>


                            </div>
                        </div>--}}

                        <div class="form-group" >
                            <label for="textarea2" >Item's long description</label>

                            <textarea style="height: 200px;width: 600px" name="item_long_description" class="form-group"  >
                                 {{$item_edit_info->item_long_description}}
                            </textarea>

                        </div>

                       {{-- <div class="control-group --}}{{--hidden-phone--}}{{--" >
                            <label class="control-label" for="textarea2" >Item Long description</label>
                            <div >
                                <textarea --}}{{--class="cleditor" --}}{{-- name="item_long_description" rows="3"  >
                                    {{$item_edit_info->item_long_description}}
                                </textarea>


                            </div>
                        </div>--}}



                        <div class="control-group">
                            <label class="control-label" for="date01">Item Price</label>
                            <div class="controls">
                                <input type="number"  name="item_price"  value="{{$item_edit_info->item_price}}" >
                            </div>
                        </div>

                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Save Item</button>
                            <button type="reset" class="btn">Cancel</button>

                        </div>

                    </fieldset>
                </form>

            </div>
        </div><!--/span-->

    </div><!--/row-->
@endsection