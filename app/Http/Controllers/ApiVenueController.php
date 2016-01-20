<?php namespace App\Http\Controllers;

use App\City;
use App\Feature;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\VenueRequest;
use App\Type;
use App\Venue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ApiVenueController extends Controller {


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $venues = Venue::all();
		return $venues;
	}


    /**
     * Display the specified resource.
     *
     * @param Venue $venue
     * @return Response
     * @internal param int $id
     */
	public function show(Venue $venue)
	{
		return $venue;
	}

}
