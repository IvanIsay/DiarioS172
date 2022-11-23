
@extends('Plantilla')


@section('contenido')


@if (session()->has('Actualizar'))

{!!"<script>  Swal.fire(
  'Correcto!',
  'Tu recuerdo se actualizo!',
  'success'
)  </script>"!!}
  
@endif

   
     <h1 class="display-1 mt-4 mb-4 text-center"> Consulta Recuerdos </h1>


     @foreach ($ConsultaRec as $consulta)

     <div class="container col-md-6 mb-5 mt-5">

              
          <div class="card ">

               <div class="card-header text-center">
                 <h5 class="text-primary text center">{{ $consulta->fecha }} </h5>
               </div>

               <div class="card-body">
                 <h5 class="card-title">{{ $consulta->titulo }}  </h5>
                 <p class="card-text"> {{ $consulta->recuerdo }}  </p>
               </div>

               <div class="card-footer ">
                    <a href="{{route('recuerdo.edit',$consulta->idRecuerdo)}}" class="btn btn-warning">Actualizar  </a>
                    <a href="#" class="btn btn-danger">E </a>
               </div>

             </div>

             
     </div>
    
     @endforeach

@stop