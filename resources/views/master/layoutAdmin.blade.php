<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Eventos<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="crearEvento">crear</a></li>
          <li><a href="modificarEvento">modificar</a></li>
          <li><a href="adaptarEvento">adaptar</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Ambientes<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="crearAmbiente">crear</a></li>
          <li><a href="modificarAmbiente">modificar</a></li>
          <li><a href="adaptarAmbiente">adaptar</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Actividades<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="crearActividades">crear</a></li>
          <li><a href="modificarActividades">modificar</a></li>
          <li><a href="eliminarActividades">eliminar</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Materiales<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="agregarMateriales">agregar</a></li>
          <li><a href="modificarMateriales">modificar</a></li>
          <li><a href="eliminarMateriales">eliminar</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Personal<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="agregarPersonal">agregar</a></li>
          <li><a href="modificarPersonal">modificar</a></li>
          <li><a href="eliminarPersonal">eliminar</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Paquetes<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="crearPaquete">crear</a></li>
          <li><a href="modificarPaquete">modificar</a></li>
          <li><a href="eliminarPaquete">eliminar</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Reportes<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="reporteAsistencia">Asistencia</a></li>
          <li><a href="reporteMateriales">Materiales</a></li>
          <li><a href="cantidadInscritos">Cantidad inscritos </a></li>
          <li><a href="certificados">Generar Certificados</a></li>
        </ul>
      </li>
      
    </ul>
  </div>
</nav>
  
<div class="container">
    @yield('content')
</div>

</body>
</html>

