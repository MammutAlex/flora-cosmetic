@extends('layouts.app')

@section('content')
	@include('elements.headerAbout')
	<div class="parallax-banner margin-b-60" data-stellar-background-ratio="0.5">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2 text-center">
					<h1>About us</h1>
					<p class="lead">
						{{$about->title}}
					</p>
				</div>
			</div>
		</div>
	</div>

	<!--page start-->
	<div class="container margin-b-30">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2 text-center margin-b-30">
				<p>
					{!! $about->text !!}
				</p>
			</div>
		</div>
	</div>
@endsection
