@extends('plantilla')

@section('contenido')

@if (Session::has('success'))
<div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
    Autor guardado: 
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
{{Session::get('success')}}
</div>

@endif


<div class="container mt-5 col-md-7 bg-light">
    <h3 class="display-2 text-center mb-5"> Registrar Autor</h3>
    
    <form method="post" action="guardar">
        @csrf
        
        <label  class="form-label">Nombre Completo: </label>
        <input name="nombre" type="text" class="form-control" value="{{ old('nombre')}}">
            @error('nombre')
                <small><strong style="color: red">{{$message}}</strong></small>
            @enderror
         <br>
         <label  class="form-label">Fecha de Nacimiento </label>
         <input name="fecha" type="text" class="form-control" value="{{ old('fecha')}}">
             @error('fecha')
                 <small><strong style="color: red">{{$message}}</strong></small>
             @enderror
          <br>
          <label  class="form-label">No. Libros Publicados: </label>
          <input name="numero" type="number" class="form-control" value="{{ old('numero')}}">
              @error('numero')
                  <small><strong style="color: red">{{$message}}</strong></small>
              @enderror
           <br>
    
         <button type="submit" class="btn btn-outline-dark">Registrar</button>
        </form>
    <br>
</div>
<br>

@endsection
