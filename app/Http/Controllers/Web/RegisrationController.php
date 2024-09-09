<?php

namespace App\Http\Controllers\Web;

class RegisrationController
{
    public function index()
    {
        return inertia('Regisration/Index');
    }

    public function create()
    {
        return inertia('Regisration/Create');
    }
}
