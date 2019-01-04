<?php

namespace App\Http\Repositories\Eloquent;

use App\Http\Repositories\Repository;
//thực thi việc kết nối với tầng database.
abstract class EloquentRepository implements Repository
{

    protected $model;

    public function __construct()
    {
        $this->setModel();
    }

    abstract public function getModel();

    public function setModel()
    {
        $this->model = app()->make($this->getModel());
    }

    public function getAll()
    {
        $resurt = $this->model->all();
        return $resurt;
    }

    public function findById($id)
    {
        $result = $this->model->find($id);
        return $result;
    }

    public function create($data)
    {
        $object = $this->model-$this->create($data);
        return $object;
    }

    public function update($date, $object)
    {
        $object->update($date);
        return $object;
    }

    public function destroy($object)
    {
        $object->delete();
    }

}