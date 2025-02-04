<?php

use App\Http\Resources\User;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Support\Facades\Route;

Route::get(uri: '/user_biasa', action: function(): AnonymousResourceCollection{
    return UserResource::collection(resource: User::all());
});
