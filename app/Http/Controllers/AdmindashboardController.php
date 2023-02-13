<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use App\Models\Schedule;
use Carbon\Carbon;

class AdmindashboardController extends Controller
{
    // public function admindata()
    // {
    //     $today = Today()->toDateString();
    //     $admindata = Schedule::where('date', '=', $today)
    //                         ->with(['person','activity','location'])
    //                         ->orderBy('date')
    //                         ->get();
    //     // $activitydata = Schedule::where('id', '>=', 1)->with(['activity'])->get();
    //     // return view('admindashboard');
    //     return view('admindashboard')->with(compact('admindata'));
    // }
    // public function admindata() {
    //     return view('admindashboard');
    // }
    public function dataWithdate(Request $request)
    {
        $currentdate =  Carbon::parse($request['userdate'])->format('Y-m-d');
        //$day =  $currentdate->format('l');
        $admindata = Schedule::where('date', '=', $currentdate)
                              ->where('admissible', '=', 0)
                              ->with(['person','activity','location'])
                              ->orderBy('date')
                              ->get();
        return view('admindashboard')->with(compact('admindata', 'currentdate'));
    }
    // public function nextdata(){
    //     $today = Today()->addDay()->toDateString();
    //     $admindata = Schedule::where('date', '=', $today)
    //                         ->with(['person','activity','location'])
    //                         ->orderBy('date')
    //                         ->get();

    //     return view('admindashboard')->with(compact('admindata'));

    // }
}