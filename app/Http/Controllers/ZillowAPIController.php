<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ZillowAPIController extends Controller
{

    public function getSearchResults($search, $citystate) //'2372 Saint Kennedy Ln', 'Buford GA 30518'
    {
    	$zillow_id = \Config::get('constants.zillow_id'); //the zillow web service ID that you got from your email
 
		$address = urlencode($search);
		$citystatezip = urlencode($citystate);

		$url = "http://www.zillow.com/webservice/GetSearchResults.htm?zws-id=$zillow_id&address=$address&citystatezip=$citystatezip";

		$result = file_get_contents($url);
		$data = simplexml_load_string($result);

	    return $data->response->results->result[0];
    }

	public function getZestimate() 
	{
		$zpids = \Config::get('constants.houses');
    	$zillow_id = \Config::get('constants.zillow_id');

    	foreach ($zpids as $zpid) {
			$url = "http://www.zillow.com/webservice/GetZestimate.htm?zws-id=$zillow_id&zpid=$zpid";
			$result = file_get_contents($url);
			$data = simplexml_load_string($result);
			$output[] = $data->response[0];
    	}

		// echo '<pre>';
		// var_dump($output);
		// echo '</pre>';

	}

	public function getUpdatedPropertyDetails() 
	{
		$zpid = $this->getSearchResults()->zpid;
    	$zillow_id = \Config::get('constants.zillow_id');

		$url = "http://www.zillow.com/webservice/GetUpdatedPropertyDetails.htm?zws-id=$zillow_id&zpid=$zpid";

		$result = file_get_contents($url);
		$data = simplexml_load_string($result);

	    $url =  $data->response->images->image->url;
		foreach ($url as $value) 
		{
			$src[] = $value;	
		}
	    return view('welcome')->with('url', $src); 

	}

}
