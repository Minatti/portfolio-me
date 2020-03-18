<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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

        $user = User::find(1);

        return view('admin.post.index', compact('user'));

    }

    public function create()
    {


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

        return view('admin.post._form');           
 

    }

    public function edit($id)
    {

        $post = Post::findOrfail($id);
        
        return view ('admin.post._form_edit', compact('post'));

    }

    public function update(Request $request, $id)

    {
        $data = request::all();
        $post = Post::findOrfail($id);
        $post->update($data);
        $post->save();

        return view('admin.post._form_edit', compact('post'));

    }

/*****
    public function delete($id){

        $post = Post::findorFail($id);
        $post->delete();

        return view('')
    }
*****/
}

