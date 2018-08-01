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


</br>   </br>
<div>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                 <tr>
                    <th>Id</th>
                    <th>Cuit</th>
                    <th>Descripcion</th>
                    <th>Fecha Actividad</th>
                   

                </tr>

                     
            </thead>
        </table>
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.0/jquery.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js" ></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script type="text/javascript" charset="utf8" src="js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf8" src="js/qrcode.min.js"></script>


       


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
