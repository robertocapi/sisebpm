<?php

namespace impotlx\Http\Controllers;

use Illuminate\Http\Request;

class alumnosController extends Controller
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
                  $interesadosr = \impotlx\interesados::all();
                  $consecutivor = \impotlx\consecutivos::All();
      $alumnosr = \impotlx\alumnos::All();
    return view('alumnos.index',compact('alumnosr','interesadosr','consecutivor'));
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
$alumnosr = \impotlx\alumnos::All();
         $carrerasr =  \impotlx\carreras::pluck('carrera','id');
                         $interesadosr = \impotlx\interesados::pluck('nombre','id');
                         $interesadosr2 = \impotlx\interesados::pluck('ap_paterno','id');
               $periodosr = \impotlx\periodos::pluck('periodo','periodo');
    return view('alumnos.create',compact('alumnosr','carrerasr','interesadosr','periodosr','interesadosr2'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //insertar y luego update o cosecutivo

 $consecutivor = \impotlx\consecutivos::max('consecutivo');
   $conseucivoplus1=$consecutivor+1;
  $matriculaconseucutivo=$request ['periodo']. $conseucivoplus1;
  \impotlx\alumnos::create([
        	'id_interesado' => $request ['id_interesado'],
        	'nombre_contacto'=> $request ['nombre_contacto'],
                     'CURP'=> $request ['CURP'],
                  'periodo'=> $request ['periodo'],
                    'matricula'=>  $matriculaconseucutivo,
                  'streetNumber'=> $request ['streetNumber'],
                  'colonia'=> $request ['colonia'],
                'Municipio'=> $request ['Municipio'],
                 'Estado'=> $request ['Estado'],
                 'zip_code'=> $request ['zip_code'], 
                     'estado_civil'=> $request ['estado_civil'],  
            'numerohome_contacto' => $request ['numerohome_contacto'],
            'numerocel_contacto'=> $request ['numerocel_contacto'],
            'nombreEmpresa' => $request ['nombreEmpresa'],
            'estado_civil' => $request ['estado_civil'],
            'phone_movil'=> $request ['phone_movil'], 
                 'tel_oficina'=> $request ['tel_oficina'], 
            'dire_oficina'=> $request ['dire_oficina'], 
            'cargo'=> $request ['cargo'], 
             'estatus'=> $request ['estatus'], 
            'comoEntero'=> $request ['comoEntero'], 
            'id_carrera'=> $request ['id_carrera'], 
        	]);
              return redirect('/alumnos')->with('message','store');

     

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

        $alumnos = alumnos::find($id);

        return view('alumnos.index',compact('alumnos'));
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

        $alumnos = alumno::find($id);
        return view('alumnos.edit',compact('alumnos'));
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


