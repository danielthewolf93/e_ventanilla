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
    <link rel="stylesheet" type="text/css" href="../css/jquery.dataTables.css">
  



</head>
<body>


</br>   </br>
<div class="col-md-10 col-md-offset-1">
    <div class="panel panel-default">
        <div class="panel-heading">Historial de Novedades</div>
            <div class="panel-body">
                <table id="novedades" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                         <tr>
                            <th>Id</th>
                            <th>Fecha de Vigencia Desde</th>
                            <th>Hasta</th>
                            <th>Tema</th>
                            <th>Descripcion</th>
                            
                        </tr>

                             
                    </thead>
                </table>
            </div>
      </div>
</div>




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.0/jquery.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js" ></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script type="text/javascript" charset="utf8" src="../js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf8" src="../js/qrcode.min.js"></script>


       


<script>
    
$(document).ready( function () {
  
  var oTable =    $('#novedades').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "{{ route('tabla_novedades') }}",
        "columns": [
                {data: 'id_novedades', name: 'id_novedades'},
                {data: 'fecha_desde', name: 'fecha_desde'},
                {data: 'fecha_hasta', name: 'fecha_hasta'},
                {data: 'tipo_tema_novedad', name: 'tipo_tema_novedad'},
                {data: 'texto', name: 'texto'}

            /*    { data: function () {
                   var  ejm ='<a href="#">Ver</a>'
                    if ( ejm != '4' ) {
                        return ejm;
                    }
                } },
                
                { data: function () {
                   var  ejm ='<a href="#">X</a>'
                    if ( ejm != '4' ) {
                        return ejm;
                    }
                } }
*/










            ]
       
    } );
   
} );

</script>




</body>

</html>

@endsection
