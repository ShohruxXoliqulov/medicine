<?php

namespace App\Services;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use App\Repositories\Interfaces\EmployeeInterface;

class EmployeeService extends Controller
{
    public $employeeInterface;

    public function __construct(EmployeeInterface $employeeInterface)
    {
        $this->employeeInterface = $employeeInterface;
    }
    public function getAll()
    {
        return $this->employeeInterface->getAll();
    }

    public function create(StoreEmployeeRequest $request)
    {
       return $this->employeeInterface->create($request);
    }

    public function getById($id)
    {
        return $this->employeeInterface->show($id);
    }

    public function update(UpdateEmployeeRequest $request, $id)
    {
        return $this->employeeInterface->update($request, $id);
    }

    public function delete($id)
    {
        return $this->employeeInterface->delete($id);
    }
}
