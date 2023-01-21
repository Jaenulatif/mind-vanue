<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Thread;
use Illuminate\Support\Facades\Auth;

class ThreadController extends Controller
{
    function index()
    {
        return view('user.thread');
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
