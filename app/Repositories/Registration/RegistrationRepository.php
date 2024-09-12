<?php

namespace App\Repositories\Registration;

use Illuminate\Support\Facades\DB;

class RegistrationRepository implements IRegistrationRepository
{
    public function lists()
    {
        return DB::table('registrations')->get();
    }
}
