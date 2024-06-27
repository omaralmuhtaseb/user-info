<?php

namespace App\Http\Controllers;

use App\Events\UserCreated;
use App\Http\Requests\UserRequest;
use App\Mail\WelcomeUserEmail;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::get();
        return response()->success($users);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
//        try {
            $user = User::create($request->validated());
            event(new UserCreated($user));
            return response()->success($user, 'successfully created', 201);
//        } catch (\Exception $exception) {
//            Log::error('Error creating user: ' . $exception->getMessage());
//            return response()->failed($exception->getMessage(), 500);
//        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return response()->success($user);
    }


}
