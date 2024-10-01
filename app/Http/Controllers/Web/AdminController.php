<?php

namespace App\Http\Controllers\Web;

class AdminController
{
    public function index()
    {
        return inertia('Admin/Index');
    }

    public function create()
    {
        return inertia('Admin/Create');
    }
}