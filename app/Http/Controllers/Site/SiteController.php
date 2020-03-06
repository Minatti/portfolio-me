<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    public function index()
	{
    	

    	$user_posts = DB::table('users')
		            ->join('posts', 'users.id', '=', 'posts.user_id')		           
		            ->select('users.*', 'posts.title', 'posts.description')
		            ->limit('3')
		            ->get();

    	return view ('site.home.index', compact('user_posts'));
    }


	public function show($id)
    {

        
    }
}
