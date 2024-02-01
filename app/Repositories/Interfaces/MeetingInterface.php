<?php

namespace App\Repositories\Interfaces;

use App\Http\Requests\StoreMeetingRequest;
use App\Http\Requests\UpdateMeetingRequest;

interface MeetingInterface
{
    public function getAll();

    public function create(StoreMeetingRequest $request);


    public function show($id);


    public function update(UpdateMeetingRequest $request, $id);


    public function delete($id);

}