<?php

namespace App\Http\Services;

interface CustomerService
{
    public function getAll();
    public function findById($id);
    public function create($request);
    public function update($request, $id);
    public function destroy($id);
}