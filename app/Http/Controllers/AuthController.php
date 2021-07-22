<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use JWTAuth;


class AuthController extends Controller
{
    public function login(Request $request) {

        $credentials = $request->only(['email', 'password']);

        if(!$token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Incorrect email/password'], 401);
        }

        return response()->json(['token' => $token, 'expires_in' => auth()->factory()->getTTL() * 60]);
    }
}
