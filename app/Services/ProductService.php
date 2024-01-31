<?php

namespace App\Services;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Resources\ProductResource;
use App\Models\Product;

class ProductService extends Controller
{
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

    public function getById($id)
    {
        $product = Product::with('warehouses')->find($id);
        return $this->response(new ProductResource($product));
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