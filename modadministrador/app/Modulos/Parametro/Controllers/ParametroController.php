<?php

namespace App\Modulos\Parametro\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ParametroRequest;
use App\Modulos\Parametro\Repository\ParametroInterface;



class ParametroController extends Controller
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
        $parametros=$this->parametroRepository->obtenerTodo()->pluck( 'vc_parametro','i_pk_id')->toArray();
        $parametrosDetalle = $this->parametroRepository->obtenerTodoParametroDetalle()->pluck('vc_parametro_detalle','i_pk_id')->toArray();
        return view('material.sections.parametro.parametros', compact('parametros', 'parametrosDetalle'));
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
    public function store(Request $request)
    {
        //dd($request);

        /*if(isset($request->i_pk_id)){
            return $this->update($request,$request->i_pk_id);
        }*/
        //dd($request);
        if($this->parametroRepository->crear($request)){
            $mensajes = [
                'message'=>'El parametro ha sido creado',
                'title'=>'Éxito',
                'type'=>'success'                
            ];
            return redirect('/parametro')->with($mensajes);
        }else{
            $mensajes = [
                'message'=>'El parámetro NO ha sido creado',
                'title'=>'Error',
                'type'=>'error'                
            ];  
            //dd($request);
            return redirect('/parametro')->with($mensajes)->withInput();          
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
        $parametro = $this->parametroRepository->obtener($id);       
        //$returnHTML="";
        $returnHTML = view('material.sections.parametro.form.edit')->with('parametro', $parametro)->render();
        return response()->json(['html'=>$returnHTML,'parametro'=>$parametro]);         
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
        //dd($request);
        if($this->parametroRepository->actualizar($request,$id)){
            $mensajes = [
                'message'=>'El perfil ha sido modificado',
                'title'=>'Éxito',
                'type'=>'success'                
            ];
            return redirect('/parametro')->with($mensajes);
        }else{
            $mensajes = [
                'message'=>'El perfil NO ha sido modificado',
                'title'=>'Error',
                'type'=>'error'                
            ];  
            return redirect('/parametro')->with($mensajes)->withInput();          
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
