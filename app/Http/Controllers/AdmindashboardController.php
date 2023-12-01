<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB; // Add this at the top if not already imported
use Illuminate\Http\Request;
use App\Models\Person;
use App\Models\Schedule;
use App\Models\Location;
use App\Models\Grade;
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
        if (!$request->has('userdate') || empty($request['userdate'])) {
            $request['userdate'] = now()->format('Y-m-d');
        }
        
        $clas = Grade::all()->sortBy(function ($clas) {
            return $clas->class_name;
        });
    
        $currentdate = Carbon::parse($request['userdate'])->format('Y-m-d');
        $allLocations = Location::orderBy('location', 'asc')->get();
    
        $startTime = new DateTime('08:00');
        $endTime = new DateTime('14:45');
        $interval = new DateInterval('PT15M');
    
        $timeIntervals = [];
    
        while ($startTime <= $endTime) {
            $formattedStartTime = $startTime->format('H:i');
            $startTime->add($interval);
            $formattedEndTime = $startTime->format('H:i');
    
            $timeIntervals[] = $formattedStartTime . ' - ' . $formattedEndTime;
        }
    
        $selectedClass = $request->input('class');
        $occupancyData = [];
    
        foreach ($allLocations as $location) {
            $locationOccupancy = [];
    
            foreach ($timeIntervals as $interval) {
                [$start, $end] = explode(' - ', $interval);
    
                $schedulesQuery = Schedule::where('date', '=', $currentdate)
                    ->where('location_id', $location->id)
                    ->where(function ($query) use ($start, $end) {
                        $query->where('time_from', '>=', $start)
                            ->where('time_from', '<', $end)
                            ->orWhere(function ($q) use ($start, $end) {
                                $q->where('time_from', '<=', $start)
                                    ->where('time_to', '>', $start);
                            });
                    })
                    ->whereDate('date', $currentdate);
    
                if ($selectedClass !== null) {
                    $schedulesQuery->where('class_id', $selectedClass);
                }
    
                $schedules = $schedulesQuery->get();
    
                if ($schedules->isNotEmpty()) {
                    $occupants = [];
                    foreach ($schedules as $schedule) {
                        $occupants[] = $schedule->user->name . ' (' . $schedule->class->class_name . ')';
                    }
                    $locationOccupancy[$interval] = ['color' => 'red', 'details' => implode(', ', $occupants)];
                } else {
                    $locationOccupancy[$interval] = ['color' => 'green', 'details' => ''];
                }
            }
    
            $occupancyData[$location->id] = $locationOccupancy;
        }
    
        return view('admin.locationdashboard')
            ->with(compact('allLocations', 'occupancyData', 'timeIntervals', 'currentdate', 'clas'));
    }

    public function dataOfWeek(Request $request)
    {
        
        // $currentdate =  Carbon::parse($request['userdate'])->format('Y-m-d');
        // //$day =  $currentdate->format('l');
        // $adminclass = Schedule::where('date', '=', $currentdate)
        //                       ->where('admissible', '=', 0)
        //                       ->with(['user','activity','location'])
        //                       ->orderBy('date')
        //                       ->get();
        // return view('admin.classdashboard')->with(compact('adminclass', 'currentdate'));
        return view('admin.weekschedule');

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