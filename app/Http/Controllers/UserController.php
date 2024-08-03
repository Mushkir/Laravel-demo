<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        return view('create_user');
    }

    public function store(Request $request)
    {
        // $username = $request->input('name');
        // $phone = $request->input('phone');
        // $age = $request->input('age');

        // $user = new User;

        // $user->name = $username;
        // $user->phone = $phone;
        // $user->age = $age;

        // $user->save();

        $data = $request->only(['name', 'age', 'phone']);

        $user = User::create($data);

        return "User added successfully. User ID: " . $user->id;
    }

    public function list()
    {
        $user = User::all();

        return view('list_user', ['users' => $user]);
    }
}
