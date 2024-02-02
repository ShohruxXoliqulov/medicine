<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use App\Services\EmployeeService;

class EmployeeController extends Controller
{

    private $employeeService ;

    public function __construct(EmployeeService $employeeService)
    {
        $this->employeeService = $employeeService ;
    }
    public function index()
    {
        return $this->employeeService->getAll();
    }


    public function store(StoreEmployeeRequest $request)
    {
        return $this->employeeService->create($request);
    }

    public function show($id)
    {
        return $this->employeeService->getById($id);
    }


    public function update(UpdateEmployeeRequest $request, $id)
    {
        return $this->employeeService->update($request, $id);
    }

    public function destroy($id)
    {
        return $this->employeeService->delete($id);
    }
}
