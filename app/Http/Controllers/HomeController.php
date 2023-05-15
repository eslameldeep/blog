<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


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

        $role = Role::findByName('writer');

        $permissions = Permission::all();
        
        // $role->syncPermissions($permissions);
        
        $user = Auth::User();
        // $user->revokePermissionTo($permissions);
        // dd($user->givePermissionTo('edit articles'));
        return view('home');
    }
}
