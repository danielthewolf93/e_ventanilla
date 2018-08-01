@extends('layouts.app')


@section('content')				
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Prueba</div>

				 <form method="post" action="{{ route('prueb_agreg')}}" >
                    {{ csrf_field() }}


								<div class="panel-body">
											
											@if(isset($id_tabla))
											ID:{{ $id_tabla }}<br>
											
											<input type="hidden" name="id_m" value="{{ $id_tabla }}">

											@endif
											
											@if(isset($model))
											
											<input type="hidden" name="mod_det" value="{{ $model }}">

											@endif


											<div class="form-group">
	 									    <label class="col-md-4 control-label" for="modeloform">Modelo de Intimación</label>
											
												<div class="col-md-6">
				                                    <select class="form-control" name="modeloform" id="modeloform"  onclick="controlarmod()" >
				                                    <option value=" " disabled selected >Seleccione...</option>
				                                    <option value="1">Modelo 1</option>
				                                    <option value="2">Modelo 2</option>    
				                                    <option value="3">Modelo 3</option>   
				                                    </select>
												</div>
	                                		</div>


											
											
										

											@if(isset($cuitcon))
											
											<br>Cuit:{{ $cuitcon }}
											
											<input type="hidden" name="cuit_m_det"  id="cuit_m_det" value="{{ $cuitcon }}">

											<div class="form-group">
											<input type="text" name="cuit" value="{{ $cuitcon }}" id="cuit" placeholder="cuit_contribuyente" maxlength="11" onkeyup="autocompletar()">
											</div>


											
											@else
											<div class="form-group">

												<label class="col-md-4 control-label" for="cuit">Cuit</label>
												<div class="col-md-6">
														<input type="text" name="cuit" id="cuit" placeholder="cuit_contribuyente" maxlength="11" onkeyup="autocompletar()" class="form-control">
												</div>
											</div>


											@endif

									<ul id="nombre_matricula"> </ul> 
									<div class="form-group">
										<label class="col-md-4 control-label" for="matricula">Matricula/Inscripc</label>
										<div class="col-md-6">
											<select name="matricula" id="matricula" required class="form-control">
											</select>
										</div>
									</div>
									
									<div class="form-group">
											<label class="col-md-4 control-label" for="tributo">Tributo</label>
										<div class="col-md-6">
											<select name="tributo" id="tributo" class="form-control">
												<option value=" " disabled selected >Seleccione...</option>
												<option value="0011">HABILITACION TASA DE SEGURIDAD E HIGIENE</option>
												<option value="0012">TASA DE SEGURIDAD E HIGIENE</option>
												<option value="0010">MULTA</option>
											</select>
										</div>
									</div>
									
									<div class="form-group">

										<label class="col-md-4 control-label" for="fecha_hoy">Fecha Periodo</label>
		                                	 <div class="col-md-6">
		                                	 	<input type="date" name="fecha_hoy" class="form-control">
											</div>

									</div>
									
									
									<div id="importe" style="display: none;">
										

									<label>Importe</label>	<br>

									$<input type="text" name="importe_tributo" id="importe_tributo"  maxlength="7" value=""><br><br>



									</div>
									
									<div id="sumario" style="display: none;">
										

									<label>Sumario N°</label>	<br>

									<input type="text" name="sumario" id="sumario"  maxlength="7" value=""><br><br>



									</div>

									<div id="expediente" style="display: none;">
										

									<label>Expediente N°</label>	<br>

									<input type="text" name="expediente" id="expediente"  maxlength="7" value=""><br><br>

									
									</div>
										
									<div id="resolucionnro" style="display: none;">
										

									<label>Resolución N°</label>	<br>

									<input type="text" name="resolucionnro" id="resolucionnro"  maxlength="7" value=""><br><br>

									
									</div>


									<div class="form-group">

									<input type="submit" name="envio" class="btn btn-primary " onclick="masuno()" value="Agregar Tributo" >


									@if(isset($modeloIntDet))	


									<th> <a href="{{ route('visualizar_modelo',[$id_tabla]) }}" class="btn btn-primary" target="_blank">Ver</a> </th>

									@endif

								
									<a href="{{ route('lista_modelos') }}" class="btn btn-success" target="_blank">Listar Modelos Creados</a>
	
									<input type="hidden" name="fecha_creac" value="{{  date('Y-m-d') }}">

									<input type="hidden" name="importe_tributoss" value="">

									</div>


						

								</div>
 
                              </div>


                      </div>


@if(isset($modeloIntDet))
 
 <div class="contener">

 <table class="table" id="most" >

    <thead>

      <tr>
		
        <th>Inscripc/Matricula</th>
        <th>Periodo</th>
        <th>Tributo</th>
        <th>Monto</th>
        <th></th>
        
      </tr>
	  
	@foreach ($modeloIntDet as $mod_det)

	<tr> 
	    <th>{{ $mod_det->matricula_inscripcion }}</th>
	    <th>{{ $mod_det->periodo }}</th>
	    <th>{{ $mod_det->tributo }}</th>
	    <th>${{ $mod_det->importe }}</th>
	    

	   <th> <a href="{{ route('delete_modedeta',[$mod_det->id_mdetalles]) }}" class="btn btn-danger"  id="boton2" >X</a></th>

    </tr>

	@endforeach



    </thead>
    <tbody>
		
    </tbody>
  </table>

</div>




                 </form>
            </div>
        </div>
    </div>
</div>


@endif



                 </form>
            </div>
        </div>
    </div>
</div>







{{--http://vcomputadoras.com/usa-ajax-para-refrescar-un-tag-div/ ver refrescar  --}}



<script type="text/javascript">
	


function controlarmod()
{

	div21=document.getElementById('modeloform').value;

	
	if (div21==1) 

	{	div2=document.getElementById('importe');
		div3=document.getElementById('sumario');
		div4=document.getElementById('expediente');
		div5=document.getElementById('resolucionnro');
		
    	 div2.style.display = 'none';
    	 div3.style.display = 'none';
    	 div4.style.display = 'none';
    	 div5.style.display = 'none';
	}
		

	if (div21==2) {

		 div2=document.getElementById('importe');
		 div3=document.getElementById('sumario');
		 div4=document.getElementById('expediente');
		 div5=document.getElementById('resolucionnro');
    	 div2.style.display = '';
    	 div3.style.display = 'none';
    	 div4.style.display = 'none';
    	 div5.style.display = 'none';

	}

	

	if (div21==3) {

		div2=document.getElementById('importe');
		div3=document.getElementById('sumario');
		div4=document.getElementById('expediente');
		div5=document.getElementById('resolucionnro');
		div2.style.display = '';
    	div3.style.display = '';
    	div4.style.display = '';
    	div5.style.display = '';

	}



	

}


function masuno() {


	document.getElementById('modeloform').style.display = 'none';
	//$('#cuit').attr("disabled", true);

	document.getElementById('cuit').style.display = 'none';



}






</script>


<script type="text/javascript">
	
function autocompletar() {


	var min_length = 11; // variable length
	var cuit = $('#cuit').val();//obtener el nombre y/o termino de busqeuda
	if (cuit.length >= min_length) {
		$.ajax({

			
			url: "{{ route('cuit_ruta')}}",
			data: "cuit="+cuit+"&_token={{ csrf_token()}}",
			dataType: "json",
			method: "POST",
			success:function(data){

					 //document.getElementById('cuit_m_det').value = document.getElementById('cuit').value;

					 

					$('#matricula').empty();

					

				$.each(data, function(i, item) {
			
				

				  $('#matricula')
		         .append($("<option></option>")
		         .attr("value",data[i].pad_nomenclatura)
		         .text(data[i].pad_nomenclatura));

		         $('#nombre_matricula').empty();

		         
		        
				 $('#nombre_matricula').append("<li>"+data[i].pad_nombre_propietario+"</li>");
		         
		         

				});}


				
			

		});
	} else {

		$('#nombre_matricula').empty();
		$('#lista').hide();
	}
}





</script>


@endsection
