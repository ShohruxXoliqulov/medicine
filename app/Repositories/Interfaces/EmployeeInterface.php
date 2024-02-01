<?php

namespace App\Repositories\Interfaces;

use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;

interface EmployeeInterface
{
    public function getAll();

    public function create(StoreEmployeeRequest $request);

    public function show($id);

    public function update(UpdateEmployeeRequest $request, $id);

    public function delete($id);
}