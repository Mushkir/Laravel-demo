<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MonthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StudentInsertController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\GalleryName;
use App\Http\Middleware\MonthNum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/tem', function () {
//     return view('layour');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });

// Route::get('/user-form', function () {
//     $title = "Send user infoo"; // Changing View values in route dynamically
//     // $title2 = "Hi";
//     // return view('user_form', ['title' => $title]);

//     return view('user_form', compact('title'));

//     // return view('user_form')->withTitle($title2);
// });

// Route::post('get-userdata', function (Request $request) {
//     // dd($request->all());
//     // dd: Dump and Die.
//     // Similar to var_dump();

//     // To get the values from Form submission
//     $name = $request->input('name');
//     $age = $request->input('age');
//     $phone = $request->input('phone');

//     // Redirect to another page
//     return redirect('/user-form')->with('message', 'Form Submitted successfully!');

//     // return "Hi! Your name " . $name . ", your age is " . $age . ", & your contact number is " . $phone;
// });

// ! Route Parameters
// Route::get('sample-page/{id}/{type?}', function ($id, $type = null) {

//     if ($id == 1 && $type == 'page') {
//         return "This is First page.";
//     } else if ($id == 1 && $type == 'number') {
//         return "This is Fist number.";
//     } else {
//         return "This is First something.";
//     }
// })->name('page'); // * => It could be called as 'Naming Router' Line No. 55

// Writing route for only display VIEW.
// Route::get('/getPageInfo', function () {

//     return view('page');
// });

// or

// Route::view('sample-page', 'page'); // * It is efficient way

// ! Route Groups and Middleware
// ! Route Groups
// Route::get('/gallery/photos', function () {

//     return '<h1> Photos page </h1>';
// });

// Route::get('/gallery/videos', function () {

//     return '<h1> Videos page </h1>';
// });

// Route::prefix('gallery')->middleware(GalleryName::class)->group(function () {
//     Route::get('/photos', function () {

//         return '<h1> Photos page </h1>';
//     });

//     Route::get('/videos', function () {

//         return '<h1> Videos page </h1>';
//     });
// });

// ! Route Middleware
// Route::get('/month/{num}', function ($num) {

//     if ($num == 1) {
//         return '<h1>January</h1>';
//     } else if ($num == 2) {
//         return '<h1>Feb</h1>';
//     } else if ($num == 3) {
//         return '<h1>March</h1>';
//     }
// })->middleware(MonthNum::class);


// ! Controller
// Route::get('/login', [LoginController::class, 'login_form']);

// Route::post('/login', [LoginController::class, 'login_process']);

// Route::get('/forgot_password', [LoginController::class, 'forgot_password']);

// Route::get('/post/{id}', [PostController::class, 'show']);

// Route::get('/num_month/{num}', [MonthController::class, 'numToMonth'])->middleware(MonthNum::class);


// ! View with Blade Engine
//Route::view('/layout', 'layouts.default');
// Route::view('/', 'layouts.home');
// Route::get('/', function () {

//     $heading = '<h1>Welcome to the Home page</h1>';
//     $no_of_users = 1;
//     $is_user_online = 0;
//     $authors = ['Francis', 'Bala Murugan', 'Mohamed Hussain', 'Balaji'];
//     return view('layouts.home', compact('heading', 'no_of_users', 'is_user_online', 'authors'));
// });
// Route::view('/contact', 'layouts.contact');
// Route::view('/about', 'layouts.about');


// Route::get('/', [StudentInsertController::class, 'insert_form']);
// Route::post('/create', [StudentInsertController::class, 'insert']);
// Route::get('/list_students', [StudentInsertController::class, 'student_list']);
// Route::get('/edit/{id}', [StudentInsertController::class, 'edit']);
// Route::post('/edit/{id}', [StudentInsertController::class, 'update']);
// Route::get('/delete/{id}', [StudentInsertController::class, 'delete']);

Route::get('/', [UserController::class, 'create']);
Route::post('/store', [UserController::class, 'store']);
Route::get('/list', [UserController::class, 'list']);
Route::get('/edit/{id}', [UserController::class, 'edit']);
Route::post('/update/{id}', [UserController::class, 'update']);
Route::get('/delete/{id}', [UserController::class, 'delete']);
Route::get('/deleteAll', [UserController::class, 'deleteAll']);
