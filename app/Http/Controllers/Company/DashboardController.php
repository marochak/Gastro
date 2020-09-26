<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;


class DashboardController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Show the application dashboard.
     */
    public function index() {
        return view('company.dashboard');
    }
}
