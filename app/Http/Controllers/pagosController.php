<?php

namespace impotlx\Http\Controllers;

use Illuminate\Http\Request;

class pagosController extends Controller
{
    //
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
               $bar = new alumnosController;
        $pagosr = \impotlx\pagos::All();
        return view('pagos.index',compact('pagosr','bar'));
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
        $conceptopagor = \impotlx\conceptosPagos::pluck('concepto','id');
        $periodosr = \impotlx\periodos::pluck('periodo','id');
               
        return view('pagos.create',compact('alumnosr','conceptopagor','periodosr'));



     
    }


   public function getMontoConcepto($id_conceptopago)
    {
         $montoConcepto= \impotlx\conceptosPagos::find($id_conceptopago);
 $montoConcepto->toArray();
$value = array_get($montoConcepto, 'monto'); 
        return $value;
    }



  public function gettipoBecaAlumno($id_alumno)
    {
         $id_alumno;
  $tipoBeca= \impotlx\asignarBecaAlumno::where('id_alumno',$id_alumno)->first();//esta buscando en el id 




     $tipoBeca->toArray();
    $value = array_get($tipoBeca,'id_beca'); 
        return $value;
    }

     public function getDescuentoBeca($institucion)
    {
$descuentoObtenido= \impotlx\becas::find($institucion);
$descuentoObtenido->toArray();
$value = array_get($descuentoObtenido, 'descuento'); 
        return $value;
    }


    /**
     * Store a newly created resource in storage.
     *te\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

            $bar = new pagosController;


$carbon = new \Carbon\Carbon();
$fecha = $carbon->now();
$status=1;

//echo $request ['id_alumno'];

 $monto= $bar->getMontoConcepto($request ['id_conceptopago']);
    $tipoBeca= $bar->gettipoBecaAlumno($request ['id_alumno']);
        $descuento= $bar->getDescuentoBeca($tipoBeca);
       $montoaPagar=$monto-(($monto*$descuento)/100);
        \impotlx\pagos::create([
        	'id_alumno' => $request ['id_alumno'],
        	'id_conceptopago'=> $request ['id_conceptopago'],
                'id_tipodeBecas'=> $tipoBeca,
                     'descuentoObtenido'=>$descuento,
            'montoconcepto'=> $monto,
            'montoaPagar'=>$montoaPagar,
            'id_periodo'=> $request ['periodo'],        
            'fecha'=> $fecha,
            'realizadopor'=> $request ['realizadopor'],
            'observaciones' => $request ['observaciones'],
              'estatus' => $status,
        	]);
              return redirect('/pagos')->with('message','store');

   




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
        $pagos = \impotlx\pagos::find($id);
                return view('pagos.profile', array('pagos' => $pagos));
       



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
            $periodosr = \impotlx\periodos::pluck('periodo','id');
            $carrerasr = \impotlx\carreras::pluck('carrera','id');
           $pagoss = \impotlx\pagos::find($id);
        return view('pagos.edit',compact('pagoss','periodosr','carrerasr'));
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
          $pagoss = \impotlx\pagos::find($id);
          $pagoss ->update($request->all());
               return redirect('pagos');
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
