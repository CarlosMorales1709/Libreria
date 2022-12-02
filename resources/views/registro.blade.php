@extends('plantilla')

@section('contenido')

@if (Session::has('success'))
<div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
    Libro guardado: 
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
{{Session::get('success')}}
</div>

@endif


<div class="container mt-5 col-md-7 bg-light">
    <h3 class="display-2 text-center mb-5"> Registrar Libro</h3>
    
    <form method="post" action="{{route('libros.store)}}">

        @csrf
        
        <label for="exampleInputEmail1" class="form-label">ISBN: </label>
        <input name="txtisbn" type="text" class="form-control" value="{{ old('txtisbn')}}" placeholder="Solo numeros">
            @error('txtisbn')
                <small><strong style="color: red">{{$message}}</strong></small>
            @enderror
         <br>
       
        <label for="exampleInputPassword1" class="form-label">Titulo: </label>
        <input name="txttitulo" type="text" class="form-control" value="{{ old('txttitulo')}}">
            @error('txttitulo')
                <small><strong style="color: red">{{$message}}</strong></small>
            @enderror
            <br>
        <label for="exampleInputEmail1" class="form-label">Autor: </label>
        <input name="txtautor" type="text" class="form-control" value="{{ old('txtautor')}}">
            @error('txtautor')
                <small><strong style="color: red">{{$message}}</strong></small>
            @enderror
        <br>
        <label for="exampleInputEmail1" class="form-label">Paginas: </label>
        <input name="txtpagina" type="text" class="form-control" value="{{ old('txtpagina')}}" placeholder="Solo numeros">
            @error('txtpagina')
                <small><strong style="color: red">{{$message}}</strong></small>
            @enderror
         <br>
         <label for="exampleInputEmail1" class="form-label">Editorial: </label>
         <input name="txteditorial" type="text" class="form-control" value="{{ old('txteditorial')}}">
             @error('txteditorial')
                 <small><strong style="color: red">{{$message}}</strong></small>
             @enderror
          <br>
          <label for="exampleInputEmail1" class="form-label">Email de Editorial: </label>
          <input name="txtemail" type="email" class="form-control" value="{{ old('txtemail')}}" placeholder="Solo dirección email">
              @error('txtemail')
                  <small><strong style="color: red">{{$message}}</strong></small>
              @enderror
           <br>                   
        <br>
        <button type="submit" class="btn btn-outline-dark">Registrar</button>
    </form>
    <br>
</div>
<br>

@endsection
