<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Paciente;
use App\Models\Insumos;
/*use App\Pais;*/


class PdfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("pdf.listado_reportes1");
    }


      public function crearPDF($datos,$vistaurl,$tipo)
    {

        $data = $datos;

        $date = date('Y-m-d');
        $view =  \View::make($vistaurl, compact('data', 'date'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        
        if($tipo==1){return $pdf->stream('reporte.pdf');}
        if($tipo==2){return $pdf->download('reporte.pdf'); }
        if($tipo==3){return $pdf->stream('reporte.pdf'); }

    }


    public function crear_reporte_pacientes($tipo){

     $vistaurl="pdf.reporte_pacientes";
     $pacientes=Paciente::all();
     
     
     return $this->crearPDF($pacientes, $vistaurl,$tipo);




    }

    public function crear_reporte_insumos($tipo){

        $vistaurl="pdf.reporte_insumos";
        $insumos=Insumos::all();

        return $this->crearPDF($insumos, $vistaurl, $tipo);

    }

    public function crear_reporte_pacientes_privado($id){
        
        $vistaurl="pdf.reporte_pacientes";
        $pacientes=Paciente::where('id_paciente' ,'=',$id)->get();
        $tipo='1';

        return $this->crearPDF($pacientes, $vistaurl, $tipo);

    }    






    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
