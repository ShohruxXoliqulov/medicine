<?php

namespace App\Repositories\Interfaces;

use App\Http\Requests\StoreProducttypeRequest;
use App\Http\Requests\UpdateProducttypeRequest;

interface ProductTypeInterface
{
    public function getAll();


    public function create(StoreProducttypeRequest $request);


    public function show($id);


    public function update(UpdateProducttypeRequest $request, $id);


    public function delete($id);

}