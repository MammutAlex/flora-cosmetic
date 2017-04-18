<nav class="navbar navbar-default navbar-static-top yamm sticky-header">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
			        aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Навигация</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="{{route('index')}}"><img src="/images/logo.png" alt=""></a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li class="active">
					<a href="{{route('index')}}">Головна</a>
				</li>
				<li><a href="{{route('about')}}">Про Нас</a></li>

			</ul>
		</div><!--/.nav-collapse -->
	</div><!--/.container-fluid -->
</nav>