<?php
namespace App\Services;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAptekaRequest;
use App\Http\Requests\UpdateAptekaRequest;
use App\Http\Resources\AptekaResource;
use App\Models\Apteka;

class AptekaService extends Controller
{
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

    public function getById($id)
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

?>
