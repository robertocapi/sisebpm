<?php

namespace impotlx\Http\Controllers;

use Illuminate\Http\Request;

class reinscripcionController extends Controller
{
    //
    //
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

$bar = new alumnosController;
$reinscripcionr = \impotlx\reinscripcion::All();
        return view('reinscripcion.index',compact('reinscripcionr','bar'));
    }

  

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //	

 			$alumnosr = \impotlx\alumnos::all();
                //$matricula = \impotlx\alumnos::pluck('ap_paterno','id');



            $periodosr = \impotlx\periodos::pluck('periodo','id');

        		return view('reinscripcion.create',compact('periodosr','alumnosr' ));
     
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


\impotlx\reinscripcion::create([
       'id_alumnos' => $request ['id_alumnos'],
       'id_carrera' => $request ['id_carrera'],
        	'id_reinscripcion' => $request ['id_reinscripcion'],
        	'id_periodo'=> $request ['id_periodo'],
            'email' => $request ['email'],
            'tel_cel' => $request ['tel_cel'],
            'cuatrimestre' => $request ['cuatrimestre'],
                'observaciones'=> $request ['observaciones'], 
            'fecha'=> $request ['fecha'], 
        	]);
              return redirect('/reinscripcion')->with('message','store');

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
        $reinscripcion = \impotlx\reinscripcion::find($id);
                return view('reinscripcion.profile', array('reinscripcion' => $reinscripcion));
       



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
            $periodosr = \impotlx\periodos::pluck('periodo','id');
            $carrerasr = \impotlx\carreras::pluck('carrera','id');
           $reinscripcions = \impotlx\reinscripcion::find($id);
        return view('reinscripcion.edit',compact('reinscripcions','periodosr','carrerasr'));
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
          $reinscripcions = \impotlx\reinscripcion::find($id);
          $reinscripcions ->update($request->all());
               return redirect('reinscripcion');
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
