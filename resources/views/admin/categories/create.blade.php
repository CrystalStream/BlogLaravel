@extends('admin.templates.main')

@section('title','Agregar Categoria')

@section('content')
	<div class="callout alert mt">
		{!!Form::open(array('route'=>'categories.store','method'=>'POST'))!!}
		<div class="row">
			<div class="medium-6 columns">
				<label for="">
					Nombre de la categoria
					{!!Form::text('name',null,array())!!}
				</label>
			</div>
		</div>
		<div class="row">
			<div class="medium-6 columns">
				<label for="">
					
					{!!Form::submit('Guardar',array('class'=>'success button'))!!}
				</label>
			</div>
		</div>

		{!!Form::close()!!}
	</div>

@endsection