@extends('layout/template')

@section('title','Editar Usuarios')

@section('contenido')


<main>
    <div class="container py-4">
            <h2>Editar Usuarios </h2>
            @if ($errors->any())

            <div class="alert alert-primary" role="alert">
                <ul>
                @foreach($errors->all() as $error)
               <li>{{$error}}</li>
                @endforeach

                </ul>
            </div>

            @endif

            <form action="{{ url('usuarios/'.$usuarios->id )}}" method="post">
              @method("PUT")  
              @csrf

                  <div class ="mb-3 row">
                        <label for="nombres" class="col-sm-2 col-form-label">Nombres </label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="nombres" id="nombres" values="{{ $usuarios->nombres }}">
                  </div>


                  <div class ="mb-3 row">
                        <label for="Apellidos" class="col-sm-2 col-form-label">Apellidos </label>

                    <div class="col-sm-5">
                        <input type="text" class="form-control" name ="apellidos" id="apellidos" values="{{ $usuarios->apellidos }}">
                  </div>

                  <div class ="mb-3 row">
                        <label for="Correo" class="col-sm-2 col-form-label">Correo </label>

                    <div class="col-sm-5">
                        <input type="text" class="form-control" name ="correo" id="correo" values="{{ $usuarios->correo }}">
                  </div>

                  <div class ="mb-3 row">
                        <label for="contrasena" class="col-sm-2 col-form-label">Contraseña </label>

                    <div class="col-sm-5">
                        <input type="text" class="form-control" name ="contrasena" id="contrasena" values="{{ $usuarios->contrasena }}">
                  </div>

                  <div class ="mb-3 row">
                        <label for="usuario" class="col-sm-2 col-form-label">Usuario </label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name ="usuario" id="usuario" values="{{ $usuarios->usuario }}">
                  </div>
                <a href="{{url('usuarios') }}" class="btn btn-secondary">Regresar </a>

                <button type ="submit" class="btn btn-success">Guardar</button>

  
        
            </form>



    </div>







</main>