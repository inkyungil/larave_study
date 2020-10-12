<?php

namespace App\Http\Controllers;

use App\Models\User;
use \App\Http\Resources\User as UserResource;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function index(){
        // return response()->json([
        //     'users' => User::all()
        // ], 200);

        //return UserResource::collection(User::all());
        return UserResource::collection(User::paginate(5));
    }

    public function show(User $user){
        // return response()->json([
        //     'user'=>$user
        // ], 200);
  
        return new UserResource($user);
    }
}
