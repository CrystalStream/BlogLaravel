@extends('admin.templates.main')

@section('title','Agregar Articulo')

@section('content')
	
	<div class="callout success mt">
		{!!Form::open(array('route'=>'articles.store','method'=>'POST','files'=>true))!!}
		<div class="row">
			<div class="medium-6 columns">
				<label for="">
					Titulo
					{!!Form::text('title',null,array())!!}
				</label>
			</div>
			<div class="medium-6 columns">
				<label for="">
					Categoria
					{!!Form::select('category_id',$categories,null,array('placeholder'=>'Selecciona una categoria'))!!}
				</label>
			</div>
		</div>	
		<div class="row">
			<div class="medium-6 columns">
				<label for="">
					Contenido
					{!!Form::textarea('content',null,array('style'=>'resize:none;','class'=>'editor'))!!}
				</label>
			</div>
			<div class="medium-6 columns">
				<label for="">
					Tags
					{!!Form::select('tag_id[]',$tags,null,array('multiple','class'=>'select-tag'))!!}
				</label>										
			</div>
			<div class="medium-6 columns">
				<label for="">
					Imagen
					{!!Form::file('image',array())!!}
				</label>
			</div>
		</div>
		<div class="row">
			<div class="medium-6 columns">
				<label for="">
					{!!Form::submit('Agregar articulo',array('class'=>'success button'))!!}
				</label>
			</div>
		</div>
		{!!Form::close()!!}
	</div>

@endsection

@section('js')
	<script>
		$('.select-tag').chosen({
			placeholder_text_multiple: "Seleccione un maximo de 3 tags",
			max_selected_options: 2,
			no_results_text: "No se encontraron opciones con"
		});
	</script>

	<script>
		$('.editor').trumbowyg();
	</script>

@endsection