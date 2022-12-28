<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('versity.home');
});

Route::get('/undergrad_admissions', function () {
    return view('versity.undergrad_admissions');
});

Route::get('/versity/grad_admissions', function () {
    return view('versity.grad_admissions');
});

Route::get('/backend/admin', function () {
    return view('backend.admin');
});
