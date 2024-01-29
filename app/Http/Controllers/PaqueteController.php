<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Laravel\Firebase\Facades\Firebase;
use Kreait\Firebase\Database;
use Kreait\Firebase\Firestore;

class PaqueteController extends Controller
{
    public function __construct(Firestore $firestore)
    {
        $this->firestore = $firestore;
    }
    public function index()
    {
        $firestore = Firebase::firestore();
        $database = $firestore->database();
        $collection = $database->collection('paquetes');
        $documents = $collection->documents()->rows();

       

        return view('paquetes.index', ['paquetes' => $documents]);
    }

  
    public function create()
    {
        return view('paquetes/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = app('firebase.firestore')->database()->collection('paquetes')->newDocument();
    $customer->set([
        'nombrePlatillo' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
            'categoria' => $request->input('categoria'),
            'foto' => $request->input('foto'),
            
            // 'password' => Hash::make($request->input('contraseña')),
            'precio' => $request->input('precio'),
            'puntuacion' => $request->input('puntuacion'),
            'stock' => $request->input('stock'),
    ]);

       

        return redirect()->route('paquetes.index')->with('status', 'Paquete creado exitosamente.');

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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $firestore = Firebase::firestore();
        $database = $firestore->database();
        $paquetes = $database->collection('paquetes')->document($id)->snapshot();
        // $usuarios = $this->firestore->collection('usuarios')->document($id)->snapshot();

        return view('paquetes.edit', compact('paquetes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $firestore = Firebase::firestore();
        $database = $firestore->database()->collection('paquetes')->document($id)->set([
            'nombrePlatillo' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
            'categoria' => $request->input('categoria'),
            'foto' => $request->input('foto'),
            
            // 'password' => Hash::make($request->input('contraseña')),
            'precio' => $request->input('precio'),
            'puntuacion' => $request->input('puntuacion'),
            'stock' => $request->input('stock'),
          
        ]);

        return redirect()->route('paquetes.index')->with('status', 'Paquete actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $firestore = Firebase::firestore();
        $database = $firestore->database()->collection('paquetes')->document($id)->delete();
        return redirect()->route('paquetes.index')->with('status', 'Paquete eliminado exitosamente');
    }
}
