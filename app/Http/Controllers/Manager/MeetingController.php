<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMeetingRequest;
use App\Http\Requests\UpdateMeetingRequest;
use App\Services\MeetingService;

class MeetingController extends Controller
{

    private $meetingService;

    public function __construct(MeetingService $meetingService)
    {
        $this->meetingService = $meetingService;
    }
    public function index()
    {
        return $this->meetingService->getAll();
    }


    public function store(StoreMeetingRequest $request)
    {
        return $this->meetingService->create($request);
    }

    public function show($id)
    {
        return $this->meetingService->getById($id);
    }


    public function update(UpdateMeetingRequest $request, $id)
    {
        return $this->meetingService->update($request, $id);
    }

    public function destroy($id)
    {
        return $this->meetingService->delete($id);
    }
}
