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
            <a href="#">Add Item</a>
        </li>
    </ul>

    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Item</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                </div>

            </div>


            <div class="box-content">
                <form class="form-horizontal" action="{{url('/save-item')}}" method="post" enctype="multipart/form-data">
                    {{@csrf_field()}}
                    <fieldset>

                        <div class="control-group">
                            <label class="control-label" for="date01">Item Name</label>
                            <div class="controls">
                                <input type="text" class="text-info" name="item_name"  required>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="selectError3">Select Category</label>
                            <div class="controls">
                                <select id="selectError3" name="category_id">
                                    <option>Select Category</option>
                                    <?php
                                    $all_category=DB::table('category')
                                        ->where('publication_status','on')
                                        ->get();
                                    foreach ($all_category as $v_category){?>
                                    <option value="{{$v_category->category_id}}">{{$v_category->category_name}}</option>
                                  <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="fileInput">Image</label>
                            <div class="controls">
                                <input class="input-file uniform_on" name="item_image" id="fileInput" type="file" >
                            </div>
                        </div>




                        <div class="form-group" >
                            <label for="textarea2" >Item's short description</label>

                                <textarea   style="height: 100px;width: 600px" name="item_short_description" class="form-group"   ></textarea>

                        </div>

                        <div class="form-group" >
                            <label for="textarea2" >Item's long description</label>

                                <textarea style="height: 200px;width: 600px" name="item_long_description" class="form-group"  ></textarea>

                        </div>

                        <div  class="control-group">
                            <label style="margin-top: 15px" class="control-label" for="date01">Item Price</label>
                            <div class="controls">
                                <input style="margin-top: 15px" type="text" class="text-info" name="item_price"  required>
                            </div>
                        </div>

                        <div class="control-group" >
                            <label class="control-label" for="date01" >Publication Status</label>
                            <div class="controls">
                                <input type="checkbox" name="publication_status" required="" >
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Add Item</button>
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