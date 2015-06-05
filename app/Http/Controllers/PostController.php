<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\PostRequest;
use App\Post;
use App\Venue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $posts = Post::all();
		return view('posts.index',compact('posts'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $venues = Venue::orderBy('name')->lists('name','id');
		return view('posts.create', compact('venues'));
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param PostRequest $request
     * @return Response
     */
	public function store(PostRequest $request)
	{
        $post = new Post($request->all());
		Auth::user()->posts()->save($post);

        return redirect('posts')->with('flash_message','Post added!');
	}

    /**
     * Display the specified resource.
     *
     * @param Post $post
     * @return Response
     * @internal param int $id
     */
	public function show(Post $post)
	{
		return view('posts.show',compact('post'));
	}

    /**
     * Show the form for editing the specified resource.
     *
     * @param Post $post
     * @return Response
     * @internal param int $id
     */
	public function edit(Post $post)
	{
        $venues = Venue::orderBy('name')->lists('name','id');
        return view('posts.edit',compact('post','venues'));
	}

    /**
     * Update the specified resource in storage.
     *
     * @param PostRequest $request
     * @return Response
     * @internal param int $id
     */
	public function update(Post $post,PostRequest $request)
	{
		$post->update($request->all());
        return redirect('posts')->with('flash_message','Post updated!');
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
