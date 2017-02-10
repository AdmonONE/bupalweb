
<!--@if (count($errors) > 0)
	<ul>
		@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>
@endif-->

@extends('layouts.app')

{{ Session::get('message') }}

@section('content')

<h2>Editar Registro</h2>


<form class="col-md-4" action="/salud/{{ $registro->id }}" method="post">
	<input class="form-control" type="text" name="numero" value="{{ $registro->numero }}" placeholder="Numero de Oficio"><br>
	{{ ($errors->has('numero')) ? $errors->first('numero') : '' }} <br>

	<input class="form-control" type="text" name="fecha" value="{{ $registro->fecha }}" placeholder="Fecha"><br>
	{{ ($errors->has('fecha')) ? $errors->first('fecha') : '' }} <br>

	<input class="form-control" type="text" name="area" value="{{ $registro->area }}" placeholder="Area"><br>
	{{ ($errors->has('area')) ? $errors->first('area') : '' }} <br>

	<input class="form-control" type="text" name="destinatario" value="{{ $registro->destinatario }}" placeholder="Destinatario"><br>
	{{ ($errors->has('destinatario')) ? $errors->first('destinatario') : '' }} <br>

	<input class="form-control" type="text" name="asunto" value="{{ $registro->asunto }}" placeholder="Asunto"><br>
	{{ ($errors->has('asunto')) ? $errors->first('asunto') : '' }} <br>

	<input type="hidden" name="_method" value="put">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input class="btn btn-primary" type="submit" name="name" value="Guardar">
	<a href="/salud" class="btn btn-warning">Regresar</a>
</form>

@stop