@extends('admin.templates.main')

@section('title','Articulos')

@section('content')
	<div class="callout success mt">
		<table>
			<thead>
				<tr>
					<td>ID</td>
					<td>Titulo</td>
					<td>Categoria</td>
					<td>Usuario</td>
					<td>Accion</td>
				</tr>
			</thead>
			<tbody>
				@foreach($articles as $article)
				<tr>					
					<td>{{ $loop->iteration }}</td>
					<td>{{ $article->title }}</td>
					<td>{{ $article->category->name }}</td>
					<td>{{ $article->user->name }}</td>
					<td>
						<a href="{{ route('articles.edit', $article->id) }}" class="warning button">Editar</a>  &nbsp;&nbsp;&nbsp;
						<a href="{{ route('admin.articles.destroy',$article->id) }}" class="alert button">Eliminar</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

@endsection