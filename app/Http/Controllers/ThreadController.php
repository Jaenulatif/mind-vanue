<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Thread;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class ThreadController extends Controller
{
    function index($id)
    {
        $threadDetail = DB::table('threads')
            ->join('users', 'user_id', '=', 'users.id')
            ->select('threads.id', 'title', 'body', 'users.lastname', 'users.picture', 'users.institution')
            ->where('threads.id', '=', $id)
            ->get();

        $threadDetCom = DB::table('thread_comments')
            ->join('users', 'user_id', '=', 'users.id')
            ->select('thread_comments.id', 'body', 'users.lastname', 'users.picture', 'users.institution')
            ->where('thread_comments.thread_id', '=', $id)
            ->get();

        $threadDetComRep = DB::table('thread_comment_replies')
            ->join('users', 'user_id', '=', 'users.id')
            ->select('thread_comment_replies.id', 'thread_comment_replies.thread_comment_id', 'body', 'users.lastname', 'users.picture', 'users.institution')
            ->get();

        return view('user.thread', [
            'threadDetail' => $threadDetail,
            'threadDetCom' => $threadDetCom,
            'threadDetComRep' => $threadDetComRep,
        ]);
    }

    function create()
    {
        return view('user.create_thread');
    }

    function insert(Request $request)
    {
        $user = Auth::user();
        $thread = new thread;
        $thread->title = $request->title;
        $thread->body = $request->body;
        $thread->user_id = $user->id;
        $thread->save();
        return redirect('user')->with('status', 'Thread Has Been created');
    }
}
