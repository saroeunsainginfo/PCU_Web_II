<?php

namespace App\Http\Controllers\Web;

class SchedulingController
{
    public function index()
    {
        return inertia('Scheduling/Index');
    }
}
