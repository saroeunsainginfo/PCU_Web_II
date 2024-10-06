<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Repositories\Auth\AuthRepository;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    protected $authRepository;

    public function __construct(AuthRepository $authRepository)
    {
        $this->authRepository = $authRepository;
    }

    public function login()
    {
        return inertia('Auth/Login');
    }

    // Todo: Login
    public function authenticateLogin(Request $request)
    {
        return $this->authRepository->login($request);
    }

    public function register()
    {
        return inertia('Auth/Register');
    }

    // Todo: Register
    public function authenticateRegister(Request $request)
    {
        return $this->authRepository->register($request);
    }

    // Todo: Logout
    public function logout()
    {
        return inertia();
    }
}
