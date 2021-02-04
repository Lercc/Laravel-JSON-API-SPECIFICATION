<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\UserCollection;
use App\Http\Resources\V1\UserResource;
use App\Http\Requests\UserRequest;
use App\Models\User;

class UserController extends Controller
{
    
    public function index()
    {
        $users = User::latest('id')->paginate();
        
        // return $users; 
        // return response()->json($users);
        return new UserCollection($users);
    }
    
    public function show(User $user)
    {
        return new UserResource($user);
    }
    
    public function save(UserRequest $request)
    {


        $user = new User($request->all());

        
    }
}
