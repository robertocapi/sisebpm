<?php

namespace impotlx\Http\Controllers;

use Illuminate\Http\Request;

class asignarMateriaGrupoController extends Controller
{
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
        $asignarMateriaGrupor = \impotlx\asignarMateriaGrupo::All();
        return view('asignarMateriaGrupo.index',compact('asignarMateriaGrupor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //	
       
            $materiasabir = \impotlx\aperturamateria::pluck('id_materia','id');
               $gruposr = \impotlx\grupos::pluck('nombre','id');
        return view('asignarMateriaGrupo.create',compact('materiasabir','gruposr' ));
     
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

$estatus=1;
        \impotlx\asignarMateriaGrupo::create([
        	'id_grupo' => $request ['id_grupo'],
        	'id_materiaabierta'=> $request ['id_materiaabierta'],
            'observaciones' => $request ['observaciones'],
            'estatus' => $estatus,
            
        	]);
              return redirect('/asignarmateriagrupo')->with('message','store');

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
        $asignarMateriaGrupo = \impotlx\asignarMateriaGrupo::find($id);
                return view('asignarMateriaGrupo.profile', array('asignarMateriaGrupo' => $asignarMateriaGrupo));
       



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
           $asignarMateriaGrupos = \impotlx\asignarMateriaGrupo::find($id);
        return view('asignarMateriaGrupo.edit',compact('asignarMateriaGrupos','periodosr','carrerasr'));
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
          $asignarMateriaGrupos = \impotlx\asignarMateriaGrupo::find($id);
          $asignarMateriaGrupos ->update($request->all());
               return redirect('asignarMateriaGrupo');
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
