@extends('layouts.app')

@section('content')	

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>


<h2>Lista de Modelos guardados</h2>
</br>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

<br>

	
@if (Session::has('message'))
                   <div class="alert alert-info">{{ Session::get('message') }}</div>
                @endif
 

@if ( count($listamodel)==0 )  

<div class="form-group">

<p><div class="alert alert-warning" style="text-align:center;">¡No tiene Intimaciones guardadas!</div></p>

</div>

<div class="form-group">
	

<a href="{{ route('prueb') }}" class="btn btn-primary col-md-offset-5">Crear Intimación</a>

</div>


@else

 
	<table class="table">
    <thead>
      <tr>
        <th>#</th>
      	<th>Fecha Creacion</th>
      	
        <th>Contribuyente</th>
        <th>Tipo Modelo</th>
        <th>Estado</th>
        <th></th>
        <th></th>

        
      </tr>


	@php($i=1)

@foreach($listamodel as $model)

	<tr>
		
		<th>{{ $i++ }}</th>	
		<th>{{ $model->created_at }}</th>
		<th>{{ $model->cuit_contrib }}</th>
		<th>{{ $model->tipo_modelo }} </th>
	
		<th>{{ $model->estado }}</th>
		
		<th> <a href="{{ route('visualizar_modelo',[$model->id]) }}" class="btn btn-primary" target="_blank">Ver</a> </th>

		

		<th><a href="{{ route('envio_modelos',[$model->id]) }}" class="btn btn-success">Enviar</a></th>

		<th><a href="{{ route('delete_not_list',[$model->id]) }}" class="btn btn-danger">X</a></th>
		

		
@endforeach

	</tr>



    </thead>
    	<tbody>

		</tbody>
  	</table>

	{{$listamodel->links()}}






			</div>
			<a href="{{ route('prueb') }}" class="btn btn-primary">Volver</a>
			
		</div>

	</div>

</div>



@endif

@endsection