<?php

namespace App\Repositories\Interfaces;

use App\Http\Requests\StoreProductTypeRequest;
use App\Http\Requests\UpdateProductTypeRequest;

interface ProductTypeInterface
{
    public function getAll();


    public function create(StoreProductTypeRequest $request);


    public function show($id);


    public function update(UpdateProductTypeRequest $request, $id);


    public function delete($id);

}