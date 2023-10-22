@extends('layout/template')

@section('title','Registrar Usuarios')

@section('contenido')



<main>
    <div class="container py-4">
            <h2>Registrar Usuarios </h2>
            @if ($errors->any())

            <div class="alert alert-primary" role="alert">
                <ul>
                @foreach($errors->all() as $error)
               <li>{{$error}}</li>
                @endforeach

                </ul>
            </div>

            @endif

            <form action = "{{url('usuarios')}}" method = "post">
              @csrf
                  <div class ="mb-3 row">
                        <label for="nombres" class="col-sm-2 col-form-label">Nombres </label>

                    <div class="col-sm-5">
                        <input type="text" class="form-control" name ="nombres" id="nombres" values="{{old ('nombres')}}" require>

                  </div>


                  <div class ="mb-3 row">
                        <label for="Apellidos" class="col-sm-2 col-form-label">Apellidos </label>

                    <div class="col-sm-5">
                        <input type="text" class="form-control" name ="apellidos" id="apellidos" values="{{old ('Apellidos')}}" require>

                  </div>

                  <div class ="mb-3 row">
                        <label for="Correo" class="col-sm-2 col-form-label">Correo </label>

                    <div class="col-sm-5">
                        <input type="text" class="form-control" name ="correo" id="correo" values="{{old ('correo')}}" require>

                  </div>


                  <div class ="mb-3 row">
                        <label for="contrasena" class="col-sm-2 col-form-label">Contraseña </label>

                    <div class="col-sm-5">
                        <input type="text" class="form-control" name ="contrasena" id="contrasena" values="{{old ('contrasena')}}" require>

                  </div>

                    <select name= "rolid" id="rolid" class ="form-select" require>
                        <option value="">Seleccione Rol</option>
                        <option value ="admin">Administrador</option>
                        <option value ="ven">vendedor</option>
                        <option value ="caj">Cajero</option>
                        <option value ="bode">Bodeguero</option>
                    </select>


                  <div class ="mb-3 row">
                        <label for="usuario" class="col-sm-2 col-form-label">Usuario </label>

                    <div class="col-sm-5">
                        <input type="text" class="form-control" name ="usuario" id="usuario" values="{{old ('usuarios')}}" require>

                  </div>
                <a href="{{url('usuarios')}}" class="btn btn-secondary">Regresar </a>

                <button type ="submit" class="btn btn-success">Guardar</button>

  
        
            </form>



    </div>







</main>