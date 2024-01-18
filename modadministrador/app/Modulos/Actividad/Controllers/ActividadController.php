<?php

namespace App\Modulos\Actividad\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ActividadesRequest;
//use App\Modulos\Actividad\Repository\ActividadRepository;
//use App\Modulos\Modulo\ModuloRepository;
use App\Modulos\Actividad\Repository\ActividadesInterface;
use App\Modulos\Modulo\ModuloInterface;

class ActividadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $actividadRepository;
    protected $moduloRepository;

    public function __construct(ActividadesInterface $actividadRepository, ModuloInterface $moduloRepository){
        $this->actividadRepository=$actividadRepository;
        $this->moduloRepository=$moduloRepository;
    }

    public function index()
    {
        //

        $actividades=$this->actividadRepository->mostrarTabla();
        $modulo = $this->moduloRepository->obtenerTodo()->pluck( 'vc_modulo','i_pk_id')->toArray();
        return view('material.sections.actividad.actividad', compact('actividades','modulo'));
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
       
        //

        if($this->actividadRepository->crear($request)){

            $mensajes = [
                'message'=>'El perfil ha sido creado',
                'title'=>'Éxito',
                'type'=>'success'                
            ];

            return redirect('/actividad')->with($mensajes);

        }else{

            $mensajes = [
                'message'=>'El perfil NO ha sido creado',
                'title'=>'Error',
                'type'=>'error'                
            ];  

            dd($request);


            return redirect('/actividad')->with($mensajes)->withInput(); 
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


        $modulo = $this->moduloRepository->obtenerTodo()->pluck( 'vc_modulo','i_pk_id')->toArray();
        $actividad = $this->actividadRepository->obtener($id,[]);
        $actividades=$this->actividadRepository->mostrarTabla();
        return view('material.sections.actividad.actividad', compact(['actividades','actividad', 'modulo']));
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

        if($this->actividadRepository->actualizar($request,$id)){
            $mensajes = [
                'message'=>'El perfil ha sido modificado',
                'title'=>'Éxito',
                'type'=>'success'                
            ];
            return redirect('/actividad')->with($mensajes);
        }else{
            $mensajes = [
                'message'=>'El perfil NO ha sido modificado',
                'title'=>'Error',
                'type'=>'error'                
            ];  
            return redirect('/actividad')->with($mensajes)->withInput();          
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


    public function obtenerActividadesModulo(Request $request){
        $actividades = $this->actividadRepository->obtenerTodo(['i_estado'=>1,'i_fk_id_modulo'=>$request['i_fk_id_modulo']]);
        return response()->json([
            'actividades' => $actividades
        ]);        

    }
}
