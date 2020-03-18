<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable = [
        'title', 'user_id','description', 'image',
    ];


	protected $guarded = ['id'];	  
}
