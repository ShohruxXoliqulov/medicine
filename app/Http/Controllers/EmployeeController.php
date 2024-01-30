<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use App\Http\Resources\EmployeeResource;
use App\Models\Employee;

class EmployeeController extends Controller
{

    public function index()
    {
        $employees = Employee::all();

        return $this->response(EmployeeResource::collection($employees));
    }


    public function store(StoreEmployeeRequest $request)
    {
        try {
            $employee = Employee::create($request->all());
            return $this->success('Successfully added', $employee);
        } catch(\Throwable $e) {
            return $this->error('Something went wrong', $e);
        }
    }

    public function show(Employee $employee)
    {
        if ($employee) {
            return $this->response(new EmployeeResource($employee));
        }
        return $this->error('Employee doesn\'t exist', 404);
    }


    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        if ($employee) {
            $employee->update($request->all());
            return $this->success('Successfully updated', $employee);
        }
        return $this->error('Doctor does\'t exist', 404);
    }

    public function destroy(Employee $employee)
    {
        if ($employee) {
            $employee->delete();
            return $this->success('Successfully deleted', $employee);
        }
        return $this->error('Doctor does\'t exist', 404);
    }
}
