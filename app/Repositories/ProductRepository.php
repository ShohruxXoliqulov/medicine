<?php

namespace App\Repositories;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Resources\ProductResource;
use App\Http\Traits\ResponsesTrait;
use App\Models\Product;
use App\Repositories\Interfaces\ProductInterface;

class ProductRepository implements ProductInterface
{
    use ResponsesTrait;
    public function getAll()
    {
        $products = Product::with('warehouses')->get();
        return $this->response(ProductResource::collection($products));
    }

    public function create(StoreProductRequest $request)
    {
        try {
            $product = Product::create($request->all());
            return $this->success('Successfully created', $product);
        }catch (\Throwable $e) {
            return $this->error('Something went wrong', $e);
    }
    }

    public function show($id)
    {
        $product = Product::query()->where('id', $id)->first();
        if ($product) {
            $product = Product::with('warehouses')->find($id);
            return $this->response(new ProductResource($product));
        }
        return $this->error('Product not found', 404);
    }

    public function update(UpdateProductRequest $request, $id)
    {
        $product = Product::query()->where('id', $id)->first();
        if ($product) {
            $product->update($request->all());
            return $this->success('Successfully Updated', $product);
        }
        return $this->error('Product doesn\'t exist', 404);
    }

    public function delete($id)
    {
        $product = Product::query()->where('id', $id)->first();
        if ($product) {
            $product->delete();
            return $this->success('Successfully deleted', $product);
        }
        return $this->error('Doctor does\'t exist', 404);
    }
}