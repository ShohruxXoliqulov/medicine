<?php

namespace App\Repositories\Interfaces;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

interface ProductInterface
{
    public function getAll();


    public function create(StoreProductRequest $request);


    public function show($id);


    public function update(UpdateProductRequest $request, $id);


    public function delete($id);


}