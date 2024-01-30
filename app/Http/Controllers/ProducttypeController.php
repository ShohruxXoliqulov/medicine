<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProducttypeRequest;
use App\Http\Requests\UpdateProducttypeRequest;
use App\Http\Resources\ProductTypeResource;
use App\Models\Producttype;

class ProducttypeController extends Controller
{

    public function index()
    {
        $producttypes = Producttype::all();

        return $this->response(ProductTypeResource::collection($producttypes));
    }


    public function store(StoreProducttypeRequest $request)
    {
        //
    }


    public function show(Producttype $producttype)
    {
        return $this->response(new ProductTypeResource($producttype));
    }


    public function update(UpdateProducttypeRequest $request, Producttype $producttype)
    {
        //
    }

    public function destroy(Producttype $producttype)
    {
        //
    }
}
