<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'default') | Panel de Administracion</title>
	{!!Html::style('css/foundation.min.css')!!}
	{!!Html::style('css/main.css')!!}
	{!!Html::style('plugins/chosen/chosen.min.css')!!}
	{!!Html::style('plugins/trumbowyg/ui/trumbowyg.min.css')!!}
</head>
<body>
	@include('admin.templates.partials.nav')

	<div class="row">
		<div class="small-12 large-12">
			@yield('content')
		</div>
	</div>
	



	{!!Html::script('js/vendor/jquery.js')!!}
	{!!Html::script('plugins/chosen/chosen.jquery.min.js')!!}
	{!!Html::script('plugins/trumbowyg/trumbowyg.js')!!}
	{!!Html::script('js/vendor/what-input.js')!!}
	{!!Html::script('js/vendor/foundation.min.js')!!}
	{!!Html::script('js/main.js')!!}

	@yield('js')
</body>
</html>