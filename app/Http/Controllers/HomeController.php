<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\House;

class HomeController extends Controller
{

    public function index()
    {
    	$houses = House::getZestimate();

	    return view('index')
	    		->with('houses', $houses); 

    }
}
