<?php

use App\Http\Middleware\MonthNum;
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
    $title = "Send user infoo"; // Changing View values in route dynamically
    // $title2 = "Hi";
    // return view('user_form', ['title' => $title]);

    return view('user_form', compact('title'));

    // return view('user_form')->withTitle($title2);
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

// ! Route Parameters
Route::get('sample-page/{id}/{type?}', function ($id, $type = null) {

    if ($id == 1 && $type == 'page') {
        return "This is First page.";
    } else if ($id == 1 && $type == 'number') {
        return "This is Fist number.";
    } else {
        return "This is First something.";
    }
})->name('page'); // * => It could be called as 'Naming Router' Line No. 55

// Writing route for only display VIEW.
// Route::get('/getPageInfo', function () {

//     return view('page');
// });

// or

Route::view('sample-page', 'page'); // * It is efficient way

// ! Route Groups and Middleware
// ! Route Groups
// Route::get('/gallery/photos', function () {

//     return '<h1> Photos page </h1>';
// });

// Route::get('/gallery/videos', function () {

//     return '<h1> Videos page </h1>';
// });

Route::prefix('gallery')->group(function () {
    Route::get('/photos', function () {

        return '<h1> Photos page </h1>';
    });

    Route::get('/videos', function () {

        return '<h1> Videos page </h1>';
    });
});

// ! Route Middleware
Route::get('/month/{num}', function ($num) {

    if ($num == 1) {
        return '<h1>January</h1>';
    } else if ($num == 2) {
        return '<h1>Feb</h1>';
    } else if ($num == 3) {
        return '<h1>March</h1>';
    }
})->middleware(MonthNum::class);
