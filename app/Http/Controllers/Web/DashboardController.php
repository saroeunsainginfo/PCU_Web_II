<?php

namespace App\Http\Controllers\Web;

class DashboardController
{
    public function index()
    {
        return inertia('Dashboard/Index');
    }
}
