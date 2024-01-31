<?php

namespace App\Services;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMeetingRequest;
use App\Http\Requests\UpdateMeetingRequest;
use App\Http\Resources\MeetingResource;
use App\Models\Meeting;

class MeetingService extends Controller
{
    public function getAll()
    {
        $meetings =  Meeting::all();
        return $this->response(MeetingResource::collection($meetings));
    }

    public function create(StoreMeetingRequest $request)
    {
        try {
            $meeting = Meeting::create($request->all());
            return $this->success('Successfully added', $meeting);
        } catch (\Throwable $e) {
            return $this->error('Something went wrong', $e);
        }
    }

    public function getById($id)
    {
        $meeting = Meeting::query()->where('id', $id)->first();
        if ($meeting) {
            return $this->response(new MeetingResource($meeting));
        }
        return $this->error('Meeting does\'t exist', 404);
    }

    public function update(UpdateMeetingRequest $request, $id)
    {
        $meeting = Meeting::query()->where('id', $id)->first();
        if ($meeting) {
            $meeting->update($request->all());
            return $this->success('Successfully updated', $meeting);
        }
        return $this->error('Meeting does\'t exist', 404);
    }

    public function delete($id)
    {
        $meeting = Meeting::query()->where('id', $id)->first();
        if ($meeting) {
            $meeting->delete();
            return $this->success('Successfully deleted', $meeting);
        }
        return $this->error('Doctor does\'t exist', 404);
    }
}