<?php
namespace App\Repositories;
use Illuminate\Database\Eloquent\Model;


class Repository
{
    protected $model;

    public function __construct(model $model){
        $this->model = $model;
    }

    public function all(){
        return response()->json($this->model->all(), 200);
    }

    public function store( array $data){
        return response()->json($this->model->create($data), 201);
    }

    public function show($id){
        return response()->json($this->model->findOrFail($id), 200);
    }

    public function update(array $data, $id){
        $record = $this->model->find($id);
        return response()->json($record->update($data), 200);
    }

    public function delete($id){
        $this->model->destroy($id);
        return response()->json(null, 204);

    }

    public function getModel()
     {
         return $this->model;
     }

     public function setModel($model)
     {
         $this->model = $model;
         return $this;
     }

     public function with($relations)
     {
         return $this->model->with($relations);
     }

}