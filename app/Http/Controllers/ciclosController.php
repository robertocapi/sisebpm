<?php

namespace impotlx\Http\Controllers;

use Illuminate\Http\Request;

class ciclosController extends Controller
{
    //
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
               $bar = new alumnosController;
        $ciclosr = \impotlx\ciclos::All();
        return view('ciclos.index',compact('ciclosr','bar'));
        //return view('ciclos.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('ciclos.create');
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

       \impotlx\ciclos::create([
        	'ciclos' => $request ['ciclos'],
        	'fecha_inicio'=> $request ['fecha_inicio'],
        	'fecha_fin'=>$request ['fecha_fin'],
            'estatus'=>$request ['estatus'],

        	]);
              return redirect('/ciclos')->with('message','store');
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

     $ciclosr = \impotlx\ciclos::find($id);
        return view('ciclos.edit',compact('ciclosr'));
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
        $ciclos = \impotlx\ciclos::find($id);
        $ciclos ->update($request->all());
             return redirect('ciclos');
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
