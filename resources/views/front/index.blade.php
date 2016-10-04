@extends('layouts.principal')

@section('content')
	<div class="col-xs-12">		
		<h2 class="col-xs-12">Ultimas noticias</h2>
	</div>		
	<div class="col-xs-12 col-md-8 mt">
	<hr>
		@forelse($articles as $article)
			@if($loop->iteration % 4 == 0)
				<div class="clearfix"></div>
			@endif
			<div class="col-xs-4">
				<div class="panel panel-primary">
					<div class="panel-heading white">
						<a href="{{ route('view.article',$article->slug) }}" class="black">
						{{ $article->title }}</a> 
					</div>
					<div class="panel-body">
						@foreach($article->images as $image)
							<a href="{{ route('view.article',$article->slug) }}">
								<img src="/img/articles/{{ $image->name }}" alt="" class="img-responsive" style="height:200px;" width="300px">
							</a>
						@endforeach
					</div>
					<div class="panel-footer white">
						<a href="{{ route('search.category', $article->category->name ) }}">{{ $article->category->name }}</a>
						<span class="pull-right gray">
							<span class="glyphicon glyphicon-time"></span>
							{{ $article->created_at->diffForHumans() }}					
						</span>
					</div>
				</div>
			</div>
		@empty
			<div class="col xs 12">
				No hay nada
			</div>
		@endforelse
	</div>
	@include('front.aside')	

@endsection