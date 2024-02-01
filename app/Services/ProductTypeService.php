<?php

namespace App\Services;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProducttypeRequest;
use App\Http\Requests\UpdateProducttypeRequest;
use App\Repositories\Interfaces\ProductTypeInterface;

class ProductTypeService extends Controller
{
    public $productTypeInterface;

    public function __construct(ProductTypeInterface $productTypeInterface)
    {
        $this->productTypeInterface = $productTypeInterface;
    }
    public function getAll()
    {
        return $this->productTypeInterface->getAll();
    }

    public function create(StoreProducttypeRequest $request)
    {
        return $this->productTypeInterface->create($request);
    }

    public function getById($id)
    {
        return $this->productTypeInterface->show($id);
    }

    public function update(UpdateProducttypeRequest $request, $id)
    {
        return $this->productTypeInterface->update($request, $id);
    }

    public function delete($id)
    {
        return $this->productTypeInterface->delete($id);
    }
}