<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/user-form', function () {
    $title = "Send user info"; // Changing View values in route dynamically
    return view('user_form', ['title' => $title]);
});

Route::post('get-userdata', function (Request $request) {
    // dd($request->all());
    // dd: Dump and Die.
    // Similar to var_dump();

    // To get the values from Form submission
    $name = $request->input('name');
    $age = $request->input('age');
    $phone = $request->input('phone');

    // Redirect to another page
    return redirect('/user-form')->with('message', 'Form Submitted successfully!');

    // return "Hi! Your name " . $name . ", your age is " . $age . ", & your contact number is " . $phone;
});
