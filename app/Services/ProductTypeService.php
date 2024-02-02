<?php

namespace App\Services;

use App\Http\Requests\StoreProductTypeRequest;
use App\Http\Requests\UpdateProductTypeRequest;
use App\Repositories\Interfaces\ProductTypeInterface;

class ProductTypeService
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

    public function create(StoreProductTypeRequest $request)
    {
        return $this->productTypeInterface->create($request);
    }

    public function getById($id)
    {
        return $this->productTypeInterface->show($id);
    }

    public function update(UpdateProductTypeRequest $request, $id)
    {
        return $this->productTypeInterface->update($request, $id);
    }

    public function delete($id)
    {
        return $this->productTypeInterface->delete($id);
    }
}