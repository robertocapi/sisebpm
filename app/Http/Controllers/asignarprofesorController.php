<?php

namespace impotlx\Http\Controllers;

use Illuminate\Http\Request;

class asignarprofesorController extends Controller
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
        $asignarprofesorr = \impotlx\asignarprofesor::All();
      
        return view('asignarprofesor.index',compact('asignarprofesorr','bar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //	
       
            $materiasr = \impotlx\materias::pluck('nombre','id');
               $profesorr = \impotlx\profesores::pluck('nombre','id');
        return view('asignarprofesor.create',compact('materiasr','profesorr' ));
     
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

$estatugeneral=1;
        \impotlx\asignarprofesor::create([
        	'id_profesor' => $request ['id_profesor'],
        	'id_materia'=> $request ['id_materia'],
            'observaciones' => $request ['observaciones'],
            'estatus' =>$estatugeneral,
            
        	]);
              return redirect('/asignarprofesor')->with('message','store');

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
        $asignarprofesor = \impotlx\asignarprofesor::find($id);
                return view('asignarprofesor.profile', array('asignarprofesor' => $asignarprofesor));
       



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
           $asignarprofesors = \impotlx\asignarprofesor::find($id);
        return view('asignarprofesor.edit',compact('asignarprofesors','periodosr','carrerasr'));
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
          $asignarprofesors = \impotlx\asignarprofesor::find($id);
          $asignarprofesors ->update($request->all());
               return redirect('asignarprofesor');
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
