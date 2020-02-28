<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class PostController extends Controller
{


  public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

    	//dd(auth()->user()->posts()->get());

    	//$posts = auth()->user()->posts()->get();
    	$user = User::find(1);

    	return view ('admin.post.index',compact('user'));

    }

    public function new()
    {
    	return view ('admin.post.form-new');
    }
}

    	