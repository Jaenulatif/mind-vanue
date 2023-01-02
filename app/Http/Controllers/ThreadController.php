<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
