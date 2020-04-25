@extends('layout.site')

@section('titulo','Cursos')


@section('conteudo')
	<div class="container">
		<h3 class="center">Lista de Cursos</h3>	

		<div class="row">
			<table>
				<th>
					<tr>
						<th>Id</th>
						<th>Titulo</th>
						<th>Descricao</th>
						<th>Imagem</th>
						<th>Publicado</th>
						<th>Acao</th>
					</tr>
				</th>
				<tbody>
					@foreach($registros as $registro)
						<tr>
							<td>{{ $registro->id }}</td>
							<td>{{ $registro->titulo }}</td>
							<td>{{ $registro->descricao}}</td>
							<td><img height="60" src="{{ asset($registro->imagem)}}"></td>
							<td>{{ $registro->publicado}}</td>
							<td>
								<a class="btn deep-orange" href="{{ route('admin.cursos.editar', $registro->id) }}">Editar</a>

								<a class="btn red" href="{{ route('admin.cursos.deletar', $registro->id) }}">Deletar</a>
							</td>
						</tr>
					@endforeach

				</tbody>
			</table>
		</div>
		<div class="row">
			<a class="btn blue" href="{{ route('admin.cursos.adicionar') }}">Adicionar</a>
		</div>
	</div>
	

@endsection