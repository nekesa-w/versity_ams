<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicationsController;
use App\Http\Controllers\ApplicationAuth;
use App\Http\Controllers\AdminLogin;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FacultyController;
use App\Models\Faculty;
use Illuminate\Support\Facades\Auth;

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




/* veristy routes*/

Route::get('/', function () {
    return view('versity.home');
})->name('home');

Route::get('/versity/faculty_of_art', function () {
    return view('versity.faculty_of_art');
})->name('faculty_of_art');

Route::get('/versity/faculty_of_design', function () {
    return view('versity.faculty_of_design');
})->name('faculty_of_design');

Route::get('/versity/faculty_of_art_and_science', function () {
    return view('versity.faculty_of_art_and_science');
})->name('faculty_of_art_and_science');





/* application routes*/
Route::get('/application_reg', function () {
    return view('application.application_reg');
})->name('application_reg');

Route::get('/application_login', function () {
    return view('application.application_login');
})->name('application_login');

Route::get('/application_form', function () {
    return view('application.application_form');
})->name('application_form');

Route::post('application_reg', [ApplicationsController::class, 'getData']);

Route::post('application_login', [ApplicationAuth::class, 'applicationLogin']);

Route::get('/application_logout', [ApplicationAuth::class, 'applicationLogout'])->name('application_logout');



/* admin routes*/
Route::prefix('admin')->middleware(['auth'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::get('/admin_login', function () {
        return view('admin.admin_login');
    })->name('admin_login');

    Route::post('admin_login', [AdminLogin::class, 'adminLogin']);

    Route::get('/admin_logout', [AdminLogin::class, 'adminLogout'])->name('admin_logout');





    /* admin faculty crud routes*/
    Route::get('/admin_faculty', function () {
        $data = Faculty::all();
        return view('admin.admin_faculty', compact('data'));
    })->name('admin_faculty');

    Route::post('faculty_create', [FacultyController::class, 'getData']);





    Route::get('/admin_course', function () {
        return view('admin.admin_course');
    })->name('admin_course');

    Route::get('/admin_staff', function () {
        return view('admin.admin_staff');
    })->name('admin_staff');

    Route::get('/admin_student', function () {
        return view('admin.admin_student');
    })->name('admin_student');

    Route::get('/admin_lecturer', function () {
        return view('admin.admin_lecturer');
    })->name('admin_lecturer');

    Route::get('/course_create', function () {
        return view('admin.admin_course');
    })->name('course_create');
});
