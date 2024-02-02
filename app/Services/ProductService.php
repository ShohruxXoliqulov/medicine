<?php

namespace App\Services;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Repositories\Interfaces\ProductInterface;

class ProductService
{
    public $productInterface;

    public function __construct(ProductInterface $productInterface)
    {
        $this->productInterface = $productInterface;
    }
    public function getAll()
    {
        return $this->productInterface->getAll();
    }

    public function create(StoreProductRequest $request)
    {
        return $this->productInterface->create($request);
    }

    public function getById($id)
    {
        return $this->productInterface->show($id);
    }

    public function update(UpdateProductRequest $request, $id)
    {
        return $this->productInterface->update($request, $id);
    }

    public function delete($id)
    {
        return $this->productInterface->delete($id);
    }
}