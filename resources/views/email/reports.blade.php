<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	
</body>
</html>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>email</title>
    <style media="screen">
      *{
        margin: 0;
      }

      .contenedor{
        background: #f7f7f7;
        width: 800px;
        padding-left: 50px;
        padding-right: 50px;
        padding-top: 30px;
        padding-bottom: 50px;
      }
      .cabecera{
        margin: 0 auto;
        width: 700px;
      }
      .cabecera img{
        width: 700px;
      }
      .cuerpo{
        background: white;
        max-width: 600px;
        margin: 0 auto;
        padding-top: 20px;
        padding-bottom: 20px;
        padding-left: 20px;
        padding-right: 20px;
      }
      .cuerpo img{
        margin-bottom: 30px;
      }
      .cuerpo h3{
        font-family: Roboto,"Helvetica Neue",Helvetica,Arial,sans-serif;
        color: #3e6bfd;
        font-weight: bold;
        text-align: center;
      }
      .cuerpo p {
        margin-top: 20px;
        color: #7e7e7e;
        font-family: Roboto,"Helvetica Neue",Helvetica,Arial,sans-serif;
        text-align: left;
        font-size: 16px;
        line-height: 150%;
      }
    	.pie{
    		background-image: url(encabezado1.png);
    		background-repeat: no-repeat;
    		background-size: cover;}

}

    </style>
  </head>
  <body>
    <div class="contenedor">

      <div class="cuerpo">
        <div class="">
          <img src="{{ asset('images/log.png') }}" alt="Logo Rentas Capital"><h1 align="center">Direccion General de Rentas Municipal</h1>
        </div>
        <div class="">
        	<br>
          <h3>Aviso de  Notificacion</h3>
        </div>
        <div class="">
          <p><strong>Tiene 1 notificación nueva, en su Ventanilla Electrónica.</strong><br>Para poder acceder visite:
           <strong>https://rentas.catamarcaciudad.gob.ar</strong><br>Una vez logueado como contribuyente, hacer click en Ventanilla Electrónica.Gracias.
            
          	</p>

             <p>Enviado desde Rentas-Sfc-Web</p>
             <a href="{{ $link }}">{{ $link }}</a>

        </div>
      </div>
 
      <div class="pie">
		
      </div>
    </div>
  </body>
</html>