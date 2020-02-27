<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {

    	dd( auth()->user()->posts()->get());

    	return view ('admin.post.index');

    }
}
