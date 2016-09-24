@extends('admin.templates.main')

@section('title','Editar Usuario')
@section('content')
	<div class="callout primary mt">
		{!!Form::model($user,array('route'=>['users.update',$user->id],'method' => 'PUT'))!!}
		<div class="row">
			<div class="medium-6 columns">
				<label for="">
					Nombre de usuario
					{!!Form::text('name',null,array('class'=>'ola'))!!}
				</label>
			</div>
		</div>
		<div class="row">
			<div class="medium-6 columns">
				<label for="">
					Email
					{!!Form::email('email',null,array('class'=>'ola'))!!}
				</label>
			</div>
		</div>
		<div class="row">
			<div class="medium-6 columns">
				<label for="">
					Tipo
					{!!Form::select('role',['member'=>'member','admin'=>'admin'],null,array('class'=>'ola','placeholder'=>'Seleccione una opcion'))!!}					
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