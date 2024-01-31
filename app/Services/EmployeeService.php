<?php

namespace App\Services;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use App\Http\Resources\EmployeeResource;
use App\Models\Employee;

class EmployeeService extends Controller
{
    public function getAll()
    {
        $employees = Employee::all();
        return $this->response(EmployeeResource::collection($employees));
    }

    public function create(StoreEmployeeRequest $request)
    {
        try {
            $employee = Employee::create($request->all());
            return $this->success('Successfully added', $employee);
        } catch(\Throwable $e) {
            return $this->error('Something went wrong', $e);
        }
    }

    public function getById($id)
    {
        $employee = Employee::query()->where('id', $id)->first();
        if ($employee) {
            return $this->response(new EmployeeResource($employee));
        }
        return $this->error('Employee doesn\'t exist', 404);
    }

    public function update(UpdateEmployeeRequest $request, $id)
    {
        $employee = Employee::query()->where('id', $id)->first();
        if ($employee) {
            $employee->update($request->all());
            return $this->success('Successfully updated', $employee);
        }
        return $this->error('Doctor does\'t exist', 404);
    }

    public function delete($id)
    {
        $employee = Employee::query()->where('id', $id);
        if ($employee) {
            $employee->delete();
            return $this->success('Successfully deleted', $employee);
        }
        return $this->error('Doctor does\'t exist', 404);
    }
}
