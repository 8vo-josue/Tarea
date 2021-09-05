<?php

namespace App\Http\Controllers;
use App\Models\Empleados;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = Empleados::all();
        return view('empleados.index')->with('empleados', $empleados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empleados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empleados = new Empleados();
        $empleados->codigo = $request->get('txt_codigo');
        $empleados->nombres = $request->get('txt_nombres');
        $empleados->apellidos = $request->get('txt_apellidos');
        $empleados->direccion = $request->get('txt_direccion');
        $empleados->telefono = $request->get('txt_telefono');
        $empleados->puesto = $request->get('txt_puesto');
        $empleados->nacimiento = $request->get('txt_fn');

        $empleados->save();

        return redirect('/empleados');
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
        $empleado = Empleados::find($id);
        return view('empleados.edit')->with( 'empleado', $empleado);
        return redirect('/empleados');
        
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
        $empleado =  Empleados::find($id);
        $empleado->codigo = $request->get('txt_codigo');
        $empleado->nombres = $request->get('txt_nombres');
        $empleado->apellidos = $request->get('txt_apellidos');
        $empleado->direccion = $request->get('txt_direccion');
        $empleado->telefono = $request->get('txt_telefono');
        $empleado->puesto = $request->get('txt_puesto');
        $empleado->nacimiento = $request->get('txt_fn');

        $empleado->save();

        return redirect('/empleados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empleado =  Empleados::find($id);
        $empleado->delete();
        return redirect('/empleados');
    }
}
