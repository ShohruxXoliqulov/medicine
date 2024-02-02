<?php

namespace App\Services;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\SignupRequest;
use App\Repositories\Interfaces\AuthInterface;
use Illuminate\Http\Request;

class AuthService
{
    public $authInterface;

    public function __construct(AuthInterface $authInterface)
    {
        $this->authInterface = $authInterface;
    }
    public function login(LoginRequest $request)
    {
        return $this->authInterface->login($request);
    }

    public function register(SignupRequest $request)
    {
        return $this->authInterface->register($request);
    }

    public function logout(Request $request)
    {
        return $this->authInterface->logout($request);
    }

    public function thisUser()
    {
        return $this->authInterface->thisUser();
    }

    public function userList()
    {
        return $this->authInterface->getUsers();
    }
}