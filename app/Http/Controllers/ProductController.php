<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Resources\ProductResource;
use App\Models\Product;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::with('warehouses')->get();

        return $this->response(ProductResource::collection($products));
    }


    public function store(StoreProductRequest $request)
    {
        //
    }

    public function show($id)
    {
        $product = Product::with('warehouses')->find($id);

        return $this->response(new ProductResource($product));
    }


    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    public function destroy(Product $product)
    {
        //
    }
}
