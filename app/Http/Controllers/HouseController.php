<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HouseController extends Controller
{
    public function show($city) 
    {
		return view('houses.show');
    }
}
