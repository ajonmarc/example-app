<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaController extends Controller
{
    public function dashboard(Request $request)
    {
        return inertia('sa/Dashboard');
    }

    public function users(Request $request)
    {
        return inertia('sa/Users');
    }
}
