<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Admin;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Str;
use Image;
use File;

class UsersRoleController extends Controller
{
    public function index()
    {
        $admins = DB::table('users')
                ->orderBy('id', 'DESC')
                ->get();

        return view('admin.Users.index', compact('admins'));
    }

    public function role()
    {
        // $roles = DB::table('roles')
        //         ->orderBy('id', 'DESC')
        //         ->get();

        // return view('admin.Users.role', compact('roles'));
        return view('admin.Users.role');
    }
    public function admin()
    {
        $admins = DB::table('admins')
                ->orderBy('id', 'DESC')
                ->get();

        return view('admin.Users.admin', compact('admins'));
    }

    public function AdminInsert(Request $request)
    {
     


        

        Admin::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role
            
                        ]);
    
    
        $notify = ['message'=>'New Admin successfully Added!', 'alert-type'=>'success'];
        return redirect()->back()->with($notify);
}
}