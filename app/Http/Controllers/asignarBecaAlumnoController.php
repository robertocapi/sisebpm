<?php

namespace impotlx\Http\Controllers;

use Illuminate\Http\Request;

class asignarBecaAlumnoController extends Controller
{
    //
    /**
     * Run the migrations.
     *
     * @return void
     */
  
        //
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
        $asignarBecaAlumnor = \impotlx\asignarBecaAlumno::All();
      
        return view('asignarBecaAlumno.index',compact('asignarBecaAlumnor','bar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //  
       
            $institucionr = \impotlx\institucionesBecas::pluck('nombre','id');
               $alumnosr = \impotlx\alumnos::all();
        return view('asignarBecaAlumno.create',compact('institucionr','alumnosr' ));
     
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
        \impotlx\asignarBecaAlumno::create([
        	  'id_alumno'=> $request ['id_alumno'],
            'id_beca' => $request ['id_beca'],
            'observaciones' => $request ['observaciones'],
            'estatus' =>$estatugeneral,
            
            ]);
              return redirect('/asignarBecaAlumno')->with('message','store');

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
        $asignarBecaAlumno = \impotlx\asignarBecaAlumno::find($id);
                return view('asignarBecaAlumno.profile', array('asignarBecaAlumno' => $asignarBecaAlumno));
       



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
           $asignarBecaAlumnos = \impotlx\asignarBecaAlumno::find($id);
        return view('asignarBecaAlumno.edit',compact('asignarBecaAlumnos','periodosr','carrerasr'));
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
          $asignarBecaAlumnos = \impotlx\asignarBecaAlumno::find($id);
          $asignarBecaAlumnos ->update($request->all());
               return redirect('asignarBecaAlumno');
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
