<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applications;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ApplicationAuth extends Controller
{
    function applicationLogin(Request $request)
    {
        $user = Applications::where(['email' => $request->email])->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('loginId', $user->email);
                return redirect()->route('application_form')->withSuccess('Login was successful');
            } else return Redirect::back()->withErrors(['msg' => 'Wrong password']);
        } else return Redirect::back()->withErrors(['msg' => 'Wrong email']);
    }

    function applicationLogout(Request $request)
    {
        request()->session()->flush();
        return redirect()->route('application_login');
    }
}
