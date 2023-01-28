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
            ->join('mdl_user', 'user_id', '=', 'mdl_user.id')
            ->select('threads.id', 'title', 'body', 'mdl_user.lastname', 'mdl_user.picture', 'mdl_user.institution')
            ->where('threads.id', '=', $id)
            ->get();

        $threadDetCom = DB::table('thread_comments')
            ->join('mdl_user', 'user_id', '=', 'mdl_user.id')
            ->select('thread_comments.id', 'body', 'mdl_user.lastname', 'mdl_user.picture', 'mdl_user.institution')
            ->where('thread_comments.thread_id', '=', $id)
            ->get();

        $threadDetComRep = DB::table('thread_comment_replies')
            ->join('mdl_user', 'user_id', '=', 'mdl_user.id')
            ->select('thread_comment_replies.id', 'thread_comment_replies.thread_comment_id', 'body', 'mdl_user.lastname', 'mdl_user.picture', 'mdl_user.institution')
            ->get();

        return view('user.thread', [
            'threadDetail' => $threadDetail,
            'threadDetCom' => $threadDetCom,
            'threadDetComRep' => $threadDetComRep,
        ]);
    }

    function delete_com($tid,$cid){
        DB::table('thread_comments')
            ->where('id', $cid)
            ->delete();
        return redirect('moderator/'.$tid.'/thread');
    }

    function delete_subcom($tid,$cid){
        DB::table('thread_comment_replies')
            ->where('id', $cid)
            ->delete();
        return redirect('moderator/'.$tid.'/thread');
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
