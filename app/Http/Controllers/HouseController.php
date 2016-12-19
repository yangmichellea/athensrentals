<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\House;

class HouseController extends Controller
{
    public function index() 
    {
    	$houses = House::getZestimate();
        // dd($houses);
	    return view('houses.index')
                ->with('houses', $houses); 
    }

    public function show($zpid)
    {
        // $house = House::getHouseDetails($zpid);
        // $zestimate = House::getHouseZestimate($zpid);

	    return view('houses.show');
                // ->with('house', $house)
                // ->with('zestimate', $zestimate); 
    }
}
