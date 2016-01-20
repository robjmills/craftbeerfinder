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

class VenueController extends Controller {


    /**
     * make sure there is an authenticated user first
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => 'index']);
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $venues = Venue::all();
		return view('venues.index',compact('venues'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $features = Feature::lists('feature','id');
        $cities = City::lists('name','id');
        $types = Type::lists('type','id');
		return view('venues.create',compact('features','cities','types'));
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param VenueRequest $request
     * @return Response
     */
	public function store(VenueRequest $request)
	{
		$venue = Venue::create( $request->all() );
        $venue->features()->attach( $request->input('feature_list') );

        return redirect('venues')->with('flash_message','Venue Created!');
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
		return view('venues.show',compact('venue'));
	}

    /**
     * Show the form for editing the specified resource.
     *
     * @param Venue $venue
     * @return Response
     * @internal param int $id
     */
	public function edit(Venue $venue)
	{
        $features = Feature::lists('feature','id');
        $cities = City::lists('name','id');
        $types = Type::lists('type','id');

        return view('venues.edit',compact('venue','features','cities','types'));
	}

    /**
     * Update the specified resource in storage.
     *
     * @param Venue $venue
     * @param VenueRequest $request
     * @return Response
     * @internal param int $id
     */
	public function update(Venue $venue, VenueRequest $request)
	{
        $venue->update($request->all());
        $venue->features()->sync( (array) $request->input('feature_list') );

        return redirect('venues')->with('flash_message','Venue Updated!');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Venue $venue)
	{
        $venue->features()->sync([]);
		$venue->delete();
        return redirect('venues')->with('flash_message','Venue Deleted!');
	}

}
