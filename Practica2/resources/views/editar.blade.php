
@extends('Plantilla')


@section('contenido')



   <div class="container mt-5 col-md-6">

     <h1 class="display-1 text-center mb-5"> Actualizar Recuerdo</h1>
      
      @if($errors->any())
        @foreach ($errors->all() as $error)
            
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>  {{ $error }}  </strong> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>

        @endforeach
       @endif


     <div class="card text-danger mb-5 fw-bold">

          <div class="card-header text-center ">
            Correcion de Recuerdo !!!
          </div>

          <div class="card-body">

               <form class="m-4" method="post"  action="{{route('recuerdo.update',$consultaId->idRecuerdo)}}">
                    @csrf

                    {!! method_field('PUT')!!}
                    
                    <div class="mb-3">
                      <label class="form-label">Titulo: </label>
                      <input type="text" class="form-control" name="txtTitulo"  value="{{ $consultaId->titulo }}"">
                      <p class="text-primary fst-Italic">{{  $errors->first('txtTitulo') }} </p>
                      
                    </div>

                    <div class="mb-3">
                         <label class="form-label">Recuerdo: </label>
                         <input type="text" class="form-control" name="txtRecuerdo" value="{{ $consultaId->recuerdo }}" >
                         <p class="text-primary fst-Italic">  {{ $errors->first('txtRecuerdo')}}</p>
                        
                       </div>

            
          </div>

          <div class="card-footer">

               <button type="submit" class="btn btn-primary m-1">Actualizar Recuerdo</button>
          </form>
        
          </div>

        </div>


   </div>
    
    
@stop