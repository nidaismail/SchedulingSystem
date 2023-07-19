<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class UserUpdateController extends Controller
{
    public function index(){
        $users = DB::select('select * from users');
        return view('admin.user_edit_view', ['users' => $users]);
        }
        public function show($id) {
        $users = DB::select('select * from users where id = ?',[$id]);
        return view('admin.user_edit_view',['users'=>$users]);
        
    }
        public function edit(Request $request,$id) {
        $userID = $request->input('userID');
        $name = $request->input('name');
        $email = $request->input('email');
        $designation = $request->input('designation');
        $dep_id = $request->input('dep_id');
        /*$data=array('first_name'=>$first_name,"last_name"=>$last_name,"city_name"=>$city_name,"email"=>$email);*/
        /*DB::table('student')->update($data);*/
        /* DB::table('student')->whereIn('id', $id)->update($request->all());*/
        DB::update('update users set userID = ?,name=?,email=?,designation=?,dep_id=? where id = ?',[$userID,$name,$email,$designation,$dep_id,$id]);
        echo "Record updated successfully.
        return
        ";
        return back()
        ->with('success','Record Updated Successfully')
        ->with('file');
        return redirect()->route('/roles');
        }  
        }
    


