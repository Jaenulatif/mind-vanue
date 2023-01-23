<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ThreadCommentReply;

class ReplyCommentController extends Controller
{
    // die('hallow');
    function insert(Request $request)
    {
        $replyComment = new ThreadCommentReply;
        $replyComment->body = $request->body;
        $replyComment->user_id = $request->userId;
        $replyComment->thread_comment_id = $request->commentId;
        $replyComment->save();
        return back();
    }
}
