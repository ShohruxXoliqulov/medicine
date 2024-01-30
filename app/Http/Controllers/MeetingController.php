<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMeetingRequest;
use App\Http\Requests\UpdateMeetingRequest;
use App\Http\Resources\MeetingResource;
use App\Models\Meeting;

class MeetingController extends Controller
{

    public function index()
    {
        $meetings =  Meeting::all();
//        dd($meetings);

        return $this->response(MeetingResource::collection($meetings));
    }


    public function store(StoreMeetingRequest $request)
    {
        //
    }

    public function show(Meeting $meeting)
    {
        return $this->response(new MeetingResource($meeting));
    }


    public function update(UpdateMeetingRequest $request, Meeting $meeting)
    {
        //
    }

    public function destroy(Meeting $meeting)
    {
        //
    }
}
