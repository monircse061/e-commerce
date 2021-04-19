@extends('layout')
@section('content')

    <div class="col-sm-9 padding-right">
        <div class="product-details"><!--product-details-->
            <div class="col-sm-5">
                <div class="view-product">
                  <img src="{{url($product_by_details->item_image)}}" alt="" />
                   {{-- <h3>ZOOM</h3>--}}
                </div>
                <div id="similar-product" class="carousel slide" data-ride="carousel">

                    <!-- Wrapper for slides -->

                    <!-- Controls -->
                    <a class="left item-control" href="#similar-product" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="right item-control" href="#similar-product" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>

            </div>
            <div class="col-sm-7">
                <div class="product-information"><!--/product-information-->
                    <img src="images/product-details/new.jpg" class="newarrival" alt="" />
                    <h2>{{$product_by_details->item_name}}</h2>
                    <p>Web ID: 1089772</p>
                    <img src="images/product-details/rating.png" alt="" />
                                <span>
									<span>{{$product_by_details->item_price}} Tk</span>
                                    <form action="/add-to-cart" method="post">
                                        {{csrf_field()}}
									    <label>Quantity:</label>
									    <input name="qty" type="text" value="1" />
                                        <input type="hidden" name="item_id" value="{{$product_by_details->item_id}}">
									    <button type="submit" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										Add to cart
									    </button>
                                    </form>
								</span>
                    <p><b>Availability:</b> In Stock</p>
                    <p><b>Condition:</b> New</p>

                    <a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
                </div><!--/product-information-->
            </div>
        </div><!--/product-details-->
        <?php $reviews=DB::table('reviews')
            ->where('item_id',$product_by_details->item_id)
            ->take(3)->get(); $count_reviews=count($reviews)?>3
        <div class="category-tab shop-details-tab"><!--category-tab-->
            <div class="col-sm-12">
                <ul class="nav nav-tabs">
                    <li><a href="#details" data-toggle="tab">Details</a></li>
                    {{--<li><a href="#companyprofile" data-toggle="tab">Company Profile</a></li>
                    <li><a href="#tag" data-toggle="tab">Tag</a></li>--}}
                    <li class="active"><a href="#reviews" data-toggle="tab">Reviews ({{$count_reviews}})</a></li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade" id="details" >
                    <div class="col-sm-12">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-left">
                                    <img src="images/home/gallery1.jpg" alt="" />
                                    <h2>{{$product_by_details->item_name}}</h2>
                                    <p>{!! $product_by_details->item_long_description !!}</p>
                                  {{--  <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>--}}
                                </div>
                            </div>
                        </div>
                    </div>



                </div>

                <div class="tab-pane fade" id="companyprofile" >
                    <div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="images/home/gallery1.jpg" alt="" />
                                    <h2>Dhaka Handicrafts Ltd.</h2>
                                    <p> 38 shipments match handicraft
                                        146 shipments total
                                        Dhaka Handicrafts Ltd. </p>

                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="tab-pane fade" id="tag" >
                    <div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="images/home/gallery1.jpg" alt="" />
                                    <h2>Dhaka Handicrafts Ltd.</h2>
                                    <p> 38 shipments match handicraft
                                        146 shipments total
                                        Dhaka Handicrafts Ltd. </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="tab-pane fade active in" id="reviews" >
                    <div class="col-sm-12">

                        @foreach($reviews as $review)
                        <ul>
                            <li><a href=""><i class="fa fa-user"></i>{{$review->person_name}}</a></li>
                            <li><a href=""><i class="fa fa-clock-o"></i>{{date('H, i',strtotime($review->created_at))}}</a></li>
                            <li><a href=""><i class="fa fa-calendar-o"></i>{{date('F j, Y',strtotime($review->updated_at))}}</a></li>
                        </ul>
                        <p>{{$review->review_content}}</p>
                            @endforeach
                        <p><b>Write Your Review</b></p>

                        <form action="{{url('/add-review')}}" method="post">
                            {{csrf_field()}}
										<span>
                                            <input type="hidden" name="item_id" value="{{$product_by_details->item_id}}">
											<input type="text" name="person_name" placeholder="Your Name"/>
											<input type="email" name="person_email" placeholder="Email Address"/>
										</span>
                            <textarea name="review_content" ></textarea>
                            {{--<b>Rating: </b> <img src="{{url('frontend/images/product-details/rating.png')}}" alt="" />--}}
                            <input type="submit" class=" btn btn-default " value="Submit">

                            </button>
                        </form>
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
                                        <li><a href="#"><i class="fa fa-eye"></i>View the Product</a></li>
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
                                        <li><a href="#"><i class="fa fa-eye"></i>View the Product</a></li>
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
                                        <li><a href="#"><i class="fa fa-eye"></i>View the Product</a></li>
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
                                        <li><a href="#"><i class="fa fa-eye"></i>View the Product</a></li>
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
                                        <li><a href="#"><i class="fa fa-eye"></i>View the Product</a></li>
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

    </div>





@endsection