<?php

namespace App\Http\Controllers\Web;

class AuthController
{
    public function index()
    {
        return inertia('Auth/Login');
    }
}
