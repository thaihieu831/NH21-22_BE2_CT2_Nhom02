<?php

use Illuminate\Support\Facades\Auth; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Electro - HTML Ecommerce Template</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}" />

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="{{ asset('css/slick.css')}}" />
	<link type="text/css" rel="stylesheet" href="{{ asset('css/slick-theme.css')}}" />

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="{{ asset('css/nouislider.min.css')}}" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{ asset('css/style.css')}}" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<!-- HEADER -->
	<header>
		<!-- TOP HEADER -->
		<div id="top-header">
			<div class="container">
				<ul class="header-links pull-left">
					<li><a href="tel:0987712063"><i class="fa fa-phone"></i> +84-987-712-063</a></li>
					<li><a href="mailto:Thaihieu243@gmail.com"><i class="fa fa-envelope-o"></i>
							Thaihieu243@gmail.com</a></li>
					<li><a href="https://www.google.com/maps/place/53+%C4%90.+V%C3%B5+V%C4%83n+Ng%C3%A2n,+Linh+Chi%E1%BB%83u,+Th%E1%BB%A7+%C4%90%E1%BB%A9c,+Th%C3%A0nh+ph%E1%BB%91+H%E1%BB%93+Ch%C3%AD+Minh,+Vi%E1%BB%87t+Nam/@10.8511574,106.7557547,17z/data=!3m1!4b1!4m5!3m4!1s0x317527bd532d45d9:0x6b46595d312dcffe!8m2!3d10.8511574!4d106.7579434"><i class="fa fa-map-marker"></i> 53 Võ Văn Ngân - Phường Linh Chiểu - Thành phố Thủ Đức</a>
					</li>
				</ul>
				<ul class="header-links pull-right">
					@if(Auth::check())
					<li><a href="{{ asset('profile')}}"><img class="img-profile rounded-circle" src="{{asset('image/avatar/'.Auth::user()->avatar)}}" width="50px" style="padding-right: 10px;">xin chào: {{Auth::user()->name}}</a></li>
					<li><a href="{{route('logout')}}">Đăng xuất</a></li> @else
					<li><a href="{{ asset('login')}}"><i class="fa fa-user-o"></i> My Account</a></li>
					@endif
				</ul>
			</div>
		</div>
		<!-- /TOP HEADER -->

		<!-- MAIN HEADER -->
		<div id="header">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- LOGO -->
					<div class="col-md-3">
						<div class="header-logo">
							<a href="{{asset ('index')}}" class="logo">
								<img src="{{asset ('./img/logo.png')}}" alt="">
							</a>
						</div>
					</div>
					<!-- /LOGO -->

					<!-- SEARCH BAR -->
					<div class="col-md-6">
						<div class="header-search">
							<form action="">
								<select class="input-select">
									<option value="0">Tất cả</option>
									<option value="1">Điện thoại</option>
									<option value="2">LapTop</option>
									<option value="3">Máy tính bảng</option>
									<option value="4">Smartwatch</option>
									<option value="5">Tai nghe</option>
								</select>
								<input class="input" placeholder="Search here" name="key">
								<button class="search-btn">Search</button>
							</form>
						</div>
					</div>
					<!-- /SEARCH BAR -->

					<!-- ACCOUNT -->
					<div class="col-md-3 clearfix">
						<div class="header-ctn">
							<!-- Wishlist -->
							<div>
								<a href="#">
									<i class="fa fa-heart-o"></i>
									<span>Your Wishlist</span>
									<div class="qty">2</div>
								</a>
							</div>
							<!-- /Wishlist -->

							<!-- Cart -->
							<div class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
									<i class="fa fa-shopping-cart"></i>
									<span>Your Cart</span>
									<div class="qty">3</div>
								</a>
								<div class="cart-dropdown">
									<div class="cart-list">
										<div class="product-widget">
											<div class="product-img">
												<img src="./img/product01.png" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="#">product name goes here</a></h3>
												<h4 class="product-price"><span class="qty">1x</span>$980.00</h4>
											</div>
											<button class="delete"><i class="fa fa-close"></i></button>
										</div>

										<div class="product-widget">
											<div class="product-img">
												<img src="./img/product02.png" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="#">product name goes here</a></h3>
												<h4 class="product-price"><span class="qty">3x</span>$980.00</h4>
											</div>
											<button class="delete"><i class="fa fa-close"></i></button>
										</div>
									</div>
									<div class="cart-summary">
										<small>3 Item(s) selected</small>
										<h5>SUBTOTAL: $2940.00</h5>
									</div>
									<div class="cart-btns">
										<a href="#">View Cart</a>
										<a href="{{asset('checkout')}}">Checkout <i class="fa fa-arrow-circle-right"></i></a>
									</div>
								</div>
							</div>
							<!-- /Cart -->

							<!-- Menu Toogle -->
							<div class="menu-toggle">
								<a href="#">
									<i class="fa fa-bars"></i>
									<span>Menu</span>
								</a>
							</div>
							<!-- /Menu Toogle -->
						</div>
					</div>
					<!-- /ACCOUNT -->
				</div>
				<!-- row -->
			</div>
			<!-- container -->
		</div>
		<!-- /MAIN HEADER -->
	</header>
	<!-- /HEADER -->
	@yield('content')
	<!-- NEWSLETTER -->
	<div id="newsletter" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-12">
					<div class="newsletter">
						<p>Đăng Kí Để Nhận <strong>THÔNG BÁO</strong></p>
						<form>
							<input class="input" type="email" placeholder="Email của bạn">
							<button class="newsletter-btn"><i class="fa fa-envelope"></i> Đăng kí</button>
						</form>
						<ul class="newsletter-follow">
							<li>
								<a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
							</li>
							<li>
								<a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
							</li>
							<li>
								<a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
							</li>
							<li>
								<a href="https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /NEWSLETTER -->

	<!-- FOOTER -->
	<footer id="footer">
		<!-- top footer -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-3 col-xs-6">
						<div class="footer">
							<h3 class="footer-title">Chúng tôi</h3>
							<p><strong>Nhóm 2</strong></p>
							<ul class="footer-links">
								<li><i class="fa fa-map-marker"></i>53 Võ Văn Ngân - Phường Linh Chiểu- Thành phố Thủ
									Đức</li>
								<li><i class="fa fa-phone"></i>08.38970023</li>
								<li><i class="fa fa-envelope-o"></i>fit@tdc.edu.vn</li>
							</ul>
						</div>
					</div>
					<div class="col-md-3 col-xs-6">
						<div class="footer">
							<h3 class="footer-title">thể loại</h3>
							<ul class="footer-links">
								<li><a href="{{ asset('store/1')}}">Điện thoại</a></li>
								<li><a href="{{ asset('store/2')}}">Laptop</a></li>
								<li><a href="{{ asset('store/3')}}">Máy tính bảng</a></li>
								<li><a href="{{ asset('store/4')}}">Smartwatch</a></li>
								<li><a href="{{ asset('store/5')}}">Tai nghe</a></li>
							</ul>
						</div>
					</div>
					<div class="clearfix visible-xs"></div>
					<div class="col-md-3 col-xs-6">
						<div class="footer">
							<h3 class="footer-title">thông tin</h3>
							<ul class="footer-links">
								<li><strong>Thái Minh Hiếu</strong> - Thaihieu243@gmail.com</li>
								<li><strong>Khuất Quang Sang</strong> - khuatquangsang2030@gmail.com</li>
								<li><strong>Nguyễn Anh Khoa</strong> - nguyenanhkhoaa5@gmail.com</li>
							</ul>
						</div>
					</div>
					<div class="col-md-3 col-xs-6">
						<div class="footer">
							<h3 class="footer-title">Dịch vụ</h3>
							<ul class="footer-links">
								<li><a href="#">Tài Khoản Của Tôi</a></li>
								<li><a href="#">Xem Giỏ Hàng</a></li>
								<li><a href="#">Yêu Thích</a></li>
								<li><a href="#">Xem Đơn Hàng</a></li>
								<li><a href="#">Giúp Đỡ</a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /top footer -->

		<!-- bottom footer -->
		<div id="bottom-footer" class="section">
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12 text-center">
						<ul class="footer-payments">
							<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
							<li><a href="#"><i class="fa fa-credit-card"></i></a></li>
							<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
							<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
							<li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
							<li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
						</ul>
						<span class="copyright">
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;<script>
								document.write(new Date().getFullYear());
							</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</span>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /bottom footer -->
	</footer>
	<!-- /FOOTER -->


	<!-- jQuery Plugins -->
	<script src="{{ asset('js/jquery.min.js')}}"></script>
	<script src="{{ asset('js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('js/slick.min.js')}}"></script>
	<script src="{{ asset('js/nouislider.min.js')}}"></script>
	<script src="{{ asset('js/jquery.zoom.min.js')}}"></script>
	<script src="{{ asset('js/main.js')}}"></script>
</body>

</html>