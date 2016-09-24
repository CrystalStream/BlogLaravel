@extends('admin.templates.main')

@section('title','Editar Categoria')
@section('content')
	<div class="callout alert mt">
		{!!Form::model($category,array('route'=>['categories.update',$category->id],'method' => 'PUT'))!!}
		<div class="row">
			<div class="medium-6 columns">
				<label for="">
					Nombre de la categoria
					{!!Form::text('name',null,array('class'=>'ola'))!!}
				</label>
			</div>
		</div>	
		<div class="row">
			<div class="medium-6 columns">
				<label for="">					
					{!!Form::submit('Enviar',array('class'=>'success button'))!!}					
				</label>
			</div>
		</div>
			
		{!!Form::close()!!}
	</div>
@endsection