<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trains;

class TrainController extends Controller
{
    public function index()
    {
        $trains = Trains::paginate(10);
        $data = ['trains' => $trains];
        return view('trains.home', $data);
    }

    public function show(Trains $train) //findOrFail
    {
        return view('trains.show', compact('train'));
    }
}
