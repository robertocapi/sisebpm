<?php

namespace impotlx\Http\Controllers;

use Illuminate\Http\Request;

class carreracontroller extends Controller
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
            $bar = new alumnosController;
    $carrerasr = \impotlx\carreras::All();
    return view('carreras.index',compact('carrerasr','bar'));
        //return view('carreras.index');
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

               return view('carreras.create',compact('nivelesr'));
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
             \impotlx\carreras::create([
        	'carrera' => $request ['carrera'],
        	'nivel_id'=> $request ['nivel_id'],
                'abreviatura'=> $request ['abreviatura'],


        	]);
              return redirect('/carreras')->with('message','store');

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
      $carrerasr = \impotlx\carreras::find($id);
          $nivelr = \impotlx\niveles::find($id);
         return view('carreras.edit',compact('carrerasr','nivelr'));
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
        $carreras = \impotlx\carreras::find($id);
        $carreras ->update($request->all());
             return redirect('carreras');
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
