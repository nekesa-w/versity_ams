<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Http\Requests\StoreCoursesRequest;
use App\Http\Requests\UpdateCoursesRequest;
use App\Models\Faculty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class CoursesController extends Controller
{

    function add(Request $request)
    {

        $isInsertSuccess = Courses::insert([
            'course_name' => $request->input('name'),
            'faculty_id' => $request->input('faculty'),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        if ($isInsertSuccess) return redirect()->route('admin_course')->withSuccess('Course was added');
        else return Redirect::back()->withErrors(['error' => 'Course was not added']);
    }

    function delete($course_id)
    {
        $delete = DB::table('courses')
            ->where('course_id', $course_id)
            ->delete();
        return redirect()->route('admin_course')->withSuccess('Course was deleted');
    }

    function edit($course_id)
    {
        $row = DB::table('courses')
            ->where('course_id', $course_id)
            ->first();

        $data = [
            'Info' => $row,
        ];

        return view('admin.admin_courseedit', $data);
    }

    function update(Request $request)
    {
        $updating = DB::table('faculties')
            ->where('course_id', $request->input('cid'))
            ->update([
                'course_name' => $request->input('name')
            ]);

        if ($updating) return redirect()->route('admin_course')->withSuccess('course was edited');
        else return Redirect::back()->withErrors(['error' => 'course was not edited']);
    }
}
