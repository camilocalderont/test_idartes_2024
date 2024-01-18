<?php

namespace App\Modulos\Perfil;

use App\Modulos\Usuario\User;
use App\Modulos\Perfil\PerfilInterface;
use Illuminate\Support\Facades\Cache;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Hash;

class PerfilRepository implements PerfilInterface
{
	public function __construct(){}

	public function crear(array $data)
	{

	}

    public function dataTable(array $relaciones=[])
    {

	}

	public function actualizar(array $request, $id)
	{

        $user = User::find(auth()->user()->id);
	        $user->dt_fecha_nacimiento      = $request['date'];
	        $user->email        = $request['email'];
	        $user->i_fk_ciudad  = $request['city'];
	        $user->vc_telefono  = $request['phone'];
	        $user->vc_celular   = $request['mobile'];
	        $user->vc_direccion = $request['address'];
	        $user->i_fk_genero       = $request['gender'];
        $user->save();

        return $user;
    }

	public function obtener($id, array $relaciones = [])
	{
     
	}

	public function eliminar($id)
	{
       
	}

	public function obtenerTodo(array $relaciones = [])
	{
        
	}

	private function procesar($modulo, $request)
	{
        
	}

	public function updatePassword(array $request)
	{
        if (Hash::check($request['old_password'], auth()->user()->password)) {
	        $user = User::find(auth()->user()->id);
	            $user['password']   = bcrypt($request['new_password']);
            $user->save();
            return $user;
        }
        return false;
	}
	
}
