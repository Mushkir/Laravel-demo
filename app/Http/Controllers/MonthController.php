<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonthController extends Controller
{
    public function numToMonth(Request $request, $num)
    {
        $user = $request->input('user');

        if ($num == 1) {
            return 'January ' . $user;
        } else if ($num == 2) {
            return 'February' . $user;
        } else if ($num == 3) {
            return 'March' . $user;
        }
    }
}
