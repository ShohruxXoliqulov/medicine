<?php

namespace App\Services;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreWarehouseRequest;
use App\Http\Requests\UpdateWarehouseRequest;
use App\Http\Resources\WarehouseResource;
use App\Models\Warehouse;

class WarehouseService extends Controller
{
    public function getAll()
    {
        $warehouses = Warehouse::all();
        return $this->response(WarehouseResource::collection($warehouses));
    }

    public function create(StoreWarehouseRequest $request)
    {
        try {
            $warehouse = Warehouse::create($request->all());
            return $this->success('Successfully added', $warehouse);
        } catch (\Throwable $e) {
            return $this->error('Something went wrong', $e);
        }
    }

    public function getById($id)
    {
        $warehouse = Warehouse::query()->where('id', $id)->first();
        if ($warehouse){
            return $this->response(new WarehouseResource($warehouse));
        }
        return $this->error('Warehouse does\'t exist', 404);
    }

    public function update(UpdateWarehouseRequest $request, $id)
    {
        $warehouse = Warehouse::query()->where('id', $id)->first();
        if ($warehouse) {
            $warehouse->update($request->all());
            return $this->success('Successfully updated', $warehouse);
        }
        return $this->error('Warehouse does\'t exist', 404);
    }

    public function delete($id)
    {
        $warehouse = Warehouse::query()->where('id', $id)->first();
        if ($warehouse) {
            $warehouse->delete();
            return $this->success('Successfully deleted', $warehouse);
        }
        return $this->error('Warehouse does\'t exist', 404);
    }
}