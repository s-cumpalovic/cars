<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function index() {
        $cars = Car::all();
        return view('/cars', compact('cars'));
    }

    public function show($id) {
        $singleCar = Car::find($id);
        return view('single-car', compact('singleCar'));
    }
}
