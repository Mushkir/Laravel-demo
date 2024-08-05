<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function index()
    {
        return view('users_form');
    }

    public function createUser(Request $request)
    {
        $id = DB::table('new_users')->insertGetId(['name' => $request->input('name')]);

        return back()->with('id', $id);
    }
}
