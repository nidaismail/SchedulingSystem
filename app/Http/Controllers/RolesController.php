<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RolesController extends Controller
{
    //
    function roles() {
        return view('admin.roles');
    }
}
