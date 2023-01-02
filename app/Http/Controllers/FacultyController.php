<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use App\Http\Requests\StoreFacultyRequest;
use App\Http\Requests\UpdateFacultyRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class FacultyController extends Controller
{
    function add(Request $request)
    {
        $name = $request->input('name');

        $isInsertSuccess = Faculty::insert([
            'faculty_name' => $name,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        if ($isInsertSuccess) return redirect()->route('admin_faculty')->withSuccess('Faculty was added');
        else return Redirect::back()->withErrors(['error' => 'Faculty was not added']);
    }

    function delete($faculty_id)
    {
        $delete = DB::table('faculties')
            ->where('faculty_id', $faculty_id)
            ->delete();
        return redirect()->route('admin_faculty')->withSuccess('Faculty was deleted');
    }

    function edit($faculty_id)
    {
        $row = DB::table('faculties')
            ->where('faculty_id', $faculty_id)
            ->first();

        $data = [
            'Info' => $row,
        ];

        return view('admin.admin_facultyedit', $data);
    }

    function update(Request $request)
    {
        $updating = DB::table('faculties')
            ->where('faculty_id', $request->input('cid'))
            ->update([
                'faculty_name' => $request->input('name'),
                'updated_at' => \Carbon\Carbon::now()
            ]);

        if ($updating) return redirect()->route('admin_faculty')->withSuccess('Faculty was edited');
        else return Redirect::back()->withErrors(['error' => 'Faculty was not edited']);
    }
}
