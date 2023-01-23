<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ThreadComment;

class CommentController extends Controller
{
    function insert(Request $request)
    {
        $threadComment = new ThreadComment;
        $threadComment->body = $request->body;
        $threadComment->user_id = $request->userId;
        $threadComment->thread_id = $request->threadId;
        $threadComment->save();
        return back();
    }
}
