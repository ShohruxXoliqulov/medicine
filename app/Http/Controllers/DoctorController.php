<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDoctorRequest;
use App\Http\Requests\UpdateDoctorRequest;
use App\Http\Resources\DoctorResource;
use App\Models\Doctor;

class DoctorController extends Controller
{

    public function index()
    {
        $doctors = Doctor::all();

        return $this->response(DoctorResource::collection($doctors));
    }


    public function store(StoreDoctorRequest $request)
    {
        try {
            $doctor = Doctor::create($request->all());
            return $this->success('Successfully added', $doctor);
        } catch (\Throwable $e) {
            return $this->error('Something went wrong', $e);
        }
    }

    public function show(Doctor $doctor)
    {
        if ($doctor){
            return $this->response(new DoctorResource($doctor));
        }
        return $this->error('Doctor does\'t exist', 404);
    }


    public function update(UpdateDoctorRequest $request, Doctor $doctor)
    {
        if ($doctor) {
            $doctor->update($request->all());
            return $this->success('Successfully updated', $doctor);
        }
        return $this->error('Doctor does\'t exist', 404);
    }

    public function destroy(Doctor $doctor)
    {
        if ($doctor) {
            $doctor->delete();
            return $this->success('Successfully deleted', $doctor);
        }
        return $this->error('Doctor does\'t exist', 404);
    }
}
