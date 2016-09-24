@extends('admin.templates.main')

@section('title','Crear Usuario')
@section('content')
	<div class="callout primary mt">
		{!!Form::open(array('route'=>'users.store','method' => 'POST'))!!}
		<div class="row">
			<div class="medium-6">
				<label for="">
					Nombre de usuario
					{!!Form::text('name',null,array('class'=>'ola'))!!}
				</label>
			</div>
		</div>
		<div class="row">
			<div class="medium-6">
				<label for="">
					Email
					{!!Form::email('email',null,array('class'=>'ola'))!!}
				</label>
			</div>
		</div>
		<div class="row">
			<div class="medium-6">
				<label for="">
					Password
					{!!Form::password('password',array('class'=>'ola'))!!}
					<p class="help-text" id="passwordHelpText">Your password must have at least 10 characters</p>
				</label>
			</div>
		</div>
		<div class="row">
			<div class="medium-6">
				<label for="">
					Tipo
					{!!Form::select('role',['member'=>'member','admin'=>'admin'],null,array('class'=>'ola','placeholder'=>'Seleccione una opcion'))!!}					
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