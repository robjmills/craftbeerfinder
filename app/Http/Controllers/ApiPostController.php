<?php namespace App\Http\Controllers;

use App\City;
use App\Feature;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\VenueRequest;
use App\Post;
use App\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ApiPostController extends Controller {


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $posts = Post::all();
		return $posts;
	}


    /**
     * Display the specified resource.
     *
     * @param Post $post
     * @return Response
     * @internal param Venue $venue
     * @internal param int $id
     */
	public function show(Post $post)
	{
		return $post;
	}

}
