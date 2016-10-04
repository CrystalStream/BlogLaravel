@extends('layouts.principal')

@section('content')
	
	<div class="col-xs-12">		
		<h2 class="col-xs-12">{{ $article->title }}</h2>
	</div>		
	<div class="col-xs-12 col-md-8 mt">
		<hr>
		<div class="col-xs-12">
			Autor: {{ $article->user->name }} <span class="pull-right">Posteado en: <a href="{{ route('search.category', $article->category->name ) }}">{{ $article->category->name}}</span></a> 
			<hr>
		</div>
		<div class="col-xs-12 mt">
			<div class="col-xs-12">
				@foreach($article->images as $image)
					<div class="text-center">
						<img src="/img/articles/{{ $image->name }}" alt="{{ $image->name }}" class="img-responsive">
					</div>
				@endforeach
			</div>
			<div class="col-xs-12 mt">
				<h4>Cuerpo:</h4>
				{!! $article->content !!}
				<hr>
			</div>					
			
		</div>

		<div class="col-xs-12">
			tags: 
			@foreach($article->tags as $tag)
				<span class="label label-default">{{ $tag->name }}</span>
			@endforeach
			
		</div>

		<div class="col-xs-12">
			<h3>Comentarios:</h3>
			<div id="disqus_thread"></div>
				<script>

				/**
				 *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
				 *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables */
				/*
				var disqus_config = function () {
				    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
				    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
				};
				*/
				(function() { // DON'T EDIT BELOW THIS LINE
				    var d = document, s = d.createElement('script');
				    s.src = '//bloggin-1.disqus.com/embed.js';
				    s.setAttribute('data-timestamp', +new Date());
				    (d.head || d.body).appendChild(s);
				})();
				</script>
				<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
			</div>	
	</div>

	@include('front.aside')	


@endsection