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



        $bar = new alumnosController;
        $alumnosr = \impotlx\alumnos::All();
        return view('alumnos.index',compact('alumnosr','bar'));

    }

     public function getNameCarrera($idcarrera)
    {
$nameCarrera = \impotlx\carreras::find($idcarrera);
 $nameCarrera->toArray();
$value = array_get($nameCarrera, 'carrera');
        return $value;
    }
    public function getNameNivel($nivel_id)
   {
 $nameNivel = \impotlx\niveles::find($nivel_id);
 $nameNivel->toArray();
 $value = array_get($nameNivel, 'nombre');
       return $value;
   }

       public function getNameInstitucion($idinstitucion)
    {
        $nameinstitucion = \impotlx\institucionesBecas::find($idinstitucion);
 $nameinstitucion->toArray();
$value = array_get($nameinstitucion, 'nombre');
        return $value;
    }

         public function getNameEstatus($idestatus)
    {
        $nameestatus = \impotlx\estatus::find($idestatus);
$nameestatus->toArray();
$value = array_get($nameestatus, 'nombre');
        return $value;
    }

     public function getNameMateria($idmateria)
    {
        $nameMateria = \impotlx\materias::find($idmateria);
 $nameMateria->toArray();
$value = array_get($nameMateria, 'nombre');
        return $value;
    }

public function getNameConceptoPago($idconcepto)
    {
        $nameConceptoPago = \impotlx\conceptosPagos::find($idconcepto);
 $nameConceptoPago->toArray();
$value = array_get($nameConceptoPago, 'concepto');
        return $value;
    }


public function getNamePeriodo($idperiodo)
    {
        $namePeriodo = \impotlx\ciclos::find($idperiodo);
 $namePeriodo->toArray();
$value = array_get($namePeriodo, 'ciclos');
        return $value;
    }

    public function getNameGrupo($idgrupo)
    {
        $nameGrupo = \impotlx\grupos::find($idgrupo);
 $nameGrupo->toArray();
$value = array_get($nameGrupo, 'nombre');
        return $value;
    }


      public function getFullname($idalumno)
    {
        $name = \impotlx\alumnos::find($idalumno);
        $name->toArray();
     $valuen = array_get($name, 'nombre');
       $name = \impotlx\alumnos::find($idalumno);
        $name->toArray();
     $valueAp = array_get($name, 'ap_paterno');
        $name = \impotlx\alumnos::find($idalumno);
        $name->toArray();
     $valueAm = array_get($name, 'ap_materno');

     $fullname=$valuen.' ' .$valueAp.' ' .$valueAm;
        return $fullname;
    }


     public function getFullnameProfesor($idprofesor)
    {
        $name = \impotlx\profesores::find($idprofesor);
        $name->toArray();
     $valuen = array_get($name, 'nombre');
       $name = \impotlx\profesores::find($idprofesor);
        $name->toArray();
     $valueAp = array_get($name, 'ap_paterno');
        $name = \impotlx\profesores::find($idprofesor);
        $name->toArray();
     $valueAm = array_get($name, 'ap_materno');

     $fullname=$valuen.' ' .$valueAp.' ' .$valueAm;
        return $fullname;
    }

 public function crearMatricula($idcarrera,$periodo)
    {

      //calcular abreviatura

    $abreviaturaCarrera= \impotlx\carreras::pluck('abreviatura')->implode('abreviatura');
$abreviaturaCarrera = \impotlx\carreras::find($idcarrera);
 $abreviaturaCarrera->toArray();
echo $valueAbreviatura = array_get($abreviaturaCarrera, 'abreviatura');

 //$idporcarrera = \impotlx\carreras::find($idcarrera);
 echo "*******";

   //calculando el siguiente id
 $idsiguiente = \impotlx\alumnos::where('id_carrera',$idcarrera)->where('periodo',$periodo)->pluck('id')->max()+1;
 //calculando el periodo
   $periodoinscrito= \impotlx\ciclos::where('id',$periodo)->pluck('periodo')->implode('periodo');


   if($idsiguiente<10)//poner el 0 antes de los primero 9
    $newidNext='0' .$idsiguiente;
else
    $newidNext=$idsiguiente;

     echo $Matriculafinal=$valueAbreviatura.'-'.$periodoinscrito.'-'.$newidNext;
        return $Matriculafinal;
    }





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

            $ciclosr = \impotlx\ciclos::pluck('periodo','id');
               $carrerasr = \impotlx\carreras::pluck('carrera','id');
        return view('alumnos.create',compact('ciclosr','carrerasr' ));

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


//$matriculaes= $periodoes.'-'.$idsiguiente;

          $bar2 = new alumnosController;
      $matriculaes= $bar2->crearMatricula($request ['id_carrera'],$request ['periodo']);



$estatus=1;

        \impotlx\alumnos::create([
        	'nombre' => $request ['nombre'],
        	'ap_paterno'=> $request ['ap_paterno'],
            'ap_materno' => $request ['ap_materno'],
            'date_birthday' => $request ['date_birthday'],
            'estado_civil' => $request ['estado_civil'],
                'phone_house'=> $request ['phone_house'],
            'phone_movil'=> $request ['phone_movil'],
            'email'=> $request ['email'],
            'sexo'=> $request ['sexo'],
        	'nombre_contacto'=> $request ['nombre_contacto'],
        		'matricula' => $matriculaes,
        	'CURP'=> $request ['CURP'],
        		'periodo' => $request ['periodo'],
        	'streetNumber'=> $request ['streetNumber'],
        		'colonia' => $request ['colonia'],
        	'Municipio'=> $request ['Municipio'],
        		'Estado' => $request ['Estado'],
        	'zip_code'=> $request ['zip_code'],
        		'estado_civil' => $request ['estado_civil'],
        	'numerohome_contacto'=> $request ['numerohome_contacto'],
        	'nombreEmpresa'=> $request ['nombreEmpresa'],
        		'numerocel_contacto' => $request ['numerocel_contacto'],
        		'tel_oficina' => $request ['tel_oficina'],
        	'dire_oficina'=> $request ['dire_oficina'],
        		'cargo' => $request ['cargo'],
        	'comoEntero'=> $request ['comoEntero'],
        	'estatus'=> $request ['estatus'],
        		'id_carrera' => $request ['id_carrera'],
'nacionalidad' => $request ['nacionalidad'],
'lugarnacimiento' => $request ['lugarnacimiento'],
'escuelaprocedencia' => $request ['escuelaprocedencia'],
'escuelaprocedencia' => $request ['tipoescuela'],
'escuelaprocedencia' => $request ['entidadestudios'],
'escuelaprocedencia' => $request ['comoEnteroL'],

    ]);
              return redirect('/alumnos')->with('message','store');

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
        $alumnos = \impotlx\alumnos::find($id);
                return view('alumnos.profile', array('alumnos' => $alumnos));




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
            $ciclosr = \impotlx\ciclos::pluck('periodo','id');
            $carrerasr = \impotlx\carreras::pluck('carrera','id');
           $alumnoss = \impotlx\alumnos::find($id);
        return view('alumnos.edit',compact('alumnoss','ciclosr','carrerasr'));
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
          $alumnoss = \impotlx\alumnos::find($id);
          $alumnoss ->update($request->all());
               return redirect('alumnos');
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
