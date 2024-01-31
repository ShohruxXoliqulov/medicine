<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegionRequest;
use App\Http\Requests\UpdateRegionRequest;
use App\Services\RegionService;

class RegionController extends Controller
{

    private $regionService;

    public function __construct(RegionService $regionService)
    {
        $this->regionService = $regionService;
    }
    public function index()
    {
        return $this->regionService->getAll();
    }


    public function store(StoreRegionRequest $request)
    {
        return $this->regionService->create($request);
    }

    public function show($id)
    {
        return $this->regionService->getById($id);
    }


    public function update(UpdateRegionRequest $request, $id)
    {
        return $this->regionService->update($request, $id);
    }

    public function destroy($id)
    {
        return $this->regionService->delete($id);
    }
}
