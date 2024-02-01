<?php

namespace App\Repositories ;

use App\Http\Requests\StoreAptekaRequest;
use App\Http\Requests\UpdateAptekaRequest;
use App\Http\Resources\AptekaResource;
use App\Http\Traits\ResponsesTrait;
use App\Models\Apteka;
use App\Repositories\Interfaces\AptekaInterface;

class AptekaRepository implements AptekaInterface
{
    use ResponsesTrait;
    public function getAll()
    {
        $aptekas = Apteka::all();
        return $this->response(AptekaResource::collection($aptekas));
    }

    public function create(StoreAptekaRequest $request)
    {
        try {
            $apteka = Apteka::create($request->all());
            return $this->success('Successfully added', $apteka);
        } catch (\Exception $e){
            return $this->error('Something went wrong!', $e->getMessage());
        }
    }

    public function show($id)
    {
        $apteka = Apteka::query()->where('id', $id)->first();
        if ($apteka) {
            return $this->response(new AptekaResource($apteka));
        } else{
            return $this->error('Apteka not found', $apteka);
        }
    }

    public function update(UpdateAptekaRequest $request, $id)
    {
        $apteka = Apteka::query()->where('id', $id)->first();
        if ($apteka){
            $apteka->update($request->all());
            return $this->success('Successfully updated', $apteka);
        } else
            return $this->error('Apteka not found', 404);
    }

    public function delete($id)
    {
        $apteka = Apteka::query()->where('id', $id)->first();
        if ($apteka){
            $apteka->delete();
            return $this->success('Successfully deleted', $apteka);
        }else
            return $this->error('Apteka not found', 404);
    }
}