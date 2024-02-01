<?php

namespace App\Services;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDoctorRequest;
use App\Http\Requests\UpdateDoctorRequest;
use App\Repositories\Interfaces\DoctorInterface;

class DoctorService extends Controller
{
    public $doctorInterface;

    public function __construct(DoctorInterface $doctorInterface)
    {
        $this->doctorInterface = $doctorInterface;
    }
    public function getAll()
    {
        return $this->doctorInterface->getAll();
    }

    public function create(StoreDoctorRequest $request)
    {
        return $this->doctorInterface->create($request);
    }

    public function getById($id)
    {
        return $this->doctorInterface->show($id);
    }

    public function update(UpdateDoctorRequest $request, $id)
    {
        return $this->doctorInterface->update($request, $id);
    }

    public function delete($id)
    {
        return $this->doctorInterface->delete($id);
    }
}