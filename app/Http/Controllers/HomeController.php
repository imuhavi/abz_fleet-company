<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\Driver;

class HomeController extends Controller
{
    public function index()
    {
        $vehicles = Vehicle::latest()->paginate(10);
        $driver = Driver::all();

        return view('home.index', compact('vehicles','driver'));
    }
}
