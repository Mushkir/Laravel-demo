<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function deleteFromPublic()
    {
        $filePath = public_path('images/1722892958.jpg');

        if (File::exists($filePath)) {

            File::delete($filePath);
            dd('File is deleted');
        } else {
            dd('File does not exists.');
        }
    }

    public function deleteFromStorage()
    {
        $filePath = 'uploads/1722893592.jpg';

        if (Storage::exists($filePath)) {

            Storage::delete($filePath);
            dd('File deleted.');
        } else {

            dd('File does not exists.');
        }
    }
}
