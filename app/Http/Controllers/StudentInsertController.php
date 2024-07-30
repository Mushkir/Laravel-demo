<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentInsertController extends Controller
{
    public function insert_form()
    {
        return view('insert_form');
    }

    public function insert(Request $request)
    {
        $student_name = $request->input('student_name');

        DB::insert("insert into student (name) values (?)", [$student_name]);

        return "Record inserted successfully. <a href='/'>Click here to go back</a>";
    }

    // Function for show all students
    public function student_list()
    {
        $students = DB::select('select * from student');

        return view('student_list', ['students' => $students]);
    }
}
