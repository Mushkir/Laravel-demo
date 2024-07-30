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
}
