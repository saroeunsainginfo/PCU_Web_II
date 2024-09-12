<?php

namespace App\Http\Controllers\Web;

use App\Repositories\Registration\IRegistrationRepository;

class RegisrationController
{
    public function __construct(private IRegistrationRepository $iRegistrationRepository) {}

    public function index()
    {
        $registrations = $this->iRegistrationRepository->lists();

        return inertia(
            'Regisration/Index',
            [
                'registrations' => $registrations
            ]
        );
    }

    public function create()
    {
        return inertia('Regisration/Create');
    }
}
