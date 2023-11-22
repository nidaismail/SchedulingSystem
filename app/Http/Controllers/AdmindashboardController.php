<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use App\Models\Schedule;
use App\Models\Location;
use Carbon\Carbon;
use DateTime;
use DateInterval;

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
                              ->with(['user','activity','location'])
                              ->orderBy('date')
                              ->get();
        return view('admin.admindashboard')->with(compact('admindata', 'currentdate'));
    }
     
    public function dataWithclass(Request $request)
    {
        $currentdate =  Carbon::parse($request['userdate'])->format('Y-m-d');
        //$day =  $currentdate->format('l');
        $adminclass = Schedule::where('date', '=', $currentdate)
                              ->where('admissible', '=', 0)
                              ->with(['user','activity','location'])
                              ->orderBy('date')
                              ->get();
        return view('admin.classdashboard')->with(compact('adminclass', 'currentdate'));
    }
    public function dataWithLocation(Request $request)
    {
        $startTime = new DateTime('08:30');
       $endTime = new DateTime('10:00');
       $interval = new DateInterval('PT15M'); // 15 minutes interval

    $timeIntervals = [];

    while ($startTime < $endTime) {
        $timeIntervals[] = $startTime->format('H:i') . ' - ' . $startTime->add($interval)->format('H:i');
    }

        $currentDate = Carbon::parse($request['userdate'])->format('Y-m-d');
    
        // Fetch all locations sorted by name
        $allLocations = Location::orderBy('location', 'asc')->get();
    
        // Create an empty array to store schedule data
        $scheduleData = [];
    
        // Loop through each location
        foreach ($allLocations as $location) {
            $locationSchedules = [];
    
            // Query to check if any schedule exists for this location and date
            $schedules = Schedule::where('location_id', $location->id)
                                ->whereDate('date', $currentDate)
                                ->get();
    
            // Check and set schedule data for each location
            foreach ($schedules as $schedule) {
                // Determine the cell index based on the time interval, e.g., 15-minute interval
                $startTime = Carbon::parse($schedule->start_time)->format('H:i');
                $endTime = Carbon::parse($schedule->end_time)->format('H:i');
    
                // Set the schedule data for the specific time interval
                $locationSchedules[$startTime . ' - ' . $endTime] = 'red'; // Schedule exists
            }
    
            // Store the schedule data for the location
            $scheduleData[$location->id] = $locationSchedules;
        }
    
        return view('admin.locationdashboard')
            ->with(compact('allLocations', 'scheduleData'));
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