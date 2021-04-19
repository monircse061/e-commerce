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
            <a href="#">Add Category</a>
        </li>
    </ul>

    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Category</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                </div>

            </div>


            <div class="box-content">
                <form class="form-horizontal" action="{{url('/save-category')}}" method="post">
                    {{@csrf_field()}}
                    <fieldset>

                        <div class="control-group">
                            <label class="control-label" for="date01">Category Name</label>
                            <div class="controls">
                                <input type="text" class="text-info" name="category_name"  required>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="fileInput">Image</label>
                            <div class="controls">
                                <input class="input-file uniform_on" name="image" id="fileInput" type="file" required>
                            </div>
                        </div>




                        <div class="control-group hidden-phone" >
                            <label class="control-label" for="textarea2" >Category description</label>
                            <div class="controls">
                                <textarea class="cleditor"  name="category_description" rows="3"  ></textarea>


                            </div>
                        </div>
                        <div class="control-group" >
                            <label class="control-label" for="date01" >Publication Status</label>
                            <div class="controls">
                                <input type="checkbox" name="publication_status" required="">
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Add Category</button>
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