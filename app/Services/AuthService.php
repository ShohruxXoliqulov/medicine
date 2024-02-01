<?php

namespace App\Services;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\SignupRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthService extends Controller
{
    public function login(LoginRequest $request)
    {
        $user = User::where('email', $request->email)->first();

        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        return response()->json([
            'token' => $user->createToken($request->email)->plainTextToken
        ]);
    }

    public function register(SignupRequest $request)
    {
        $data = $request->all();

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password'])
        ]);

        $token = $user->createToken('apiToken')->plainTextToken;

        $res = [
            'user' => $user,
            'token' => $token
        ];
        return $this->success('successfully registered', $res);
    }

    public function logout(Request $request)
    {
        auth()->user()->tokens()->delete();
        return $this->success('User successfully logout', 200);
    }

    public function thisUser()
    {
        $user = auth()->user();
        $roles = $user->getRoleNames();
        if ($user){
            return new UserResource($user);
        }else
            return $this->error('User unauthorized');
    }

    public function userList()
    {
        if (auth()->user()){
            $users = User::all();
            return $this->response($users);
        }else
            return $this->error('User unauthorized');
    }
}