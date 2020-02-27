<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PostController extends Controller
{
    public function index()
    {

    	dd(auth()->user()->posts()->get());

    	//$post = auth()->user()->posts;

    	//$post = DB::table('author_post');

    	return view ('admin.post.index');

    }
}
