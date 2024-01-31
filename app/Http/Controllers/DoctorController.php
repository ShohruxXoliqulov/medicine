<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDoctorRequest;
use App\Http\Requests\UpdateDoctorRequest;
use App\Services\DoctorService;

class DoctorController extends Controller
{

    private $doctorService;

    public function __construct(DoctorService $doctorService)
    {
        $this->doctorService = $doctorService;
    }

    public function index()
    {
        return $this->doctorService->getAll();
    }


    public function store(StoreDoctorRequest $request)
    {
        return $this->doctorService->create($request);
    }

    public function show($id)
    {
        return $this->doctorService->getById($id);
    }


    public function update(UpdateDoctorRequest $request, $id)
    {
        return $this->doctorService->update($request, $id);
    }

    public function destroy($id)
    {
        return $this->doctorService->delete($id);
    }
}
