@extends('master')
@section('content')
<!-- NAVIGATION -->
<nav id="navigation">
	<!-- container -->
	<div class="container">
		<!-- responsive-nav -->
		<div id="responsive-nav">
			<!-- NAV -->
			<ul class="main-nav nav navbar-nav">
				<li><a href="{{ asset('index')}}">Home &emsp;</a></li>
				{{ csrf_field() }}
				@foreach ($category as $row)
				<li><a href="{{route('category_product', ['type_id' => $row->type_id])}}">{{$row->type_name}}</a></li>
				@endforeach
			</ul>
			<!-- /NAV -->
		</div>
		<!-- /responsive-nav -->
	</div>
	<!-- /container -->
</nav>
<!-- /NAVIGATION -->

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<!-- shop -->
			<div class="col-md-4 col-xs-6">
				<div class="shop">
					<div class="shop-img">
						<img src="./img/shop01.png" alt="">
					</div>
					<div class="shop-body">
						<h3>Laptop<br>Collection</h3>
						<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
			<!-- /shop -->

			<!-- shop -->
			<div class="col-md-4 col-xs-6">
				<div class="shop">
					<div class="shop-img">
						<img src="./img/shop03.png" alt="">
					</div>
					<div class="shop-body">
						<h3>Accessories<br>Collection</h3>
						<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
			<!-- /shop -->

			<!-- shop -->
			<div class="col-md-4 col-xs-6">
				<div class="shop">
					<div class="shop-img">
						<img src="./img/shop02.png" alt="">
					</div>
					<div class="shop-body">
						<h3>Cameras<br>Collection</h3>
						<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
			<!-- /shop -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">

			<!-- section title -->
			<div class="col-md-12">
				<div class="section-title">
					<h3 class="title">Sản phẩm mới</h3>
					<div class="section-nav">
						<ul class="section-tab-nav tab-nav">
							<li class="active"><a data-toggle="tab" href="#tab1">Điện thoại</a></li>
							<li><a data-toggle="tab" href="#tab2">Laptop</a></li>
							<li><a data-toggle="tab" href="#tab3">Máy tính bảng</a></li>
							<li><a data-toggle="tab" href="#tab4">Smartwatch</a></li>
							<li><a data-toggle="tab" href="#tab5">Tai nghe</a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /section title -->

			<!-- Products tab & slick -->
			<div class="col-md-12">
				<div class="row">
					<div class="products-tabs">
						<!-- tab -->
						<div id="tab1" class="tab-pane active">
							<div class="products-slick" data-nav="#slick-nav-1">
								{{ csrf_field() }}
								@foreach ($new_product_phone as $row)
								<!-- product -->
								<div class="product">
									<div class="product-img">
										<img src="./img/{{$row->image}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">{{$row->type_name}}</p>
										<h3 class="product-name"><a href="{{route('product_detail', ['product_id' => $row->product_id])}}">{{$row->product_name}}</a></h3>
										<h4 class="product-price">{{number_format($row->price)}} vnđ</h4>
										<div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
									</div>
								</div>
								<!-- /product -->
								@endforeach
							</div>
							<div id="slick-nav-1" class="products-slick-nav"></div>
						</div>
						<!-- /tab -->

						<!-- tab -->
						<div id="tab2" class="tab-pane">
							<div class="products-slick" data-nav="#slick-nav-1">
								{{ csrf_field() }}
								@foreach ($new_product_lap as $row)
								<!-- product -->
								<div class="product">
									<div class="product-img">
										<img src="./img/{{$row->image}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">{{$row->type_name}}</p>
										<h3 class="product-name"><a href="{{route('product_detail', ['product_id' => $row->product_id])}}">{{$row->product_name}}</a></h3>
										<h4 class="product-price">{{number_format($row->price)}} vnđ</h4>
										<div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
									</div>
								</div>
								<!-- /product -->
								@endforeach
							</div>
							<div id="slick-nav-1" class="products-slick-nav"></div>
						</div>
						<!-- /tab -->

						<!-- tab -->
						<div id="tab3" class="tab-pane">
							<div class="products-slick" data-nav="#slick-nav-1">
								{{ csrf_field() }}
								@foreach ($new_product_tablet as $row)
								<!-- product -->
								<div class="product">
									<div class="product-img">
										<img src="./img/{{$row->image}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">{{$row->type_name}}</p>
										<h3 class="product-name"><a href="{{route('product_detail', ['product_id' => $row->product_id])}}">{{$row->product_name}}</a></h3>
										<h4 class="product-price">{{number_format($row->price)}} vnđ</h4>
										<div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
									</div>
								</div>
								<!-- /product -->
								@endforeach
							</div>
							<div id="slick-nav-1" class="products-slick-nav"></div>
						</div>
						<!-- /tab -->

						<!-- tab -->
						<div id="tab4" class="tab-pane">
							<div class="products-slick" data-nav="#slick-nav-1">
								{{ csrf_field() }}
								@foreach ($new_product_sw as $row)
								<!-- product -->
								<div class="product">
									<div class="product-img">
										<img src="./img/{{$row->image}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">{{$row->type_name}}</p>
										<h3 class="product-name"><a href="{{route('product_detail', ['product_id' => $row->product_id])}}">{{$row->product_name}}</a></h3>
										<h4 class="product-price">{{number_format($row->price)}} vnđ</h4>
										<div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
									</div>
								</div>
								<!-- /product -->
								@endforeach
							</div>
							<div id="slick-nav-1" class="products-slick-nav"></div>
						</div>
						<!-- /tab -->

						<!-- tab -->
						<div id="tab5" class="tab-pane">
							<div class="products-slick" data-nav="#slick-nav-1">
								{{ csrf_field() }}
								@foreach ($new_product_tainghe as $row)
								<!-- product -->
								<div class="product">
									<div class="product-img">
										<img src="./img/{{$row->image}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">{{$row->type_name}}</p>
										<h3 class="product-name"><a href="{{route('product_detail', ['product_id' => $row->product_id])}}">{{$row->product_name}}</a></h3>
										<h4 class="product-price">{{number_format($row->price)}} vnđ</h4>
										<div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
									</div>
								</div>
								<!-- /product -->
								@endforeach
							</div>
							<div id="slick-nav-1" class="products-slick-nav"></div>
						</div>
						<!-- /tab -->
					</div>
				</div>
			</div>
			<!-- Products tab & slick -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->

<!-- HOT DEAL SECTION -->
<div id="hot-deal" class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-12">
				<div class="hot-deal">
					<ul class="hot-deal-countdown">
						<li>
							<div>
								<h3>02</h3>
								<span>Days</span>
							</div>
						</li>
						<li>
							<div>
								<h3>10</h3>
								<span>Hours</span>
							</div>
						</li>
						<li>
							<div>
								<h3>34</h3>
								<span>Mins</span>
							</div>
						</li>
						<li>
							<div>
								<h3>60</h3>
								<span>Secs</span>
							</div>
						</li>
					</ul>
					<h2 class="text-uppercase">hot deal this week</h2>
					<p>New Collection Up to 50% OFF</p>
					<a class="primary-btn cta-btn" href="#">Shop now</a>
				</div>
			</div>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /HOT DEAL SECTION -->

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">

			<!-- section title -->
			<div class="col-md-12">
				<div class="section-title">
					<h3 class="title">Sản phẩm nổi bật</h3>
					<div class="section-nav">
						<ul class="section-tab-nav tab-nav">
							<li class="active"><a data-toggle="tab" href="#page1">Điện thoại</a></li>
							<li><a data-toggle="tab" href="#page2">Laptop</a></li>
							<li><a data-toggle="tab" href="#page3">Máy tính bảng</a></li>
							<li><a data-toggle="tab" href="#page4">Smartwatch</a></li>
							<li><a data-toggle="tab" href="#page5">Tai nghe</a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /section title -->

			<!-- Products tab & slick -->
			<div class="col-md-12">
				<div class="row">
				<div class="products-tabs">
						<!-- tab -->
						<div id="page1" class="tab-pane active">
							<div class="products-slick" data-nav="#slick-nav-1">
								{{ csrf_field() }}
								@foreach ($feature_product_phone as $row)
								<!-- product -->
								<div class="product">
									<div class="product-img">
										<img src="./img/{{$row->image}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">{{$row->type_name}}</p>
										<h3 class="product-name"><a href="{{route('product_detail', ['product_id' => $row->product_id])}}">{{$row->product_name}}</a></h3>
										<h4 class="product-price">{{number_format($row->price)}} vnđ</h4>
										<div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
									</div>
								</div>
								<!-- /product -->
								@endforeach
							</div>
							<div id="slick-nav-1" class="products-slick-nav"></div>
						</div>
						<!-- /tab -->

						<!-- tab -->
						<div id="page2" class="tab-pane">
							<div class="products-slick" data-nav="#slick-nav-1">
								{{ csrf_field() }}
								@foreach ($feature_product_lap as $row)
								<!-- product -->
								<div class="product">
									<div class="product-img">
										<img src="./img/{{$row->image}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">{{$row->type_name}}</p>
										<h3 class="product-name"><a href="{{route('product_detail', ['product_id' => $row->product_id])}}">{{$row->product_name}}</a></h3>
										<h4 class="product-price">{{number_format($row->price)}} vnđ</h4>
										<div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
									</div>
								</div>
								<!-- /product -->
								@endforeach
							</div>
							<div id="slick-nav-1" class="products-slick-nav"></div>
						</div>
						<!-- /tab -->

						<!-- tab -->
						<div id="page3" class="tab-pane">
							<div class="products-slick" data-nav="#slick-nav-1">
								{{ csrf_field() }}
								@foreach ($feature_product_tablet as $row)
								<!-- product -->
								<div class="product">
									<div class="product-img">
										<img src="./img/{{$row->image}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">{{$row->type_name}}</p>
										<h3 class="product-name"><a href="{{route('product_detail', ['product_id' => $row->product_id])}}">{{$row->product_name}}</a></h3>
										<h4 class="product-price">{{number_format($row->price)}} vnđ</h4>
										<div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
									</div>
								</div>
								<!-- /product -->
								@endforeach
							</div>
							<div id="slick-nav-1" class="products-slick-nav"></div>
						</div>
						<!-- /tab -->

						<!-- tab -->
						<div id="page4" class="tab-pane">
							<div class="products-slick" data-nav="#slick-nav-1">
								{{ csrf_field() }}
								@foreach ($feature_product_sw as $row)
								<!-- product -->
								<div class="product">
									<div class="product-img">
										<img src="./img/{{$row->image}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">{{$row->type_name}}</p>
										<h3 class="product-name"><a href="{{route('product_detail', ['product_id' => $row->product_id])}}">{{$row->product_name}}</a></h3>
										<h4 class="product-price">{{number_format($row->price)}} vnđ</h4>
										<div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
									</div>
								</div>
								<!-- /product -->
								@endforeach
							</div>
							<div id="slick-nav-1" class="products-slick-nav"></div>
						</div>
						<!-- /tab -->

						<!-- tab -->
						<div id="page5" class="tab-pane">
							<div class="products-slick" data-nav="#slick-nav-1">
								{{ csrf_field() }}
								@foreach ($new_product_tainghe as $row)
								<!-- product -->
								<div class="product">
									<div class="product-img">
										<img src="./img/{{$row->image}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">{{$row->type_name}}</p>
										<h3 class="product-name"><a href="{{route('product_detail', ['product_id' => $row->product_id])}}">{{$row->product_name}}</a></h3>
										<h4 class="product-price">{{number_format($row->price)}} vnđ</h4>
										<div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
									</div>
								</div>
								<!-- /product -->
								@endforeach
							</div>
							<div id="slick-nav-1" class="products-slick-nav"></div>
						</div>
						<!-- /tab -->
					</div>
				</div>
			</div>
			<!-- /Products tab & slick -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-4 col-xs-6">
				<div class="section-title">
					<h4 class="title">Điện thoại bán chạy</h4>
					<div class="section-nav">
						<div id="slick-nav-3" class="products-slick-nav"></div>
					</div>
				</div>

				<div class="products-widget-slick" data-nav="#slick-nav-3">
					<div>
						{{ csrf_field() }}
						@foreach ($topselling_phone as $row)
						<!-- product widget -->
						<div class="product-widget">
							<div class="product-img">
								<img src="./img/{{$row->image}}" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">{{$row->type_name}}</p>
								<h3 class="product-name"><a href="{{route('product_detail', ['product_id' => $row->product_id])}}">{{$row->product_name}}</a></h3>
								<h4 class="product-price">{{number_format($row->price)}} vnđ</h4>
							</div>
						</div>
						<!-- /product widget -->
						@endforeach
					</div>
				</div>
			</div>

			<div class="col-md-4 col-xs-6">
				<div class="section-title">
					<h4 class="title">LAPTOP BÁN CHẠY</h4>
					<div class="section-nav">
						<div id="slick-nav-4" class="products-slick-nav"></div>
					</div>
				</div>

				<div class="products-widget-slick" data-nav="#slick-nav-4">
					<div>
						{{ csrf_field() }}
						@foreach ($topselling_laptop as $row)
						<!-- product widget -->
						<div class="product-widget">
							<div class="product-img">
								<img src="./img/{{$row->image}}" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">{{$row->type_name}}</p>
								<h3 class="product-name"><a href="{{route('product_detail', ['product_id' => $row->product_id])}}">{{$row->product_name}}</a></h3>
								<h4 class="product-price">{{number_format($row->price)}} vnđ</h4>
							</div>
						</div>
						<!-- /product widget -->
						@endforeach
					</div>
				</div>
			</div>

			<div class="clearfix visible-sm visible-xs"></div>

			<div class="col-md-4 col-xs-6">
				<div class="section-title">
					<h4 class="title">SMARTWATCH Bán Chạy</h4>
					<div class="section-nav">
						<div id="slick-nav-5" class="products-slick-nav"></div>
					</div>
				</div>

				<div class="products-widget-slick" data-nav="#slick-nav-5">
					<div>
						{{ csrf_field() }}
						@foreach ($topselling_sw as $row)
						<!-- product widget -->
						<div class="product-widget">
							<div class="product-img">
								<img src="./img/{{$row->image}}" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">{{$row->type_name}}</p>
								<h3 class="product-name"><a href="{{route('product_detail', ['product_id' => $row->product_id])}}">{{$row->product_name}}</a></h3>
								<h4 class="product-price">{{number_format($row->price)}} vnđ</h4>
							</div>
						</div>
						<!-- /product widget -->
						@endforeach
					</div>
				</div>
			</div>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->
@endsection