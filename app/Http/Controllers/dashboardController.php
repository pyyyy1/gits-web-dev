<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index(){
        return view('dashboard');
    }

    public function about(){
        return view('content.about');
    }

    public function kampus(){
        return view('content.kampus');
    }

}