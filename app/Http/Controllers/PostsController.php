<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Http\Requests\PostRequest;

class PostsController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$posts = \App\Models\Post::all();
		$data = compact('posts');
        return view('posts.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
	
    public function store(PostRequest $request)
    {
		$validated = $request->validated();
        $post = \App\Models\Post::create($request->all());
		$data = compact('post');
		return redirect()->route('posts.show',$data)->with('message','文章發表成功!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = \App\Models\Post::find($id);
		$data = compact('post');
		return view('posts.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $post = \App\Models\Post::find($id);
		$data = compact('post');
		return view('posts.edit',$data);
    }

    public function predlet(Request $request, $id)
    {
        $post = \App\Models\Post::find($id);
		$data = compact('post');
		return view('posts.delete',$data);
    }
	
	/**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
	 
    public function update(PostRequest $request, $id)
    {
		$validated = $request->validated();
        $post = \App\Models\Post::find($id);
		$post->update($request -> all());
		return redirect()->route('posts.show',$post->id)->with('message','文章更新成功!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = \App\Models\post::find($id);
		foreach($post->comments as $comment)
		{
			$comment->delete();
		}
		$post->delete();
		return redirect()->route('posts.index')->with('message','文章刪除成功!!');
    }
}
