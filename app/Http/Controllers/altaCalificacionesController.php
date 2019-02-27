<?php

namespace impotlx\Http\Controllers;

use Illuminate\Http\Request;

class altaCalificacionesController extends Controller
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
        $gruposr2 = \impotlx\grupos::All();
        return view('altaCalificaciones.index',compact('gruposr2','bar'));
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
        $periodosr =  \impotlx\periodos::pluck('periodo','id');
        return view('grupos.create',compact('carrerasr','periodosr'));
    
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
            'id_carrerra'=> $request ['id_carrerra'],
            'periodo'=>$request ['periodo'],
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
