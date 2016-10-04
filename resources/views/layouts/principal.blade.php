<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bloging</title>
	{!!Html::style('css/bootstrap.min.css')!!}
	{!!Html::style('css/font-awesome.min.css')!!}
	{!!Html::style('css/main.css')!!}
</head>
<body>
	<div class="container">
		<div class="col-xs-12 text-center">
			<a href="{!!URL::to('/')!!}"><h3>Mi blog</h3></a>
		</div>
	</div>

	<div class="container main-section mt">
		<div class="row">
			<div class="col-xs-12 black">
				@yield('content')
			</div>
		</div>
	</div>
	


	{!!Html::script('js/vendor/jquery.js')!!}
	{!!Html::script('js/vendor/bootstrap.min.js')!!}
</body>
</html>