<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $servicios = Servicio::all();
        return view('Servicios.listaServicios')->with('servicios',$servicios);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Servicios.crearServicio');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $servicio = $request->all();

         if($imagen = $request->file('imagen')) {
             $rutaGuardarImg = 'imagen/';
             $imagenServicio = date('YmdHis'). "." . $imagen->getClientOriginalExtension();
             $imagen->move($rutaGuardarImg, $imagenServicio);
             $servicio['imagen'] = "$imagenServicio";             
         }
         
         Servicio::create($servicio);

        return redirect('/servicios');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $servicio = Servicio::find($id);
        return view('servicios.verServicio')->with('servicio', $servicio);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $servicio = Servicio::find($id);
        return view('servicios.editarServicio')->with('servicio', $servicio);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $servicio = Servicio::find($id);
        
        $servicio->nombre = $request->get('nombre');

        if($imagen = $request->file('imagen')) {
            $rutaGuardarImg = 'imagen/';
            $imagenServicio = date('YmdHis'). "." . $imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg, $imagenServicio);
            $servicio['imagen'] = "$imagenServicio";             
        }
        $servicio->save();
        return redirect('/servicios');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Servicio $servicio)
    {
        $servicio->delete();
        return redirect('/servicios');
    }
}
