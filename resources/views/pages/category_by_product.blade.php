@extends('layout')
@section('content')
    <h2 class="title text-center">Features Items</h2>
    <?php foreach ( $product_by_category as $v_product_by_category){?>
    <div class="col-sm-4">
        <div class="product-image-wrapper">
            <div class="single-products">
                <div class="productinfo text-center">
                    <img src="{{url($v_product_by_category->item_image)}}" style="height: 200px" alt="" />
                    <h2>{{$v_product_by_category->item_price}} Tk</h2>
                    <p>{{$v_product_by_category->item_name}}</p>
                    <p>{{$v_product_by_category->item_short_description}}</p>
                    <a href="{{url('/view_item/'.$v_product_by_category->item_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                </div>

            </div>
            <div class="choose">
                <ul class="nav nav-pills nav-justified">
                    <li><a href="{{url('/view_item/'.$v_product_by_category->item_id)}}"><i class="fa fa-eye"></i>View the Product</a></li>
                </ul>
            </div>
        </div>
    </div>
    <?php }?>



    </div><!--features_items-->



@endsection