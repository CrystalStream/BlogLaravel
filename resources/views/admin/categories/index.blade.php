@extends('admin.templates.main')

@section('title', 'Categorias')

@section('content')

<div class="callout alert mt">
	<table class="stack">
		<thead>
			<tr>
				<th>#</th>
				<th>Name</th>				
				<th>Accion</th>
			</tr>
		</thead>
		<tbody>
			@foreach($categories as $category)
				<tr>
					<td>{{ $loop->iteration }}</td>
					<td>{{ $category->name }}</td>						
					<td>
						<a href="{{ route('categories.edit', $category->id) }}" class="warning button">Editar</a>  &nbsp;&nbsp;&nbsp;
						<a href="{{ route('admin.categories.destroy',$category->id) }}" class="alert button">Eliminar</a>
					</td>
				</tr>				
			@endforeach

		</tbody>
	</table>
</div>
@endsection