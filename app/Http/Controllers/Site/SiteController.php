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
		            ->select('users.*', 'posts.title', 'posts.image','posts.description', 'posts.created_at', 'posts.updated_at')
		            ->limit('3')
		            ->orderby('posts.created_at', 'desc')           
		            ->get();

    	return view ('site.home.index', compact('user_posts'));
    }


}
