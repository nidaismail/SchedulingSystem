<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Role;

use Illuminate\Http\Request;

class RolesController extends Controller
{
    //
    public function show($id)
    {
        $user = User::find($id);
        return view('admin.roles',compact('user'));
    }
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();
    
        return view('users.edit',compact('user','roles','userRole'));
    }
}
