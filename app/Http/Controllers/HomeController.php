<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Grade;
use App\Models\User;
use App\Models\Schedule;
use DateInterval;
use DatePeriod;
use DateTime;
use App\Models\Activity;
use DB;
use App\Models\Location;
use Carbon\Carbon;
use Auth;
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
        $activities = Activity::all()->sortBy(function ($activities) {
            return $activities->activity_name;
        }); 
        $locations = Location::all()->sortBy(function ($locations) {
            return $locations->location;
        });
        $clas = Grade::all()->sortBy(function ($clas) {
            return $clas->class_name;
        });
        $person = User::all()->sortBy(function ($person) {
            return $person->name;
        });
        // $supervisor = Auth::user()->
        return view('home')->with('activities', $activities)
            ->with('locations', $locations)
            ->with('clas', $clas)
            ->with('person', $person);
    }
    public function store(Request $request){

        $begin = new DateTime($request->start_date);
        $end = new DateTime($request->end_date);
        $end->setTime(0,0,1);  
        $interval = DateInterval::createFromDateString('1 day');
        $period = new DatePeriod($begin, $interval, $end);
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
                    $data->user_id = $request['person'];
                    $data->department = Auth::user()->dep_id; //auth user->dep_id
                    $data->class_id = $request['class'];
                    $data->activity_id = $request['activity'];
                    $data->location_id = $request['location'];
                    $data->remarks = $request['remarks'];
                    // $data->created_by = $request['created_by'];
                    $data->save();
                }
            }
            // $location_id = $request['location'];
            // $date = $dt;
            // $time_from = $request->start_time; 
            // $existingRecord = DB::table('Schedule')
            // ->where('location_id', $location_id)
            // ->whereDate('date', $date)
            // ->whereTime('time_from', $time_from)
            // ->first();
           
            return redirect()->back()->with('success','Schedule added Successfully');
        }

        // public function checkSchedule(Request $request)
        // {
        //   $location = $request->input('location');
        //   $timeFrom = $request->input('timeFrom');
        //   $timeTo = $request->input('timeTo');
        
        //   $scheduleCount = Schedule::where('location', $location)
        //                             ->where('time_from', $timeFrom)
        //                             ->where('time_to', $timeTo)
        //                             ->count();
        
        //   if ($scheduleCount > 0) {
        //     return response()->json(['available' => false]);
        //   } else {
        //     return response()->json(['available' => true]);
        //   }
        // }
        
    public function check(Request $request)
    {
        $selectedValue = $request->location_id;
        $dateFrom = $request->dateFrom;
        $dateTo = $request->dateTo;
        $timeFrom= $request->timeFrom;
        $timeTo= $request->timeTo;
        $existingrecod = DB::table('Schedule')
                                 ->where('location_id',[$selectedValue])
                                 ->whereBetween('date', [$dateFrom, $dateTo])
                                 ->where('time_from',[$timeFrom])
                                 ->where('time_to',[$timeTo])
                                 ->get();
        return response()->json(['success' => true]);
    
    }

    public function displayActivity(Request $request)
    {
        $data =  Schedule::where('id', '>=', 1)->with(['person'])->get()->toArray();
        echo "<pre>";
        print_r($data);

    }

}