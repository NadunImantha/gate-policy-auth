<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Gate;

class AuthorizationController extends Controller
{
    public function index()
    {
        Gate::allow('isAdmin') ? Response::allow() : abort(403);
        return "You are authorized to access this page!";
    }
}