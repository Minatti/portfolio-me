<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable = [
        'title', 'user_id','description', 'image',
    ];


public function users(){

	return $this->belongsTo('App\User', 'id');
}
	  
}
