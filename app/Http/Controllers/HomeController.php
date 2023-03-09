<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function userHome()
    {
        return view('roles.cashier.home', ["msg" => "I am user role"]);
    }

    public function editorHome()
    {
        return view('roles.manager.home', ["msg" => "Editor role"]);
    }

    public function adminHome()
    {
        return view('roles.admin.dashboard', ["msg" => "Admin role"]);
    }
}
