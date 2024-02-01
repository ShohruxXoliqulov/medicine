<?php

namespace App\Services;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreWarehouseRequest;
use App\Http\Requests\UpdateWarehouseRequest;
use App\Repositories\Interfaces\WarehouseInterface;

class WarehouseService extends Controller
{
    public $warehouseInterface;

    public function __construct(WarehouseInterface $warehouseInterface)
    {
        $this->warehouseInterface = $warehouseInterface;
    }
    public function getAll()
    {
        return $this->warehouseInterface->getAll();
    }

    public function create(StoreWarehouseRequest $request)
    {
        return $this->warehouseInterface->create($request);
    }

    public function getById($id)
    {
        return $this->warehouseInterface->show($id);
    }

    public function update(UpdateWarehouseRequest $request, $id)
    {
        return $this->warehouseInterface->update($request, $id);
    }

    public function delete($id)
    {
        return $this->warehouseInterface->delete($id);
    }
}