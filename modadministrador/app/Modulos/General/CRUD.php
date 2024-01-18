<?php 

namespace App\Modulos\General;

use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\App;

abstract class CRUD implements CRUDInterface
{
	private $model = null;

	public function __construct($model = '')
	{
		$this->model = App::make($model);
	}

	public function crear(array $data)
	{
		$model = $this->model->newInstance([]);
		
		return $this->procesar($model, $data);
	}

	public function actualizar(array $data)
	{
		$model = $this->model->find($data['id']);
		
		return $this->procesar($model, $data);
	}

	public function obtener($id, array $relaciones = [])
	{
		$model = $this->model->find($id);

		if (count($relaciones) && $model)
			$model->load($relaciones);

		return $model;
	}

	public function eliminar($id)
	{
		$model = $this->model->find($id);
		
		return $model->delete();
	}

	public function obtenerTodo(array $relaciones = [])
	{
		$models = $this->model->all();
		
		if (count($relaciones) && $models)
			$models->load($relaciones);

		return $models;
	}

	public function obtenerModelo()
	{
		return $this->model;
	}

	public function dataTable(array $relaciones = [])
	{
		$models = $this->obtenerTodo($relaciones);

        return Datatables::of($models)
	            ->addIndexColumn()
	            ->make(true);
	}

	protected abstract function procesar($model, $data);
}