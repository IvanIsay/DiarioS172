<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    
    <title>Diario Laravel</title>
</head>


<body>

    <!-- Barra de Navegacion -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">Mi diario Laravel</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">

              <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('apodoHome')? 'text-primary fw-bold':'' }}" href="Home">Home</a>
              </li>

              <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('recuerdo.create')? 'text-danger fw-bold text-decoration-line-through':'' }} " href="{{ route('recuerdo.create') }}">Registrar Recuerdo</a>
              </li>

              <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('apodoRec')? 'text-success fw-bold':'' }}" href="Recuerdo"> Consultar Recuerdos </a>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>


      <!-- Contenido -->

      @yield('contenido')



      <!-- Pie de Pagina -->
      <div class="alert alert-warning" role="alert">
          Ivan Isay Guerra L.  2022 CopyRight®
      </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
</body>



</html>