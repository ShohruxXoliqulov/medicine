<?php

namespace App\Services;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRegionRequest;
use App\Http\Requests\UpdateRegionRequest;
use App\Http\Resources\RegionResource;
use App\Models\Region;

class RegionService extends Controller
{
    public function getAll()
    {
        $regions = Region::all();
        return RegionResource::collection($regions);
    }

    public function create(StoreRegionRequest $request)
    {
        try {
            $region = Region::create($request->all());
            return $this->success('Successfully added', $region);
        } catch (\Throwable $e) {
            return $this->error('Something went wrong', $e);
        }
    }

    public function getById($id)
    {
        $region = Region::query()->where('id', $id)->first();
        if ($region){
            return $this->response(new RegionResource($region));
        }
        return $this->error('Region does\'t exist', 404);
    }

    public function update(UpdateRegionRequest $request, $id)
    {
        $region = Region::query()->where('id', $id)->first();
        if ($region) {
            $region->update($request->all());
            return $this->success('Successfully updated', $region);
        }
        return $this->error('Region does\'t exist', 404);
    }

    public function delete($id)
    {
        $region = Region::query()->where('id', $id)->first();
        if ($region) {
            $region->delete();
            return $this->success('Successfully deleted', $region);
        }
        return $this->error('Region does\'t exist', 404);
    }
}