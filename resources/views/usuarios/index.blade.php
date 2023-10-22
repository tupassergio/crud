@extends('layout/template')

@section('title','Usuarios')

@section('contenido')

<main>

<div class = "container py-4">
        <h2>Listado de Usuarios</h2>

        <a href ="{{url('usuarios/create')}}" class="btn btn-primary btn-sm">Nuevo Registro</a>

        <table class="table table-hover">

        <thead>
                <th>#</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Correo</th>
                <th>Contraseña</th>
                <th>Usuario</th>
                <th>Editar</th>
                <th>Eliminar</th>
        </thead>
        <tbody>
        @foreach($usuarios as $usuario)
        <tr>
         <td> {{ $usuario->id }}</td>
         <td> {{ $usuario->nombres }}</td> 
         <td> {{ $usuario->apellidos }}</td> 
         <td> {{ $usuario->correo }}</td> 
         <td> {{ $usuario->contrasena }}</td> 
         <td> {{ $usuario->usuario }}</td>  
         <td><a href="{{ url('usuarios/'.$usuario->id.'/edit' ) }}" class="btn btn-warning btn-sm">Editar</a></td> 
         <td> 
                <form action="{{ url('usuarios/'.$usuario->id) }}" method ="post">
                        @method("DELETE")
                        @csrf
                        <button type ="submit" class= "btn btn-danger btn-sm">Eliminar</button>
                </form>
         </td>      


        </tr>
                @endforeach
        </tbody>

       </table>


</div>
</main>