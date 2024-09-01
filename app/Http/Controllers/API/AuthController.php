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
        try {
            return response()->json(new UserResource(Auth::user()));
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Terjadi kesalahan saat mengambil data user.',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function profile(Request $request){
        $user = auth()->user();

        $valid = $request->validate([
            'name' => '',
            'email' => 'required',
            'phone' => '',
            'address' => '',
        ]);

        try {
            if ($request->password) {
                $valid['password'] =  $request->password;
            }
            $user->update($valid);
            return response()->json(new UserResource($user));
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Terjadi kesalahan saat mengambil data user.',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function googlelogin(Request $request)
    {
        $valid = $request->validate([
            'id' => 'required',
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'photo' => '',
        ]);

        try {
            $valid["password"] = $valid["id"];
            $user = User::updateOrCreate(['email' => $valid['email']], $valid);

            if(Auth::loginUsingId($user->id)){
                return response()->json([
                    "user" => new UserResource($user),
                    "token" => $user->createToken('auth_token')->plainTextToken
                ]);
            }
            else{
                throw new \Exception("Error Processing Request");
            }
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Terjadi kesalahan saat mengambil data user.',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function logout(Request $request){
        $request->user()->currentAccessToken()->delete();
        return response()->json(['message' => 'Logged out successfully']);
    }
}
