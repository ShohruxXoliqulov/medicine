<?php

namespace App\Repositories\Interfaces;

use App\Http\Requests\StoreDoctorRequest;
use App\Http\Requests\UpdateDoctorRequest;

interface DoctorInterface
{
    public function getAll();

    public function create(StoreDoctorRequest $request);

    public function show($id);

    public function update(UpdateDoctorRequest $request, $id);

    public function delete($id);
}