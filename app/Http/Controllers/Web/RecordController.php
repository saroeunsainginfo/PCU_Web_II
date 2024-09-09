<?php

namespace App\Http\Controllers\Web;

class RecordController
{
    public function index()
    {
        return inertia('Record/Index');
    }
}
