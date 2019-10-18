<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\Model;

class SuperRepository implements ISuperRepository
{

    // model property on class instances
    protected $model;
    // Constructor to bind model to repo
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function get()
    {
        return [
            'id' => 1,
            'name' => 'me and you'
        ];
    }

    public function queryble()
    {
        return $this->model; //->orderBy('id', 'desc')->get();
    }

    public function count()
    {
        return $this->model->get()->count(); //->orderBy('id', 'desc')->get();
    }

    public function pagination(int $startIndex, int $pageSize)
    {
        return $this->model->skip($startIndex)
        ->take($pageSize)
        ->orderBy('id', 'desc')
        ->get();
    }

    // Get all instances of model
    public function all()
    {
        return $this->model->all();
    }

    // create a new record in the database
    public function create($data)
    {
        return $this->model->create($data);
    }

    // update record in the database
    public function update($data, $id)
    {
        return $this->model->find($id)->update($data);
    }

    // remove record from the database
    public function delete($id)
    {
        return $this->model->destroy($id);
    }

    // show the record with the given id
    public function findById($id)
    {
        return $this->model->findOrFail($id);
    }

    // Eager load database relationships
    public function with($relations)
    {
        return $this->model->with($relations);
    }
}

interface ISuperRepository
{
    public function get();
}
