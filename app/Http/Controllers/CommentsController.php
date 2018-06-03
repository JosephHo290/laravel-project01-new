<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Http\Requests\CommentRequest;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$comments = \App\Models\Comment::all();
		$data = compact('comments');
        return view('comments.index',$data);
    }
	
	public function show($id)
    {
        $post = \App\Models\Post::find($id);
		$comments = $post->comments;
		$data = compact('comments');
        return view('comments.index',$data);
    }
	
	public function create($id)
    {
		$post = \App\Models\Post::find($id);
		$data = compact('post');
        return view('comments.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
	 
    public function store(Request $request,$id)
    {
        $comment = \App\Models\Comment::create($request->all());
		$post = $comment->post;
		$comments = $post->comments;
		$data = compact('comments');
		return view('comments.index',$data);
    }
}
