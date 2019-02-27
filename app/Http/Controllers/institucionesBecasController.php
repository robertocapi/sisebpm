<?php

namespace impotlx\Http\Controllers;

use Illuminate\Http\Request;

class institucionesBecasController extends Controller
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
    $institucionesBecasr = \impotlx\institucionesBecas::All();
    return view('institucionesBecas.index',compact('institucionesBecasr'));
        //return view('institucionesBecas.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('institucionesBecas.create');
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
             \impotlx\institucionesBecas::create([
        	'nombre' => $request ['nombre'],
        	'nombre_contacto'=> $request ['nombre_contacto'],
        	'numero_contacto'=> $request ['numero_contacto'],


        	]);
              return redirect('/institucionesBecas')->with('message','store');

            //  return "si funciona estos ...";
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
        $institucionesBecasr = \impotlx\institucionesBecas::find($id);
           return view('institucionesBecas.edit',compact('institucionesBecasr'));
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
        $institucionesBecas = \impotlx\institucionesBecas::find($id);
        $institucionesBecas ->update($request->all());
             return redirect('institucionesBecas');
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
