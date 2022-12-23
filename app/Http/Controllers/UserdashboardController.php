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
        $persondata = Schedule::where('person_id', '=', Auth::user()->id)->with(['person','activity','location'])->get();
         return view('userDashboard')->with(compact('persondata'));
    }
    public function admissible(Request $request){
        $data = new Schedule();

        $data->admissible = $request['schedule_id'];
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
