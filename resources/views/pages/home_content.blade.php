@extends('lay_out')
@section('content')
    {{--@include('slider')--}}
<h2 class="title text-center">Features Items</h2>
<?php foreach ( $all_published_items as $v_published_items){?>
<div class="col-sm-4">
    <div class="product-image-wrapper">
        <div class="single-products">
            <div class="productinfo text-center">
                <img src="{{$v_published_items->item_image}}" style="height: 200px" alt="" />
                <h2>Tk. {{$v_published_items->item_price}}</h2>
                <p>{{$v_published_items->item_name}}</p>
                <p>{{$v_published_items->item_short_description}}</p>
                <a href="{{url('/view_item/'.$v_published_items->item_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
            </div>
        </div>
        <div class="choose">
            <ul class="nav nav-pills nav-justified">
                {{--<li><a href="#"><i class="fa fa-square"></i>Add to Wishlist</a></li>--}}
                <li><a href="{{url('/view_item/'.$v_published_items->item_id)}}"><i class="fa fa-eye"></i>View the Product</a></li>
            </ul>
        </div>
    </div>
</div>
<?php }?>



</div><!--features_items-->
<div class="category-tab"><!--category-tab-->
    <div class="col-sm-12">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tshirt" data-toggle="tab">Flower-Vase</a></li>
            <li><a href="#blazers" data-toggle="tab">Pen-stand</a></li>
            <li><a href="#sunglass" data-toggle="tab">Jute bag</a></li>
            <li><a href="#kids" data-toggle="tab">Wallmet</a></li>
            <li><a href="#poloshirt" data-toggle="tab">Carpet</a></li>
        </ul>
    </div>
    <div class="tab-content">
        <div class="tab-pane fade active in" id="tshirt" >
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{asset('frontend/images/home/jute_flower_vase.jpg')}}" style="height: 200px" alt="" />
                            <h2>TK. 30</h2>
                            <p>Jute Flower Vase R-OI015</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                    </div>
                    <div class="choose">
                        <ul class="nav nav-pills nav-justified">
                            <li><a href="{{url('/view_item/'.$v_published_items->item_id)}}"><i class="fa fa-eye"></i>View the Product</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{asset('frontend/images/home/diy_folwer_vase .jpg')}}" style="height: 200px" alt="" />
                            <h2>Tk. 30</h2>
                            <p>Diy folwer plastic vase</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                    </div>
                    <div class="choose">
                        <ul class="nav nav-pills nav-justified">
                            <li><a href="{{url('/view_item/'.$v_published_items->item_id)}}"><i class="fa fa-eye"></i>View the Product</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{asset('frontend/images/home/plastic_vase.jpeg')}}" style="height: 200px" alt="" />
                            <h2>Tk. 56</h2>
                            <p>plastic bottle vase pen stand</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>

                    </div>
                    <div class="choose">
                        <ul class="nav nav-pills nav-justified">
                            <li><a href="{{url('/view_item/'.$v_published_items->item_id)}}"><i class="fa fa-eye"></i>View the Product</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{asset('frontend/images/home/plastic juri.jpg')}}" style="height: 200px" alt="" />
                            <h2>Tk. 25</h2>
                            <p>plastic bottle juri</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>

                    </div>
                    <div class="choose">
                        <ul class="nav nav-pills nav-justified">
                            <li><a href="{{url('/view_item/'.$v_published_items->item_id)}}"><i class="fa fa-eye"></i>View the Product</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="blazers" >
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{asset('frontend/images/home/jute_made_tissue.jpg')}}" style="height: 200px" alt="" />
                            <h2>Tk. 56</h2>
                            <p>Jute Made Tissue Box</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>

                    </div>
                    <div class="choose">
                        <ul class="nav nav-pills nav-justified">
                            <li><a href="{{url('/view_item/'.$v_published_items->item_id)}}"><i class="fa fa-eye"></i>View the Product</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{asset('frontend/images/home/pen stand.jpg')}}" style="height: 200px" alt="" />
                            <h2>Tk. 56</h2>
                            <p>Plastic pen stand</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>

                    </div>
                    <div class="choose">
                        <ul class="nav nav-pills nav-justified">
                            <li><a href="{{url('/view_item/'.$v_published_items->item_id)}}"><i class="fa fa-eye"></i>View the Product</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{asset('frontend/images/home/pen holder.jpg')}}" style="height: 200px" alt="" />
                            <h2>Tk. 50</h2>
                            <p>Plastic stone pen holder</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>

                    </div>
                    <div class="choose">
                        <ul class="nav nav-pills nav-justified">
                            <li><a href="{{url('/view_item/'.$v_published_items->item_id)}}"><i class="fa fa-eye"></i>View the Product</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{asset('frontend/images/home/w_pen_holder_jpg')}}" style="height: 200px" alt="" />
                            <h2>Tk. 60</h2>
                            <p>Wooden Pen-Holder</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>

                    </div>
                    <div class="choose">
                        <ul class="nav nav-pills nav-justified">
                            <li><a href="{{url('/view_item/'.$v_published_items->item_id)}}"><i class="fa fa-eye"></i>View the Product</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="sunglass" >
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{asset('frontend/images/home/jute bag.jpg')}}" style="height: 200px" alt="" />
                            <h2>Tk. 280</h2>
                            <p>jute bag black design</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>

                    </div>
                    <div class="choose">
                        <ul class="nav nav-pills nav-justified">
                            <li><a href="{{url('/view_item/'.$v_published_items->item_id)}}"><i class="fa fa-eye"></i>View the Product</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{asset('frontend/images/home/jute bag small.jpg')}}" style="height: 200px" alt="" />
                            <h2>Tk. 200</h2>
                            <p>jute bag small</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>

                    </div>
                    <div class="choose">
                        <ul class="nav nav-pills nav-justified">
                            <li><a href="{{url('/view_item/'.$v_published_items->item_id)}}"><i class="fa fa-eye"></i>View the Product</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{asset('frontend/images/home/handmade-jute.png')}}" style="height: 200px" alt="" />
                            <h2>Tk. 220</h2>
                            <p>jute cotton ladies bag</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>

                    </div>
                    <div class="choose">
                        <ul class="nav nav-pills nav-justified">
                            <li><a href="{{url('/view_item/'.$v_published_items->item_id)}}"><i class="fa fa-eye"></i>View the Product</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{asset('frontend/images/home/jute_made_bag.png')}}" style="height: 200px" alt="" />
                            <h2>Tk. 300</h2>
                            <p>jute made bag</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>

                    </div>
                    <div class="choose">
                        <ul class="nav nav-pills nav-justified">
                            <li><a href="{{url('/view_item/'.$v_published_items->item_id)}}"><i class="fa fa-eye"></i>View the Product</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="kids" >
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{asset('frontend/images/home/plastic_vase.jpeg')}}" style="height: 200px" alt="" />
                            <h2>Tk. 56</h2>
                            <p>Easy Polo Black Edition</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>

                    </div>
                    <div class="choose">
                        <ul class="nav nav-pills nav-justified">
                            <li><a href="{{url('/view_item/'.$v_published_items->item_id)}}"><i class="fa fa-eye"></i>View the Product</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{asset('frontend/images/home/plastic_vase.jpeg')}}" style="height: 200px" alt="" />
                            <h2>Tk. 56</h2>
                            <p>New Green Edition</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>

                    </div>
                    <div class="choose">
                        <ul class="nav nav-pills nav-justified">
                            <li><a href="{{url('/view_item/'.$v_published_items->item_id)}}"><i class="fa fa-eye"></i>View the Product</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{asset('frontend/images/home/plastic_vase.jpeg')}}" style="height: 200px" alt="" />
                            <h2>Tk. 56</h2>
                            <p>New Collection</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>

                    </div>
                    <div class="choose">
                        <ul class="nav nav-pills nav-justified">
                            <li><a href="{{url('/view_item/'.$v_published_items->item_id)}}"><i class="fa fa-eye"></i>View the Product</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{asset('frontend/images/home/plastic_vase.jpeg')}}" style="height: 200px" alt="" />
                            <h2>Tk. 56</h2>
                            <p>New Collection</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>

                    </div>
                    <div class="choose">
                        <ul class="nav nav-pills nav-justified">
                            <li><a href="{{url('/view_item/'.$v_published_items->item_id)}}"><i class="fa fa-eye"></i>View the Product</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="poloshirt" >
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{asset('frontend/images/home/plastic_vase.jpeg')}}" style="height: 200px" alt="" />
                            <h2>Tk. 56</h2>
                            <p>New Collection</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>

                    </div>
                    <div class="choose">
                        <ul class="nav nav-pills nav-justified">
                            <li><a href="{{url('/view_item/'.$v_published_items->item_id)}}"><i class="fa fa-eye"></i>View the Product</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{asset('frontend/images/home/plastic_vase.jpeg')}}" style="height: 200px" alt="" />
                            <h2>Tk. 56</h2>
                            <p>New Collection</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>

                    </div>
                    <div class="choose">
                        <ul class="nav nav-pills nav-justified">
                            <li><a href="{{url('/view_item/'.$v_published_items->item_id)}}"><i class="fa fa-eye"></i>View the Product</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{asset('frontend/images/home/plastic_vase.jpeg')}}" style="height: 200px" alt="" />
                            <h2>Tk. 56</h2>
                            <p>New Collection</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>

                    </div>
                    <div class="choose">
                        <ul class="nav nav-pills nav-justified">
                            <li><a href="{{url('/view_item/'.$v_published_items->item_id)}}"><i class="fa fa-eye"></i>View the Product</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{asset('frontend/images/home/plastic_vase.jpeg')}}" style="height: 200px" alt="" />
                            <h2>Tk. 56</h2>
                            <p>New Collection</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>

                    </div>
                    <div class="choose">
                        <ul class="nav nav-pills nav-justified">
                            <li><a href="{{url('/view_item/'.$v_published_items->item_id)}}"><i class="fa fa-eye"></i>View the Product</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--/category-tab-->

<div class="recommended_items"><!--recommended_items-->
    <h2 class="title text-center">recommended items</h2>

    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active">
                <div class="col-sm-4">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{asset('frontend/images/home/wall_mat_ma.jpg')}}" style="height: 200px" alt="" />
                                <h2>Tk. 56</h2>
                                <p>Cotton & Jute Made Wall Mat</p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>

                        </div>
                        <div class="choose">
                            <ul class="nav nav-pills nav-justified">
                                <li><a href="{{url('/view_item/'.$v_published_items->item_id)}}"><i class="fa fa-eye"></i>View the Product</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{asset('frontend/images/home/jute_wall.jpg')}}" style="height: 200px" alt="" />
                                <h2>Tk. 280</h2>
                                <p>Jute Wall Hanging</p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>

                        </div>
                        <div class="choose">
                            <ul class="nav nav-pills nav-justified">
                                <li><a href="{{url('/view_item/'.$v_published_items->item_id)}}"><i class="fa fa-eye"></i>View the Product</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <div class="item">
                <div class="col-sm-4">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{asset('frontend/images/home/wall_hanger.jpg')}}" style="height: 200px" alt="" />
                                <h2>Tk. 260</h2>
                                <p>Wall Hanger Made By Cotton</p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>

                        </div>
                        <div class="choose">
                            <ul class="nav nav-pills nav-justified">
                                <li><a href="{{url('/view_item/'.$v_published_items->item_id)}}"><i class="fa fa-eye"></i>View the Product</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{asset('frontend/images/home/basket_jute.jpg')}}" style="height: 200px" alt="" />
                                <h2>Tk. 450</h2>
                                <p>Basket Bag </p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>

                        </div>
                        <div class="choose">
                            <ul class="nav nav-pills nav-justified">
                                <li><a href="{{url('/view_item/'.$v_published_items->item_id)}}"><i class="fa fa-eye"></i>View the Product</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
               {{-- <div class="col-sm-4">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{asset('frontend/images/home/katha.png')}}" style="height: 200px" alt="" />
                                <h2>Tk. 250</h2>
                                <p>Hand Printed Jute Trivet</p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>

                        </div>
                        <div class="choose">
                            <ul class="nav nav-pills nav-justified">
                                <li><a href="{{url('/view_item/'.$v_published_items->item_id)}}"><i class="fa fa-eye"></i>View the Product</a></li>
                            </ul>
                        </div>
                    </div>
                </div>--}}

                <div class="col-sm-4">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{asset('frontend/images/home/floor_mat.jpg')}}" style="height: 200px" alt="" />
                                <h2>Tk. 220</h2>
                                <p>Floor Mat </p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>

                        </div>
                        <div class="choose">
                            <ul class="nav nav-pills nav-justified">
                                <li><a href="{{url('/view_item/'.$v_published_items->item_id)}}"><i class="fa fa-eye"></i>View the Product</a></li>
                            </ul>
                        </div>
                    </div>
                </div>



            </div>
        </div>
        <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
            <i class="fa fa-angle-left"></i>
        </a>
        <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
            <i class="fa fa-angle-right"></i>
        </a>
    </div>
</div><!--/recommended_items-->
@endsection