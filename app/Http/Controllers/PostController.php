<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{

    public function __construct()
    {
        return $this->middleware('auth')->except('index');
    }

    public function index()
    {
        $all_posts = Post::all();
        return view('welcome')->with("posts",$all_posts);
    }
    
    public function addpost()
    {
        return view('post.addpost');
    }

    public function create(Request $request)
    {

        // dd($request['image_url']);

        $image_url = $request['image_url']->store('uploads/posts','public');
        $video_url = $request['video_url']->store('uploads/posts','public');

        $post = new Post();
        $post->title = $request['title'];
        $post->content = $request['content'];
        $post->image_url = $image_url;
        $post->media_url = $video_url;
        $post->user_id = auth()->user()->id;

        $post->save();


        return redirect(Route("posts"));
    }

}
