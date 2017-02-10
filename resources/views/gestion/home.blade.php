@extends('layouts.app')

{{ Session::get('message') }}

@section('content')

<h1>Registro de Oficios Gestión y Fomento Socioeconómico</h1>

<!--@foreach ($registros as $registro)

    <h2></h2><a href="/registros/{{ $registro->id }}">{{ $registro->numero }}</a></h2>

    {{ date('F d, Y', strtotime($registro->created_at)) }}
    
    <p>{{ $registro->fecha }}</p>
    <p>{{ $registro->area }}</p>
    <p>{{ $registro->destinatario }}</p>
    <p>{{ $registro->asunto }}</p>
    <h2><a href="/registros/{{ $registro->id }}/edit">Editar Registro</a></h2><br>
    <form class="" action="/registros/{{ $registro->id }}" method="post">
        <input type="hidden" name="_method" value="delete">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input class="btn btn-primary" type="submit" name="" value="Eliminar">
    </form>

    <hr>

@endforeach-->
<hr>






<table class="table">
    <thead>
        <tr>
            <th>Numero</th>
            <th>Fecha</th>
            <th>Area</th>
            <th>Destinatario</th>
            <th>Asunto</th>
          <!--  <th>Acciones</th>-->
        </tr>
    </thead>
@foreach ($registros as $registro)
<tr>
    <td>
    <a href="gestion/{{ $registro->id }}" class="btn btn-default">P.SGFS-{{ $registro->numero }}</a>
    </td>
    
    
    <td>{{ $registro->fecha }}</td>
    <td>{{ $registro->area }}</td>
    <td>{{ $registro->destinatario }}</td>
    <td>{{ $registro->asunto }}</td>
    <!--<td><a href="/home/{{ $registro->id }}/edit" class="btn btn-success">Editar Registro</a>
    <form class="" action="/home/{{ $registro->id }}" method="post">
        <input type="hidden" name="_method" value="delete">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input class="btn btn-primary" type="submit" name="" value="Eliminar">
    </form>
    </td>-->

    
</tr>
@endforeach
</table>



@stop
