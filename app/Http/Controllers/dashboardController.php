<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\activitesChart;

class dashboardController extends Controller
{
     public function index(activitesChart $chart)
    {
        return view('pages.dashboard', compact('chart'));
    }
}
