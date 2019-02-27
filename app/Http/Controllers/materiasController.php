<?php

namespace impotlx\Http\Controllers;

use Illuminate\Http\Request;

class materiasController extends Controller
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
        $materiasr = \impotlx\materias::All();
        return view('materias.index',compact('materiasr','bar'));
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
        return view('materias.create',compact('carrerasr'));

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

       \impotlx\materias::create([
        	'carrera_id' => $request ['carrera_id'],
        	'nombre'=> $request ['nombre'],
        	'clave'=>$request ['clave'],
          	'abreviatura'=>$request ['abreviatura'],
      	'horas_docentes'=>$request ['horas_docentes'],
				'horas_independientes'=>$request ['horas_independientes'],
					'creditos'=>$request ['creditos'],
        	]);
              return redirect('/materias')->with('message','store');
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
        $materiasr = \impotlx\materias::find($id);
            $carrerasr =  \impotlx\carreras::pluck('carrera','id');
           return view('materias.edit',compact('materiasr','carrerasr'));
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
        $materias = \impotlx\materias::find($id);
        $materias ->update($request->all());
             return redirect('materias');
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
