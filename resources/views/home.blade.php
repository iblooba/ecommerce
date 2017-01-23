<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themes.iamabdus.com/bigbag/1.1/index-v3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Jan 2017 09:24:11 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>

    <!-- SITE TITTLE -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BIGBAG Store - Ecommerce Bootstrap Template</title>

    <!-- PLUGINS CSS STYLE -->

		<link href="{{asset('/assets/plugins/jquery-ui/jquery-ui.css')}}" rel="stylesheet">
		<link href="{{asset('/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
		<link href="{{asset('/assets/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
		<link href="{{asset('/assets/plugins/selectbox/select_option1.css')}}" rel="stylesheet">
		<link href="{{asset('/assets/plugins/rs-plugin/css/settings.css')}}" rel="stylesheet"  media="screen">
		<link href="{{asset('/assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet"  media="screen">
    <!-- GOOGLE FONT -->
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>

    <!-- CUSTOM CSS -->
		<link href="{{asset('/assets/css/style.css')}}" rel="stylesheet">
		<link href="{{asset('/assets/options/animate.css')}}" rel="stylesheet">
		<link href="{{asset('/assets/options/optionswitch.css')}}" rel="stylesheet">
		<link href="{{asset('/assets/css/colors/default.css')}}" rel="stylesheet" id="option_color">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

  <body class="body-wrapper version3">

    <!--=== option Switcher ===-->
    <i class="option-switcher-btn fa fa-gear hidden-xs"></i>
    <div class="option-switcher animated">
      <div class="option-swticher-header">
        <div class="option-switcher-heading">Template Options</div>
        <div class="theme-close"><i class="fa fa-close"></i></div>
      </div>
      <div class="option-swticher-body">
        <!-- Theme Colors -->
        <ul class="list-unstyled color-options">
          <li class="theme-default theme-active" data-color="default"  data-logo="default-logo"></li>
          <li class="theme-color1" data-color="color-option1" data-logo="logo1"></li>
          <li class="theme-color2" data-color="color-option2" data-logo="logo2"></li>
          <li class="theme-color3" data-color="color-option3" data-logo="logo3"></li>
          <li class="theme-color4 last" data-color="color-option4" data-logo="logo4"></li>
        </ul>
        <!-- Layout Styles -->
        <div class="row no-col-space layoutStyle">
          <div class="col-xs-6">
            <a href="javascript:void(0);" class="btn-u  btn-block active-switcher-btn wide-layout-btn">Wide</a>
          </div>
          <div class="col-xs-6">
            <a href="javascript:void(0);" class="btn-u btn-block boxed-layout-btn">Boxed</a>
          </div>
        </div>
        <!-- Background pattern -->
        <div class="bg-patern">
          <h3>Background pattern</h3>
          <ul class="list-unstyled">
            <li class="pattern-default pattern-active"></li>
            <li class="pattern1"></li>
            <li class="pattern2"></li>
            <li class="pattern3 last"></li>
            <li class="pattern4"></li>
            <li class="pattern5"></li>
            <li class="pattern6"></li>
            <li class="pattern7 last"></li>
          </ul>
        </div>
        <!-- Header Styles -->
        <div class="row no-col-space headerStyle">
          <div class="col-xs-6">
            <a href="javascript:void(0);" class="btn-u btn-block active-switcher-btn fixed-header">Fixed header</a>
          </div>
          <div class="col-xs-6">
            <a href="javascript:void(0);" class="btn-u btn-block static-header">Static header</a>
          </div>
        </div>
      </div>
    </div>
    <!--/option-switcher-->

    <div class="main-wrapper">

      <!-- HEADER -->
      <div class="header clearfix headerV2">

        <!-- TOPBAR -->
        <div class="topBar">
          <div class="container">
            <div class="row">
              <div class="col-md-6 hidden-sm hidden-xs">
                <ul class="list-inline">
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                  <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                  <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                </ul>
              </div>
              <div class="col-md-6 col-xs-12">
                <ul class="list-inline pull-right top-right">
                  <li class="searchBox">
                    <a href="#"><i class="fa fa-search"></i></a>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <li>
                        <span class="input-group">
                          <input type="text" class="form-control" placeholder="Search…" aria-describedby="basic-addon2">
                          <button type="submit" class="input-group-addon">Submit</button>
                        </span>
                      </li>
                    </ul>
                  </li>
                  <li class="account-login"><span><a data-toggle="modal" href='.html'>Log in</a><small>or</small><a data-toggle="modal" href='#signup'>Create an account</a></span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        @include('header')
      </div>

  		@include('slide')
      <!-- MAIN CONTENT SECTION -->
      <section class="mainContent clearfix">
        <div class="container">

          <!-- DEAL SECTION -->
          <div class="row dealSection">
            <div class="col-xs-12">
              <div class="page-header">
                <h4>Featured Products</h4>
              </div>
            </div>
            <div class="col-xs-12">
              <div class="owl-carousel dealSlider">


@foreach($results as $row)
                <div class="slide">
                  <div class="imageBox">
                    <div class="productDeal clearfix">
                      <h3>{{ $row->name }}</h3>
                    </div>
                    <div class="productImage clearfix">
                      <a href="{{url ('/home/products' ,array($row->id))}}"><img src="{{asset('/assets/img/products')}}/{{ $row->image }}" alt="Product Image"></a>
                    </div>
                    <div class="productCaption clearfix text-center">
                      <h3><a href="single-product.html">{{ $row->name }}</a></h3>
                      <span class="offer-price">{{ $row->price }}</span>

                      <a href="{{url ('/home/products' ,array($row->id))}}" class="btn btn-border">Buy Now<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                  </div>
                </div>

 @endforeach

              </div>
            </div>
          </div>

          <!-- FEATURE PRODUCT SECTION -->
          <div class="row featuredProducts version3">
            <div class="col-xs-12">
              <div class="tabCommon">
                <ul class="nav nav-tabs">
                  <li class="active"><a data-toggle="tab" href="#menu1">New Araivals</a></li>
                  <li><a data-toggle="tab" href="#menu2">Top Rated</a></li>
                  <li><a data-toggle="tab" href="#menu3">On Sale</a></li>
                </ul>
                <div class="tab-bottom">
                </div>
                <div class="tab-content">
                  <div id="menu1" class="tab-pane fade in active">
                    <div class="row">
                      <div class="col-sm-3 col-xs-12">
                        <div class="imageBox">
                          <div class="productImage clearfix">
                            <a href="single-product.html">
                              <img src="{{asset('/assets/img/home/featured-product/product-img7.jpg')}}" alt="featured-product-img">
                            </a>
                            <div class="productMasking">
                              <ul class="list-inline btn-group" role="group">
                                <li><a data-toggle="modal" href=".html" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                                <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                                <li><a data-toggle="modal" href="-2.html" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="productCaption clearfix">
                            <h5><a href="single-product.html">Nike Sportswear</a></h5>
                            <h3>$199</h3>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-3 col-xs-12">
                        <div class="imageBox">
                          <div class="productImage clearfix">
                            <a href="single-product.html">
                              <img src="{{asset('/assets/img/home/featured-product/product-img8.jpg')}}" alt="featured-product-img">
                            </a>
                            <div class="productMasking">
                              <ul class="list-inline btn-group" role="group">
                                <li><a data-toggle="modal" href=".html" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                                <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                                <li><a data-toggle="modal" href="-2.html" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="productCaption clearfix">
                            <h5><a href="single-product.html">Scarf Ring Corner</a></h5>
                            <h3>$199</h3>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-3 col-xs-12">
                        <div class="imageBox">
                          <div class="productImage clearfix">
                            <a href="single-product.html">
                              <img src="{{asset('/assets/img/home/featured-product/product-img9.jpg')}}" alt="featured-product-img">
                            </a>
                            <div class="productMasking">
                              <ul class="list-inline btn-group" role="group">
                                <li><a data-toggle="modal" href=".html" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                                <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                                <li><a data-toggle="modal" href="-2.html" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="productCaption clearfix">
                            <h5><a href="single-product.html">Sun Buddies</a></h5>
                            <h3>$199</h3>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-3 col-xs-12">
                        <div class="imageBox">
                          <div class="productImage clearfix">
                            <a href="single-product.html">
                              <img src="img/home/featured-product/product-img10.jpg" alt="featured-product-img">
                            </a>
                            <div class="productMasking">
                              <ul class="list-inline btn-group" role="group">
                                <li><a data-toggle="modal" href=".html" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                                <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                                <li><a data-toggle="modal" href="-2.html" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="productCaption clearfix">
                            <h5><a href="single-product.html">Mauris efficitur</a></h5>
                            <h3>$199</h3>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-3 col-xs-12">
                        <div class="imageBox">
                          <div class="productImage clearfix">
                            <a href="single-product.html">
                              <img src="img/home/featured-product/product-img11.jpg" alt="featured-product-img">
                            </a>
                            <div class="productMasking">
                              <ul class="list-inline btn-group" role="group">
                                <li><a data-toggle="modal" href=".html" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                                <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                                <li><a data-toggle="modal" href="-2.html" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="productCaption clearfix">
                            <h5><a href="single-product.html">Nike Sportswear</a></h5>
                            <h3>$199</h3>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-3 col-xs-12">
                        <div class="imageBox">
                          <div class="productImage clearfix">
                            <a href="single-product.html">
                              <img src="img/home/featured-product/product-img12.jpg" alt="featured-product-img">
                            </a>
                            <div class="productMasking">
                              <ul class="list-inline btn-group" role="group">
                                <li><a data-toggle="modal" href=".html" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                                <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                                <li><a data-toggle="modal" href="-2.html" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="productCaption clearfix">
                            <h5><a href="single-product.html">porro quisquam</a></h5>
                            <h3>$199</h3>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-3 col-xs-12">
                        <div class="imageBox">
                          <div class="productImage clearfix">
                            <a href="single-product.html">
                              <img src="img/home/featured-product/product-img13.jpg" alt="featured-product-img">
                            </a>
                            <div class="productMasking">
                              <ul class="list-inline btn-group" role="group">
                                <li><a data-toggle="modal" href=".html" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                                <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                                <li><a data-toggle="modal" href="-2.html" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="productCaption clearfix">
                            <h5><a href="single-product.html">enim ad minim</a></h5>
                            <h3>$199</h3>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-3 col-xs-12">
                        <div class="imageBox">
                          <div class="productImage clearfix">
                            <a href="single-product.html">
                              <img src="img/home/featured-product/product-img3.jpg" alt="featured-product-img">
                            </a>
                            <div class="productMasking">
                              <ul class="list-inline btn-group" role="group">
                                <li><a data-toggle="modal" href=".html" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                                <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                                <li><a data-toggle="modal" href="-2.html" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="productCaption clearfix">
                            <h5><a href="single-product.html">sunt in culpa</a></h5>
                            <h3>$199</h3>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="menu2" class="tab-pane fade">
                    <div class="row">
                      <div class="col-sm-3 col-xs-12">
                        <div class="imageBox">
                          <div class="productImage clearfix">
                            <a href="single-product.html">
                              <img src="img/home/featured-product/product-img6.jpg" alt="featured-product-img">
                            </a>
                            <div class="productMasking">
                              <ul class="list-inline btn-group" role="group">
                                <li><a data-toggle="modal" href=".html" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                                <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                                <li><a data-toggle="modal" href="-2.html" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="productCaption clearfix">
                            <h5><a href="single-product.html">Mauris efficitur</a></h5>
                            <h3>$199</h3>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-3 col-xs-12">
                        <div class="imageBox">
                          <div class="productImage clearfix">
                            <a href="single-product.html">
                              <img src="img/home/featured-product/product-img5.jpg" alt="featured-product-img">
                            </a>
                            <div class="productMasking">
                              <ul class="list-inline btn-group" role="group">
                                <li><a data-toggle="modal" href=".html" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                                <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                                <li><a data-toggle="modal" href="-2.html" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="productCaption clearfix">
                            <h5><a href="single-product.html">Mauris efficitur</a></h5>
                            <h3>$199</h3>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-3 col-xs-12">
                        <div class="imageBox">
                          <div class="productImage clearfix">
                            <a href="single-product.html">
                              <img src="img/home/featured-product/product-img4.jpg" alt="featured-product-img">
                            </a>
                            <div class="productMasking">
                              <ul class="list-inline btn-group" role="group">
                                <li><a data-toggle="modal" href=".html" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                                <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                                <li><a data-toggle="modal" href="-2.html" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="productCaption clearfix">
                            <h5><a href="single-product.html">Mauris efficitur</a></h5>
                            <h3>$199</h3>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-3 col-xs-12">
                        <div class="imageBox">
                          <div class="productImage clearfix">
                            <a href="single-product.html">
                              <img src="img/home/featured-product/product-img3.jpg" alt="featured-product-img">
                            </a>
                            <div class="productMasking">
                              <ul class="list-inline btn-group" role="group">
                                <li><a data-toggle="modal" href=".html" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                                <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                                <li><a data-toggle="modal" href="-2.html" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="productCaption clearfix">
                            <h5><a href="single-product.html">Mauris efficitur</a></h5>
                            <h3>$199</h3>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-3 col-xs-12">
                        <div class="imageBox">
                          <div class="productImage clearfix">
                            <a href="single-product.html">
                              <img src="img/home/featured-product/product-img11.jpg" alt="featured-product-img">
                            </a>
                            <div class="productMasking">
                              <ul class="list-inline btn-group" role="group">
                                <li><a data-toggle="modal" href=".html" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                                <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                                <li><a data-toggle="modal" href="-2.html" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="productCaption clearfix">
                            <h5><a href="single-product.html">Nike Sportswear</a></h5>
                            <h3>$199</h3>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-3 col-xs-12">
                        <div class="imageBox">
                          <div class="productImage clearfix">
                            <a href="single-product.html">
                              <img src="img/home/featured-product/product-img12.jpg" alt="featured-product-img">
                            </a>
                            <div class="productMasking">
                              <ul class="list-inline btn-group" role="group">
                                <li><a data-toggle="modal" href=".html" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                                <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                                <li><a data-toggle="modal" href="-2.html" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="productCaption clearfix">
                            <h5><a href="single-product.html">porro quisquam</a></h5>
                            <h3>$199</h3>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-3 col-xs-12">
                        <div class="imageBox">
                          <div class="productImage clearfix">
                            <a href="single-product.html">
                              <img src="img/home/featured-product/product-img13.jpg" alt="featured-product-img">
                            </a>
                            <div class="productMasking">
                              <ul class="list-inline btn-group" role="group">
                                <li><a data-toggle="modal" href=".html" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                                <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                                <li><a data-toggle="modal" href="-2.html" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="productCaption clearfix">
                            <h5><a href="single-product.html">enim ad minim</a></h5>
                            <h3>$199</h3>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-3 col-xs-12">
                        <div class="imageBox">
                          <div class="productImage clearfix">
                            <a href="single-product.html">
                              <img src="img/home/featured-product/product-img3.jpg" alt="featured-product-img">
                            </a>
                            <div class="productMasking">
                              <ul class="list-inline btn-group" role="group">
                                <li><a data-toggle="modal" href=".html" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                                <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                                <li><a data-toggle="modal" href="-2.html" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="productCaption clearfix">
                            <h5><a href="single-product.html">sunt in culpa</a></h5>
                            <h3>$199</h3>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="menu3" class="tab-pane fade">
                    <div class="row">
                      <div class="col-sm-3 col-xs-12">
                        <div class="imageBox">
                          <div class="productImage clearfix">
                            <a href="single-product.html">
                              <img src="img/home/featured-product/product-img5.jpg" alt="featured-product-img">
                            </a>
                            <div class="productMasking">
                              <ul class="list-inline btn-group" role="group">
                                <li><a data-toggle="modal" href=".html" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                                <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                                <li><a data-toggle="modal" href="-2.html" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="productCaption clearfix">
                            <h5><a href="single-product.html">Mauris efficitur</a></h5>
                            <h3>$199</h3>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-3 col-xs-12">
                        <div class="imageBox">
                          <div class="productImage clearfix">
                            <a href="single-product.html">
                              <img src="img/home/featured-product/product-img3.jpg" alt="featured-product-img">
                            </a>
                            <div class="productMasking">
                              <ul class="list-inline btn-group" role="group">
                                <li><a data-toggle="modal" href=".html" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                                <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                                <li><a data-toggle="modal" href="-2.html" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="productCaption clearfix">
                            <h5><a href="single-product.html">Mauris efficitur</a></h5>
                            <h3>$199</h3>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-3 col-xs-12">
                        <div class="imageBox">
                          <div class="productImage clearfix">
                            <a href="single-product.html">
                              <img src="img/home/featured-product/product-img8.jpg" alt="featured-product-img">
                            </a>
                            <div class="productMasking">
                              <ul class="list-inline btn-group" role="group">
                                <li><a data-toggle="modal" href=".html" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                                <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                                <li><a data-toggle="modal" href="-2.html" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="productCaption clearfix">
                            <h5><a href="single-product.html">Scarf Ring Corner</a></h5>
                            <h3>$199</h3>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-3 col-xs-12">
                        <div class="imageBox">
                          <div class="productImage clearfix">
                            <a href="single-product.html">
                              <img src="img/home/featured-product/product-img9.jpg" alt="featured-product-img">
                            </a>
                            <div class="productMasking">
                              <ul class="list-inline btn-group" role="group">
                                <li><a data-toggle="modal" href=".html" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                                <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                                <li><a data-toggle="modal" href="-2.html" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="productCaption clearfix">
                            <h5><a href="single-product.html">Sun Buddies</a></h5>
                            <h3>$199</h3>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-3 col-xs-12">
                        <div class="imageBox">
                          <div class="productImage clearfix">
                            <a href="single-product.html">
                              <img src="img/home/featured-product/product-img10.jpg" alt="featured-product-img">
                            </a>
                            <div class="productMasking">
                              <ul class="list-inline btn-group" role="group">
                                <li><a data-toggle="modal" href=".html" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                                <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                                <li><a data-toggle="modal" href="-2.html" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="productCaption clearfix">
                            <h5><a href="single-product.html">Mauris efficitur</a></h5>
                            <h3>$199</h3>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-3 col-xs-12">
                        <div class="imageBox">
                          <div class="productImage clearfix">
                            <a href="single-product.html">
                              <img src="img/home/featured-product/product-img11.jpg" alt="featured-product-img">
                            </a>
                            <div class="productMasking">
                              <ul class="list-inline btn-group" role="group">
                                <li><a data-toggle="modal" href=".html" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                                <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                                <li><a data-toggle="modal" href="-2.html" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="productCaption clearfix">
                            <h5><a href="single-product.html">Nike Sportswear</a></h5>
                            <h3>$199</h3>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-3 col-xs-12">
                        <div class="imageBox">
                          <div class="productImage clearfix">
                            <a href="single-product.html">
                              <img src="img/home/featured-product/product-img6.jpg" alt="featured-product-img">
                            </a>
                            <div class="productMasking">
                              <ul class="list-inline btn-group" role="group">
                                <li><a data-toggle="modal" href=".html" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                                <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                                <li><a data-toggle="modal" href="-2.html" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="productCaption clearfix">
                            <h5><a href="single-product.html">Mauris efficitur</a></h5>
                            <h3>$199</h3>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-3 col-xs-12">
                        <div class="imageBox">
                          <div class="productImage clearfix">
                            <a href="single-product.html">
                              <img src="img/home/featured-product/product-img4.jpg" alt="featured-product-img">
                            </a>
                            <div class="productMasking">
                              <ul class="list-inline btn-group" role="group">
                                <li><a data-toggle="modal" href=".html" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                                <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                                <li><a data-toggle="modal" href="-2.html" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="productCaption clearfix">
                            <h5><a href="single-product.html">Mauris efficitur</a></h5>
                            <h3>$199</h3>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- FEATURE -->
          <div class="row features version2">
            <div class="col-sm-4 col-xs-12">
              <div class="box text-center">
                <i class="fa fa-truck" aria-hidden="true"></i>
                <h4>Free Shipping </h4>
                <span>Excepteur sint occaecat cupidatat.</span>
              </div>
            </div>
            <div class="col-sm-4 col-xs-12">
              <div class="box text-center">
                <i class="fa fa-money" aria-hidden="true"></i>
                <h4>100% money back</h4>
                <span>Excepteur sint occaecat cupidatat.</span>
              </div>
            </div>
            <div class="col-sm-4 col-xs-12">
              <div class="box text-center">
                <i class="fa fa-headphones" aria-hidden="true"></i>
                <h4>24/7 support</h4>
                <span>Excepteur sint occaecat cupidatat.</span>
              </div>
            </div>
          </div>

          <!-- TESTIMONIAL SECTION -->
          <div class="row testimonialSection">
            <div class="col-xs-12">
              <div class="owl-carousel testimonialSlider">

                <div class="slide">
                  <div class="testimonial-inner">
                    <div class="testimonialImage text-center">
                      <img src="img/home/testimonial/testimonial-img1.png" alt="Image">
                    </div>
                    <div class="testimonialText">
                      <span class="product-rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half-full" aria-hidden="true"></i>
                      </span>
                      <div class="testimonial-content">
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
                        <div class="author-img">
                          <img src="img/home/testimonial/author1.png" alt="Image">
                        </div>
                        <cite>Sarah Smith</cite>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="slide">
                  <div class="testimonial-inner">
                    <div class="testimonialImage text-center">
                      <img src="img/home/testimonial/testimonial-img1.png" alt="Image">
                    </div>
                    <div class="testimonialText">
                      <span class="product-rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half-full" aria-hidden="true"></i>
                      </span>
                      <div class="testimonial-content">
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
                        <div class="author-img">
                          <img src="img/home/testimonial/author1.png" alt="Image">
                        </div>
                        <cite>Sarah Smith</cite>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>

        </div>
      </section>

      <!-- LIGHT SECTION -->
      <section class="lightSection clearfix">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="owl-carousel partnersLogoSlider version2">
                <div class="slide">
                  <div class="partnersLogo clearfix">
                    <img src="img/home/partners/partner-01.png" alt="partner-img">
                  </div>
                </div>
                <div class="slide">
                  <div class="partnersLogo clearfix">
                    <img src="img/home/partners/partner-02.png" alt="partner-img">
                  </div>
                </div>
                <div class="slide">
                  <div class="partnersLogo clearfix">
                    <img src="img/home/partners/partner-03.png" alt="partner-img">
                  </div>
                </div>
                <div class="slide">
                  <div class="partnersLogo clearfix">
                    <img src="img/home/partners/partner-04.png" alt="partner-img">
                  </div>
                </div>
                <div class="slide">
                  <div class="partnersLogo clearfix">
                    <img src="img/home/partners/partner-05.png" alt="partner-img">
                  </div>
                </div>
                <div class="slide">
                  <div class="partnersLogo clearfix">
                    <img src="img/home/partners/partner-01.png" alt="partner-img">
                  </div>
                </div>
                <div class="slide">
                  <div class="partnersLogo clearfix">
                    <img src="img/home/partners/partner-02.png" alt="partner-img">
                  </div>
                </div>
                <div class="slide">
                  <div class="partnersLogo clearfix">
                    <img src="img/home/partners/partner-03.png" alt="partner-img">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- FOOTER -->
      <div class="footer clearfix">
        <div class="container">
          <div class="row">
            <div class="col-sm-2 col-xs-12">
              <div class="footerLink">
                <h5>Accessories</h5>
                <ul class="list-unstyled">
                  <li><a href="#">Body care </a></li>
                  <li><a href="#">Chambray </a></li>
                  <li><a href="#">Floral </a></li>
                  <li><a href="#">Rejuvination </a></li>
                  <li><a href="#">Shaving </a></li>
                  <li><a href="#">Toilette </a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-2 col-xs-12">
              <div class="footerLink">
                <h5>BRANDS</h5>
                <ul class="list-unstyled">
                  <li><a href="#">Barbour </a></li>
                  <li><a href="#">Brioni </a></li>
                  <li><a href="#">Oliver Spencer</a></li>
                  <li><a href="#">Belstaff</a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-2 col-xs-12">
              <div class="footerLink">
                <h5>Accessories</h5>
                <ul class="list-unstyled">
                  <li><a href="#">Body care </a></li>
                  <li><a href="#">Chambray </a></li>
                  <li><a href="#">Floral </a></li>
                  <li><a href="#">Rejuvination </a></li>
                  <li><a href="#">Shaving </a></li>
                  <li><a href="#">Toilette </a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-2 col-xs-12">
              <div class="footerLink">
                <h5>Get in Touch</h5>
                <ul class="list-unstyled">
                  <li>Call us at (555)-555-5555</li>
                  <li><a href="mailto:support@iamabdus.com">support@iamabdus.com</a></li>
                </ul>
                <ul class="list-inline">
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                  <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                  <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-4 col-xs-12">
              <div class="newsletter clearfix">
                <h4>Newsletter</h4>
                <h3>Sign up now</h3>
                <p>Enter your email address and get notified about new products. We hate spam!</p>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="your email address" aria-describedby="basic-addon2">
                  <a href="#" class="input-group-addon" id="basic-addon2">go <i class="glyphicon glyphicon-chevron-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- COPY RIGHT -->
      <div class="copyRight clearfix">
        <div class="container">
          <div class="row">
            <div class="col-sm-7 col-xs-12">
              <p>&copy; 2016 Copyright Bigbag Store Bootstrap Template by <a target="_blank" href="http://www.iamabdus.com/">Abdus</a>.</p>
            </div>
            <div class="col-sm-5 col-xs-12">
              <ul class="list-inline">
                <li><img src="img/home/footer/card1.png"></li>
                <li><img src="img/home/footer/card2.png"></li>
                <li><img src="img/home/footer/card3.png"></li>
                <li><img src="img/home/footer/card4.png"></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- LOGIN MODAL -->
    <div class="modal fade login-modal" id="login" tabindex="-1" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h3 class="modal-title">log in</h3>
          </div>
          <div class="modal-body">
            <form action="#" method="POST" role="form">
              <div class="form-group">
                <label for="">Enter Email</label>
                <input type="email" class="form-control" id="">
              </div>
              <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" id="">
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox"> Remember Me
                </label>
              </div>
              <button type="submit" class="btn btn-primary btn-block">log in</button>
              <button type="button" class="btn btn-link btn-block">Forgot Password?</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- SIGN UP MODAL -->
    <div class="modal fade" id="signup" tabindex="-1" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h3 class="modal-title">Create an account</h3>
          </div>
          <div class="modal-body">
            <form action="#" method="POST" role="form">
              <div class="form-group">
                <label for="">Enter Email</label>
                <input type="email" class="form-control" id="">
              </div>
              <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" id="">
              </div>
              <div class="form-group">
                <label for="">Confirm Password</label>
                <input type="password" class="form-control" id="">
              </div>
              <button type="submit" class="btn btn-primary btn-block">Sign up</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- PORDUCT QUICK VIEW MODAL -->
    <div class="modal fade quick-view" tabindex="-1" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <div class="media">
              <div class="media-left">
                <img class="media-object" src="{{asset('/assets/img/products/quick-view/quick-view-01.jpg')}}" alt="Image">
              </div>
              <div class="media-body">
                <h2>Old Skool Navy</h2>
                <h3>$149</h3>
                <p>Classic sneaker from Vans. Cotton canvas and suede upper. Textile lining with heel stabilizer and ankle support. Contrasting laces. Sits on a classic waffle rubber sole.</p>
                <span class="quick-drop">
                  <select name="guiest_id3" id="guiest_id3" class="select-drop">
                    <option value="0">Size</option>
                    <option value="1">Size 1</option>
                    <option value="2">Size 2</option>
                    <option value="3">Size 3</option>
                  </select>
                </span>
                <span class="quick-drop resizeWidth">
                  <select name="guiest_id4" id="guiest_id4" class="select-drop">
                    <option value="0">Qty</option>
                    <option value="1">Qty 1</option>
                    <option value="2">Qty 2</option>
                    <option value="3">Qty 3</option>
                  </select>
                </span>
                <div class="btn-area">
                  <a href="#" class="btn btn-primary btn-block">Add to cart <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


  <script src="{{asset('/assets/ajax/libs/jquery/1.11.3/jquery.min.js')}}"></script>
	  <script src="{{asset('/assets/plugins/jquery-ui/jquery-ui.js')}}"></script>
		  <script src="{{asset('/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
			  <script src="{{asset('/assets/plugins/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
				  <script src="{{asset('/assets/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
					  <script src="{{asset('/assets/plugins/owl-carousel/owl.carousel.js')}}"></script>
						  <script src="{{asset('/assets/plugins/selectbox/jquery.selectbox-0.1.3.min.js')}}"></script>
							<script src="{{asset('/assets/plugins/countdown/jquery.syotimer.js')}}"></script>
							  <script src="{{asset('/assets/options/optionswitcher.js')}}"></script>
								  <script src="{{asset('/assets/js/custom.js')}}"></script>
  </body>

<!-- Mirrored from themes.iamabdus.com/bigbag/1.1/index-v3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Jan 2017 09:25:05 GMT -->
</html>
