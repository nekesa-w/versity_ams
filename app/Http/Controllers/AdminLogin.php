<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminLogin extends Controller
{
    function adminLogin(Request $request)
    {
        $admin = Admin::where(['username' => $request->username])->first();
        if ($admin) {
            if ([$request->password => $admin->password]) {
                $request->session()->put('adminId', $admin->username);
                return redirect()->route('dashboard');
            } else return Redirect::back()->withErrors(['msg' => 'Wrong password']);
        } else return Redirect::back()->withErrors(['msg' => 'Wrong username']);
    }

    function adminLogout()
    {
        if (Session::has('adminId')) {
            Session::pull('adminId');
        } else return redirect()->route('admin_login')->withSuccess('Logout was successful');
    }
}
