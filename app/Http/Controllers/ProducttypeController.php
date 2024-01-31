<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProducttypeRequest;
use App\Http\Requests\UpdateProducttypeRequest;
use App\Services\ProductTypeService;

class ProducttypeController extends Controller
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


    public function store(StoreProducttypeRequest $request)
    {
        return $this->productTypeService->create($request);
    }


    public function show($id)
    {
        return $this->productTypeService->getById($id);
    }


    public function update(UpdateProducttypeRequest $request, $id)
    {
        return $this->productTypeService->update($request, $id);
    }

    public function destroy($id)
    {
        return $this->productTypeService->delete($id);
    }
}
