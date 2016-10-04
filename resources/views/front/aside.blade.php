<div class="col-xs-12 col-md-3 mt"> 
<hr>
 	<ul class="list-group">
 		<h4>Categorias</h4>
		@foreach($categories as $category)
 			<a href="{{ route('search.category', $category->name)}}" class="list-group-item list-group-item-success">{{ $category->name }} <span class="pull-right"><span class="badge">{{ $category->articles->count() }}</span></span></a> 
 		@endforeach		
 	</ul>
</div>
<div class="col-xs-12 col-md-3 mt ">
	<div class="panel">
		<div class="panel-heading" style="color: white !important;">
			<h4>Tags</h4>
			<hr>
		</div>
		<div class="panel-body">
			@foreach($tags as $tag)
	 			<a href="{{ route('search.tag',$tag->name)}}"><span class="label label-warning">{{ $tag->name }}</span></a>
	 		@endforeach
	 	</div>
 	</div>
</div>