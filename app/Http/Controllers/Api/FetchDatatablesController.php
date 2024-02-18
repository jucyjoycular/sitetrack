<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class FetchDatatablesController extends Controller
{
    public function usersFetch(Request $request)
    {
        $users = User::all();

        if ($users->isEmpty()) {
            return response()->json(['error' => 'No users found.'], 404);
        }

        return response()->json($users);
    }
}
