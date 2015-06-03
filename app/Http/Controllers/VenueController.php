<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\VenueRequest;
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
		return view('venues.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('venues.create');
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param VenueRequest $request
     * @return Response
     */
	public function store(VenueRequest $request)
	{
		Venue::create( $request->all() );
        return redirect('venues')->with('flash_message','Venue Created!');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$venue = Venue::findOrFail($id);

        return view('venues.edit',compact('venue'));
	}

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @param VenueRequest $request
     * @return Response
     */
	public function update($id, VenueRequest $request)
	{
		$venue = Venue::findOrFail($id);
        $venue->update($request->all());

        return redirect('venues');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
