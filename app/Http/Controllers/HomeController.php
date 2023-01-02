<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Grade;
use App\Models\Person;
use App\Models\Schedule;
use DateInterval;
use DatePeriod;
use DateTime;
use App\Models\Activity;

use App\Models\Location;

use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $activities = Activity::all(); 
        $locations = Location::all();
        $clas = Grade::all();
        $person = Person::all();
        return view('home')->with('activities', $activities)
            ->with('locations', $locations)
            ->with('clas', $clas)
            ->with('person', $person);
    }
    public function store(Request $request){
        $begin = new DateTime($request->start_date);
        $end = new DateTime($request->end_date);
        $interval = DateInterval::createFromDateString('1 day');
        $period = new DatePeriod($begin, $interval, $end);
        // if(!$request->day){
        //     $days=[];
        //     return redirect()->back()->with($days);
        // }
        // else {
            foreach ($period as $dt) {
                if (in_array($dt->format('l'), $request->day)) {
                    $data = new Schedule();
                    $dt->format("Y-m-d H:i:s");
                   // $data->employee_id = $request['id'];
                    $data->date = Carbon::parse($dt);
                
                    $data->time_from = $request->start_time;
                    $data->time_to = $request->end_time;
                    $data->day =  $dt->format('l');//I have fetched day from the date, you need to check if this day is selected by user
                    // this will show if the day we are looping in is selected by user or not
                    
                    $data->person_id = $request['person'];
                    $data->class_id = $request['class'];
                    $data->activity_id = $request['activity'];
                    $data->location_id = $request['location'];
                    $data->remarks = $request['remarks'];
                    // $data->created_by = $request['created_by'];
                    $data->save();
                }
            }
           
            return redirect()->back();
        }
        
       
    public function displayActivity(Request $request)
    {
        $data =  Schedule::where('id', '>=', 1)->with(['person'])->get()->toArray();
        echo "<pre>";
        print_r($data);

    }

}
