<?php

namespace impotlx\Http\Controllers;

use Illuminate\Http\Request;

class alumnoaGrupoController extends Controller
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
        $alumnoaGrupor = \impotlx\alumnoaGrupo::All();
          
        return view('alumnoaGrupo.index',compact('alumnoaGrupor','carrerasr','bar'));
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
               $gruposr = \impotlx\grupos::pluck('nombre','id');
               $periodor = \impotlx\periodos::pluck('periodo','id');
        return view('alumnoaGrupo.create',compact('alumnosr','gruposr','periodor' ));
     
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


 $idsiguiente = \impotlx\alumnoaGrupo::pluck('id')->max() +1;
   $periodoes= \impotlx\periodos::pluck('periodo')->implode('periodo');
$matriculaes= $periodoes.'-'.$idsiguiente;


$estatus=1;



        \impotlx\alumnoaGrupo::create([
        	'id_alumno' => $request ['id_alumno'],
        	'id_periodo'=> $request ['id_periodo'],
        	'id_grupo'=> $request ['id_grupo'],
            'observaciones' => $request ['observaciones'],
            'estatus' => $estatus,
            
        	

        	]);
              return redirect('/alumnoaGrupo')->with('message','store');

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
        $alumnoaGrupo = \impotlx\alumnoaGrupo::find($id);
                return view('alumnoaGrupo.profile', array('alumnoaGrupo' => $alumnoaGrupo));
       



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
           $alumnoaGrupos = \impotlx\alumnoaGrupo::find($id);
        return view('alumnoaGrupo.edit',compact('alumnoaGrupos','periodosr','carrerasr'));
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
          $alumnoaGrupos = \impotlx\alumnoaGrupo::find($id);
          $alumnoaGrupos ->update($request->all());
               return redirect('alumnoaGrupo');
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
