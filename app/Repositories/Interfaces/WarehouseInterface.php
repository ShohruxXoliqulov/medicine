<?php

namespace App\Repositories\Interfaces;

use App\Http\Requests\StoreWarehouseRequest;
use App\Http\Requests\UpdateWarehouseRequest;

interface WarehouseInterface
{
    public function getAll();


    public function create(StoreWarehouseRequest $request);


    public function show($id);


    public function update(UpdateWarehouseRequest $request, $id);



    public function delete($id);

}