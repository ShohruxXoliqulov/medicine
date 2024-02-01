<?php

namespace App\Repositories;

use App\Http\Requests\StoreProducttypeRequest;
use App\Http\Requests\UpdateProducttypeRequest;
use App\Http\Resources\ProductTypeResource;
use App\Http\Traits\ResponsesTrait;
use App\Models\Producttype;
use App\Repositories\Interfaces\ProductTypeInterface;

class ProductTypeRepository implements ProductTypeInterface
{
    use ResponsesTrait;
    public function getAll()
    {
        $producttypes = Producttype::all();
        return $this->response(ProductTypeResource::collection($producttypes));
    }

    public function create(StoreProducttypeRequest $request)
    {
        try {
            $productType = Producttype::create($request->all());
            return $this->success('Successfully added', $productType);
        } catch (\Throwable $e) {
            return $this->error('Something went wrong', $e);
        }
    }

    public function show($id)
    {
        $productType = Producttype::query()->where('id', $id)->first();
        if ($productType) {
            return $this->response(new ProductTypeResource($productType));
        }
        return $this->error('ProductType doesn\'t exist', 404);
    }

    public function update(UpdateProducttypeRequest $request, $id)
    {
        $productType = Producttype::query()->where('id', $id)->first();
        if ($productType) {
            $productType->update($request->all());
            return $this->success('Successfully updated', $productType);
        }
        return $this->error('ProductType does\'t exist', 404);
    }

    public function delete($id)
    {
        $productType = Producttype::query()->where('id', $id)->first();
        if ($productType) {
            $productType->delete();
            return $this->success('Successfully deleted', $productType);
        }
        return $this->error('ProductType does\'t exist', 404);
    }
}