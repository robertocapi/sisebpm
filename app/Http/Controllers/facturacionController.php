<?php

namespace impotlx\Http\Controllers;

use Illuminate\Http\Request;

class facturacionController extends Controller
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
        $facturacionr = \impotlx\facturacion::All();
        return view('facturacion.index',compact('facturacionr','bar'));
        //return view('facturacion.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //	

         $alumnosr= \impotlx\alumnos::all();
         return view('facturacion.create',compact('alumnosr'));
      
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

           
        
       \impotlx\facturacion::create([
        	'razonsocialfac' => $request ['razonsocialfac'],
        	'regimen'=> $request ['regimen'],
        	'dire_factura'=>$request ['dire_factura'],
            'rfc_factu'=>$request ['rfc_factu'],
             'estatus'=>$request ['estatus'],
              'id_alumno'=>$request ['id_alumno'],

        	]);
              return redirect('/facturacion')->with('message','store');
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
