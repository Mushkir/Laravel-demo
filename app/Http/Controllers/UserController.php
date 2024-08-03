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

        return "User added successfully. User ID: " . $user->id . "<a href='/'>Back to Home</a>";
    }

    public function list()
    {
        $user = User::all();

        return view('list_user', ['users' => $user]);
    }

    public function edit($id)
    {
        $user = User::find($id);

        return view('edit_user', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $user->name = $request->input('name');
        $user->age = $request->input('age');
        $user->phone = $request->input('phone');

        $user->save();

        return "Data updated successfully. <a href='/list'>Go to list </a>";
    }

    public function delete($id)
    {
        $user = User::find($id);

        $user->delete();

        return "Data deleted successfully. <a href='/list'>Go to list</a>";
    }

    public function deleteAll()
    {
        User::truncate();

        return "All data deleted! <a href='/'>Back to Home</a>";
    }
}
