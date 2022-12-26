<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Models\Schedule;


use Illuminate\Http\Request;

class AdmindashboardController extends Controller
{
    public function admindata()
    {
        $admindata = Schedule::where('id', '>=', 1)->with(['person','activity','location'])->get();

        // $activitydata = Schedule::where('id', '>=', 1)->with(['activity'])->get();

        return view('admindashboard')->with(compact('admindata'));
    }

  
}
