<?php

namespace App\Http\Controllers;

use App\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index(){
        $trains = Train::all();
        return view('pages.allTrains', compact('trains'));
    }

    public function today(){
        $trains = Train::where('departure_time', 'like', '2022-09-09%')->get();
        return view('pages.today', compact('trains'));
    }
}
