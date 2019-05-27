<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function form()
    {
        if (isset($_POST['submit'])) {
            dd('form received');
        }
    }
}
