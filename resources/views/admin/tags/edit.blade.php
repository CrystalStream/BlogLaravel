@extends('admin.templates.main')

@section('title','Editar Categoria')
@section('content')
	<div class="callout info mt">
		{!!Form::model($tag,array('route'=>['tags.update',$tag->id],'method' => 'PUT'))!!}
		<div class="row">
			<div class="medium-6">
				<label for="">
					Nombre del tag
					{!!Form::text('name',null,array('class'=>'ola'))!!}
				</label>
			</div>
		</div>	
		<div class="row">
			<div class="medium-6">
				<label for="">					
					{!!Form::submit('Enviar',array('class'=>'success button'))!!}					
				</label>
			</div>
		</div>
			
		{!!Form::close()!!}
	</div>
@endsection