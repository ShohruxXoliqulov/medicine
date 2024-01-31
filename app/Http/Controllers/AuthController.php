<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\SignupRequest;
use App\Services\AuthService;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    private $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }
    public function login(LoginRequest $request)
    {
        return $this->authService->login($request);
    }

    public function signUp(SignupRequest $request)
    {
        return $this->authService->register($request);
    }

    public function logout(Request $request)
    {
        return $this->authService->logout($request);
    }

    public function getUser(){
        return $this->authService->thisUser();
    }

    public function usersList(){
        return $this->authService->userList();
    }
}
