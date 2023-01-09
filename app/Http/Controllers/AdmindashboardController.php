<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Models\Schedule;
use Carbon;


use Illuminate\Http\Request;

class AdmindashboardController extends Controller
{
    public function admindata()
    {
        $today = Today()->toDateString();
        $admindata = Schedule::where('date', '>=', $today)
                            ->with(['person','activity','location'])
                            ->orderBy('date')
                            ->get();

        // $activitydata = Schedule::where('id', '>=', 1)->with(['activity'])->get();
       
       
        return view('admindashboard')->with(compact('admindata'));

    }

  
}
