@extends('layouts.app')

@section('content')
	@include('elements.header')
	<div class="space-60"></div>
	<div class="container">
		<div class="row">
			<div class="col-sm-7 margin-b-40">
				<!-- master slider template -->
				<div class="ms-showcase2-template ms-showcase2-vertical">
					<div class="master-slider ms-skin-default" id="masterslider">
						@foreach($product->images as $photo)
							<div class="ms-slide">
								<img src="/plugins/masterslider/style/blank.gif"
								     data-src="{{$photo}}"
								     alt="{{$product->title}}"/>
								<img class="ms-thumb" src="{{$photo}}" alt="thumb"/>
							</div>
						@endforeach
					</div>
				</div>
			</div>
			<div class="col-sm-5">
				<div class="item-description">
					<h3>{{$product->title}}</h3>
					<span class="price text-primary">{{$product->price}}</span>
					<p>
						{!! $product->text !!}
					</p>
				</div>
			</div>
		</div>
		<hr>
		<div class="space-20"></div>
	</div>
	<div class="space-60"></div>
	<div class="container">
		<h4 class="margin-b-20">Схожі продукти</h4>
		<div class="row">
			<div class="col-sm-6 col-md-3">
				<div class="product-box">
					<div class="product-thumb">
						<img src="/images/products/p1.jpg" alt="" class="img-responsive">
						<div class="product-overlay">
                                        <span>
                                            <a class="btn btn-default" href="/product-detail-1.html">View Detail</a>
                                            <a class="btn btn-primary" href="/#">Add to cart</a>
                                        </span>
						</div>
					</div><!--/product-thumb-->
					<div class="product-desc">
						<span class="product-price pull-right">$59.00</span>
						<h5 class="product-name"><a href="/#">Table lamp</a></h5>
					</div><!--/product-desc-->
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="product-box">
					<div class="product-thumb">
						<img src="/images/products/p2.jpg" alt="" class="img-responsive">
						<div class="product-overlay">
                                        <span>
                                            <a class="btn btn-default" href="/product-detail-1.html">View Detail</a>
                                            <a class="btn btn-primary" href="/#">Add to cart</a>
                                        </span>
						</div>
					</div><!--/product-thumb-->
					<div class="product-desc">
						<span class="product-price pull-right">$29.00</span>
						<h5 class="product-name"><a href="/#">Womens bags</a></h5>
					</div><!--/product-desc-->
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="product-box">
					<div class="product-thumb">
						<img src="/images/products/p3.jpg" alt="" class="img-responsive">
						<div class="product-overlay">
                                        <span>
                                            <a class="btn btn-default" href="/product-detail-1.html">View Detail</a>
                                            <a class="btn btn-primary" href="/#">Add to cart</a>
                                        </span>
						</div>
					</div><!--/product-thumb-->
					<div class="product-desc">
						<span class="product-price pull-right">$19.00</span>
						<h5 class="product-name"><a href="/#">Wrist Watch</a></h5>
					</div><!--/product-desc-->
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="product-box">
					<div class="product-thumb">
						<img src="/images/products/p4.jpg" alt="" class="img-responsive">
						<div class="product-overlay">
                                        <span>
                                            <a class="btn btn-default" href="/product-detail-1.html">View Detail</a>
                                            <a class="btn btn-primary" href="/#">Add to cart</a>
                                        </span>
						</div>
					</div><!--/product-thumb-->
					<div class="product-desc">
						<span class="product-price pull-right">$39.00</span>
						<h5 class="product-name"><a href="/#">Norm Soap Pump</a></h5>
					</div><!--/product-desc-->
				</div>
			</div>
		</div>
	</div>
	<div class="space-30"></div>
@endsection
@section('script')
	<script type="text/javascript">
        $(document).ready(function () {
            var slider = new MasterSlider();
            slider.control('scrollbar', {dir: 'h'});
            slider.control('thumblist', {
                autohide: false,
                dir: 'v',
                arrows: false,
                align: 'left',
                width: 127,
                height: 84,
                margin: 5,
                space: 5,
                hideUnder: 300
            });
            slider.setup('masterslider', {
                width: 540,
                height: 586,
                space: 5
            });
        });
	</script>
@endsection