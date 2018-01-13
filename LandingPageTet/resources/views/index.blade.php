<!DOCTYPE html>
<html lang="en">
<!--
	Bent - Bootstrap Landing Page Template by Dcrazed
	Site: https://dcrazed.com/bent-app-landing-page-template/
	Free for personal and commercial use under GNU GPL 3.0 license.
-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="csrf-token" content="{{ csrf_token() }}" >
	<title>Landing Page</title>
	<!-- Google Font -->
	<link href='https://fonts.googleapis.com/css?family=Raleway:500,600,700,800,900,400,300' rel='stylesheet' type='text/css'>

	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900,300italic,400italic' rel='stylesheet' type='text/css'>
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
	
	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- Owl Carousel Assets -->
	<link href="css/owl.carousel.css" rel="stylesheet">
	<link href="css/owl.theme.css" rel="stylesheet">


	<!-- Pixeden Icon Font -->
	<link rel="stylesheet" href="css/Pe-icon-7-stroke.css">

	<!-- Font Awesome -->
	<link href="css/font-awesome.min.css" rel="stylesheet">


	<!-- PrettyPhoto -->
	<link href="css/prettyPhoto.css" rel="stylesheet">

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

	<!-- Style -->
	<link href="css/style.css" rel="stylesheet">

	<link href="css/animate.css" rel="stylesheet">
	<!-- Responsive CSS -->
	<link href="css/responsive.css" rel="stylesheet">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- PRELOADER -->
	<div class="spn_hol">
		<div class="spinner">
			<div class="bounce1"></div>
			<div class="bounce2"></div>
			<div class="bounce3"></div>
		</div>
	</div>

	<!-- END PRELOADER -->

 <!-- =========================
     START ABOUT US SECTION
     ============================== -->
     <div id="dang-ky-uu-dai" class="modal fade" role="dialog">
        <div class="modal-dialog" >

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="font-family: sans-serif; text-align: center;">Chỉ với 4s đăng ký nhận ngay mã giảm giá <span style="font-weight: bold; color: red;">200.000đ</span> </h4>
                   
                </div>
                <div class="modal-body">

                    <form role="form" action="{{URL::route('postDangky')}}" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token()}}">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                @if( count($errors) > 0)
                                    <div class="alert alert-danger " id="messageten">
                                        
                                        <ul>
                                            @foreach($errors->all() as $error)
                                                <li>{{$error}}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    
                                @endif
                                <input class="form-control" id="ten" name="ten" placeholder="Họ tên" value="{{old('ten')}}">
                                <br>
                                <input class="form-control" id="sdt" name="sdt" placeholder="Số điện thoại" value="{{old('sdt')}}">
                                <br>
                                <button type="submit" class="btn btn-success submit-btn" style="font-family: sans-serif;">GỬI ĐĂNG KÝ</button>
                            </div>
                        </div>
                         
                    </form>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>

    </div>
     <section class="header parallax home-parallax page" id="HOME" style="background-color: #b10001;">
     	<h2></h2>
     	<div class="section_overlay">
     		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
     			<div class="container">
     				<!-- Brand and toggle get grouped for better mobile display -->
     				<div class="navbar-header">
     					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
     						<span class="sr-only">Toggle navigation</span>
     						<span class="icon-bar"></span>
     						<span class="icon-bar"></span>
     						<span class="icon-bar"></span>
     					</button>
     					<a class="navbar-brand" href="#">
     						<img src="images/cd.png" alt="Logo" >

     					</a>
                        <div class="countdown">
                            <span id="d" style="border:1px solid yellow; border-radius: 3px; font-size: 1.2em; background-color: red; font-family: sans-serif; color: #fff; margin: 0px 0%;"></span>
                            <span id="h" style="border:1px solid yellow; border-radius: 3px; font-size: 1.2em; background-color: red;font-family: sans-serif;color: #fff; margin: 0px 0%;"></span>
                            <span id="m" style="border:1px solid yellow; border-radius: 3px; font-size: 1.2em;background-color: red;font-family: sans-serif;color: #fff; margin: 0px 0%;"></span>
                            <span id="s" style="border:1px solid yellow; border-radius: 3px; font-size: 1.2em;background-color: red;font-family: sans-serif;color: #fff; margin: 0px 0%;"></span>
                        </div>

     				</div>
                    
     				<!-- Collect the nav links, forms, and other content for toggling -->
     				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     					<ul class="nav navbar-nav navbar-right">
     						<!-- NAV -->
     						<li><a href="#HOME">Trang chủ</a> </li>
     						<li><a href="#ABOUT">Sản phẩm hot</a> </li>
     						<li><a href="#FEATURES">Điện thoại</a></li>
     						<li><a href="#SCREENS">Đồng hồ</a> </li>
     						<li><a href="#DOWNLOAD">Ưu đãi lớn </a> </li>
     						<li><a href="#CONTACT">Liên hệ với chúng tôi </a> </li>
                            <li type="button"><a class="btn btn-success" role="button" href="tel:01642911168" style="font-family: sans-serif;"><i class="fa fa-phone-square" aria-hidden="true"></i>xxxxxxxx</a></li>
     					</ul>
     				</div>
                    
                        
                    <!-- <div id="countdown" style="margin-top: 0px; position: absolute; margin-left: -8%; width: 15%;">
                        <div class="countdown" style="position: absolute; margin-left: 24%;" >
                            <span id="d" style="border:1px solid yellow; border-radius: 3px; font-size: 1.5em; background-color: red; font-family: sans-serif; color: #fff; margin: 0px 0%;"></span>
                            <span id="h" style="border:1px solid yellow; border-radius: 3px; font-size: 1.5em; background-color: red;font-family: sans-serif;color: #fff; margin: 0px 0%;"></span>
                            <span id="m" style="border:1px solid yellow; border-radius: 3px; font-size: 1.5em;background-color: red;font-family: sans-serif;color: #fff; margin: 0px 0%;"></span>
                            <span id="s" style="border:1px solid yellow; border-radius: 3px; font-size: 1.5em;background-color: red;font-family: sans-serif;color: #fff; margin: 0px 0%;"></span>
                        </div>
                        <img src="images/hoa-dao-rgb.png" width="100%" height="auto" style="position: relative; margin-top: -7%;"> 
                    </div> -->
                        
     				<!-- /.navbar-collapse -->
                    
     			</div>
     			<!-- /.container- -->
     		</nav>

     		<div class="container home-container">
     			<!-- <div class="row">
     				<div class="col-md-12">
     					<div class="logo text-center">
     						<img width="200px" height="55" src="images/logo2.png" alt="">
     					</div>
     				</div>
     			</div> -->
     			<!-- <div class="row">
     				<div class="col-md-8 col-sm-8">
     					<div class="home_text">
     						
     						<h1 style="font-family: Sans-serif;">Đồng hồ Nga chính hãng. Uy tín và chất lượng</h1>
     						<p style="font-family: Sans-serif;">Đồng hồ Nga sang trọng đẳng cấp</p>

     						<div class="download-btn">
     							
     							<a class="btn home-btn wow fadeInLeft" href="#DOWNLOAD">Liên hệ</a>
     							<a class="tuor btn wow fadeInRight" href="#ABOUT">Xem thêm <i class="fa fa-angle-down"></i></a>
     						</div>
     					</div>
     				</div>
     				<div class="col-md-3 col-md-offset-1 col-sm-4">
     					<div class="home-iphone">
     						<img src="images/5.png" alt="">
     					</div>
     				</div>
     			</div> -->
     		</div>
     	</div>
     </section>

     <!-- END HEADER SECTION -->




 <!-- =========================
     START ABOUT US SECTION
     ============================== -->


     <section class="about page" id="ABOUT" style="background-color: #ffebab">
     	<div class="container">
     		<div class="row">
     			<div class="col-md-10 col-md-offset-1">
     				<!-- ABOUT US SECTION TITLE-->
     				<div class="section_title" >
     					<h2 style="font-family: Sans-serif; color: red; text-align: center;  ">Sản phẩm hot</h2>
     					<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p> -->
     				</div>
     			</div>

     		</div>
     	</div>
     	<div class="inner_about_area">
     		<div class="container" >
     			<div class="row" style="margin-bottom: 20px;">
     				<div class="col-md-4" data-toggle="modal" data-target="#Modal1">
     					<div class="about_phone wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">
     						<!-- PHONE -->

     						<img src="images/5.png" alt="" width="380px" height="380px" class="img-thumbnail zoomItem" >
                            <!-- <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <a href="" class="btn btn-danger" role="button">Đặt mua</a>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <a href="" class="btn btn-default" role="button">Xem nhanh</a>
                                </div>
                            </div> -->
                        </div>    
     				</div>
                    <div id="Modal1" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Thông tin sản phẩm</h4>
                                </div>
                                <div class="modal-body">
                                    
                                    <div class="feature_inner">
                                    
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="feature_iphone zoomItem ">
                                                        
                                                        <img class="wow bounceIn" data-wow-duration="1s" src="images/iPhone02.png" alt="">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-8 left_no_padding wow fadeInRight" data-wow-duration="1s">

                                                    
                                                    <div class="right_single_feature zoomIn">
                                                        
                                                        <div><span class="pe-7s-monitor"></span></div>

                                                        
                                                        <h5>Thông tin sản phẩm</h5>
                                                        
                                                    </div>
                                                    


                                                
                                                    <div class="right_single_feature zoomIn">
                                                        
                                                        <div><span class="pe-7s-phone"></span></div>

                                                        
                                                        <h5>Thông tin sản phẩm</h5>
                                                        
                                                    </div>
                                                    


                                                    
                                                    <div class="right_single_feature zoomIn">
                                                    
                                                        <div><span class="pe-7s-gleam"></span></div>

                                                    
                                                        <h5>Thông tin sản phẩm</h5>
                                                        
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="row">

                                                <div  class="col-md-2 col-md-offset-1"><a href="" class="btn btn-danger" role="button">Mua ngay</a></div>
                                                <div  class="col-md-2"><a href="" class="btn btn-default" role="button" style="position: center;">Xem chi tiết</a></div>
                                            </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                        </div>
                        
                    </div>
                    <div class="col-md-4" data-toggle="modal" data-target="#Modal1">
                        <div class="about_phone wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                            <!-- PHONE -->

                            <img src="images/5.png" alt="" width="380px" height="380px" class="img-thumbnail zoomItem" >
                            <!-- <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <a href="" class="btn btn-danger" role="button">Đặt mua</a>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <a href="" class="btn btn-default" role="button">Xem nhanh</a>
                                </div>
                            </div> -->
                        </div>    
                    </div>
                    <div id="Modal1" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Thông tin sản phẩm</h4>
                                </div>
                                <div class="modal-body">
                                    
                                    <div class="feature_inner">
                                    
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="feature_iphone zoomItem ">
                                                        
                                                        <img class="wow bounceIn" data-wow-duration="1s" src="images/iPhone02.png" alt="">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-8 left_no_padding wow fadeInRight" data-wow-duration="1s">

                                                    
                                                    <div class="right_single_feature zoomIn">
                                                        
                                                        <div><span class="pe-7s-monitor"></span></div>

                                                        
                                                        <h5>Thông tin sản phẩm</h5>
                                                        
                                                    </div>
                                                    


                                                
                                                    <div class="right_single_feature zoomIn">
                                                        
                                                        <div><span class="pe-7s-phone"></span></div>

                                                        
                                                        <h5>Thông tin sản phẩm</h5>
                                                        
                                                    </div>
                                                    


                                                    
                                                    <div class="right_single_feature zoomIn">
                                                    
                                                        <div><span class="pe-7s-gleam"></span></div>

                                                    
                                                        <h5>Thông tin sản phẩm</h5>
                                                        
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="row">

                                                <div  class="col-md-2 col-md-offset-1"><a href="" class="btn btn-danger" role="button">Mua ngay</a></div>
                                                <div  class="col-md-2"><a href="" class="btn btn-default" role="button" style="position: center;">Xem chi tiết</a></div>
                                            </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                        </div>
                        
                    </div>
                    <div class="col-md-4" data-toggle="modal" data-target="#Modal1">
                        <div class="about_phone wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                            <!-- PHONE -->

                            <img src="images/5.png" alt="" width="380px" height="380px" class="img-thumbnail zoomItem" >
                            <!-- <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <a href="" class="btn btn-danger" role="button">Đặt mua</a>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <a href="" class="btn btn-default" role="button">Xem nhanh</a>
                                </div>
                            </div> -->
                        </div>    
                    </div>
                    <div id="Modal1" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Thông tin sản phẩm</h4>
                                </div>
                                <div class="modal-body">
                                    
                                    <div class="feature_inner">
                                    
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="feature_iphone zoomItem ">
                                                        
                                                        <img class="wow bounceIn" data-wow-duration="1s" src="images/iPhone02.png" alt="">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-8 left_no_padding wow fadeInRight" data-wow-duration="1s">

                                                    
                                                    <div class="right_single_feature zoomIn">
                                                        
                                                        <div><span class="pe-7s-monitor"></span></div>

                                                        
                                                        <h5>Thông tin sản phẩm</h5>
                                                        
                                                    </div>
                                                    


                                                
                                                    <div class="right_single_feature zoomIn">
                                                        
                                                        <div><span class="pe-7s-phone"></span></div>

                                                        
                                                        <h5>Thông tin sản phẩm</h5>
                                                        
                                                    </div>
                                                    


                                                    
                                                    <div class="right_single_feature zoomIn">
                                                    
                                                        <div><span class="pe-7s-gleam"></span></div>

                                                    
                                                        <h5>Thông tin sản phẩm</h5>
                                                        
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="row">

                                                <div  class="col-md-2 col-md-offset-1"><a href="" class="btn btn-danger" role="button">Mua ngay</a></div>
                                                <div  class="col-md-2"><a href="" class="btn btn-default" role="button" style="position: center;">Xem chi tiết</a></div>
                                            </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                        </div>
                        
                    </div>
     				
                </div>
                
                <div><br></div>
                <div><br></div>
                <div class="row">
                    <div class="col-md-3 col-md-offset-5">
                        <div class="video-button">
                            
                            <a class="btn btn-primary btn-video" href="#" role="button">Xem thêm</a>
                        </div>
                    </div>
                </div>
                <div><br></div>
            </div>
        </div>
        <!-- <hr style="margin-left: auto; margin-right: auto; width: 30%; border-top: 1px dashed #8c8b8b;"> -->

        <!-- <div class="video_area">
        	<div class="container">
        		<div class="row"> -->
        			<!-- <div class="col-md-6 wow fadeInLeftBig">
        				
        				<div class="video_title">
        					<h2 style="font-family: sans-serif;">Giới thiệu sản phẩm</h2>
        					<p style="font-family: Sans-serif;">Truy cập website <a href="http://donghonga.com.vn">donghonga.vn</a> để mua thêm nhiều sản phẩm mới với ưu đãi cực lớn</p>
        				</div>
        				<div class="video-button">
        					
        					<a class="btn btn-primary btn-video" href="tel:01642911168" role="button">Liên hệ với chúng tôi</a>
        				</div>
        			</div>
        			<div class="col-md-6 wow fadeInRightBig">
        				
        				<div class="video">
        					
        					<iframe width="560" height="315" src="https://www.youtube.com/embed/VMwy3yBmmJo" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
        				</div>
        			</div> -->
        	<!-- 	</div>
        	</div>
        </div> -->
    </section>
    <!-- End About Us -->
    <section class="apps_screen page" id="SCREENS">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 wow fadeInBig" data-wow-duration="1s">
                    <!-- APPS SCREEN TITLE -->
                    <div class="section_title">
                        <h2 style="font-family: Sans-serif; text-align: center;">Đồng hồ</h2>
                                                  
                    </div>
                    <!-- END APPS SCREEN TITLE -->
                </div>
            </div>
        </div>

        <div class="screen_slider">
            <div id="demo" class="wow bounceInRight" data-wow-duration="1s">
                
                <div id="owl-demo" class="owl-carousel">
                    

                    <div class="about_phone wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                        <!-- PHONE -->

                        <img src="images/5.png" alt="" width="500px" height="auto" class="img-thumbnail zoomItem" >
                        <!-- <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <a href="" class="btn btn-danger" role="button">Đặt mua</a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <a href="" class="btn btn-default" role="button">Xem nhanh</a>
                            </div>
                        </div> -->
                        
                        
                        
                    </div>
                    
                
                    <div class="about_phone wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                        <!-- PHONE -->

                        <img src="images/5.png" alt="" width="500px" height="auto" class="img-thumbnail zoomItem" >
                        <!-- <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <a href="" class="btn btn-danger" role="button">Đặt mua</a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <a href="" class="btn btn-default" role="button">Xem nhanh</a>
                            </div>
                        </div> -->
                    </div>
                    
                    
                    <div class="about_phone wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                        <!-- PHONE -->

                        <img src="images/5.png" alt="" width="1000px" height="auto" class="img-thumbnail zoomItem" >
                        <!-- <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <a href="" class="btn btn-danger" role="button">Đặt mua</a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <a href="" class="btn btn-default" role="button">Xem nhanh</a>
                            </div>
                        </div> -->
                    </div>
                    
                    
                    <div class="about_phone wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                        <!-- PHONE -->

                        <img src="images/5.png" alt="" width="1000px" height="auto" class="img-thumbnail zoomItem" >
                        <!-- <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <a href="" class="btn btn-danger" role="button">Đặt mua</a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <a href="" class="btn btn-default" role="button">Xem nhanh</a>
                            </div>
                        </div> -->
                    </div>
                    
                    
                    <div class="about_phone wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                        <!-- PHONE -->

                        <img src="images/5.png" alt="" width="1000px" height="auto" class="img-thumbnail zoomItem" >
                        <!-- <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <a href="" class="btn btn-danger" role="button">Đặt mua</a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <a href="" class="btn btn-default" role="button">Xem nhanh</a>
                            </div>
                        </div> -->
                    </div>
                    <div class="about_phone wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                        <!-- PHONE -->

                        <img src="images/5.png" alt="" width="1000px" height="auto" class="img-thumbnail zoomItem" >
                        <!-- <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <a href="" class="btn btn-danger" role="button">Đặt mua</a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <a href="" class="btn btn-default" role="button">Xem nhanh</a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-md-offset-5">
                    <div class="video-button">
                                
                        <a class="btn btn-primary btn-video" href="#" role="button">Xem thêm</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="FEATURES" class="features page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- FEATURES SECTION TITLE -->
                    <div class="section_title wow fadeIn" data-wow-duration="1s">
                        <h2 style="font-family: sans-serif;text-align: center;">Điện Thoại</h2>
                        <p></p>
                    </div>
                    <!-- END FEATURES SECTION TITLE -->
                </div>
            </div>
        </div>

        <div class="feature_inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 right_no_padding wow fadeInLeft" data-wow-duration="1s">
                        <!-- FEATURE -->

                        <div class="left_single_feature zoomIn">
                            <!-- ICON -->
                            <div><span class="pe-7s-like"></span></div>

                            <!-- FEATURE HEADING AND DESCRIPTION -->
                            <h3>Creative Design<span>/</span></h3>
                            <p>Lorem ipsum dolor, consectetur sed do adipisicing elit, sed do eiusmod tempor incididunt</p>
                        </div>

                        <!-- END SINGLE FEATURE -->


                        <!-- FEATURE -->
                        <div class="left_single_feature zoomIn">
                            <!-- ICON -->
                            <div><span class="pe-7s-science"></span></div>

                            <!-- FEATURE HEADING AND DESCRIPTION -->
                            <h3>Modern Look<span>/</span></h3>
                            <p>Lorem ipsum dolor, consectetur sed do adipisicing elit, sed do eiusmod tempor incididunt</p>
                        </div>
                        <!-- END SINGLE FEATURE -->


                        <!-- FEATURE -->
                        <div class="left_single_feature zoomIn">
                            <!-- ICON -->
                            <div><span class="pe-7s-look"></span></div>

                            <!-- FEATURE HEADING AND DESCRIPTION -->
                            <h3>Minimal Layout<span>/</span></h3>
                            <p>Lorem ipsum dolor, consectetur sed do adipisicing elit, sed do eiusmod tempor incididunt</p>
                        </div>
                        <!-- END SINGLE FEATURE -->

                    </div>
                    <div class="col-md-4">
                        <div class="feature_iphone zoomItem ">
                            <!-- FEATURE PHONE IMAGE -->
                            <img class="wow bounceIn" data-wow-duration="1s" src="images/iPhone02.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-4 left_no_padding wow fadeInRight" data-wow-duration="1s">

                        <!-- FEATURE -->
                        <div class="right_single_feature zoomIn">
                            <!-- ICON -->
                            <div><span class="pe-7s-monitor"></span></div>

                            <!-- FEATURE HEADING AND DESCRIPTION -->
                            <h3><span>/</span>Retina ready</h3>
                            <p>Lorem ipsum dolor, consectetur sed do adipisicing elit, sed do eiusmod tempor incididunt</p>
                        </div>
                        <!-- END SINGLE FEATURE -->


                        <!-- FEATURE -->
                        <div class="right_single_feature zoomIn">
                            <!-- ICON -->
                            <div><span class="pe-7s-phone"></span></div>

                            <!-- FEATURE HEADING AND DESCRIPTION -->
                            <h3><span>/</span>Responsive Ready</h3>
                            <p>Lorem ipsum dolor, consectetur sed do adipisicing elit, sed do eiusmod tempor incididunt</p>
                        </div>
                        <!-- END SINGLE FEATURE -->


                        <!-- FEATURE -->
                        <div class="right_single_feature zoomIn">
                            <!-- ICON -->
                            <div><span class="pe-7s-gleam"></span></div>

                            <!-- FEATURE HEADING AND DESCRIPTION -->
                            <h3><span>/</span>Clean Code</h3>
                            <p>Lorem ipsum dolor, consectetur sed do adipisicing elit, sed do eiusmod tempor incididunt</p>
                        </div>
                        <!-- END SINGLE FEATURE -->
                    </div>
                </div>
            </div>
        </div>
     </section>



 <!-- =========================
     START TESTIMONIAL SECTION
     ============================== -->

     <section id="TESTIMONIAL" class="testimonial parallax">
     	<div class="section_overlay">
     		<div class="container">
     			<div class="row">
     				<div class="col-md-12 wow bounceInDown">
     					<div id="carousel-example-caption-testimonial" class="carousel slide" data-ride="carousel">
     						<!-- Indicators -->
     						<ol class="carousel-indicators">
     							<li data-target="#carousel-example-caption-testimonial" data-slide-to="0" class="active"></li>
     							<li data-target="#carousel-example-caption-testimonial" data-slide-to="1"></li>
     							<li data-target="#carousel-example-caption-testimonial" data-slide-to="2"></li>
     						</ol>

     						<!-- Wrapper for slides -->
     						<div class="carousel-inner">
     							<div class="item active">
     								<div class="container">
     									<div class="row">
     										<div class="col-md-12 text-center">
     											<!-- IMAGE -->
     											<img src="images/client_1.png" alt="">
     											<div class="testimonial_caption">
     												<!-- DESCRIPTION -->  
     												<h2>Dan Harmon</h2>
     												<h4><span>SR. UI Designer,</span> Dcrazed</h4>
     												<p>“Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.”</p>
     											</div>
     										</div>
     									</div>
     								</div>
     							</div>
     							<div class="item">
     								<div class="container">
     									<div class="row">
     										<div class="col-md-12 text-center">
     											<!-- IMAGE -->
     											<img src="images/client_2.png" alt="">
     											<div class="testimonial_caption">
     												<!-- DESCRIPTION --> 
     												<h2>Allie Kingsley</h2>
     												<h4><span>SR. Content Strategist,</span> Designscrazed</h4>
     												<p>“Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.”</p>
     											</div>
     										</div>
     									</div>
     								</div>
     							</div>
     							<div class="item">
     								<div class="container">
     									<div class="row">
     										<div class="col-md-12 text-center">
     											<!-- IMAGE -->
     											<img src="images/client_3.png" alt="">
     											<div class="testimonial_caption">
     												<!-- DESCRIPTION --> 
     												<h2>Joel Mchale</h2>
     												<h4><span>SR. Developer,</span> Treehouse</h4>
     												<p>“Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.”</p>
     											</div>
     										</div>
     									</div>
     								</div>
     							</div>
     						</div>
     					</div>
     				</div>
     			</div>
     		</div>
     	</div>
     </section>



     <!-- END TESTIMONIAL SECTION -->



<!-- =========================
     START FEATURES
     ============================== -->
     <!-- <section id="FEATURES" class="features page">
     	<div class="container">
     		<div class="row">
     			<div class="col-md-10 col-md-offset-1">
     				
     				<div class="section_title wow fadeIn" data-wow-duration="1s">
     					<h2 style="font-family: sans-serif;">Thông số kỹ thuật</h2>
     					<p></p>
     				</div>
     				
     			</div>
     		</div>
     	</div>

     	<div class="feature_inner">
     		<div class="container">
     			<div class="row">
     				<div class="col-md-4 right_no_padding wow fadeInLeft" data-wow-duration="1s">
     					

     					<div class="left_single_feature zoomIn">
     						
     						<div><span class="pe-7s-like"></span></div>

     						
     						<h3>Creative Design<span>/</span></h3>
     						<p>Lorem ipsum dolor, consectetur sed do adipisicing elit, sed do eiusmod tempor incididunt</p>
     					</div>

     					


     					
     					<div class="left_single_feature zoomIn">
     						
     						<div><span class="pe-7s-science"></span></div>

     						
     						<h3>Modern Look<span>/</span></h3>
     						<p>Lorem ipsum dolor, consectetur sed do adipisicing elit, sed do eiusmod tempor incididunt</p>
     					</div>
     					


     					
     					<div class="left_single_feature zoomIn">
     						
     						<div><span class="pe-7s-look"></span></div>

     						
     						<h3>Minimal Layout<span>/</span></h3>
     						<p>Lorem ipsum dolor, consectetur sed do adipisicing elit, sed do eiusmod tempor incididunt</p>
     					</div>
     					

     				</div>
     				<div class="col-md-4">
     					<div class="feature_iphone zoomItem ">
     						
     						<img class="wow bounceIn" data-wow-duration="1s" src="images/iPhone02.png" alt="">
     					</div>
     				</div>
     				<div class="col-md-4 left_no_padding wow fadeInRight" data-wow-duration="1s">

     					
     					<div class="right_single_feature zoomIn">
     						
     						<div><span class="pe-7s-monitor"></span></div>

     						
     						<h3><span>/</span>Retina ready</h3>
     						<p>Lorem ipsum dolor, consectetur sed do adipisicing elit, sed do eiusmod tempor incididunt</p>
     					</div>
     					


     				
     					<div class="right_single_feature zoomIn">
     						
     						<div><span class="pe-7s-phone"></span></div>

     						
     						<h3><span>/</span>Responsive Ready</h3>
     						<p>Lorem ipsum dolor, consectetur sed do adipisicing elit, sed do eiusmod tempor incididunt</p>
     					</div>
     					


     					
     					<div class="right_single_feature zoomIn">
     					
     						<div><span class="pe-7s-gleam"></span></div>

     					
     						<h3><span>/</span>Clean Code</h3>
     						<p>Lorem ipsum dolor, consectetur sed do adipisicing elit, sed do eiusmod tempor incididunt</p>
     					</div>
     					
     				</div>
     			</div>
     		</div>
     	</div>
     </section> -->
     <!-- END FEATURES SECTION -->


     
<!-- =========================
     START CALL TO ACTION
     ============================== -->


     <!-- END CALL TO ACTION -->


<!-- =========================
     Start APPS SCREEN SECTION
     ============================== -->
     <section class="apps_screen page" id="SCREENS">
     	<div class="container">
     		<div class="row">
     			<div class="col-md-10 wow fadeInBig" data-wow-duration="1s">
     				<!-- APPS SCREEN TITLE -->
     				<div class="section_title">
     					<h2 style="font-family: Sans-serif;">Đồng hồ</h2>
     					                          
     				</div>
     				<!-- END APPS SCREEN TITLE -->
     			</div>
     		</div>
     	</div>

     	<div class="screen_slider">
     		<div id="demo" class="wow bounceInRight" data-wow-duration="1s">
                
     			<div id="owl-demo" class="owl-carousel">
                    

                    <div class="about_phone wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                        <!-- PHONE -->

                        <img src="images/5.png" alt="" width="500px" height="auto" class="img-thumbnail zoomItem" >
                        <!-- <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <a href="" class="btn btn-danger" role="button">Đặt mua</a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <a href="" class="btn btn-default" role="button">Xem nhanh</a>
                            </div>
                        </div> -->
                        
                        
                        
                    </div>
                    
                
                    <div class="about_phone wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                        <!-- PHONE -->

                        <img src="images/5.png" alt="" width="500px" height="auto" class="img-thumbnail zoomItem" >
                        <!-- <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <a href="" class="btn btn-danger" role="button">Đặt mua</a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <a href="" class="btn btn-default" role="button">Xem nhanh</a>
                            </div>
                        </div> -->
                    </div>
                    
                    
                    <div class="about_phone wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                        <!-- PHONE -->

                        <img src="images/5.png" alt="" width="1000px" height="auto" class="img-thumbnail zoomItem" >
                        <!-- <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <a href="" class="btn btn-danger" role="button">Đặt mua</a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <a href="" class="btn btn-default" role="button">Xem nhanh</a>
                            </div>
                        </div> -->
                    </div>
                    
                    
                    <div class="about_phone wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                        <!-- PHONE -->

                        <img src="images/5.png" alt="" width="1000px" height="auto" class="img-thumbnail zoomItem" >
                        <!-- <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <a href="" class="btn btn-danger" role="button">Đặt mua</a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <a href="" class="btn btn-default" role="button">Xem nhanh</a>
                            </div>
                        </div> -->
                    </div>
                    
                    
                    <div class="about_phone wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                        <!-- PHONE -->

                        <img src="images/5.png" alt="" width="1000px" height="auto" class="img-thumbnail zoomItem" >
                        <!-- <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <a href="" class="btn btn-danger" role="button">Đặt mua</a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <a href="" class="btn btn-default" role="button">Xem nhanh</a>
                            </div>
                        </div> -->
                    </div>
                    <div class="about_phone wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                        <!-- PHONE -->

                        <img src="images/5.png" alt="" width="1000px" height="auto" class="img-thumbnail zoomItem" >
                        <!-- <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <a href="" class="btn btn-danger" role="button">Đặt mua</a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <a href="" class="btn btn-default" role="button">Xem nhanh</a>
                            </div>
                        </div> -->
                    </div>
     			</div>
     		</div>
     	</div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-md-offset-5">
                    <div class="video-button">
                                
                        <a class="btn btn-primary btn-video" href="#" role="button">Xem thêm</a>
                    </div>
                </div>
            </div>
        </div>
     </section>



     <!-- ENS APPS SCREEN -->





<!-- =========================
     Start FUN FACTS
     ============================== -->


     <section class="fun_facts parallax">
     	<div class="section_overlay">
     		<div class="container wow bounceInLeft" data-wow-duration="1s">
     			<div class="row text-center">
     				<div class="col-md-3">
     					<div class="single_fun_facts">
     						<i class="pe-7s-cloud-download"></i>
     						<h2><span  class="counter_num">699</span> <span>+</span></h2>
     						<p>Downloads</p>
     					</div>
     				</div>
     				<div class="col-md-3">
     					<div class="single_fun_facts">
     						<i class="pe-7s-look"></i>
     						<h2><span  class="counter_num">1999</span> <span>+</span></h2>
     						<p>Likes</p>
     					</div>
     				</div>
     				<div class="col-md-3">
     					<div class="single_fun_facts">
     						<i class="pe-7s-comment"></i>
     						<h2><span  class="counter_num">199</span> <span>+</span></h2>
     						<p>Feedbacks</p>
     					</div>
     				</div>
     				<div class="col-md-3">
     					<div class="single_fun_facts">
     						<i class="pe-7s-cup"></i>
     						<h2><span  class="counter_num">10</span> <span>+</span></h2>
     						<p>Awards</p>
     					</div>
     				</div>
     			</div>
     		</div>
     	</div>
     </section>

     <!-- END FUN FACTS -->




<!-- =========================
     START DOWNLOAD NOW 
     ============================== -->
     <section class="download page" id="DOWNLOAD">
     	<div class="container">
     		<div class="row">
     			<div class="col-md-10 col-md-offset-1">
     				<!-- DOWNLOAD NOW SECTION TITLE -->
     				<div class="section_title">
     					<h2 style="font-family: sans-serif;">Khuyến mại lớn chào xuân 2018</h2>
     					<p></p>
     				</div>
     				<!--END DOWNLOAD NOW SECTION TITLE -->
     			</div>
     		</div>
     	</div>

     	
     			 
     			<div id="myCarousel" class="carousel slide" data-ride="carousel">
     				<!-- Indicators -->
     				<ol class="carousel-indicators">
     					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
     					<li data-target="#myCarousel" data-slide-to="1"></li>
     					<li data-target="#myCarousel" data-slide-to="2"></li>
     				</ol>

     				<!-- Wrapper for slides -->
     				<div class="carousel-inner">
     					<div class="item active">
     						<img src="images/2.jpg" alt="Los Angeles" style="width:100%; border-radius: 0%;">
     					</div>

     					<div class="item">
     						<img src="images/3.jpg" alt="Chicago" style="width:100%; border-radius: 0%;">
     					</div>

     					<div class="item">
     						<img src="images/4.jpg" alt="New york" style="width:100%; border-radius: 0%;">
     					</div>
     				</div>

     				<!-- Left and right controls -->
     				<a class="left carousel-control" href="#myCarousel" data-slide="prev">
     					<span class="glyphicon glyphicon-chevron-left"></span>
     					<span class="sr-only">Previous</span>
     				</a>
     				<a class="right carousel-control" href="#myCarousel" data-slide="next">
     					<span class="glyphicon glyphicon-chevron-right"></span>
     					<span class="sr-only">Next</span>
     				</a>
     			</div>
     		
     	

     </section>
     <!-- END DOWNLOAD -->

<!-- =========================
     START CONTCT FORM AREA
     ============================== -->
     <section class="contact page" id="CONTACT">
     	<div class="section_overlay">
     		<div class="container">
     			<div class="col-md-10 col-md-offset-1 wow bounceIn">
     				<!-- Start Contact Section Title-->
     				<div class="section_title">
     					<h2 style="font-family: sans-serif;">Liên hệ với chúng tôi</h2>
     					<p style="font-family: sans-serif;">Hãy gọi điện trực tiếp cho chúng tôi để đặt hàng hoặc điền thông tin vào phần yêu cầu chúng tôi sẽ gọi điện trực tiếp tư vấn cho quý khách hàng</p>
     				</div>
     			</div>
     		</div>

     		<div class="contact_form wow bounceIn">
     			<div class="container">

     				<!-- START ERROR AND SUCCESS MESSAGE -->
     				<div class="form_error text-center">
     					<div class="name_error hide error">Please Enter your name</div>
     					<div class="email_error hide error">Please Enter your Email</div>
     					<div class="email_val_error hide error">Please Enter a Valid Email Address</div>
     					<div class="message_error hide error">Please Enter Your Message</div>
     				</div>
     				<div class="Sucess"></div>
     				<!-- END ERROR AND SUCCESS MESSAGE -->

     				<!-- CONTACT FORM starts here, Go to contact.php and add your email ID, thats it.-->    
     				<form role="form" action="contact.php">
     					<div class="row">
     						<div class="col-md-4">
     							<input type="text" class="form-control" id="name" placeholder="Name">
     							<input type="email" class="form-control" id="email" placeholder="Email">
     							<input type="text" class="form-control" id="sđt" placeholder="Subject">
     						</div>


     						<div class="col-md-8">
     							<textarea class="form-control" id="message" rows="25" cols="10" placeholder="  Message Texts..."></textarea>
     							<button type="button" class="btn btn-default submit-btn form_submit">Gửi thông tin</button>
     						</div>
     					</div>
     				</form>
     				<!-- END FORM --> 
     			</div>
     		</div>

     		<div class="container">
     			<div class="row">
     				<div class="col-md-12 wow bounceInLeft">
     					<div class="social_icons">
     						<ul>
     							<li><a href=""><i class="fa fa-facebook" style="color: blue;"></i></a>
     							</li>
     							<li><a href=""><i class="fa fa-twitter" style="color: red;"></i></a>
     							</li>
     							<li><a href="http://donghonga.com.vn" target="_blank"><i class="fa fa-dribbble" style="color: red;"></i></a>
     							</li>
     							<li><a href="https://www.youtube.com/channel/UCIhLayiHW8_NjjGDfaIkU5g" target="_blank"><i class="fa fa-youtube" style="color: red;"></i></a>
     							</li>
     						</ul>
     					</div>
     				</div>
     			</div>
     		</div>
     	</div>
     </section>
     <!-- END CONTACT -->

<!-- =========================
     Start Subscription Form 
     ============================== -->



     <section class="subscribe parallax subscribe-parallax" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
     	<div class="section_overlay wow lightSpeedIn">
     		<div class="container">
     			<div class="row">
     				<div class="col-md-10 col-md-offset-1">

     					<!-- Start Subscribe Section Title -->
     					<div class="section_title">
     						<h2>SUBSCRIBE US</h2>
     						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
     					</div>
     					<!-- End Subscribe Section Title -->
     				</div>
     			</div>
     		</div>

     		<div class="container">
     			<div class="row  wow lightSpeedIn">
     				<div class="col-md-6 col-md-offset-3">
     					<!-- SUBSCRIPTION SUCCESSFUL OR ERROR MESSAGES -->
     					<div class="subscription-success"></div>
     					<div class="subscription-error"></div>
     					<!-- Check this topic on how to add email subscription list, http://kb.mailchimp.com/lists/signup-forms/host-your-own-signup-forms -->
     					<form id="mc-form" action="https://designscrazed.us8.list-manage.com/subscribe/post" method="POST" class="subscribe_form">                         
     						<input type="hidden" name="u" value="6908378c60c82103f3d7e8f1c">
     						<input type="hidden" name="id" value="8c5074025d">
     						<div class="form-group">
     							<!-- EMAIL INPUT BOX -->
     							<input type="email" autocapitalize="off" autocorrect="off" name="MERGE0" class="required email form-control" id="mce-EMAIL" placeholder="Enter Email Address" value="" >                                 
     						</div>
     						<!-- SUBSCRIBE BUTTON -->
     						<button type="submit" class="btn btn-default subs-btn">Submit</button>
     					</form>


     				</div>
     			</div>
     		</div>
     	</div>
     </section>

     <!-- END SUBSCRIPBE FORM -->


<!-- =========================
     FOOTER 
     ============================== -->

     <section class="copyright">
     	<h2></h2>
     	<div class="container">
     		<div class="row">
     			<div class="col-md-6">
     				<div class="copy_right_text">
     					<!-- COPYRIGHT TEXT -->
     					<p>Copyright &copy; 2017. All Rights Reserved.</p>        
     					<p>A theme by <a href="https://dcrazed.com/">Dcrazed</a></p>
     				</div>

     			</div>

     			<div class="col-md-6">
     				<div class="scroll_top">
     					<a href="#HOME"><i class="fa fa-angle-up"></i></a>
     				</div>
     			</div>
     		</div>
     	</div>
     </section>
     <!-- END FOOTER -->


<!-- =========================
     SCRIPTS 
     ============================== -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     
     <!-- <script src="js/jquery.min.js"></script> -->
     <!-- <script src="js/bootstrap.min.js"></script> -->
     <script src="js/owl.carousel.js"></script>
     <script src="js/jquery.fitvids.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/jquery.parallax-1.1.3.js"></script>
     <script src="js/jquery.prettyPhoto.js"></script>
     <script src="js/jquery.ajaxchimp.min.js"></script>
     <script src="js/jquery.ajaxchimp.langs.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/waypoints.min.js"></script>
     <script src="js/jquery.counterup.min.js"></script>
     <script src="js/script.js"></script>
     <script src="js/Countdown.js"></script>
     <script src="js/jquery.countdown.min.js"></script>
     <script src="js/jquery.countdown.js"></script>
     <!-- <script type="text/javascript">
        $("#d").countdown("2018/02/16", function(event) {
            $(this).text(
              event.strftime('%D')
              );
        });
        $("#h").countdown("2018/02/16", function(event) {
            $(this).text(
              event.strftime('%H')
              );
        });
        $("#m").countdown("2018/02/16", function(event) {
            $(this).text(
              event.strftime('%M')
              );
        });
        $("#s").countdown("2018/02/16", function(event) {
            $(this).text(
              event.strftime('%S')
              );
        });
     </script> -->


 </body>
 </html>