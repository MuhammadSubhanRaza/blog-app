<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

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

    public function postDetails($id)
    {
        $post = Post::find($id);
        return view('post.postdetails')->with('post',$post);
    }
    
    public function addpost()
    {
        $categories = Category::all();
        return view('post.addpost')->with('categories',$categories);
    }

    public function create(Request $request)
    {

        // dd($request);

        if($request['category']==-1)
        {
            $categories = Category::all();
            return view('post.addpost')->with('categories',$categories);
        }

        $image_url = $request['image_url']->store('uploads/posts','public');
        $video_url = $request['video_url']->store('uploads/posts','public');

        $post = new Post();
        $post->title = $request['title'];
        $post->content = $request['content'];
        $post->image_url = $image_url;
        $post->media_url = $video_url;
        $post->category_id = $request['category'];
        $post->user_id = auth()->user()->id;

        $post->save();


        return redirect(Route("posts"));
    }


    // --------------- ADMIN ---------------

    public function allPosts()
    {
        $posts = Post::all();
        return view('admin.post.index')->with('posts',$posts);
    }

}
