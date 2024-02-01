<?php

namespace App\Repositories\Interfaces;

use App\Http\Requests\StoreRegionRequest;
use App\Http\Requests\UpdateRegionRequest;

interface RegionInterface
{
    public function getAll();


    public function create(StoreRegionRequest $request);


    public function show($id);


    public function update(UpdateRegionRequest $request, $id);


    public function delete($id);

}