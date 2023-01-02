<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicationsController;
use App\Http\Controllers\ApplicationAuth;
use App\Http\Controllers\ApplicationFormController;
use App\Http\Controllers\AdminLogin;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\StaffController;
use App\Mail\MailNotify;
use App\Models\ApplicationForm;
use App\Models\Faculty;
use App\Models\Courses;
use App\Models\Student;
use App\Models\Lecturer;
use App\Models\Staff;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
    $data = Courses::all();
    return view('application.application_form', compact('data'));
})->name('application_form');

Route::view('application.application_form', 'transcripts');

Route::post('upload_form', [ApplicationFormController::class, 'upload_form']);

Route::post('application_form', [ApplicationFormController::class, 'newForm']);

Route::post('application_reg', [ApplicationsController::class, 'getData']);

Route::post('application_login', [ApplicationAuth::class, 'applicationLogin']);

Route::get('/application_logout', [ApplicationAuth::class, 'applicationLogout'])->name('application_logout');





/* admin routes*/
//Route::prefix('admin')->middleware(['auth'])->group(function () {

Route::get('/dashboard', function () {
    $applicants = ApplicationForm::count();
    $faculties = Faculty::count();
    $courses = Courses::count();
    $students = Student::count();
    $lecturers = Lecturer::count();
    $staff = Staff::count();
    return view('admin.dashboard', compact('applicants', 'faculties', 'courses', 'students', 'lecturers', 'staff'));
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

Route::post('faculty_create', [FacultyController::class, 'add']);

Route::get('delete/{faculty_id}', [FacultyController::class, 'delete']);

Route::get('edit/{faculty_id}', [FacultyController::class, 'edit']);

Route::post('faculty_update', [FacultyController::class, 'update'])->name('faculty_update');




/* admin course crud routes*/
Route::get('/admin_course', function () {
    $data = Courses::with('getFaculties')->get();
    $dropdown = Faculty::with('getCourses')->get();
    return view('admin.admin_course', compact('data', 'dropdown'));
})->name('admin_course');

Route::post('course_create', [CoursesController::class, 'add']);

Route::get('course_delete/{course_id}', [CoursesController::class, 'course_delete']);

Route::get('course_edit/{course_id}', [CoursesController::class, 'course_edit']);

Route::post('course_update', [CoursesController::class, 'course_update'])->name('course_update');





/* admin applicant crud routes*/
Route::get('/admin_application', function () {
    $applicant = ApplicationForm::with('getCoursesApp')->get();
    $courses_dropdown = Courses::with('getApplications')->get();
    return view('admin.admin_application', compact('applicant', 'courses_dropdown'));
})->name('admin_application');

Route::get('applicant_approve/{applicant_id}', [ApplicationFormController::class, 'applicant_approve']);

Route::post('applicant_student', [ApplicationFormController::class, 'applicant_student']);

Route::get('applicant_reject/{applicant_id}', [ApplicationFormController::class, 'applicant_reject']);





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
//});
