<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard.index',[
            'active' => 'Blog Posts',
            'title' => 'Single post',
        ]);
    }
}
