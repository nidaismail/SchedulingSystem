<?php

namespace App\Http\Controllers;

use App\Models\Person;

use Illuminate\Http\Request;

class AdmindashboardController extends Controller
{
    public function admindata(){

        $data['emp']=Person::all();
       return view('admindashboard', $data);
    }
}
