
@extends('Plantilla')


@section('contenido')

  
     <div class="container col-md-6 mb-5 mt-5">

          <h1 class="display-1 text-center mt-5"> Confirma!!</h1>

          <div class="alert alert-primary alert-dismissible fade show mt-5 text-center " role="alert">
            <strong> ¿ SEGURO QUE ELIMINARAS EL SIGUIENTE RECUERDO ?</strong>.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>

              
          <div class="card mt-5 ">

               <div class="card-header text-center">
                 <h5 class="text-primary text center">{{ $consultaId->fecha }} </h5>
               </div>

               <div class="card-body">
                 <h5 class="card-title">{{ $consultaId->titulo }}  </h5>
                 <p class="card-text"> {{ $consultaId->recuerdo }}  </p>
               </div>

                <form method="post" action="{{route('recuerdo.destroy',$consultaId->idRecuerdo)}}">
                    @csrf
                    @method('delete')
                  <div class="card-footer ">
                          <button type="submit"> SI, AUTORIZABLE </button>
                          <a href="{{route('recuerdo.index')}}" class="btn btn-success">No , Regresame </a>
                    </div>
              </form>

             </div>

             
    </div>
    

@stop