<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\User;
use Psy\Command\WhereamiCommand;
use Illuminate\Http\Request;
use Auth;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    // public function showLoginForm($id)
    // {
        
    // }
    public function username()
    {
        return 'userID';
    }

    protected function authenticated(Request $request, $user)
    {   
        if(!$user->isActive) {
            Auth::logout();
            return redirect('login')->with('success','You are not an active User');
            }
            // $user->application_id = $request->input('application_id');
            // $user->save();   
    }
    

    public function getUserDetails($id)
    {
        
    //    $records = User::all();
    //    $userID = $records->pluck('userID');
    //    $user = User::find($id);
          $user = User::where('userID','=',$id)->first();
          
        
    //    dd($id); this is the inputted ID
        
        return response()->json($user);
        
    }
    
}