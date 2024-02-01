<?php

namespace App\Repositories\Interfaces;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\SignupRequest;
use Illuminate\Http\Request;

interface AuthInterface
{
    public function login(LoginRequest $request);

    public function register(SignupRequest $request);

    public function logout(Request $request);

    public function thisUser();

    public function getUsers();
}