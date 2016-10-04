@extends('admin.templates.main')

@section('title','Galeria de imagenes')

@section('content')

	<div class="callout info mt">		
		<div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
	  		<ul class="orbit-container">
		    	<button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
			    <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
			    @foreach($images as $image)				    			   
				    <li class="is-active orbit-slide">
				      <img class="orbit-image" src="/img/articles/{{ $image->name }}" alt="{{ $image->name }}"  style="height:500px !important; width: 100%;">
				      <figcaption class="orbit-caption">{{ $image->article->title}}</figcaption>
				    </li>
			    @endforeach				    
		  	</ul>
		  	<nav class="orbit-bullets">	
		  		@foreach($images as $image)
		  			@if($loop->first)		  	
			    		<button class="is-active" data-slide="0"></button>
			    	@else
			    		<button data-slide="{{ $loop->iteration - 1 }}"></button>
			    	@endif
			    @endforeach					   
		  	</nav>
		</div>		
	</div>

@endsection