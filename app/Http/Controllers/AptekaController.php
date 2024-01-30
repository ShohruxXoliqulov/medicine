<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAptekaRequest;
use App\Http\Requests\UpdateAptekaRequest;
use App\Http\Resources\AptekaResource;
use App\Http\Resources\UserResource;
use App\Models\Apteka;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class AptekaController extends Controller
{

    public function index()
    {
        $aptekas = Apteka::all();

        return $this->response(AptekaResource::collection($aptekas));
    }


    public function store(StoreAptekaRequest $request)
    {
        try {
            $apteka = Apteka::create($request->all());

            return $this->success('Successfully added', $apteka);
        } catch (\Exception $e){

            return $this->error('Something went wrong!', $e->getMessage());
        }
    }

    public function show(Apteka $apteka)
    {
        if ($apteka) {
            return $this->response(new AptekaResource($apteka));
        } else{
            return $this->error('Apteka not found', $apteka);
        }
    }


    public function update(UpdateAptekaRequest $request, Apteka $apteka)
    {
        if ($apteka){
            $apteka->update($request->all());
            return $this->success('Successfully updated', $apteka);
        } else
            return $this->error('Apteka not found', 404);

    }

    public function destroy(Apteka $apteka)
    {
        if ($apteka){
            $apteka->delete();
            return $this->success('Successfully deleted', $apteka);
        }else
            return $this->error('Apteka not found', 404);
    }
}
