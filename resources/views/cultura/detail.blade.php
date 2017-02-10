@extends('layouts.app')

{{ Session::get('message') }}

@section('content')


<h1>Detalles del Registro</h1>

<h2>P.SCUL-{{ $registro->numero }}</h2>

<p>
	{{ $registro->fecha }}
	{{ $registro->area }}
	{{ $registro->destinatario }}
	{{ $registro->asunto }}

</p>

<a href="{{ url('cultura') }}" class="btn btn-warning">Regresar</a>

@stop