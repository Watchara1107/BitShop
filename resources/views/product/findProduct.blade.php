@extends('layouts.home')

@section('content')
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
								<div class="col-sm-6">
									<h1><span>Bit</span>-Shop</h1>
									<h2>แพลตฟอร์มช็อปปิ้งออนไลน์</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="{{asset('images/home/girl1.jpg')}}" class="girl img-responsive" alt="" />
									<img src="{{asset('images/home/pricing.png')}}"  class="pricing" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>Bit</span>-Shop</h1>
									<h2>บริการ ทุกระดับประทับใจ</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="{{asset('images/home/girl2.jpg')}}" class="girl img-responsive" alt="" />
									<img src="{{asset('images/home/pricing.png')}}"  class="pricing" alt="" />
								</div>
							</div>

							<div class="item">
								<div class="col-sm-6">
									<h1><span>Bit</span>-Shop</h1>
									<h2>รับประกันสินค้านาน 3 ปี</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="{{asset('images/home/girl3.jpg')}}" class="girl img-responsive" alt="" />
									<img src="{{asset('images/home/pricing.png')}}" class="pricing" alt="" />
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
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Type Product</h2>
						<div class="panel-group category-products" id="accordian">
			<!--category-productsr-->
							@foreach($types as $type)
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="{{url('/product/type/'.$type->id)}}">{{$type->name}}</a></h4>
								</div>
							</div>
							@endforeach
						</div><!--/category-products-->

						<div class="price-range"><!--price-range-->
							<h2>Price Range</h2>
							<form action="{{url('product/priceRange/')}}" method="get">
								 <!--{{csrf_field()}}-->
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="60000" data-slider-step="5" data-slider-value="[250,40000]" id="sl2" name="price"><br />
								 <b class="pull-left">฿ 0</b> <b class="pull-right">฿ 60000</b>
								 <input type="submit" name="" value="ค้นหา" class="btn btn-primary">
								 </form>
						</div><!--/price-range-->
					</div>
				</div>

				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">{{$feature}}</h2>
						<div class="row">
						<div class="col-sm-11">
						<div class="search_box pull-right">
							<form action="{{url('product/search/')}}" method="get">
							<input type="text" placeholder="Search" name="search"/>
							</form>
						</div>
					</div>
					</div>
					<br>
					<div class="row">
					@forelse($products as $product)
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
										
										<a href="{{asset('/images/'. $product->image)}}" data-lity>
										  <img src="{{asset('/images/'. $product->image)}}" width="268px" height="250">
											
											<h2>฿ {{number_format($product->price)}}</h2>
											<p>{{$product->name}}</p>
										</div>	
										
										<div class="choose">
    									<ul class="nav nav-pills nav-justified">
	    										<li><a href="{{url('product/details/'.$product->id)}}"><i class="fa fa-info-circle"></i>Product Detail</a></li>	
    									</ul>
								</div>
							</div>
						</div>
					</div><!--features_items-->
					@empty
						<div class="alert alert-danger">
							<p>ไม่มีสินค้าในหมวดหมู่ <strong>{{$feature}}</strong></p>
						</div>
					@endforelse
				</div>
				{{$products->appends(['price'=>request()->query('price')])->links()}}
			</div>
		</div>
		</div>
	</section>
@endsection

