<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return response()->json([
            'users' => User::all()
        ], 200);
    }

    public function show(User $user){
        return response()->json([
            'user'=>$user
        ], 200);
    }
}
