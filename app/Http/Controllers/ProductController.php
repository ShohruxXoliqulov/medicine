<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Services\ProductService;

class ProductController extends Controller
{

    private $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
        return $this->productService->getAll();
    }


    public function store(StoreProductRequest $request)
    {
        return $this->productService->create($request);
    }

    public function show($id)
    {
        return $this->productService->getById($id);
    }


    public function update(UpdateProductRequest $request, $id)
    {
        return $this->productService->update($request, $id);
    }

    public function destroy($id)
    {
        return $this->productService->delete($id);
    }
}
