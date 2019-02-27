<?php

namespace impotlx\Http\Controllers;

use Illuminate\Http\Request;

class ConceptoPagosController extends Controller
{
    //
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    $conceptospagosr = \impotlx\conceptosPagos::All();
    return view('conceptosPagos.index',compact('conceptospagosr'));
        //return view('conceptosPagos.index');
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
             return view('conceptosPagos.create',compact('carrerasr'));

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
     \impotlx\conceptosPagos::create([
        	'concepto' => $request ['concepto'],
        	'monto'=> $request ['monto'],
            'nivel'=> $request ['nivel'],


        	]);
              return redirect('/conceptoPago')->with('message','store');
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
        $conceptopagosr = \impotlx\conceptosPagos::find($id);
            $carrerasr =  \impotlx\carreras::pluck('carrera','id');
           return view('materias.edit',compact('conceptopagosr','carrerasr'));
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
        $conceptopago = \impotlx\conceptoPagos::find($id);
        $conceptopago ->update($request->all());
             return redirect('conceptopagos');
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
