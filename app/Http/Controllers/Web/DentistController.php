<?php

namespace App\Http\Controllers\Web;

class DentistController
{
    public function index()
    {
        return inertia('Dentist/Index');
    }
}
