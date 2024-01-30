<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegionRequest;
use App\Http\Requests\UpdateRegionRequest;
use App\Http\Resources\RegionResource;
use App\Models\Region;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $regions = Region::all();

        return RegionResource::collection($regions);
    }


    public function store(StoreRegionRequest $request)
    {
        //
    }

    public function show(Region $region)
    {
        return $this->response($region);
    }


    public function update(UpdateRegionRequest $request, Region $region)
    {
        //
    }

    public function destroy(Region $region)
    {
        //
    }
}
