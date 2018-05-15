<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class dashboardcontroller extends Controller
{
    //dashboard - my!!!!
    public function DashBoard(){
    	return view ('admin.dashboard');
    }
}
