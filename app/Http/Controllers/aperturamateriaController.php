<?php

namespace impotlx\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

use Illuminate\Database\Eloquent\Model;
use DB;

class aperturamateriaController extends Controller
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
        $alumnosr = \impotlx\alumnos::All();
        $aperturamateriar = \impotlx\aperturamateria::All();
        return view('aperturamateria.index',compact('aperturamateriar','bar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


              $gruposr = \impotlx\grupos::pluck('nombre','id');
              $materiasr = \impotlx\materias::All();
                      $profesorr = \impotlx\profesores::All();
                        $periodosr = \impotlx\periodos::pluck('periodo','id');
        return view('aperturamateria.create',compact('periodosr','materiasr','gruposr','profesorr'));



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




        \impotlx\aperturamateria::create([
        	'id_materia' => $request ['id_materia'],
        	'id_periodo'=> $request ['id_periodo'],
                'id_grupo'=> $request ['id_grupo'],
                    'id_Profesor'=> $request ['id_Profesor'],
            'observaciones' => $request ['observaciones'],
              'estatus' => $request ['estatus'],
        	]);
              return redirect('/aperturamateria')->with('message','store');

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
        $aperturamateria = \impotlx\aperturamateria::find($id);
                return view('aperturamateria.profile', array('aperturamateria' => $aperturamateria));




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
           $aperturamaterias = \impotlx\aperturamateria::find($id);
        return view('aperturamateria.edit',compact('aperturamaterias','periodosr','carrerasr'));
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
          $aperturamaterias = \impotlx\aperturamateria::find($id);
          $aperturamaterias ->update($request->all());
               return redirect('aperturamateria');
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
