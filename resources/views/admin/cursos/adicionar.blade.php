@extends('layout.site')

@section('titulo','Cursos')


@section('conteudo')
	<div class="container">
		<h3 class="center">Adicionar Curso</h3>	
			<form action="{{route('admin.cursos.salvar')}}" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}
				@include('admin.cursos._form')

				<button class="btn deep-orange" type="" name="">Salvar</button>
				
			</form>
				
		<div class="row">
			
		</div>
		<div class="row">
			
		</div>
	</div>
	

@endsection