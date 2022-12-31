<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicationsController;

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
})->name('home');

Route::get('/undergrad_admissions', function () {
    return view('versity.undergrad_admissions');
})->name('undergrad_admissions');

Route::get('/versity/grad_admissions', function () {
    return view('versity.grad_admissions');
})->name('grad_admissions');

Route::get('/versity/faculty_of_art', function () {
    return view('versity.faculty_of_art');
})->name('faculty_of_art');

Route::get('/versity/faculty_of_design', function () {
    return view('versity.faculty_of_design');
})->name('faculty_of_design');

Route::get('/versity/faculty_of_art_and_science', function () {
    return view('versity.faculty_of_art_and_science');
})->name('faculty_of_art_and_science');

Route::get('/admin', function () {
    return view('admin.home');
});

Route::post('application', [ApplicationsController::class, 'getData']);

Route::get('/sendmail', [MailController::class, 'index']);
