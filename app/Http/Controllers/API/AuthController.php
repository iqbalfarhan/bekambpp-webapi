<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request){
        $valid = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($valid)) {
            $user = Auth::user();
            $token = $user->createToken('auth_token')->plainTextToken;

            $data = new UserResource($user);

            return response()->json([
                'user' => $data,
                'token' => $token
            ]);
        }
        else{
            return response()->json([
                'message' => 'Invalid credentials'
            ], 401);
        }

    }

    public function me(){
        return response()->json(Auth::user());
    }

    public function profile(Request $request){
        $user = auth()->user();

        $valid = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => '',
            'address' => '',
        ]);

        if ($request->password) {
            $valid['password'] =  $request->password;
        }

        $user->update($valid);
        return response()->json(Auth::user());
    }

    public function logout(Request $request){
        $request->user()->currentAccessToken()->delete();
        return response()->json(['message' => 'Logged out successfully']);
    }
}
