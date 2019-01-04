<?php
namespace App\Http\Repositories;

interface Repository
{
    //Interface Repository khai bao cac phuong thuc chung cho tat ca cac repository
    public function getAll();
    public function findById($id);
    public function create($data);
    public function update($date, $object);
    public function destroy($object);

}