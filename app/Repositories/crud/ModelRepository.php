<?php
namespace App\Repositories\crud;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\BaseRepository;

class ModelRepository implements BaseRepository{

	protected $model;
	public function __construct(Model $model){
		$this->model = $model;	
	}

	public function getAllUser(){
		return $this->model->all();
	}

	public function getUserById(int $id)
	{
		return $this->model->find($id);    
	}

	public function store(array $data)
	{
	    return $this->model->create($data);
	}

	public function update(array $data, $id)
	{
	    $record = $this->model->find($id);
	    return $record->update($data);
	}

	public function delete(int $id)
	{
	    return $this->model->destroy($id);
	}

	public function setModel($model)
	{
	    return $this->model = $model;
	}

	public function getModel()
	{
	    return $this->model;
	}

	public function with($relationship)
	{
	    return $this->model->with($relationship);
	}
}
