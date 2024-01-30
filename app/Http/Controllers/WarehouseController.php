<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWarehouseRequest;
use App\Http\Requests\UpdateWarehouseRequest;
use App\Http\Resources\WarehouseResource;
use App\Models\Warehouse;

class WarehouseController extends Controller
{

    public function index()
    {
        $warehouses = Warehouse::all();

        return $this->response(WarehouseResource::collection($warehouses));
    }


    public function store(StoreWarehouseRequest $request)
    {
        //
    }

    public function show(Warehouse $warehouse)
    {
        return $this->response(new WarehouseResource($warehouse));
    }


    public function update(UpdateWarehouseRequest $request, Warehouse $warehouse)
    {
        //
    }

    public function destroy(Warehouse $warehouse)
    {
        //
    }
}
