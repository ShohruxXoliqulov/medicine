<?php

namespace App\Repositories\Interfaces;

use App\Http\Requests\StoreAptekaRequest;
use App\Http\Requests\UpdateAptekaRequest;

interface AptekaInterface
{
    public function getAll();

    public function create(StoreAptekaRequest $request);

    public function show($id);

    public function update(UpdateAptekaRequest $request, $id);

    public function delete($id);
}