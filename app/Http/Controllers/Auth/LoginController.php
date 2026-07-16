<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class LoginController extends Controller
{
    /**
     * Show login page.
     */
    public function create()
    {
        return Inertia::render('auth/Login');
    }

    /**
     * Login user.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Logout.
     */
    public function destroy(Request $request)
    {
        //
    }
}