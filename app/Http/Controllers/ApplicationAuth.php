<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicationAuth extends Controller
{
    function applicationLogin(Request $request)
    {
        return $request->input();
    }
}
