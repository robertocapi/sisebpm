<?php

namespace impotlx\Http\Controllers;

use Illuminate\Http\Request;

class profesoresController extends Controller
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
      $profesores = \impotlx\profesores::All();
    return view('profesores.index',compact('profesores'));
      //  return view('profesores.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('profesores.create');
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
    \impotlx\profesores::create([
        	'nombre' => $request ['nombre'],
        	'ap_paterno'=> $request ['ap_paterno'],
            'ap_materno' => $request ['ap_materno'],
            'titulo'=> $request ['titulo'],
            'telefono' => $request ['telefono'],
            'email'=> $request ['email'],
            'facebook' => $request ['facebook'],
            'costo_hora'=> $request ['costo_hora'],
              'viaticos'=> $request ['viaticos'],
        	]);
              return redirect('/profesores')->with('message','store');
              //return "aqui funciona";
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
        $profesoresr = \impotlx\profesores::find($id);

           return view('profesores.edit',compact('profesoresr'));
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
        $profesores = \impotlx\profesores::find($id);
        $profesores ->update($request->all());
             return redirect('profesores');
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
