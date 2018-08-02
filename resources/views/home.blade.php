@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" >Enviar Mensaje</div>






                @if (Session::has('message'))
                   <div class="alert alert-success">{{ Session::get('message') }}</div>
                @endif





                <form method="POST"  class="form-horizontal" action="{{ route('messages.store')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}

                            <div class="panel-body">

                                @if (session('status'))
                                    <div class="alert alert-success">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                <div class="form-group">

                                    <label for="recipient_id" class="col-md-4 control-label">Contribuyente</label>
                                    <div class="col-md-6">
                                           <select class="form-control" name="recipient_id">
                                               
                                               <option value="0">Selecciona el usuario</option>
                                               <option value="99999999">Enviar a todos</option>
                                               <?php foreach ($users as $user ): ?>

                                                <option value="{{$user->id }}">{{$user->name}} </option>
                                                   
                                               <?php endforeach ?>
                                            
                                           </select> 
                                    </div>

                                </div>


                               

                                <div class="form-group">
                                    
                                    <label for="tema_not" class="col-md-4 control-label">Motivo del Mensaje</label>
                                     <div class="col-md-6">
                                    <input type="text" name="tema_not" class="form-control" placeholder="Ingrese motivo">
                                    </div>

                                </div>
                
                                <div class="form-group">

                                    <label for="body" class="col-md-4 control-label">Mensaje</label>
                                     <div class="col-md-6">
                                    <textarea class="form-control" placeholder="Ingrese aqui tu mensaje" name="body"></textarea>
                                    </div>

                                </div>

                                
                                <div class="form-group">
                                    
                                    <label for="tipo_not" class="col-md-4 control-label">Prioridad</label>
                                    <div class="col-md-6">
                                    <select class="form-control" name="tipo_not"> 
                                        <option value=" " disabled selected>Seleccione...</option>
                                        <option value="bajo">Baja</option>
                                        <option value="normal">Normal</option>
                                        <option value="importante">Alta</option>

                                    
                                    </select>
                                    </div>

                                </div>


                                 <div class="form-group">
                                    
                                    <label for="tipo_desp" class="col-md-4 control-label">Despacho</label>
                                    <div class="col-md-6">
                                    <select class="form-control" name="tipo_desp"> 
                                        <option value=" " disabled selected>Seleccione...</option>
                                        <option value="Cobranza Rentas SFC">Cobranza Rentas SFC</option>
                                        <option value="Administracion Rentas SFC">Administracion Rentas SFC</option>
                                        <option value="Sistemas Rentas SFC">Sistemas Rentas SFC</option>

                                    
                                    </select>
                                    </div>

                                </div>
								

								
                                




                                <!--
                                <label for="adjunto">Adjuntar</label>
                                <div class="form-group">
                                <input type="file" name="adjunto" class="form-control"/>
                                </div>
                            -->

                                
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button  type="submit" class="btn btn-primary" >
                                            <i class="fa fa-btn fa-sign-in"></i> Enviar
                                        </button>
                                    </div>
                                </div>



                            </div>

                 </form>
            </div>
        </div>
    </div>
</div>

                 <div class="container">
                    <div class="row">
                       <div class="col-md-8 col-md-offset-2">
                           <div class="panel panel-default">
                                <div class="panel-heading">Enviar Novedad</div>
                                    <div class="panel-body">

                                       @if (Session::has('notificac'))
                                       <div class="alert alert-success">{{ Session::get('notificac') }}</div>
                                       @endif


                                 <form method="POST" class="form-horizontal" action="{{ route('novedades.store')}}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                 

                                

                                     <div class="form-group">
                                    
                                            <label for="tipo_tema" class="col-md-4 control-label">Tema</label>

                                            <div class="col-md-6">
                                            <select class="form-control" name="tipo_tema"> 
                                            
                                                <option value="Nuevos">Nuevos</option>
                                                <option value="Cambios">Cambios</option>
                                                <option value="Bajas">Bajas</option>

                                            </select>
                                            </div>
                                    </div>





                                         <div class="form-group">
                                            <label for="body" class="col-md-4 control-label">Texto</label>
                                              <div class="col-md-6">
                                              <textarea class="form-control" placeholder="Ingrese aqui tu mensaje" name="body"></textarea>
                                              </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="fecha_desde" class="col-md-4 control-label">Fecha Desde</label>
                                            <div class="col-md-6">
                                            <input type="date" name="fecha_desde" id="fecha_desde" class="form-control">
                                            </div>
                                        </div>

                                    
                                        <div class="form-group">
                                            <label for="fecha_hasta" class="col-md-4 control-label">Fecha Hasta</label>
                                            <div class="col-md-6">
                                            <input type="date" name="fecha_hasta" id="fecha_hasta" class="form-control">
                                            </div>
                                        </div>



                                    
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button  type="submit" class="btn btn-primary"  >
                                            <i class="fa fa-btn fa-sign-in"></i> Enviar 
                                        </button>

                                        <a href="{{ route('tabla_listnoved') }}" class="btn btn-success" target="_blank">Lista de Novedades</a>
  

                                    </div>
                                </div>
								
								@php($tel=3834231198 )		
								
								@php($texto="Buen dia usted tiene un vencimiento, por favor consulte su estado en la web de Rentas SFC. Gracias.")
								

								<div class="form-group">
                  <div class="col-md-6 col-md-offset-4">
									   <a href="http://servicio.smsmasivos.com.ar/enviar_sms.asp?api=1&usuario=SMSDEMO35163&clave=SMSDEMO35163288&tos={{$tel}}&texto={{$texto}}&test=1" target="_blanck">Envio Msj</a>
                  </div>
								</div>
								



                                 </form>

                            </div>
                        </div>
                    </div>
                </div>
           </div>
            
</div>







    </div>

<script type="text/javascript">
    
function autocompletar() {


    var min_length = 1; // variable length
    var cuit = $('#buscaruse').val();//obtener el nombre y/o termino de busqeuda
    if (cuit.length >= min_length) {
        $.ajax({

            
            url: "{{ route('cuit_ruta')}}",
            data: "cuit="+cuit+"&_token={{ csrf_token()}}",
            dataType: "json",
            method: "POST",
            success:function(data){

                     document.getElementById('auxcuit').value = $('#cuit').val();


                    $('#matricula').empty();


              
            
                

                  $('#matricula')
                 .append($("<option></option>")
                 .attr("value",data[i].pad_nomenclatura)
                 .text(data[i].pad_nomenclatura));

             }


                
            

        });
    } else {
        $('#lista').hide();
    }
}





</script>




</script>


<script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>


@endsection
