<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\User;
use App\Model\Post;
use Request;

class PostController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()

    {

    	/*
    	$users_posts = User::with('posts')->get();
        
        
        $users_posts->name;


        foreach ($users_posts as $key ) {
            $on = $key['description'];

            print_r($on);
        }

    	//return view ('admin.post.index', compact('users_posts'));

        */

        $user = User::find(1);

        return view('admin.post.index', compact('user'));
    }

    public function create(){


        return view ('admin.post._form');

    }



    public function store(Request $request)
    {
        /* example
        |$validatedData = $request->validate([
        |    'title' => 'required|unique:posts|max:255',
        |    'body' => 'required',
        |]);        
        */              

    $data = request::all();    
    $user = User::find(1);
    $post = $user->posts()->create($data);

    $post->save();

    //session::flash('Success', 'Post adicionado com sucesso!');

    return view('admin.post._form');

    }

}

    	