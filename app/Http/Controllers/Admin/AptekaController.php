<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAptekaRequest;
use App\Http\Requests\UpdateAptekaRequest;
use App\Services\AptekaService;

class AptekaController extends Controller
{
    private $aptekaService ;
    public function __construct(AptekaService $aptekaService)
    {
        $this->aptekaService = $aptekaService ;
    }

    public function index()
    {
        return $this->aptekaService->getAll();
    }


    public function store(StoreAptekaRequest $request)
    {
        return $this->aptekaService->create($request);
    }

    public function show($id)
    {
        return $this->aptekaService->getById($id);
    }


    public function update(UpdateAptekaRequest $request, $id)
    {
        return $this->aptekaService->update($request, $id);
    }

    public function destroy($id)
    {
        return $this->aptekaService->delete($id);
    }
}
