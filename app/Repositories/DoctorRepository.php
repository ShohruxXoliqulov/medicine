<?php

namespace App\Repositories;

use App\Http\Requests\StoreDoctorRequest;
use App\Http\Requests\UpdateDoctorRequest;
use App\Http\Resources\DoctorResource;
use App\Http\Traits\ResponsesTrait;
use App\Models\Doctor;
use App\Repositories\Interfaces\DoctorInterface;

class DoctorRepository implements DoctorInterface
{
    use ResponsesTrait;
    public function getAll()
    {
        $doctors = Doctor::all();
        return $this->response(DoctorResource::collection($doctors));
    }

    public function create(StoreDoctorRequest $request)
    {
        try {
            $doctor = Doctor::create($request->all());
            return $this->success('Successfully added', $doctor);
        } catch (\Throwable $e) {
            return $this->error('Something went wrong', $e);
        }
    }

    public function show($id)
    {
        $doctor = Doctor::query()->where('id', $id)->first();
        if ($doctor){
            return $this->response(new DoctorResource($doctor));
        }
        return $this->error('Doctor does\'t exist', 404);
    }

    public function update(UpdateDoctorRequest $request, $id)
    {
        $doctor = Doctor::query()->where('id', $id)->first();
        if ($doctor) {
            $doctor->update($request->all());
            return $this->success('Successfully updated', $doctor);
        }
        return $this->error('Doctor does\'t exist', 404);
    }

    public function delete($id)
    {
        $doctor = Doctor::query()->where('id', $id)->first();
        if ($doctor) {
            $doctor->delete();
            return $this->success('Successfully deleted', $doctor);
        }
        return $this->error('Doctor does\'t exist', 404);
    }
}