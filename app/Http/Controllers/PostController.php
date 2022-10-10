<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Channel;

class PostController extends Controller
{
    //
    public function index()
    {

        return view('post.index');
    }
}
