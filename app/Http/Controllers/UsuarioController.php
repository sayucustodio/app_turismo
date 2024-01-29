<?php

namespace App\Http\Controllers;
use Kreait\Firebase\Factory;
use Kreait\Laravel\Firebase\Facades\Firebase;
use Kreait\Firebase\Database;
use Kreait\Firebase\Firestore;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    
 
    
     public function __construct(Firestore $firestore)
    {
        $this->firestore = $firestore;
    }
    public function index()
    {
        $firestore = Firebase::firestore();
        $database = $firestore->database();
        $collection = $database->collection('usuarios');
        $documents = $collection->documents()->rows();

       

        return view('usuarios.index', ['usuarios' => $documents]);
          
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuarios/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = app('firebase.firestore')->database()->collection('usuarios')->newDocument();
    $customer->set([
        'nombreUsuario' => $request->input('nombre'),
            'email' => $request->input('correo'),
            'direccion' => $request->input('direccion'),
            // 'password' => Hash::make($request->input('contraseña')),
            'password' => $request->input('contraseña'),
    ]);

       

        return redirect()->route('usuarios.index')->with('status', 'Usuario creado exitosamente.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $firestore = Firebase::firestore();
        $database = $firestore->database();
        $usuarios = $database->collection('usuarios')->document($id)->snapshot();
        // $usuarios = $this->firestore->collection('usuarios')->document($id)->snapshot();

        return view('usuarios.edit', compact('usuarios'));
    }

    public function update(Request $request, $id)
    {
        $firestore = Firebase::firestore();
        $database = $firestore->database()->collection('usuarios')->document($id)->set([
           'nombreUsuario' => $request->input('nombre'),
            'email' => $request->input('correo'),
            'direccion' => $request->input('direccion'),
            // 'password' => Hash::make($request->input('contraseña')),
            'password' => $request->input('contraseña'),
          
        ]);

        return redirect()->route('usuarios.index')->with('status', 'Usuario actualizado exitosamente');
    }

    public function destroy($id)
    {
        $firestore = Firebase::firestore();
        $database = $firestore->database()->collection('usuarios')->document($id)->delete();
        return redirect()->route('usuarios.index')->with('status', 'Usuario eliminado exitosamente');
    
    }
}
