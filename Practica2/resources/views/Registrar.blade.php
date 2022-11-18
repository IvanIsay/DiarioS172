
@extends('Plantilla')


@section('contenido')

  @if (session()->has('confirmacion'))

    {!!"<script>  Swal.fire(
      'Correcto!',
      'Tu recuerdo se guardo!',
      'success'
    )  </script>"!!}
      
  @endif



   <div class="container mt-5 col-md-6">

     <h1 class="display-1 text-center mb-5"> Registro Recuerdos</h1>
      
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
            Querido diario !!!
          </div>

          <div class="card-body">

               <form class="m-4" method="post" action="{{route('recuerdo.store')}}">
                    @csrf
                    
                    <div class="mb-3">
                      <label class="form-label">Titulo: </label>
                      <input type="text" class="form-control" name="txtTitulo"  value="{{ old('txtTitulo') }}">
                      <p class="text-primary fst-Italic">{{  $errors->first('txtTitulo') }} </p>
                      
                    </div>

                    <div class="mb-3">
                         <label class="form-label">Recuerdo: </label>
                         <input type="text" class="form-control" name="txtRecuerdo" value="{{ old('txtRecuerdo') }}" >
                         <p class="text-primary fst-Italic">  {{ $errors->first('txtRecuerdo')}}</p>
                        
                       </div>

            
          </div>

          <div class="card-footer">

               <button type="submit" class="btn btn-success m-1">Guardar Recuerdo</button>
          </form>
        
          </div>

        </div>


   </div>
    
    
@stop