@extends('admin.templates.main')

@section('title', 'Usuarios')

@section('content')

<div class="callout primary mt">
	<table class="stack">
		<thead>
			<tr>
				<th>#</th>
				<th>Name</th>
				<th>Email</th>
				<th>Rol</th>
				<th>Accion</th>
			</tr>
		</thead>
		<tbody>
			@foreach($users as $user)
				<tr>
					<td>{{ $loop->iteration }}</td>
					<td>{{ $user->name }}</td>
					<td>{{ $user->email }}</td>
					<td>
					@if($user->role !== 'admin')
						<span class="secondary label">{{ $user->role }}</span>
					@else
						<span class="info label">{{ $user->role }}</span>
					@endif
					</td>				
					<td>
						<a href="{{ route('users.edit', $user->id) }}" class="warning button">Editar</a>  &nbsp;&nbsp;&nbsp;
						<a href="{{ route('admin.users.destroy', $user->id) }}" class="alert button">Eliminar</a>
					</td>
				</tr>				
			@endforeach

		</tbody>
	</table>
</div>
{!! $users->render() !!}

@endsection