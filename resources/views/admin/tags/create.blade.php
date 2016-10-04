@extends('admin.templates.main')

@section('title','Agregar Tag')

@section('content')
	<div class="callout info mt">
		{!!Form::open(array('route'=>'tags.store','method'=>'POST'))!!}
		<div class="row">
			<div class="medium-6 columns">
				<label for="">
					Nombre del tag
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