<?php

namespace App\Modulos\Seminario\Repository;
//use idartes\usuario\Seminario;
use App\Modulos\Seminario\Repository\SeminarioInterface;
use DB;

class SeminarioRepository implements SeminarioInterface{

	public function crear($data){}
	public function actualizar($data, $id){}
	public function obtener($id, $relaciones = []){}
	public function eliminar($id){}
	public function obtenerTodo($relaciones = []){}
	public function dataTable($relaciones = []){}
}