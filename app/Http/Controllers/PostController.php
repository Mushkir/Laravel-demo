<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($id)
    {
        return '<h1>Passed ID is: </h1>' . $id;
    }
}
