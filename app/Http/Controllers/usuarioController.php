<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use Illuminate\Http\Request;

class usuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = usuario::all();
        return view('usuarios.index',['usuarios' => $usuarios]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombres'=> 'required|max:50',
            'apellidos'=> 'required|max:50',
            'correo'=> 'required|max:50',
            'contrasena'=> 'required|max:50',
            'usuario'=> 'required|max:50',
            
        ]);

        $usuarios = new usuario();
        $usuarios->nombres = $request->input('nombres');
        $usuarios->apellidos = $request->input('apellidos');
        $usuarios->correo = $request->input('correo');
        $usuarios->contrasena = $request->input('contrasena');
        $usuarios->usuario = $request->input('usuario');
        $usuarios->save();

        return view ("usuarios.message", ['msg' => "Registro Guardado"]);

    }

    /**
     * Display the specified resource.
     */
    public function show(usuarios $usuarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {    
        $usuarios = usuario::find($id);
         return view('usuarios.edit', ['usuarios' => $usuarios]); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombres'=> 'required|max:50',
            'apellidos'=> 'required|max:50',
            'correo'=> 'required|max:50',
            'contrasena'=> 'required|max:50',
            'usuario'=> 'required|max:50',
            
        ]);

        $usuarios = usuario::find($id);
        $usuarios->nombres = $request->input('nombres');
        $usuarios->apellidos = $request->input('apellidos');
        $usuarios->correo = $request->input('correo');
        $usuarios->contrasena = $request->input('contrasena');
        $usuarios->usuario = $request->input('usuario');
        $usuarios->save();

        return view ("usuarios.message", ['msg' => "Registro Guardado"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
       $usuarios = usuario::find($id);
       $usuarios->delete();

       return redirect("usuarios");
    }
}
