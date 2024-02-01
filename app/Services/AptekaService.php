<?php
namespace App\Services;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAptekaRequest;
use App\Http\Requests\UpdateAptekaRequest;
use App\Repositories\Interfaces\AptekaInterface;

class AptekaService extends Controller
{
    public $aptekaInterface ;

    public function __construct(AptekaInterface $aptekaInterface)
    {
        $this->aptekaInterface = $aptekaInterface;
    }
    public function getAll()
    {
        return $this->aptekaInterface->getAll();
    }

    public function create(StoreAptekaRequest $request)
    {
        return $this->aptekaInterface->create($request);
    }

    public function getById($id)
    {
        return $this->aptekaInterface->show($id);
    }

    public function update(UpdateAptekaRequest $request, $id)
    {
        return $this->aptekaInterface->update($request, $id);
    }

    public function delete($id)
    {
        return $this->aptekaInterface->delete($id);
    }
}

?>
