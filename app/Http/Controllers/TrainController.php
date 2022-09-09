<?php

namespace App\Http\Controllers;

use App\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index(){
        $trains = Train::where('departure_time', 'like', '2022-09-09%')->get();
        return view('home', compact('trains'));
    }
}
