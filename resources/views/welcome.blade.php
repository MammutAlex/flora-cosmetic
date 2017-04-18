@extends('layouts.app')

@section('content')
	@include('elements.header')
	<div class="page-breadcrumb margin-b-60">
		<div class="container">
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="row">
					@foreach($products as $product)
						<div class="col-sm-4">
							<div class="product-box">
								<div class="product-thumb">
									<img src="{{$product->photo}}" alt="" class="img-responsive">
									<div class="product-overlay">
                                        <span>
                                            <a class="btn btn-default"
                                               href="{{route('product',['product'=>$product->id])}}">View Detail</a>
                                        </span>
									</div>
								</div><!--/product-thumb-->
								<div class="product-desc">
									<span class="product-price pull-right">{{$product->price}}</span>
									<h5 class="product-name">
										<a href="{{route('product',['product'=>$product->id])}}">{{$product->title}}</a>
									</h5>
								</div><!--/product-desc-->
							</div>
						</div>
					@endforeach
				</div>
				<div class="space-30"></div>

				<nav aria-label="Page navigation" class="text-right margin-b-30">
					{{ $products->links() }}
				</nav>
			</div>
		</div>
	</div>
@endsection
@section('script')
	<script>
        (function ($) {
            "use strict";
            var slider = new MasterSlider();
            // adds Arrows navigation control to the slider.

            slider.control('timebar', {insertTo: '#masterslider'});
            slider.control('bullets');

            slider.setup('masterslider', {
                width: 1170, // slider standard width
                height: 510, // slider standard height
                space: 0,
                layout: 'fullwidth',
                loop: true,
                preload: 0,
                instantStartLayers: true,
                autoplay: true
            });
        })(jQuery);
	</script>
@endsection
