<?php

namespace App\Http\Controllers;

use Auth;
// namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Models\Schedule;

class UserdashboardController extends Controller
{
    public function preview()
    {
        $today = Today()->toDateString();
        $user_role = Auth::user()->getRoleNames();
        // dd($user_role);
        foreach ($user_role as $role) {
            if ($role == 'admin') {
              
                $persondata = Schedule::where('date', '>=', $today)
                                            ->with(['user','activity','location'])
                                            ->orderBy('date')
                                            ->get();                       
                    return view('userdashboard')->with(compact('persondata'));
                
            } elseif ($role == 'supervisor') {
                    $persondata = Schedule::where('department', '=', Auth::user()->dep_id)
                                            ->where('date', '>=', $today)
                                            ->with(['user','activity','location'])
                                            ->orderBy('date')
                                            ->get();                       
                    return view('userdashboard')->with(compact('persondata'));
            } else {
                
                $persondata = Schedule::where('user_id', '=', Auth::user()->userID)
                                        ->where('date', '>=', $today)
                                        ->with(['user','activity','location'])
                                        ->orderBy('date')
                                        ->get();                       
                return view('userdashboard')->with(compact('persondata'));
            }
        }
        
    }
    public function admissible(Request $request)
    {
        $data = Schedule::whereIn('id', $request['schedule_id'])->update(['admissible'=>1]);
        $data = Schedule::whereNotIn('id', $request['schedule_id'])->update(['admissible'=>0]);

        // $data->admissible = $request['schedule_id'];
    }
    //admin
    // public function preview()
    // {
    //     $persondata = Schedule::where('id', '>=', 1)->with(['person','activity','location'])->get();

    //     // $activitydata = Schedule::where('id', '>=', 1)->with(['activity'])->get();

    //     return view('userDashboard')->with(compact('persondata'));
    // }

    // $checked_array = $request->schedule_id;
    //foreach($persondata->id as $key){
        //if(in-array($request->persondata[$key], $checked_array))
}
