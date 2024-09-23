<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $data['posts'] = Post::orderBy('id', 'desc')->paginate(5); 

        return view('posts.index', $data);
    }

    /**
     *
     * @return \Illuminate\Http\Response;
     */
    public function create(){
        return view('posts.create');
    }

    /**
     *
     * @return \Illuminate\Http\Response;
     */
    public function store(Request $request){
        $request->validate([
            'title'  => 'required',
            'content' => 'required',
        ]);

        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();
        return redirect()->route('posts.index')->with('success', 'Post created successfully');
    }
}
