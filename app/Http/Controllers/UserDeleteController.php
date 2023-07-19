<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class UserDeleteController extends Controller
{
    public function index(){
        $users = DB::select('select * from users');
        return view('user_delete_view',['users'=>$users]);
        }
        public function destroy($id) {
        DB::delete('delete from users where id = ?',[$id]);
        
        return back()
        ->with('success','Record Deleted Successfully')
        ->with('file');
        return redirect()->route('/roles');
        }
}

