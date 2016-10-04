@extends('admin.templates.main')

@section('title', 'Tags')

@section('content')

<div class="callout info mt">
	<div class="float-right">
		{!!Form::open(array('route'=>'tags.index','method'=>'GET'))!!}
			{!!Form::text('name',null,array('placeholder'=>'Buscar'))!!}
		{!!Form::close()!!}
	</div>
	<table class="stack mt">
		<thead>
			<tr>
				<th>#</th>
				<th>Name</th>				
				<th>Accion</th>
			</tr>
		</thead>
		<tbody>
			@foreach($tags as $tag)
				<tr>
					<td>{{ $loop->iteration }}</td>
					<td>{{ $tag->name }}</td>						
					<td>
						<a href="{{ route('tags.edit', $tag->id) }}" class="warning button">Editar</a>  &nbsp;&nbsp;&nbsp;
						<a href="{{ route('admin.tags.destroy', $tag->id) }}" class="alert button">Eliminar</a>
					</td>
				</tr>				
			@endforeach

		</tbody>
	</table>
</div>
@endsection