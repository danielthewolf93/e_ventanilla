@extends('layouts.app3')

@section('content')	



<!DOCTYPE html>
<html>
<head>
	<title>E-Ventanilla</title>
	<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" />
	<link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/css/bootstrap.min.css" rel="stylesheet" />
    <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet" />
    
   <link   href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.0/jquery.js">  
    <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css">
  



</head>
<body>

<h4>Lista de Modelos guardados</h4>


<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
         <tr>
            <th>Id</th>
            <th>Cuit</th>
            <th>Descripcion</th>
            <th>Fecha </th>
           

        </tr>

             

    </thead>
</table>




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.0/jquery.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js" ></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script type="text/javascript" charset="utf8" src="js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf8" src="js/qrcode.min.js"></script>


        <script >
        	
        	function prueb() {
        		toastr.options.progressBar = true;

        		toastr.info('Nueva Novedad','{{ Auth::user()->name }}',{timeout: 5000})

        	}
       </script>


<script>
    
$(document).ready( function () {
  
  var oTable =    $('#example').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "{{ route('tabla_notif') }}",
        "columns": [
                {data: 'id_mov_contr', name: 'id_mov_contr'},
                {data: 'cuit', name: 'cuit'},
                {data: 'mov_descripcion', name: 'mov_descripcion'},
                {data: 'created_at', name: 'created_at'}








            ]
       
    } );
   
} );

</script>


<a href="{{ route('prueb') }}" class="btn btn-primary">Volver</a>


</body>

</html>







@endsection