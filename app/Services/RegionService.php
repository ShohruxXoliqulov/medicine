<?php

namespace App\Services;

use App\Http\Requests\StoreRegionRequest;
use App\Http\Requests\UpdateRegionRequest;
use App\Repositories\Interfaces\RegionInterface;

class RegionService
{
    public $regionInterface;

    public function __construct(RegionInterface $regionInterface)
    {
        $this->regionInterface = $regionInterface;
    }
    public function getAll()
    {
        return $this->regionInterface->getAll();
    }

    public function create(StoreRegionRequest $request)
    {
        return $this->regionInterface->create($request);
    }

    public function getById($id)
    {
        return $this->regionInterface->show($id);
    }

    public function update(UpdateRegionRequest $request, $id)
    {
        return $this->regionInterface->update($request, $id);
    }

    public function delete($id)
    {
        return $this->regionInterface->delete($id);
    }
}