<?php

namespace impotlx\Http\Controllers;

use Illuminate\Http\Request;

class becasController extends Controller
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
        $becasr = \impotlx\becas::All();
        return view('becas.index',compact('becasr','bar'));
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

        $nivelesr =  \impotlx\niveles::pluck('nombre','id');
     $conceptospagosr = \impotlx\conceptosPagos::pluck('concepto','id');
        return view('becas.create',compact('nivelesr','conceptospagosr'));

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

       \impotlx\becas::create([
        	'nivel_id' => $request ['nivel_id'],
        	'conceptosPagos_id'=> $request ['conceptosPagos_id'],
        	'descuento'=>$request ['descuento'],



        	]);
              return redirect('/becas')->with('message','store');
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
            $nivelesr =  \impotlx\niveles::pluck('nombre','id');
                  $conceptospagosr = \impotlx\conceptosPagos::pluck('concepto','id');
        $becasr = \impotlx\becas::find($id);
           return view('becas.edit',compact('becasr','nivelesr','conceptospagosr'));
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
        $becas = \impotlx\becas::find($id);
        $becas ->update($request->all());
             return redirect('becas');
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
