<?php

namespace App\Http\Controllers;

use App\Models\ApplicationForm;
use App\Models\Student;
use App\Http\Requests\StoreApplicationFormRequest;
use App\Http\Requests\UpdateApplicationFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\Rejection;
use App\Mail\Acceptance;

class ApplicationFormController extends Controller
{
    function upload_form(Request $request)
    {

        $isInsertSuccess = ApplicationForm::insert([
            'national_passport_id' => $request->input('nid'),
            'first_name' => $request->input('fname'),
            'middle_name' => $request->input('mname'),
            'last_name' => $request->input('lname'),
            'gender' => $request->input('gender'),
            'date_of_birth' => $request->input('dob'),
            'address' => $request->input('address'),
            'citizenship' => $request->input('citizenship'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'intake' => $request->input('intake'),
            'course_id' => $request->input('course'),
            'transcripts' => $request->file('transcripts')->store('public/docs'),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        if ($isInsertSuccess) return redirect()->route('application_form')->withSuccess('Application was successfuly added');
        else return Redirect::back()->withErrors(['error' => 'Application was not added']);
    }

    function applicant_approve($applicant_id)
    {
        $row = DB::table('application_forms')
            ->where('applicant_id', $applicant_id)
            ->first();

        $data = [
            "first_name" => "$row->first_name",
            "last_name" => "$row->last_name",
            "intake" => "$row->intake",
        ];

        Mail::to("$row->email")->send(new Acceptance($data));

        $isInsertSuccess = Student::insert([
            'national_passport_id' => $row->national_passport_id,
            'first_name' => $row->first_name,
            'middle_name' =>  $row->middle_name,
            'last_name' => $row->last_name,
            'gender' => $row->gender,
            'gender' => $row->national_passport_id,
            'date_of_birth' => $row->date_of_birth,
            'address' => $row->address,
            'citizenship' => $row->citizenship,
            'email' => $row->email,
            'phone' => $row->phone,
            'intake' => $row->intake,
            'course_id' => $row->course_id,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        $delete = DB::table('application_forms')
            ->where('applicant_id', $applicant_id)
            ->delete();

        if ($isInsertSuccess) return redirect()->route('admin_application')->withSuccess('Application was approved');
        else return Redirect::back()->withErrors(['error' => 'Application was not approved']);
    }

    function applicant_reject($applicant_id)
    {
        $row = DB::table('application_forms')
            ->where('applicant_id', $applicant_id)
            ->first();

        $data = [
            "first_name" => "$row->first_name",
            "last_name" => "$row->last_name",
        ];

        Mail::to("$row->email")->send(new Rejection($data));

        $delete = DB::table('application_forms')
            ->where('applicant_id', $applicant_id)
            ->delete();

        if ($delete) return redirect()->route('admin_application')->withSuccess('Application was rejected');
        else return Redirect::back()->withErrors(['error' => 'Application was not rejected']);
    }
}
