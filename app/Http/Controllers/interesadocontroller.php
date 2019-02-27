<?php

namespace impotlx\Http\Controllers;

use Illuminate\Http\Request;

class interesadocontroller extends Controller
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
     $interesadosr = \impotlx\interesados::All();
    return view('interesados.index',compact('interesadosr'));

       //return view('alumnos.index');
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
        return view('interesados.create',compact('carrerasr'));
        //return view('interesados.create');
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
    \impotlx\interesados::create([
        	'nombre' => $request ['nombre'],
        	'ap_paterno'=> $request ['ap_paterno'],
            'ap_materno' => $request ['ap_materno'],
            'date_birthday' => $request ['date_birthday'],
            'estado_civil' => $request ['estado_civil'],
                'phone_house'=> $request ['phone_house'], 
            'phone_movil'=> $request ['phone_movil'], 
            'email'=> $request ['email'], 
            'sexo'=> $request ['sexo'], 
               'estatus'=> $request ['estatus'],
                'id_carrera'=> $request ['id_carrera'],
        	]);
              return redirect('/interesados')->with('message','store');

     

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
         return view('interesados.show');
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
