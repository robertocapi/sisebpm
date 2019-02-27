<?php

namespace impotlx\Http\Controllers;

use Illuminate\Http\Request;

class documentosController extends Controller
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
            $bar = new alumnosController;
        $documentosr = \impotlx\documentos::All();
        return view('documentos.index',compact('documentosr','bar'));
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
        return view('documentos.create',compact('carrerasr','periodosr'));
    
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
        
       \impotlx\documentos::create([
            'documento' => $request ['documento'],
            'programa_academico'=> $request ['programa_academico'],
            'estatus'=>$request ['estatus'],
             'tipo_documento'=>$request ['tipo_documento'],
       
    
            ]);
              return redirect('/documentos')->with('message','store');
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
