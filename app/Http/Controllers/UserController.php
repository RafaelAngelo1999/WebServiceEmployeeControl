<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        try {
            return Utils::buildReturnSuccessStatement(User::all());
        } catch (\Throwable $th) {
            return Utils::buildReturnErrorStatement($th);
        }
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|unique:users,name',
                'email' => 'required|email:rfc,dns|unique:users,email',
                'password' => 'required',
            ]);

            $attributes = $request->all();

            $attributes['password'] = Hash::make($request->password);

            User::create($attributes);

            return response()->json([
                'success' => true,
                'msg' => 'Usuario cadastrado com sucesso.'
            ]);
        } catch (ValidationException $e) {
            return response()->json([
                'success' => false,
                'msg' => $e->errors()
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'msg' => $e->getMessage()
            ]);
        }
    }
}
