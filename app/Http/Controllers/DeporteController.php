<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/*use App\Http\Requests;*/

use App\RegistroDeporte;

/*use App\Http\Controllers\Controller;*/

class DeporteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registros = RegistroDeporte::all();
        return view('deporte/home', ['registros' => $registros]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('deporte/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
                'numero'=>'required',
                'fecha'=>'required',
                'area'=>'required',
                'destinatario'=>'required',
                'asunto'=>'required',
            ]);

        $registro = new RegistroDeporte;
        $registro->numero = $request->numero;
        $registro->fecha = $request->fecha;
        $registro->area = $request->area;
        $registro->destinatario = $request->destinatario;
        $registro->asunto = $request->asunto;
        $registro->usuario = $request->usuario;
        $registro->save();

        

        return redirect('deporte')->with('message', 'Registro Agregado Correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $registro = RegistroDeporte::find($id);

        if(!$registro){
            abort(404);
        }

        return view('deporte/detail')->with('registro', $registro);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $registro = RegistroDeporte::find($id);

        if(!$registro){
            abort(404);
        }

        return view('deporte/edit')->with('registro', $registro);
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
        $this->validate($request,[
                'numero'=>'required',
                'fecha'=>'required',
                'area'=>'required',
                'destinatario'=>'required',
                'asunto'=>'required',
                'usuario'=>'required',
            ]);

        $registro = RegistroDeporte::find($id);
        $registro->numero = $request->numero;
        $registro->fecha = $request->fecha;
        $registro->area = $request->area;
        $registro->destinatario = $request->destinatario;
        $registro->asunto = $request->asunto;
        $registro->usuario = $request->usuario;
        $registro->save();

        return redirect('deporte')->with('message', 'Registro Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $registro = RegistroDeporte::find($id);
        $registro->delete();
        return redirect('deporte')->with('message', 'Registro Eliminado');
    }
}
