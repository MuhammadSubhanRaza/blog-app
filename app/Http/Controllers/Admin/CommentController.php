<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    //

    public function createComment(Request $request,$id)
    {
        $comment = new Comment();
        $comment->comment = $request['comment'];
        $comment->user_id = auth()->user()->id;
        $comment->post_id = $id;
        $comment->save();
        return redirect(Route('postDetails',$id));
    }

}
