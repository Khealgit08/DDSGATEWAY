<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller {
    public function getUsers() {
        return response()->json(User::all(), 200);
    }

    public function addUser(Request $request) {
        $this->validate($request, [
            'username' => 'required|max:20',
            'password' => 'required|max:20',
            'gender'   => 'required|in:Male,Female',
        ]);
        $user = User::create($request->all());
        return response()->json($user, 201);
    }

    public function getUserById($id) {
        $user = User::find($id);
    
        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }
    
        return response()->json($user, 200);
    }
    
}