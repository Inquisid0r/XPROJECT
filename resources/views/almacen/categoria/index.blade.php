@extends('layouts.admin')
@section('contenido')

<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Tistado de Categorias &nbsp;<a href="categoria/create"><botton class="btn btn-default">Nuevo</botton></a></h3>
		@include('almacen.categoria.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Id</th>
					<th>Nombre</th>
					<th>Descripción</th>
					<th>Opciones</th>
				</thead>

				@foreach ($categorias as $cat)
				<tr>
					<td>{{$cat->idcategoria}}</td>
					<td>{{$cat->nombre}}</td>
					<td>{{$cat->descripcion}}</td>
					<td>
						<a href=""><button class="btn btn-info">Editar</button></a>
						<a href=""><button class="btn btn-danger">Eliminar</button></a>
					</td>
				</tr>
				@endforeach
			</table>
		</div>
		{{$categorias->render()}}
	</div>
</div>

@endsection