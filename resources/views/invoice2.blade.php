<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Rentas Sfc</title>

    <link rel="stylesheet" type="text/css" href="../resources/assets/css/pdf.css">
   
  </head>
  <body>

    <main>
      <div id="details" class="clearfix">
        <div id="logo" >
        <img src="../resources/img/LogoRentas.png">
        </div>

     @foreach ($mdtipos as $mtpo)
      
     @endforeach




        <div id="invoice">
          <h1>Direccion General de Rentas Municipal</h1>
           <br>{{$mtpo->encabezado}}

    @foreach ($modeloInt as $mode)
          <div class="date">Detalle: </div>
        </div>
      </div>
      <table border="0" cellspacing="0" cellpadding="0">
        <thead>

          <tr>
            <th class="no">Inscripc/Matricula</th>
            <th class="desc">Periodo</th>
            <th class="unit">Tributo</th>
            <th class="total">Monto</th>
          </tr>
        </thead>
        <tbody>
    @foreach($modeloIntDet as $modeDet )
     
    <tr> 
    <th class="no">{{$modeDet->matricula_inscripcion  }}</th>
    <th class="desc">{{ $modeDet->periodo }} </th>
    <th class="unit">{{ $modeDet->tributo }}</th>
    <th class="total">${{ $modeDet->importe }}</th>
    </tr>

    @endforeach

        </tbody>
        <tfoot>
          <tr>
            <td colspan="2"></td>
            <td >TOTAL</td>
            <td>${{$import}}</td>
            {{$mtpo->cuerpo}}
          </tr>
        </tfoot>
      </table>
      <br><br><br>
      <div class="col-xs-2">
         <img src="../resources/img/firma_opt.png" >
         <br><STRONG>C.P.N. YURQUINA DARIO DAVID</STRONG><br>
          DIRECTOR GENERAL DE RENTAS<br>
          MUNICIPALIDAD DE S.F.V DE CATAMARCA
    </div>
      @endforeach

  </body>
</html>