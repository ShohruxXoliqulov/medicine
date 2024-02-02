<?php

namespace App\Services;

use App\Http\Requests\StoreMeetingRequest;
use App\Http\Requests\UpdateMeetingRequest;
use App\Repositories\Interfaces\MeetingInterface;

class MeetingService
{
    public $meetingInterface;

    public function __construct(MeetingInterface $meetingInterface)
    {
        $this->meetingInterface = $meetingInterface;
    }
    public function getAll()
    {
        return $this->meetingInterface->getAll();
    }

    public function create(StoreMeetingRequest $request)
    {
        return $this->meetingInterface->create($request);
    }

    public function getById($id)
    {
        return $this->meetingInterface->show($id);
    }

    public function update(UpdateMeetingRequest $request, $id)
    {
        return $this->meetingInterface->update($request, $id);
    }

    public function delete($id)
    {
        return $this->meetingInterface->delete($id);
    }
}