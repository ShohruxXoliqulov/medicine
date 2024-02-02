<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreWarehouseRequest;
use App\Http\Requests\UpdateWarehouseRequest;
use App\Services\WarehouseService;

class WarehouseController extends Controller
{

    private $warehouseService;

    public function __construct(WarehouseService $warehouseService)
    {
        $this->warehouseService = $warehouseService;
    }

    public function index()
    {
        return $this->warehouseService->getAll();
    }


    public function store(StoreWarehouseRequest $request)
    {
        return $this->warehouseService->create($request);
    }

    public function show($id)
    {
        return $this->warehouseService->getById($id);
    }


    public function update(UpdateWarehouseRequest $request, $id)
    {
        return $this->warehouseService->update($request, $id);
    }

    public function destroy($id)
    {
        return $this->warehouseService->delete($id);
    }
}
