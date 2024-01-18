<?php

namespace App\Modulos\Modulo\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Modulos\Modulo\ModuloInterface;
use App\Modulos\Modulo\Requests\UpdateModuloRequest;
use App\Modulos\Modulo\Requests\SaveModuloRequest;

class ModuloController extends Controller {

	protected $moduloRepository;

	public function __construct(ModuloInterface $school)
	{
		$this->moduloRepository = $school;
	}

	public function inicio()
    {
        return view('material.sections.modulo.index');
    }

    public function data()
    {
         return $this->moduloRepository->dataTable();
    }

    public function actualizar(UpdateModuloRequest $request)
    {
        if ($this->moduloRepository->actualizar($request->all(),1))
        {
            return response()->json([
                'title'     => '¡Bien hecho!',
                'message'   => 'Datos actualizados correctamente.',
            ], 200);
        } else {
            return response()->json([
                'title'     => 'Lo sentimos',
                'message'   => 'No se pudo completar tu solicitud.',
            ], 422);
        }
    }

    public function crear(SaveModuloRequest $request)
    {
        if ($this->moduloRepository->crear($request->all()))
        {
            return response()->json([
                'title'     => '¡Bien hecho!',
                'message'   => 'Datos creados correctamente.',
            ], 200);
        } else {
            return response()->json([
                'title'     => 'Lo sentimos',
                'message'   => 'No se pudo completar tu solicitud.',
            ], 422);
        }
    }

}
