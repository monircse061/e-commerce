<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Beautiful-Waste</title>
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="{{asset('frontend/js/html5shiv.js')}}"></script>
    <script src="{{asset('frontend/js/respond.min.js')}}"></script>URL::to
    <![endif]-->
    <link rel="shortcut icon" href="{{asset('frontend/images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{URL::to('frontend/images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{URL::to('frontend/images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{URL::to('frontend/images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{URL::to('frontend/images/ico/apple-touch-icon-57-precomposed.png')}}">
</head><!--/head-->

<body>
<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i> +8801757-128711</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> info@whandicraft.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->

    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="{{url('/')}}"><img src="{{asset('frontend/images/home/logo.png')}}" alt="" /></a>
                    </div>
                    <div class="btn-group pull-righassett"frontend/>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                            English
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="#">Bangla</a></li>
                            <li><a href="#">English</a></li>
                        </ul>
                    </div>

                    <div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                            Taka
                            <span class="caret"></span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="shop-menu pull-right">
                    <ul class="nav navbar-nav">

                       {{-- <li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>--}}
                        <?php
                        $customer_id=Session::get('customer_id');
                        $shipping_id=Session::get('shipping_id');
                        ?>
                        @if($customer_id!=null && $shipping_id==null)
                            <li><a href="{{url('/checkout')}}"> Checkout</a></li>
                        @elseif($customer_id!=null && $shipping_id!=null)
                            <li><a href="{{url('/payment')}}"> Checkout</a></li>
                        @else
                            <li><a href="{{url('/login-check')}}"> Checkout</a></li>
                        @endif


                       {{-- <li>
                        <a  href="#">
                            <i class="halflings-icon white user"></i> {{Session::get('customer_name')}}

                        </a></li>--}}



                        <li><a href="{{url('/show-cart')}}"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                        <?php
                        $customer_id=Session::get('customer_id');
                        ?>
                        @if($customer_id!=null)
                            <li><a href="{{url('/')}}"><i class="fa fa-lock"></i> Logout</a></li>
                        @else
                            <li><a href="{{url('/login-check')}}"><i class="fa fa-lock"></i> Login</a></li>
                        @endif

                        <?php
                        $customer_name=Session::get('customer_name');
                        ?>
                        <li><a href="#"><i class="fa fa-user"></i> {{Session::get('customer_name')}}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="{{url('/')}}" class="active">Home</a></li>
                            <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="{{asset('frontend/shop.html')}}">Products</a></li>
                                    <li><a href="{{asset('frontend/product-details.html')}}">Product Details</a></li>
                                    <?php
                                    $customer_id=Session::get('customer_id');
                                    ?>
                                    @if($customer_id!=null)
                                        <li><a href="{{url('/checkout')}}"> Checkout</a></li>
                                    @else
                                        <li><a href="{{url('/login-check')}}"> Checkout</a></li>
                                    @endif
                                    <li><a href="{{url('/show-cart')}}">Cart</a></li>
                                    <li><a href="{{asset('frontend/login.html')}}">Login</a></li>
                                </ul>
                            </li>
                           {{-- <li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="{{asset('frontend/blog.html')}}">Blog List</a></li>
                                    <li><a href="{{asset('frontend/blog-single.html')}}">Blog Single</a></li>
                                </ul>
                            </li>--}}
                            <li><a href="{{url('404')}}">404</a></li>
                            <li><a href="{{asset('frontend/contact-us.html')}}">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div id="slidingDiv" class="srchBox">
                    <form action="{{url('/search')}}">
                        <input type="text" name="searchData" />
                        <i class="fa fa-search"></i>
                    </form>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->


<section id="slider"><!--slider-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#slider-carousel" data-slide-to="1"></li>
                        <li data-target="#slider-carousel" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-sm-4">
                                <h1><span>Beautiful</span>-Waste</h1>
                                <h2>Buy For Your Home</h2>
                                <p>Showcase Pure Traditional Elegance On This Season! </p>
                                <button type="button" class="btn btn-default get">View the Product</button>
                            </div>
                            <div class="col-sm-6">
                            </div>
                            <img src="{{asset('frontend/images/home/girl1.jpg')}}" class="girl img-responsive" alt="" />
                           {{-- <img src="{{asset('frontend/images/home/pricing.png')}}"  class="pricing" alt="" />--}}
                        </div>
                        <div class="item">
                            <div class="col-sm-6">
                                <h1><span>Beautiful</span>-Waste</h1>
                                <h2>Buy For Your Home</h2>
                                <p>Showcase Pure Traditional Elegance On This Season!  </p>
                                <button type="button" class="btn btn-default get">View the Product</button>
                            </div>
                            <div class="col-sm-6">
                                <img src="{{asset('frontend/images/home/girl2.jpg')}}" class="girl img-responsive" alt="" />
                               {{-- <img src="{{asset('frontend/images/home/pricing.png')}}"  class="pricing" alt="" />--}}
                            </div>
                        </div>

                        <div class="item">
                            <div class="col-sm-6">
                                <h1><span>Beautiful</span>-Waste</h1>
                                <h2>Buy For Your Home</h2>
                                <p>Showcase Pure Traditional Elegance On This Season!</p>
                                <button type="button" class="btn btn-default get">View the Product</button>
                            </div>
                            <div class="col-sm-6">
                                <img src="{{asset('frontend/images/home/girl3.jpg')}}" class="girl img-responsive" alt="" />
                               {{-- <img src="{{asset('frontend/images/home/pricing.png')}}" class="pricing" alt="" />--}}
                            </div>
                        </div>

                    </div>

                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section><!--/slider-->




<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <div class="left-sidebar">
                <h2>Category</h2>
                <div class="panel-group category-products" id="accordian"><!--category-productsr-->

                <?php
                   $all_publication_status= DB::table('category')
                        ->where('publication_status','on')
                        ->get();

                    foreach ( $all_publication_status as $v_publication_category){?>


                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a href="{{url('/product_by_category/'.$v_publication_category->category_id)}}">{{$v_publication_category->category_name}}</a></h4>
                        </div>
                    </div>
                    <?php }?>

                </div><!--/category-products-->

                <div class="brands_products"><!--brands_products-->
                    <h2>New Items</h2>
                    <div class="brands-name">
                        <ul class="nav nav-pills nav-stacked">

                            <?php
                            $all_publication_status= DB::table('new_item')
                                ->where('publication_status','on')
                                ->get();

                            foreach ( $all_publication_status as $v_publication_category){?>

                            <li><a href="#"> <span class="pull-right">(50)</span>{{$v_publication_category->new_item_name}}</a></li>
                                <?php }?>

                        </ul>
                    </div>
                </div><!--/brands_products-->

                <div class="price-range"><!--price-range-->
                    <h2>Price Range</h2>
                    <div class="well text-center">
                        <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                        <b class="pull-left">Tk 0</b> <b class="pull-right">Tk 600</b>
                    </div>
                </div><!--/price-range-->

                <div class="shipping text-center"><!--shipping-->
                    <img src="{{asset('frontend/images/home/shipping.jpg')}}" alt="" />
                </div><!--/shipping-->

            </div>
        </div>

        <div class="col-sm-9 padding-right">
            <div class="features_items"><!--features_items-->


               @yield('content')

            </div>
        </div>
    </div>
</div>
    <footer id="footer"><!--Footer-->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="companyinfo">
                        <h2><span>Beautiful</span>-Waste</h2>
                        <p>Waste is beautiful !!! Buy for your decorations.</p>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="col-sm-3">
                        <div class="video-gallery text-center">
                            <a href="#">
                                <div class="iframe-img">
                                    <img src="{{URL::to('frontend/images/home/mn.jpg')}}" alt="" />
                                </div>
                                <div class="overlay-icon">
                                    <i class="fa fa-play-circle-o"></i>
                                </div>
                            </a>
                            <p>Circle of Hands</p>
                            <h2>10 NOV 2020</h2>
                        </div>
                    </div>

                   {{-- <div class="col-sm-3">
                        <div class="video-gallery text-center">
                            <a href="#">
                                <div class="iframe-img">
                                    <img src="{{URL::to('frontend/images/home/mn.jpg')}}" alt="" />
                                </div>
                                <div class="overlay-icon">
                                    <i class="fa fa-play-circle-o"></i>
                                </div>
                            </a>
                            <p>Circle of Head</p>
                            <h2>10 NOV 2020</h2>
                        </div>
                    </div>--}}


                </div>
                <div class="col-sm-3">
                    <div class="address">
                        <img src="{{asset('frontend/images/home/map.png')}}" alt="" />
                        <p>Sector 12,Rajlokkhi,Uttora</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-widget">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Service</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Online Help</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Order Status</a></li>
                            <li><a href="#">Change Location</a></li>
                            <li><a href="#">FAQ’s</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Quock Shop</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Table decoration</a></li>
                            <li><a href="#">Wall decoration</a></li>
                            <li><a href="#">Floor decoration</a></li>
                            <li><a href="#">Gift Cards</a></li>
                            <li><a href="#">Others</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Policies</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Privecy Policy</a></li>
                            <li><a href="#">Refund Policy</a></li>
                            <li><a href="#">Billing System</a></li>
                            <li><a href="#">Ticket System</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>About Shopper</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Company Information</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Store Location</a></li>
                            <li><a href="#">Affillate Program</a></li>
                            <li><a href="#">Copyright</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 col-sm-offset-1">
                    <div class="single-widget">
                        <h2>About Beautiful Waste</h2>
                        <form action="#" class="searchform">
                            <input type="text" placeholder="Your email address" />
                            <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                            <p>Get the most recent updates from <br />our site and be updated your self...</p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-left">Copyright © 2020 Beautiful-Waste Inc. All rights reserved.</p>
                <p class="pull-right">Designed by <span><a target="_blank" href="http://www.monirahammod.com">Monir</a></span></p>
            </div>
        </div>
    </div>

</footer><!--/Footer-->



<script src="{{asset('frontend/js/jquery.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.scrollUp.min.js')}}"></script>
<script src="{{asset('frontend/js/price-range.js')}}"></script>
<script src="{{asset('frontend/js/jquery.prettyPhoto.js')}}"></script>
<script src="{{asset('frontend/js/main.js')}}"></script>')}}
</body>
</html>
































