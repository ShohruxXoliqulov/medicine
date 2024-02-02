<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductTypeRequest;
use App\Http\Requests\UpdateProductTypeRequest;
use App\Services\ProductTypeService;

class ProductTypeController extends Controller
{

    private $productTypeService;

    public function __construct(ProductTypeService $productTypeService)
    {
        $this->productTypeService = $productTypeService;
    }

    public function index()
    {
        return $this->productTypeService->getAll();
    }


    public function store(StoreProductTypeRequest $request)
    {
        return $this->productTypeService->create($request);
    }


    public function show($id)
    {
        return $this->productTypeService->getById($id);
    }


    public function update(UpdateProductTypeRequest $request, $id)
    {
        return $this->productTypeService->update($request, $id);
    }

    public function destroy($id)
    {
        return $this->productTypeService->delete($id);
    }
}
