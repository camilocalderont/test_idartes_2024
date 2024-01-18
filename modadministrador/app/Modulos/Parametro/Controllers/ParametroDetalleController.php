<?php

namespace App\Modulos\Parametro\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modulos\Parametro\Requests\ParametroRequest;
use App\Modulos\Parametro\Requests\ParametroDetalleRequest;
use App\Modulos\Parametro\Repository\ParametroInterface;
use DB; 

class ParametroDetalleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $parametroRepository;

    public function __construct(ParametroInterface $parametroRepository){
        $this->parametroRepository=$parametroRepository;
    }

    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ParametroDetalleRequest $request)
    {
        //dd($request);
        /*if(isset($request->i_pk_id)){
            return $this->update($request,$request->i_pk_id);
        }*/

        if($this->parametroRepository->crearDetalleParametro($request)){

            $mensajes = [
                'message'=>'El detalle del parametro ha sido creado',
                'title'=>'Éxito',
                'type'=>'success'                
            ];
            return response()->json($mensajes); 
            //return redirect('/parametro')->with($mensajes);

        }else{

            $mensajes = [
                'message'=>'El detalle del parametro NO ha sido creado',
                'title'=>'Error',
                'type'=>'error'                
            ];  
            return response()->json($mensajes); 
            //return response()->json(['html'=>$returnHTML,'parametros'=>$parametros]); 
            //return redirect('/parametro')->with($mensajes)->withInput(); 
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $parametros = $this->parametroRepository->obtenerPorParametro($id);
        $data = [
            'parametros'=>$parametros,
        ];
        //$returnHTML="";
        $returnHTML = view('material.sections.parametro.tabla-parametros',$data)->render();
        return response()->json(['html'=>$returnHTML,'parametros'=>$parametros]);             
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $parametro = $this->parametroRepository->obtenerParametroDetalle($id); 
        $parametrosDetalle = $this->parametroRepository->obtenerTodoParametroDetalle()->pluck('vc_parametro_detalle','i_pk_id')->toArray();
        $data = [
            'parametroDetalle'=>$parametro,
            'parametrosDetalle'=>$parametrosDetalle,
        ];     
        //$returnHTML="";
        $returnHTML = view('material.sections.parametro.form.edit-detalle', $data)->render();
        return response()->json(['html'=>$returnHTML,'parametroDetalle'=>$parametro, 'parametrosDetalle'=>$parametrosDetalle]);            
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

        if($this->parametroRepository->actualizarDetalleParametro($request,$id)){
            $mensajes = [
                'message'=>'El detalle del parametro ha sido modificado',
                'title'=>'Éxito',
                'type'=>'success'                
            ];
            return response()->json($mensajes); 
            //return redirect('/detalle-parametro')->with($mensajes);
        }else{
            $mensajes = [
                'message'=>'El detalle del parametro NO ha sido modificado',
                'title'=>'Error',
                'type'=>'error'                
            ];  
            return response()->json($mensajes); 
            //return redirect('/detalle-parametro')->with($mensajes)->withInput();          
        }
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
