<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function usersFetch(Request $request)
    {
        $users = User::all();

        if ($users->isEmpty()) {
            return response()->json(['error' => 'No users found.'], 404);
        }

        return response()->json($users);
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'phone_number'    => 'required',
            'password' => 'required'
        ]);

        if($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()->first()
            ]);
        }

        $user = User::where('phone_number', $request->phone_number)->first();
        if(!$user) {
            return response()->json([
                'success' => false,
                'message' => 'User not found.'
            ]);
        }

        if(Auth::attempt(['phone_number' => $request->phone_number, 'password' => $request->password])) {
            $token = $user->createToken('myApp')->plainTextToken;
            return response()->json([
                'token' => 'Bearer '.$token,
                'success' => true,
                'message' => 'User login successfully.',
                'data'    => $user
            ]);
        }
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'     => 'required',
            'email'    => 'required|email|unique:users',
            'password' => 'required'
        ]);

        if($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()->first()
            ]);
        }

        $user = User::create([
            'name'     => $request->name,
            'username'     => $request->username,
            'role'     => $request->role,
            'phone_number'     => $request->phone_number,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
            'joined_date'    => $request->joined_date,
            'ic_passport'    => $request->ic_passport,
            'passport_expiry'    => $request->passport_expiry,
            'permit_number'    => $request->permit_number,
            'permit_expiry'    => $request->permit_expiry,
        ]);

        $user->createToken('token')->accessToken;
        return response()->json([
            'success' => true,
            'message' => 'User register successfully.'
        ]);
    }
}
