<?php

namespace impotlx\Http\Controllers;

use Illuminate\Http\Request;

class gruposController extends Controller
{
  //
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $bar = new alumnosController;
        $gruposr = \impotlx\grupos::All();
        return view('grupos.index',compact('gruposr','bar'));
        //return view('periodos.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
          $carrerasr =  \impotlx\carreras::pluck('carrera','id');
        $ciclosr =  \impotlx\ciclos::pluck('ciclos','id');
        return view('grupos.create',compact('carrerasr','ciclosr'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

       \impotlx\grupos::create([
            'nombre' => $request ['nombre'],
            'carrera_id'=> $request ['carrera_id'],
            'ciclo_id'=>$request ['ciclo_id'],
              'dia'=>$request ['dia'],
                'turno'=>$request ['turno'],
            ]);
              return redirect('/grupos')->with('message','store');
             //return 'aqui estoy';
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
        //
        $gruposr = \impotlx\grupos::find($id);
          $carrerasr =  \impotlx\carreras::pluck('carrera','id');
           return view('grupos.edit',compact('gruposr','carrerasr'));
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
        //

        $grupos = \impotlx\grupos::find($id);

        $grupos ->update($request->all());
             return redirect('grupos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
